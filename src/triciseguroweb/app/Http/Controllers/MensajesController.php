<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Mensaje;
use Illuminate\Http\Request;

class MensajesController extends Controller
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
            $mensajes = Mensaje::where('Mensaje', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mensajes = Mensaje::latest()->paginate($perPage);
        }

        return view('mensajes.index', compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('mensajes.create');
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
        
        Mensaje::create($requestData);

        return redirect('mensajes')->with('flash_message', 'Mensaje added!');
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
        $mensaje = Mensaje::findOrFail($id);

        return view('mensajes.show', compact('mensaje'));
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
        $mensaje = Mensaje::findOrFail($id);

        return view('mensajes.edit', compact('mensaje'));
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
        
        $mensaje = Mensaje::findOrFail($id);
        $mensaje->update($requestData);

        return redirect('mensajes')->with('flash_message', 'Mensaje updated!');
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
        Mensaje::destroy($id);

        return redirect('mensajes')->with('flash_message', 'Mensaje deleted!');
    }
}
