<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Taxi;
use Illuminate\Http\Request;

class TaxisController extends Controller
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
            $taxis = Taxi::where('marca', 'LIKE', "%$keyword%")
                ->orWhere('modelo', 'LIKE', "%$keyword%")
                ->orWhere('matricula', 'LIKE', "%$keyword%")
                ->orWhere('placa_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $taxis = Taxi::latest()->paginate($perPage);
        }

        return view('taxis.index', compact('taxis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('taxis.create');
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
			'marca' => 'required|min:5|max:20'
		]);
        $requestData = $request->all();
        
        Taxi::create($requestData);

        return redirect('taxis')->with('flash_message', 'Taxi added!');
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
        $taxi = Taxi::findOrFail($id);

        return view('taxis.show', compact('taxi'));
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
        $taxi = Taxi::findOrFail($id);

        return view('taxis.edit', compact('taxi'));
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
			'marca' => 'required|min:5|max:20'
		]);
        $requestData = $request->all();
        
        $taxi = Taxi::findOrFail($id);
        $taxi->update($requestData);

        return redirect('taxis')->with('flash_message', 'Taxi updated!');
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
        Taxi::destroy($id);

        return redirect('taxis')->with('flash_message', 'Taxi deleted!');
    }
}
