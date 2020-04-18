@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Mototaxi {{ $mototaxi->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/mototaxi') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/mototaxi/' . $mototaxi->id . '/edit') }}" title="Edit Mototaxi"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('mototaxi' . '/' . $mototaxi->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Mototaxi" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $mototaxi->id }}</td>
                                    </tr>
                                    <tr><th> Marca </th><td> {{ $mototaxi->marca }} </td></tr><tr><th> Modelo </th><td> {{ $mototaxi->modelo }} </td></tr><tr><th> Matricula </th><td> {{ $mototaxi->matricula }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
