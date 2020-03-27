<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
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
            $solicitud = Solicitud::where('pasajero_id', 'LIKE', "%$keyword%")
                ->orWhere('taxista_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $solicitud = Solicitud::latest()->paginate($perPage);
        }

        return view('solicitud.index', compact('solicitud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('solicitud.create');
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
			'pasajero_id' => 'required',
			'ruta_id' => 'required',
			'taxista_id' => 'required'
		]);
        $requestData = $request->all();
        
        Solicitud::create($requestData);

        return redirect('solicitud')->with('flash_message', 'Solicitud added!');
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
        $solicitud = Solicitud::findOrFail($id);

        return view('solicitud.show', compact('solicitud'));
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
        $solicitud = Solicitud::findOrFail($id);

        return view('solicitud.edit', compact('solicitud'));
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
			'pasajero_id' => 'required',
			'ruta_id' => 'required',
			'taxista_id' => 'required'
		]);
        $requestData = $request->all();
        
        $solicitud = Solicitud::findOrFail($id);
        $solicitud->update($requestData);

        return redirect('solicitud')->with('flash_message', 'Solicitud updated!');
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
        Solicitud::destroy($id);

        return redirect('solicitud')->with('flash_message', 'Solicitud deleted!');
    }
}
