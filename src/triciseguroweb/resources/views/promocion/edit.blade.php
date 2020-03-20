@extends('adminlte::page')
@section('title', 'Laravel')
@section('content_header')
    <div class="container">
        <div class="row">
          

            <div class="col-md-9">
                <div class="card">
<<<<<<< HEAD:src/triciseguroweb/resources/views/promocion/edit.blade.php
                    <div class="card-header">Edit Promocion #{{ $promocion->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/promocion') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
=======
                    <div class="card-header">Edit Persona #{{ $persona->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/persona') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/resources/views/persona/edit.blade.php
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

<<<<<<< HEAD:src/triciseguroweb/resources/views/promocion/edit.blade.php
                        <form method="POST" action="{{ url('/promocion/' . $promocion->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('promocion.form', ['formMode' => 'edit'])
=======
                        <form method="POST" action="{{ url('/persona/' . $persona->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('persona.form', ['formMode' => 'edit'])
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/resources/views/persona/edit.blade.php

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
