<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Taxistum;
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
            $taxista = Taxistum::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('persona_id', 'LIKE', "%$keyword%")
                ->orWhere('quejas', 'LIKE', "%$keyword%")
                ->orWhere('ruta', 'LIKE', "%$keyword%")
                ->orWhere('mototaxi', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $taxista = Taxistum::latest()->paginate($perPage);
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
			'name' => 'required|min:5|max:20',
			'persona' => 'required|min:5'
		]);
        $requestData = $request->all();
        
        Taxistum::create($requestData);

        return redirect('taxista')->with('flash_message', 'Taxistum added!');
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
        $taxistum = Taxistum::findOrFail($id);

        return view('taxista.show', compact('taxistum'));
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
        $taxistum = Taxistum::findOrFail($id);

        return view('taxista.edit', compact('taxistum'));
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
			'name' => 'required|min:5|max:20',
			'persona' => 'required|min:5'
		]);
        $requestData = $request->all();
        
        $taxistum = Taxistum::findOrFail($id);
        $taxistum->update($requestData);

        return redirect('taxista')->with('flash_message', 'Taxistum updated!');
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
        Taxistum::destroy($id);

        return redirect('taxista')->with('flash_message', 'Taxistum deleted!');
    }
}
