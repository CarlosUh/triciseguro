<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Rutum;
use Illuminate\Http\Request;

class RutaController extends Controller
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
            $ruta = Rutum::where('orien', 'LIKE', "%$keyword%")
                ->orWhere('destino', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ruta = Rutum::latest()->paginate($perPage);
        }

        return view('ruta.index', compact('ruta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('ruta.create');
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
        
        Rutum::create($requestData);

        return redirect('ruta')->with('flash_message', 'Rutum added!');
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
        $rutum = Rutum::findOrFail($id);

        return view('ruta.show', compact('rutum'));
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
        $rutum = Rutum::findOrFail($id);

        return view('ruta.edit', compact('rutum'));
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
        
        $rutum = Rutum::findOrFail($id);
        $rutum->update($requestData);

        return redirect('ruta')->with('flash_message', 'Rutum updated!');
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
        Rutum::destroy($id);

        return redirect('ruta')->with('flash_message', 'Rutum deleted!');
    }
}
