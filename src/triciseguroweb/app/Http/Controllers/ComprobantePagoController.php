<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\ComprobantePago;
use Illuminate\Http\Request;

class ComprobantePagoController extends Controller
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
            $comprobantepago = ComprobantePago::where('cantidad', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('documento_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $comprobantepago = ComprobantePago::latest()->paginate($perPage);
        }

        return view('comprobante-pago.index', compact('comprobantepago'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('comprobante-pago.create');
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
        
        ComprobantePago::create($requestData);

        return redirect('comprobante-pago')->with('flash_message', 'ComprobantePago added!');
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
        $comprobantepago = ComprobantePago::findOrFail($id);

        return view('comprobante-pago.show', compact('comprobantepago'));
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
        $comprobantepago = ComprobantePago::findOrFail($id);

        return view('comprobante-pago.edit', compact('comprobantepago'));
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
        
        $comprobantepago = ComprobantePago::findOrFail($id);
        $comprobantepago->update($requestData);

        return redirect('comprobante-pago')->with('flash_message', 'ComprobantePago updated!');
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
        ComprobantePago::destroy($id);

        return redirect('comprobante-pago')->with('flash_message', 'ComprobantePago deleted!');
    }
}
