<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\ComprobantePago;
use Illuminate\Http\Request;

class ComprobantePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $comprobantepago = ComprobantePago::latest()->paginate(25);

        return $comprobantepago;
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
        
        $comprobantepago = ComprobantePago::create($request->all());

        return response()->json($comprobantepago, 201);

        
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
        $comprobantepago = ComprobantePago::findOrFail($id);

        return $comprobantepago;
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
        
        $comprobantepago = ComprobantePago::findOrFail($id);
        $comprobantepago->update($request->all());

        return response()->json($comprobantepago, 200);
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
        ComprobantePago::destroy($id);

        return response()->json(null, 204);
    }
}
