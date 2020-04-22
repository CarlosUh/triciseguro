<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Promocion_aplicada;
use Illuminate\Http\Request;

class Promocion_aplicadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $promocion_aplicada = Promocion_aplicada::latest()->paginate(25);

        return $promocion_aplicada;
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
        
        $promocion_aplicada = Promocion_aplicada::create($request->all());

        return response()->json($promocion_aplicada, 201);
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
        $promocion_aplicada = Promocion_aplicada::findOrFail($id);

        return $promocion_aplicada;
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
        
        $promocion_aplicada = Promocion_aplicada::findOrFail($id);
        $promocion_aplicada->update($request->all());

        return response()->json($promocion_aplicada, 200);
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
        Promocion_aplicada::destroy($id);

        return response()->json(null, 204);
    }
}
