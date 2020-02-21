<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Documento;
use Illuminate\Http\Request;

class DocumentosController extends Controller
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
            $documentos = Documento::where('credencial_id', 'LIKE', "%$keyword%")
                ->orWhere('cuota_id', 'LIKE', "%$keyword%")
                ->orWhere('licencia_id', 'LIKE', "%$keyword%")
                ->orWhere('comprobante_pago_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $documentos = Documento::latest()->paginate($perPage);
        }

        return view('documentos.index', compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('documentos.create');
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
			'credencial_id' => 'required|min:5|max:20',
			'cuota_id' => 'required|min:5',
			'comprobante_pago_id' => 'required|min:5',
			'licencia_id' => 'required|min:5'
		]);
        $requestData = $request->all();
        
        Documento::create($requestData);

        return redirect('documentos')->with('flash_message', 'Documento added!');
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

        return view('documentos.show', compact('documento'));
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

        return view('documentos.edit', compact('documento'));
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
			'credencial_id' => 'required|min:5|max:20',
			'cuota_id' => 'required|min:5',
			'comprobante_pago_id' => 'required|min:5',
			'licencia_id' => 'required|min:5'
		]);
        $requestData = $request->all();
        
        $documento = Documento::findOrFail($id);
        $documento->update($requestData);

        return redirect('documentos')->with('flash_message', 'Documento updated!');
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

        return redirect('documentos')->with('flash_message', 'Documento deleted!');
    }
}
