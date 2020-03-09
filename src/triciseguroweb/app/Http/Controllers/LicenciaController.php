<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Licencia;
use Illuminate\Http\Request;

class LicenciaController extends Controller
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
            $licencia = Licencia::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('apellido', 'LIKE', "%$keyword%")
                ->orWhere('curp', 'LIKE', "%$keyword%")
                ->orWhere('nacionalidad', 'LIKE', "%$keyword%")
                ->orWhere('fecha_expedicion', 'LIKE', "%$keyword%")
                ->orWhere('fecha_vencimiento', 'LIKE', "%$keyword%")
                ->orWhere('periodo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $licencia = Licencia::latest()->paginate($perPage);
        }

        return view('licencia.index', compact('licencia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('licencia.create');
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
			'nombre' => 'required|min:2|max:40',
			'apellido' => 'required|min:2|max:40',
			'curp' => 'required:18'
		]);
        $requestData = $request->all();
        
        Licencia::create($requestData);

        return redirect('licencia')->with('flash_message', 'Licencia added!');
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
        $licencia = Licencia::findOrFail($id);

        return view('licencia.show', compact('licencia'));
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
        $licencia = Licencia::findOrFail($id);

        return view('licencia.edit', compact('licencia'));
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
			'nombre' => 'required|min:2|max:40',
			'apellido' => 'required|min:2|max:40',
			'curp' => 'required:18'
		]);
        $requestData = $request->all();
        
        $licencia = Licencia::findOrFail($id);
        $licencia->update($requestData);

        return redirect('licencia')->with('flash_message', 'Licencia updated!');
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
        Licencia::destroy($id);

        return redirect('licencia')->with('flash_message', 'Licencia deleted!');
    }
}
