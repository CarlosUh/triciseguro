<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Mototaxi;
use Illuminate\Http\Request;

class MototaxiController extends Controller
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
            $mototaxi = Mototaxi::where('marca', 'LIKE', "%$keyword%")
                ->orWhere('modelo', 'LIKE', "%$keyword%")
                ->orWhere('matricula', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mototaxi = Mototaxi::latest()->paginate($perPage);
        }

        return view('mototaxi.index', compact('mototaxi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('mototaxi.create');
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
        
        Mototaxi::create($requestData);

        return redirect('mototaxi')->with('flash_message', 'Mototaxi added!');
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
        $mototaxi = Mototaxi::findOrFail($id);

        return view('mototaxi.show', compact('mototaxi'));
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
        $mototaxi = Mototaxi::findOrFail($id);

        return view('mototaxi.edit', compact('mototaxi'));
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
        
        $mototaxi = Mototaxi::findOrFail($id);
        $mototaxi->update($requestData);

        return redirect('mototaxi')->with('flash_message', 'Mototaxi updated!');
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
        Mototaxi::destroy($id);

        return redirect('mototaxi')->with('flash_message', 'Mototaxi deleted!');
    }
}
