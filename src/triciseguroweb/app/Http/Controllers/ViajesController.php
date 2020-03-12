<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Viaje;
use Illuminate\Http\Request;

class ViajesController extends Controller
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
            $viajes = Viaje::where('idSolicitud', 'LIKE', "%$keyword%")
                ->orWhere('idAlerta', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $viajes = Viaje::latest()->paginate($perPage);
        }

        return view('viajes.index', compact('viajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('viajes.create');
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
        
        Viaje::create($requestData);

        return redirect('viajes')->with('flash_message', 'Viaje added!');
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
        $viaje = Viaje::findOrFail($id);

        return view('viajes.show', compact('viaje'));
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
        $viaje = Viaje::findOrFail($id);

        return view('viajes.edit', compact('viaje'));
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
        
        $viaje = Viaje::findOrFail($id);
        $viaje->update($requestData);

        return redirect('viajes')->with('flash_message', 'Viaje updated!');
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
        Viaje::destroy($id);

        return redirect('viajes')->with('flash_message', 'Viaje deleted!');
    }
}
