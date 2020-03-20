<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Promocion_aplicada;
use Illuminate\Http\Request;

class Promocion_aplicadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $promocion_aplicada = Promocion_aplicada::where('promocion_id', 'LIKE', "%$keyword%")
                ->orWhere('solicitud_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $promocion_aplicada = Promocion_aplicada::latest()->paginate($perPage);
        }

        return view('promocion_aplicada.index', compact('promocion_aplicada'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('promocion_aplicada.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Promocion_aplicada::create($requestData);

        return redirect('promocion_aplicada')->with('flash_message', 'Promocion_aplicada added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $promocion_aplicada = Promocion_aplicada::findOrFail($id);

        return view('promocion_aplicada.show', compact('promocion_aplicada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $promocion_aplicada = Promocion_aplicada::findOrFail($id);

        return view('promocion_aplicada.edit', compact('promocion_aplicada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $promocion_aplicada = Promocion_aplicada::findOrFail($id);
        $promocion_aplicada->update($requestData);

        return redirect('promocion_aplicada')->with('flash_message', 'Promocion_aplicada updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Promocion_aplicada::destroy($id);

        return redirect('promocion_aplicada')->with('flash_message', 'Promocion_aplicada deleted!');
    }
}
