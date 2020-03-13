<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Pasajero;
use Illuminate\Http\Request;

class PasajerosController extends Controller
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
            $pasajeros = Pasajero::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('persona_id', 'LIKE', "%$keyword%")
                ->orWhere('promocion_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pasajeros = Pasajero::latest()->paginate($perPage);
        }

        return view('pasajeros.index', compact('pasajeros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pasajeros.create');
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
        
        Pasajero::create($requestData);

        return redirect('pasajeros')->with('flash_message', 'Pasajero added!');
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
        $pasajero = Pasajero::findOrFail($id);

        return view('pasajeros.show', compact('pasajero'));
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
        $pasajero = Pasajero::findOrFail($id);

        return view('pasajeros.edit', compact('pasajero'));
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
        
        $pasajero = Pasajero::findOrFail($id);
        $pasajero->update($requestData);

        return redirect('pasajeros')->with('flash_message', 'Pasajero updated!');
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
        Pasajero::destroy($id);

        return redirect('pasajeros')->with('flash_message', 'Pasajero deleted!');
    }
}
