<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
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
            $persona = Persona::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('apellido', 'LIKE', "%$keyword%")
                ->orWhere('f_nacimiento', 'LIKE', "%$keyword%")
                ->orWhere('genero', 'LIKE', "%$keyword%")
                ->orWhere('direccion', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $persona = Persona::latest()->paginate($perPage);
        }

        return view('personas.index', compact('persona'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('personas.create');
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
			'nombre' => 'required|min:5|max:20',
			'apellido' => 'required|min:5',
			'f_nacimiento' => 'required|min:8',
			'genero' => 'required|min:8',
			'direccion' => 'required|min:8',
			'telefono' => 'required|min:8',
			
		]);
        $requestData = $request->all();
        
        Persona::create($requestData);

        return redirect('personas')->with('flash_message', 'Persona added!');
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
        $persona = Persona::findOrFail($id);

        return view('personas.show', compact('persona'));
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
        $persona = Persona::findOrFail($id);

        return view('personas.edit', compact('persona'));
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
			'nombre' => 'required|min:5|max:20',
			'apellido' => 'required|min:5',
			'f_nacimiento' => 'required|min:8',
			'genero' => 'required|min:8',
			'direccion' => 'required|min:8',
			'telefono' => 'required|min:8',
			
		]);
        $requestData = $request->all();
        
        $persona = Persona::findOrFail($id);
        $persona->update($requestData);

        return redirect('personas')->with('flash_message', 'Persona updated!');
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
        Persona::destroy($id);

        return redirect('personas')->with('flash_message', 'Persona deleted!');
    }
}
