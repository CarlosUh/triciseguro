@extends('adminlte::page')

@section('content_header')
    <div class="container">
        <div class="row">
          <!--  @include('admin.sidebar')-->

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Viaje {{ $viaje->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/viajes') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/viajes/' . $viaje->id . '/edit') }}" title="Edit Viaje"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('viajes' . '/' . $viaje->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Viaje" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $viaje->id }}</td>
                                    </tr>
                                    <tr><th> IdSolicitud </th><td> {{ $viaje->idSolicitud }} </td></tr><tr><th> IdAlerta </th><td> {{ $viaje->idAlerta }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection