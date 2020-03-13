<<<<<<< HEAD:src/triciseguroweb/resources/views/tareas/edit.blade.php
@extends('layouts.app')

@section('content')
=======
@extends('adminlte::page')
@section('title', 'Laravel')
@section('content_header')
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/resources/views/taxista/edit.blade.php
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
<<<<<<< HEAD:src/triciseguroweb/resources/views/tareas/edit.blade.php
                    <div class="card-header">Edit tarea #{{ $tarea->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/tareas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
=======
                    <div class="card-header">Edit taxistum #{{ $taxistum->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/taxista') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/resources/views/taxista/edit.blade.php
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

<<<<<<< HEAD:src/triciseguroweb/resources/views/tareas/edit.blade.php
                        <form method="POST" action="{{ url('/tareas/' . $tarea->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('tareas.form', ['formMode' => 'edit'])
=======
                        <form method="POST" action="{{ url('/taxista/' . $taxistum->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('taxista.form', ['formMode' => 'edit'])
>>>>>>> remotes/origin/IrvingCob:src/triciseguroweb/resources/views/taxista/edit.blade.php

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
