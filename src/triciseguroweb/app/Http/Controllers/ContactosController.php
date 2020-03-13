<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

<<<<<<< HEAD:src/triciseguroweb/app/Http/Controllers/tareasController.php
use App\tarea;
use Illuminate\Http\Request;

class tareasController extends Controller
=======
use App\Contacto;
use Illuminate\Http\Request;

class ContactosController extends Controller
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/app/Http/Controllers/ContactosController.php
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
<<<<<<< HEAD:src/triciseguroweb/app/Http/Controllers/tareasController.php
            $tareas = tarea::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tareas = tarea::latest()->paginate($perPage);
        }

        return view('tareas.index', compact('tareas'));
=======
            $contactos = Contacto::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('numero', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $contactos = Contacto::latest()->paginate($perPage);
        }

        return view('contactos.index', compact('contactos'));
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/app/Http/Controllers/ContactosController.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
<<<<<<< HEAD:src/triciseguroweb/app/Http/Controllers/tareasController.php
        return view('tareas.create');
=======
        return view('contactos.create');
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/app/Http/Controllers/ContactosController.php
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
        $this->validate($request, [
			'nombre' => 'required|min:5|max:20'
		]);
        $requestData = $request->all();
        
<<<<<<< HEAD:src/triciseguroweb/app/Http/Controllers/tareasController.php
        tarea::create($requestData);

        return redirect('tareas')->with('flash_message', 'tarea added!');
=======
        Contacto::create($requestData);

        return redirect('contactos')->with('flash_message', 'Contacto added!');
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/app/Http/Controllers/ContactosController.php
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
<<<<<<< HEAD:src/triciseguroweb/app/Http/Controllers/tareasController.php
        $tarea = tarea::findOrFail($id);

        return view('tareas.show', compact('tarea'));
=======
        $contacto = Contacto::findOrFail($id);

        return view('contactos.show', compact('contacto'));
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/app/Http/Controllers/ContactosController.php
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
<<<<<<< HEAD:src/triciseguroweb/app/Http/Controllers/tareasController.php
        $tarea = tarea::findOrFail($id);

        return view('tareas.edit', compact('tarea'));
=======
        $contacto = Contacto::findOrFail($id);

        return view('contactos.edit', compact('contacto'));
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/app/Http/Controllers/ContactosController.php
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
        $this->validate($request, [
			'nombre' => 'required|min:5|max:20'
		]);
        $requestData = $request->all();
        
<<<<<<< HEAD:src/triciseguroweb/app/Http/Controllers/tareasController.php
        $tarea = tarea::findOrFail($id);
        $tarea->update($requestData);

        return redirect('tareas')->with('flash_message', 'tarea updated!');
=======
        $contacto = Contacto::findOrFail($id);
        $contacto->update($requestData);

        return redirect('contactos')->with('flash_message', 'Contacto updated!');
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/app/Http/Controllers/ContactosController.php
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
<<<<<<< HEAD:src/triciseguroweb/app/Http/Controllers/tareasController.php
        tarea::destroy($id);

        return redirect('tareas')->with('flash_message', 'tarea deleted!');
=======
        Contacto::destroy($id);

        return redirect('contactos')->with('flash_message', 'Contacto deleted!');
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/app/Http/Controllers/ContactosController.php
    }
}
