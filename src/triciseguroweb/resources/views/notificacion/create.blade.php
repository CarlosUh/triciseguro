<<<<<<< HEAD:src/triciseguroweb/resources/views/tareas/create.blade.php
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New tarea</div>
                    <div class="card-body">
                        <a href="{{ url('/tareas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
=======
@extends('adminlte::page')
@section('title', 'Laravel')
@section('content_header')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New Notificacion</div>
                    <div class="card-body">
                        <a href="{{ url('/notificacion') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/resources/views/notificacion/create.blade.php
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

<<<<<<< HEAD:src/triciseguroweb/resources/views/tareas/create.blade.php
                        <form method="POST" action="{{ url('/tareas') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('tareas.form', ['formMode' => 'create'])
=======
                        <form method="POST" action="{{ url('/notificacion') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('notificacion.form', ['formMode' => 'create'])
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/resources/views/notificacion/create.blade.php

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
