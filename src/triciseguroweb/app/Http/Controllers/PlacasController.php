<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Placa;
use Illuminate\Http\Request;

class PlacasController extends Controller
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
            $placas = Placa::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('color', 'LIKE', "%$keyword%")
                ->orWhere('tamanio', 'LIKE', "%$keyword%")
                ->orWhere('taxi_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $placas = Placa::latest()->paginate($perPage);
        }

        return view('placas.index', compact('placas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('placas.create');
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
			'color' => 'required|min:4|max:20',
			'tamanio' => 'required|min:5|max:20',
			'taxi_id' => 'required|min:1'
		]);
        $requestData = $request->all();
        
        Placa::create($requestData);

        return redirect('placas')->with('flash_message', 'Placa added!');
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
        $placa = Placa::findOrFail($id);

        return view('placas.show', compact('placa'));
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
        $placa = Placa::findOrFail($id);

        return view('placas.edit', compact('placa'));
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
			'color' => 'required|min:4|max:20',
			'tamanio' => 'required|min:5|max:20',
			'taxi_id' => 'required|min:1'
		]);
        $requestData = $request->all();
        
        $placa = Placa::findOrFail($id);
        $placa->update($requestData);

        return redirect('placas')->with('flash_message', 'Placa updated!');
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
        Placa::destroy($id);

        return redirect('placas')->with('flash_message', 'Placa deleted!');
    }
}
