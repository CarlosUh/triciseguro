@extends('adminlte::page')
@section('title', 'Laravel')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Rutum {{ $rutum->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/ruta') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/ruta/' . $rutum->id . '/edit') }}" title="Edit Rutum"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('ruta' . '/' . $rutum->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Rutum" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $rutum->id }}</td>
                                    </tr>
                                    <tr><th> Solicitud Id </th><td> {{ $rutum->solicitud_id }} </td></tr><tr><th> Origen Id </th><td> {{ $rutum->origen_id }} </td></tr><tr><th> Destino Id </th><td> {{ $rutum->destino_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
