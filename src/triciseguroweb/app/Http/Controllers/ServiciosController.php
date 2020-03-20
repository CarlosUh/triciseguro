<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

<<<<<<< HEAD:src/triciseguroweb/app/Http/Controllers/ServiciosController.php
use App\Servicio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
=======
use App\Taxistum;
use Illuminate\Http\Request;

class TaxistaController extends Controller
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/app/Http/Controllers/taxistaController.php
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
<<<<<<< HEAD:src/triciseguroweb/app/Http/Controllers/ServiciosController.php
            $servicios = Servicio::where('tipo', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $servicios = Servicio::latest()->paginate($perPage);
=======
            $taxista = Taxistum::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('persona_id', 'LIKE', "%$keyword%")
                ->orWhere('quejas', 'LIKE', "%$keyword%")
                ->orWhere('ruta', 'LIKE', "%$keyword%")
                ->orWhere('mototaxi', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $taxista = Taxistum::latest()->paginate($perPage);
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/app/Http/Controllers/taxistaController.php
        }

        return view('servicios.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('servicios.create');
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
<<<<<<< HEAD:src/triciseguroweb/app/Http/Controllers/ServiciosController.php
			'tipo' => 'required|min:8|max:20',
			'precio' => 'required:5'
		]);
        $requestData = $request->all();
        
        Servicio::create($requestData);

        return redirect('servicios')->with('flash_message', 'Servicio added!');
=======
			'name' => 'required|min:5|max:20',
			'persona' => 'required|min:5'
		]);
        $requestData = $request->all();
        
        Taxistum::create($requestData);

        return redirect('taxista')->with('flash_message', 'Taxistum added!');
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/app/Http/Controllers/taxistaController.php
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
<<<<<<< HEAD:src/triciseguroweb/app/Http/Controllers/ServiciosController.php
        $servicio = Servicio::findOrFail($id);
=======
        $taxistum = Taxistum::findOrFail($id);
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/app/Http/Controllers/taxistaController.php

        return view('servicios.show', compact('servicio'));
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
<<<<<<< HEAD:src/triciseguroweb/app/Http/Controllers/ServiciosController.php
        $servicio = Servicio::findOrFail($id);
=======
        $taxistum = Taxistum::findOrFail($id);
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/app/Http/Controllers/taxistaController.php

        return view('servicios.edit', compact('servicio'));
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
<<<<<<< HEAD:src/triciseguroweb/app/Http/Controllers/ServiciosController.php
			'tipo' => 'required|min:8|max:20',
			'precio' => 'required:5'
		]);
        $requestData = $request->all();
        
        $servicio = Servicio::findOrFail($id);
        $servicio->update($requestData);

        return redirect('servicios')->with('flash_message', 'Servicio updated!');
=======
			'name' => 'required|min:5|max:20',
			'persona' => 'required|min:5'
		]);
        $requestData = $request->all();
        
        $taxistum = Taxistum::findOrFail($id);
        $taxistum->update($requestData);

        return redirect('taxista')->with('flash_message', 'Taxistum updated!');
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/app/Http/Controllers/taxistaController.php
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
<<<<<<< HEAD:src/triciseguroweb/app/Http/Controllers/ServiciosController.php
        Servicio::destroy($id);

        return redirect('servicios')->with('flash_message', 'Servicio deleted!');
=======
        Taxistum::destroy($id);

        return redirect('taxista')->with('flash_message', 'Taxistum deleted!');
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/app/Http/Controllers/taxistaController.php
    }
}
