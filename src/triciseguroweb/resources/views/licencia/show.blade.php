@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Licencium {{ $licencium->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/licencia') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/licencia/' . $licencium->id . '/edit') }}" title="Edit Licencium"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('licencia' . '/' . $licencium->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Licencium" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $licencium->id }}</td>
                                    </tr>
                                    <tr><th> Nacionalidad </th><td> {{ $licencium->nacionalidad }} </td></tr><tr><th> Fecha Expedicion </th><td> {{ $licencium->fecha_expedicion }} </td></tr><tr><th> Fecha Vencimiento </th><td> {{ $licencium->fecha_vencimiento }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
