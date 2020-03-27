<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
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
            $viaje = Viaje::where('comentario', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $viaje = Viaje::latest()->paginate($perPage);
        }

        return view('viaje.index', compact('viaje'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('viaje.create');
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
			'comentario' => 'required|min:8'
		]);
        $requestData = $request->all();
        
        Viaje::create($requestData);

        return redirect('viaje')->with('flash_message', 'Viaje added!');
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

        return view('viaje.show', compact('viaje'));
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

        return view('viaje.edit', compact('viaje'));
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
			'comentario' => 'required|min:8'
		]);
        $requestData = $request->all();
        
        $viaje = Viaje::findOrFail($id);
        $viaje->update($requestData);

        return redirect('viaje')->with('flash_message', 'Viaje updated!');
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

        return redirect('viaje')->with('flash_message', 'Viaje deleted!');
    }
}
