<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\mensaje;
use Illuminate\Http\Request;

class mensajeController extends Controller
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
            $mensaje = mensaje::where('mensaje', 'LIKE', "%$keyword%")
                ->orWhere('taxista_id', 'LIKE', "%$keyword%")
                ->orWhere('solicitud_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mensaje = mensaje::latest()->paginate($perPage);
        }

        return view('mensaje.index', compact('mensaje'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('mensaje.create');
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
			'Mensaje' => 'required|min:5|max:20'
		]);
        $requestData = $request->all();
        
        mensaje::create($requestData);

        return redirect('mensaje')->with('flash_message', 'mensaje added!');
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
        $mensaje = mensaje::findOrFail($id);

        return view('mensaje.show', compact('mensaje'));
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
        $mensaje = mensaje::findOrFail($id);

        return view('mensaje.edit', compact('mensaje'));
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
			'Mensaje' => 'required|min:5|max:20'
		]);
        $requestData = $request->all();
        
        $mensaje = mensaje::findOrFail($id);
        $mensaje->update($requestData);

        return redirect('mensaje')->with('flash_message', 'mensaje updated!');
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
        mensaje::destroy($id);

        return redirect('mensaje')->with('flash_message', 'mensaje deleted!');
    }
}
