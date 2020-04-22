@extends('adminlte::page')
@section('title', 'Laravel')
@section('content_header')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Calificacione {{ $calificacione->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/calificaciones') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/calificaciones/' . $calificacione->id . '/edit') }}" title="Edit Calificacione"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('calificaciones' . '/' . $calificacione->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Calificacione" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $calificacione->id }}</td>
                                    </tr>
                                    <tr><th> Servicio </th><td> {{ $calificacione->servicio }} </td></tr><tr><th> Calificacion </th><td> {{ $calificacione->calificacion }} </td></tr><tr><th> Taxista Id </th><td> {{ $calificacione->taxista_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
