@extends('adminlte::page')
@section('title', 'Laravel')
@section('content_header')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Queja {{ $queja->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/quejas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/quejas/' . $queja->id . '/edit') }}" title="Editar Queja"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('quejas' . '/' . $queja->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Queja" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $queja->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $queja->nombre }} </td></tr><tr><th> Taxista </th><td> {{ $queja->taxista }} </td></tr><tr><th> Descripcion </th><td> {{ $queja->descripcion }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
