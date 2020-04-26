<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Notificacion;
use Illuminate\Http\Request;

class NotificacionController extends Controller
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
            $notificacion = Notificacion::where('tipo', 'LIKE', "%$keyword%")
                ->orWhere('mensaje', 'LIKE', "%$keyword%")
                ->orWhere('origen_id', 'LIKE', "%$keyword%")
                ->orWhere('destino_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $notificacion = Notificacion::latest()->paginate($perPage);
        }

        return view('notificacion.index', compact('notificacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('notificacion.create');
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
        
        Notificacion::create($requestData);

        return redirect('notificacion')->with('flash_message', 'Notificacion added!');
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
        $notificacion = Notificacion::findOrFail($id);

        return view('notificacion.show', compact('notificacion'));
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
        $notificacion = Notificacion::findOrFail($id);

        return view('notificacion.edit', compact('notificacion'));
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
        
        $notificacion = Notificacion::findOrFail($id);
        $notificacion->update($requestData);

        return redirect('notificacion')->with('flash_message', 'Notificacion updated!');
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
        Notificacion::destroy($id);

        return redirect('notificacion')->with('flash_message', 'Notificacion deleted!');
    }
}
