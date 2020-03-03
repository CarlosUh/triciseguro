@extends('adminlte::page')
@section('title', 'Laravel')
@section('content_header')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Comprobante_pago {{ $comprobante_pago->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/comprobante_pago') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/comprobante_pago/' . $comprobante_pago->id . '/edit') }}" title="Edit Comprobante_pago"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('comprobante_pago' . '/' . $comprobante_pago->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Comprobante_pago" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $comprobante_pago->id }}</td>
                                    </tr>
                                    <tr><th> Fecha </th><td> {{ $comprobante_pago->fecha }} </td></tr><tr><th> Cantidad </th><td> {{ $comprobante_pago->cantidad }} </td></tr><tr><th> Descripcion </th><td> {{ $comprobante_pago->descripcion }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
