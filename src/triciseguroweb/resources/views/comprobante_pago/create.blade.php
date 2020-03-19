@extends('adminlte::page')
@section('title', 'Laravel')
@section('content_header')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
<<<<<<< HEAD:src/triciseguroweb/resources/views/licencia/create.blade.php
                    <div class="card-header">Create New Licencia</div>
                    <div class="card-body">
                        <a href="{{ url('/licencia') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
=======
                    <div class="card-header">Create New comprobante_pago</div>
                    <div class="card-body">
                        <a href="{{ url('/comprobante_pago') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/resources/views/comprobante_pago/create.blade.php
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

<<<<<<< HEAD:src/triciseguroweb/resources/views/licencia/create.blade.php
                        <form method="POST" action="{{ url('/licencia') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('licencia.form', ['formMode' => 'create'])
=======
                        <form method="POST" action="{{ url('/comprobante_pago') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('comprobante_pago.form', ['formMode' => 'create'])
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/resources/views/comprobante_pago/create.blade.php

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
