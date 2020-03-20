@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Servicios</div>
                    <div class="card-body">
<<<<<<< HEAD:src/triciseguroweb/resources/views/servicios/index.blade.php
                        <a href="{{ url('/servicios/create') }}" class="btn btn-success btn-sm" title="Add New Servicio">
=======
                        <a href="{{ url('/taxista/create') }}" class="btn btn-success btn-sm" title="Add New Taxistum">
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/resources/views/taxista/index.blade.php
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/servicios') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
<<<<<<< HEAD:src/triciseguroweb/resources/views/servicios/index.blade.php
                                        <th>#</th><th>Tipo</th><th>Precio</th><th>Actions</th>
=======
                                        <th>#</th><th>Nombre</th><th>Persona Id</th><th>Quejas</th><th>Actions</th>
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/resources/views/taxista/index.blade.php
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($servicios as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
<<<<<<< HEAD:src/triciseguroweb/resources/views/servicios/index.blade.php
                                        <td>{{ $item->tipo }}</td><td>{{ $item->precio }}</td>
                                        <td>
                                            <a href="{{ url('/servicios/' . $item->id) }}" title="View Servicio"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/servicios/' . $item->id . '/edit') }}" title="Edit Servicio"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
=======
                                        <td>{{ $item->nombre }}</td><td>{{ $item->persona_id }}</td><td>{{ $item->quejas }}</td>
                                        <td>
                                            <a href="{{ url('/taxista/' . $item->id) }}" title="View Taxistum"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/taxista/' . $item->id . '/edit') }}" title="Edit Taxistum"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/resources/views/taxista/index.blade.php

                                            <form method="POST" action="{{ url('/servicios' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
<<<<<<< HEAD:src/triciseguroweb/resources/views/servicios/index.blade.php
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Servicio" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
=======
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Taxistum" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/resources/views/taxista/index.blade.php
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $servicios->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
