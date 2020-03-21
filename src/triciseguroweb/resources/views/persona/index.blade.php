@extends('adminlte::page')
@section('title', 'Laravel')
@section('content_header')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
<<<<<<< HEAD:src/triciseguroweb/resources/views/calificaciones/index.blade.php
                    <div class="card-header">Calificaciones</div>
                    <div class="card-body">
                        <a href="{{ url('/calificaciones/create') }}" class="btn btn-success btn-sm" title="Add New Calificacione">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/calificaciones') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
=======
                    <div class="card-header">Persona</div>
                    <div class="card-body">
                        <a href="{{ url('/persona/create') }}" class="btn btn-success btn-sm" title="Add New Persona">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/persona') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/resources/views/persona/index.blade.php
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
<<<<<<< HEAD:src/triciseguroweb/resources/views/calificaciones/index.blade.php
                                        <th>#</th><th>Taxista</th><th>Servicio</th><th>Calificacion</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($calificaciones as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->taxista }}</td><td>{{ $item->servicio }}</td><td>{{ $item->calificacion }}</td>
                                        <td>
                                            <a href="{{ url('/calificaciones/' . $item->id) }}" title="View Calificacione"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/calificaciones/' . $item->id . '/edit') }}" title="Edit Calificacione"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/calificaciones' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Calificacione" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
=======
                                        <th>#</th><th>Nombre</th><th>Apellido</th><th>F Nacimiento</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($persona as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre }}</td><td>{{ $item->apellido }}</td><td>{{ $item->f_nacimiento }}</td>
                                        <td>
                                            <a href="{{ url('/persona/' . $item->id) }}" title="View Persona"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/persona/' . $item->id . '/edit') }}" title="Edit Persona"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/persona' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Persona" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/resources/views/persona/index.blade.php
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
<<<<<<< HEAD:src/triciseguroweb/resources/views/calificaciones/index.blade.php
                            <div class="pagination-wrapper"> {!! $calificaciones->appends(['search' => Request::get('search')])->render() !!} </div>
=======
                            <div class="pagination-wrapper"> {!! $persona->appends(['search' => Request::get('search')])->render() !!} </div>
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/resources/views/persona/index.blade.php
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
