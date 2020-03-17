<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Calificacion;
use Illuminate\Http\Request;

class CalificacionController extends Controller
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
            $calificacion = Calificacion::where('taxista', 'LIKE', "%$keyword%")
                ->orWhere('servicio', 'LIKE', "%$keyword%")
                ->orWhere('calificacion', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $calificacion = Calificacion::latest()->paginate($perPage);
        }

        return view('calificacion.index', compact('calificacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('calificacion.create');
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
        
        Calificacion::create($requestData);

        return redirect('calificacion')->with('flash_message', 'Calificacion added!');
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
        $calificacion = Calificacion::findOrFail($id);

        return view('calificacion.show', compact('calificacion'));
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
        $calificacion = Calificacion::findOrFail($id);

        return view('calificacion.edit', compact('calificacion'));
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
        
        $calificacion = Calificacion::findOrFail($id);
        $calificacion->update($requestData);

        return redirect('calificacion')->with('flash_message', 'Calificacion updated!');
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
        Calificacion::destroy($id);

        return redirect('calificacion')->with('flash_message', 'Calificacion deleted!');
    }
}
