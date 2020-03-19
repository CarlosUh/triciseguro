@extends('adminlte::page')
@section('title', 'Laravel')
@section('content_header')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
<<<<<<< HEAD:src/triciseguroweb/resources/views/licencia/edit.blade.php
                    <div class="card-header">Edit Licencia #{{ $licencia->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/licencia') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
=======
                    <div class="card-header">Edit comprobante_pago #{{ $comprobante_pago->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/comprobante_pago') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/resources/views/comprobante_pago/edit.blade.php
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

<<<<<<< HEAD:src/triciseguroweb/resources/views/licencia/edit.blade.php
                        <form method="POST" action="{{ url('/licencia/' . $licencia->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('licencia.form', ['formMode' => 'edit'])
=======
                        <form method="POST" action="{{ url('/comprobante_pago/' . $comprobante_pago->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('comprobante_pago.form', ['formMode' => 'edit'])
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/resources/views/comprobante_pago/edit.blade.php

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
