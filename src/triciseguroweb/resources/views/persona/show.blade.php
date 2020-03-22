@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
<<<<<<< HEAD:src/triciseguroweb/resources/views/servicios/show.blade.php
                    <div class="card-header">Servicio {{ $servicio->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/servicios') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/servicios/' . $servicio->id . '/edit') }}" title="Edit Servicio"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('servicios' . '/' . $servicio->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Servicio" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
=======
                    <div class="card-header">Persona {{ $persona->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/persona') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/persona/' . $persona->id . '/edit') }}" title="Edit Persona"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('persona' . '/' . $persona->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Persona" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/resources/views/persona/show.blade.php
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
<<<<<<< HEAD:src/triciseguroweb/resources/views/servicios/show.blade.php
                                        <th>ID</th><td>{{ $servicio->id }}</td>
                                    </tr>
                                    <tr><th> Tipo </th><td> {{ $servicio->tipo }} </td></tr><tr><th> Precio </th><td> {{ $servicio->precio }} </td></tr>
=======
                                        <th>ID</th><td>{{ $persona->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $persona->nombre }} </td></tr><tr><th> Apellido </th><td> {{ $persona->apellido }} </td></tr><tr><th> F Nacimiento </th><td> {{ $persona->f_nacimiento }} </td></tr>
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/resources/views/persona/show.blade.php
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
