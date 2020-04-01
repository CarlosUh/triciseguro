<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
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
            $documento = Documento::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('apellido', 'LIKE', "%$keyword%")
                ->orWhere('curp', 'LIKE', "%$keyword%")
                ->orWhere('fecha', 'LIKE', "%$keyword%")
                ->orWhere('taxista_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $documento = Documento::latest()->paginate($perPage);
        }

        return view('documento.index', compact('documento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('documento.create');
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
			'apellido' => 'required|min:20',
			'curp' => 'required|min:5',
			'fecha' => 'required|min:6',
			'taxista_id' => 'required|min:20'
		]);
        $requestData = $request->all();
        
        Documento::create($requestData);

        return redirect('documento')->with('flash_message', 'Documento added!');
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
        $documento = Documento::findOrFail($id);

        return view('documento.show', compact('documento'));
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
        $documento = Documento::findOrFail($id);

        return view('documento.edit', compact('documento'));
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
			'apellido' => 'required|min:20',
			'curp' => 'required|min:5',
			'fecha' => 'required|min:6',
			'taxista_id' => 'required|min:20'
		]);
        $requestData = $request->all();
        
        $documento = Documento::findOrFail($id);
        $documento->update($requestData);

        return redirect('documento')->with('flash_message', 'Documento updated!');
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
        Documento::destroy($id);

        return redirect('documento')->with('flash_message', 'Documento deleted!');
    }
}
