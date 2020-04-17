<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Credencial;
use Illuminate\Http\Request;

class CredencialController extends Controller
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
            $credencial = Credencial::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('matricula', 'LIKE', "%$keyword%")
                ->orWhere('vigencia', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $credencial = Credencial::latest()->paginate($perPage);
        }

        return view('credencial.index', compact('credencial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('credencial.create');
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
			'' => ''
		]);
        $requestData = $request->all();
        
        Credencial::create($requestData);

        return redirect('credencial')->with('flash_message', 'Credencial added!');
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
        $credencial = Credencial::findOrFail($id);

        return view('credencial.show', compact('credencial'));
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
        $credencial = Credencial::findOrFail($id);

        return view('credencial.edit', compact('credencial'));
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
			'' => ''
		]);
        $requestData = $request->all();
        
        $credencial = Credencial::findOrFail($id);
        $credencial->update($requestData);

        return redirect('credencial')->with('flash_message', 'Credencial updated!');
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
        Credencial::destroy($id);

        return redirect('credencial')->with('flash_message', 'Credencial deleted!');
    }
}
