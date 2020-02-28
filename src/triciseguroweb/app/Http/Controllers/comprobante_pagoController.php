<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Comprobante_pago;
use Illuminate\Http\Request;

class Comprobante_pagoController extends Controller
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
            $comprobante_pago = Comprobante_pago::where('fecha', 'LIKE', "%$keyword%")
                ->orWhere('hora', 'LIKE', "%$keyword%")
                ->orWhere('cantidad', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('formapago', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $comprobante_pago = Comprobante_pago::latest()->paginate($perPage);
        }

        return view('comprobante_pago.index', compact('comprobante_pago'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('comprobante_pago.create');
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
			'fecha' => 'required|min:5|max:20'
		]);
        $requestData = $request->all();
        
        Comprobante_pago::create($requestData);

        return redirect('comprobante_pago')->with('flash_message', 'Comprobante_pago added!');
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
        $comprobante_pago = Comprobante_pago::findOrFail($id);

        return view('comprobante_pago.show', compact('comprobante_pago'));
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
        $comprobante_pago = Comprobante_pago::findOrFail($id);

        return view('comprobante_pago.edit', compact('comprobante_pago'));
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
			'fecha' => 'required|min:5|max:20'
		]);
        $requestData = $request->all();
        
        $comprobante_pago = Comprobante_pago::findOrFail($id);
        $comprobante_pago->update($requestData);

        return redirect('comprobante_pago')->with('flash_message', 'Comprobante_pago updated!');
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
        Comprobante_pago::destroy($id);

        return redirect('comprobante_pago')->with('flash_message', 'Comprobante_pago deleted!');
    }
}
