@extends('adminlte::page')
@section('title', 'Laravel')
@section('content_header')
    <div class="container">
        <div class="row">
        

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ComprobantePago {{ $comprobantepago->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/comprobante-pago') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/comprobante-pago/' . $comprobantepago->id . '/edit') }}" title="Edit ComprobantePago"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('comprobantepago' . '/' . $comprobantepago->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete ComprobantePago" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $comprobantepago->id }}</td>
                                    </tr>
                                    <tr><th> Cantidad </th><td> {{ $comprobantepago->cantidad }} </td></tr><tr><th> Descripcion </th><td> {{ $comprobantepago->descripcion }} </td></tr><tr><th> Documento Id </th><td> {{ $comprobantepago->documento_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
