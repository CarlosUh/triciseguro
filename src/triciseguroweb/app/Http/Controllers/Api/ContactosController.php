<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Contacto;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contacto = Contacto::latest()->paginate(25);

        return $contacto;
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
        
        $contacto = Contacto::create($request->all());

        return response()->json($contacto, 201);
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
        $contacto = Contacto::findOrFail($id);

        return $contacto;
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
        
        $contacto = Contacto::findOrFail($id);
        $contacto->update($request->all());

        return response()->json($contacto, 200);
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
        Contacto::destroy($id);

        return response()->json(null, 204);
    }
}
