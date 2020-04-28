<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Taxista;
use App\Licencia;
use App\Documento;
use Illuminate\Http\Request;

class LicenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $licencia = Licencia::latest()->paginate(25);

        return $licencia;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       //$licencia = Licencia::create($request->all());

    	$documento = new Documento();
    	$documento->nombre = $request->nombre;
    	$documento->apellido = $request->apellido;
    	$documento->curp = $request->curp;
    	$documento->fecha = $request->fecha;
    	$documento->taxista_id = $request->taxista_id;
    	$documento->make();
    	$documento->documentable()->associate($licencia = Licencia::create($request->all()));
    	$documento->save();

        return response()->json($documento, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $licencia = Licencia::findOrFail($id);

        return $licencia;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $licencia = Licencia::findOrFail($id);
        $licencia->update($request->all());

        return response()->json($licencia, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Licencia::destroy($id);

        return response()->json(null, 204);
    }
}
