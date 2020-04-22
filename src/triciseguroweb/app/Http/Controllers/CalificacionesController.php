<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Calificacione;
use Illuminate\Http\Request;

class CalificacionesController extends Controller
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
            $calificaciones = Calificacione::where('servicio', 'LIKE', "%$keyword%")
                ->orWhere('calificacion', 'LIKE', "%$keyword%")
                ->orWhere('taxista_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $calificaciones = Calificacione::latest()->paginate($perPage);
        }

        return view('calificaciones.index', compact('calificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('calificaciones.create');
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
        
        Calificacione::create($requestData);

        return redirect('calificaciones')->with('flash_message', 'Calificacione added!');
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
        $calificacione = Calificacione::findOrFail($id);

        return view('calificaciones.show', compact('calificacione'));
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
        $calificacione = Calificacione::findOrFail($id);

        return view('calificaciones.edit', compact('calificacione'));
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
        
        $calificacione = Calificacione::findOrFail($id);
        $calificacione->update($requestData);

        return redirect('calificaciones')->with('flash_message', 'Calificacione updated!');
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
        Calificacione::destroy($id);

        return redirect('calificaciones')->with('flash_message', 'Calificacione deleted!');
    }
}
