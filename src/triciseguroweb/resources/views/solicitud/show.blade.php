@extends('adminlte::page')

@section('content_header')
    <div class="container">
        <div class="row">
          

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Solicitud {{ $solicitud->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/solicitud') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/solicitud/' . $solicitud->id . '/edit') }}" title="Edit Solicitud"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('solicitud' . '/' . $solicitud->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Solicitud" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $solicitud->id }}</td>
                                    </tr>
                                    <tr><th> Promocion Id </th><td> {{ $solicitud->promocion_id }} </td></tr><tr><th> Ruta Id </th><td> {{ $solicitud->ruta_id }} </td></tr><tr><th> Calificacion Id </th><td> {{ $solicitud->calificacion_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
