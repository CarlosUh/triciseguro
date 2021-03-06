<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Taxista;
use Illuminate\Http\Request;

class TaxistaController extends Controller
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
            $taxista = Taxista::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('pasajero', 'LIKE', "%$keyword%")
                ->orWhere('quejas', 'LIKE', "%$keyword%")
                ->orWhere('ruta', 'LIKE', "%$keyword%")
                ->orWhere('mototaxi', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $taxista = Taxista::latest()->paginate($perPage);
        }

        return view('taxista.index', compact('taxista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('taxista.create');
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

        Taxista::create($requestData);

        return redirect('taxista')->with('flash_message', 'Taxista added!');
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
        $Taxista = Taxista::findOrFail($id);

        return view('taxista.show', compact('Taxista'));
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
        $Taxista = Taxista::findOrFail($id);

        return view('taxista.edit', compact('Taxista'));
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

        $Taxista = Taxista::findOrFail($id);
        $Taxista->update($requestData);

        return redirect('taxista')->with('flash_message', 'Taxista updated!');
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
        Taxista::destroy($id);

        return redirect('taxista')->with('flash_message', 'Taxista deleted!');
    }
}
