@extends('adminlte::page')
@section('title', 'Laravel')
@section('content_header')

    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Ubicacione {{ $ubicacione->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/ubicaciones') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/ubicaciones/' . $ubicacione->id . '/edit') }}" title="Edit Ubicacione"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('ubicaciones' . '/' . $ubicacione->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Ubicacione" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $ubicacione->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $ubicacione->nombre }} </td></tr><tr><th> Latitude </th><td> {{ $ubicacione->latitude }} </td></tr><tr><th> Longitud </th><td> {{ $ubicacione->longitud }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
