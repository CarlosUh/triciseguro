@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
<<<<<<< HEAD:src/triciseguroweb/resources/views/servicios/create.blade.php
                    <div class="card-header">Create New Servicio</div>
                    <div class="card-body">
                        <a href="{{ url('/servicios') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
=======
                    <div class="card-header">Create New Persona</div>
                    <div class="card-body">
                        <a href="{{ url('/persona') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/resources/views/persona/create.blade.php
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

<<<<<<< HEAD:src/triciseguroweb/resources/views/servicios/create.blade.php
                        <form method="POST" action="{{ url('/servicios') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('servicios.form', ['formMode' => 'create'])
=======
                        <form method="POST" action="{{ url('/persona') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('persona.form', ['formMode' => 'create'])
>>>>>>> remotes/origin/Alexis.Kumul:src/triciseguroweb/resources/views/persona/create.blade.php

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
