@extends('layouts.master')

@section('title','Registar Comentario ')
@section('name','Registrar Comentario')
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
    {{ Form::open(array('route' => ['sitio.store',null], 'method' => 'POST'), array('role' => 'form')) }}
        <div class="form-group" >
            {!! Form::label('descripcion','Descripción')!!}

            {!!Form::text('descripcion',null,['class'=>'form-control'])!!}

        </div>
<div class="form-group" >
            {!! Form::label('user_id','Usuario')!!}

            {!!Form::text('user_id',null,['class'=>'form-control'])!!}

        </div>
         <div class="form-group" >
            {!! Form::label('sitio_id','Sitio')!!}

            {!!Form::text('sitio_id',null,['class'=>'form-control'])!!}

        </div>
        <div class="form-group">
                <center>
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

                </center>
        </div>

    {!! Form::close()!!}

@endsection
