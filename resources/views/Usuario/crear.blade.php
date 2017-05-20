@extends('layouts.master')

@section('title','Registar Usuario ')
@section('name','Registrar Usuario')
@section('content')


    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
    @endforeach
                </ul>
            </div>
    @endif
    {{ Form::open(array('route' => 'user.store', 'method' => 'POST'), array('role' => 'form')) }}
        <div class="form-group" >
            {!! Form::label('name','Nombre')!!}

            {!!Form::text('name',null,['class'=>'form-control','required'])!!}

        </div>
         <div class="form-group" >
            {!! Form::label('email','Correo Electrónico')!!}

            {!!Form::text('email',null,['class'=>'form-control','required'])!!}

        <div class="form-group" >
            {!! Form::label('password','Contraseña')!!}

            {!!Form::password('password',null,['class'=>'form-control','required'])!!}

        </div>
<!--
        <div class="form-group">
            {!! Form::label('tipo ','Tipo de Usuario')!!}
            {!!Form::select('tipo',['usuario'=>'Usuario','admin'=>'Administardor'],null,['class'=>'form-control'])!!}
        </div>
-->
        <div class="form-group">
                <center>
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

                </center>
        </div>

    {!! Form::close()!!}

@endsection
