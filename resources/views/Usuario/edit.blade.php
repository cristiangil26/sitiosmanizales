@if(Auth::user()->type=="admin")
@extends('layouts.master')
@section('title','Actualizar Usuario')
@section('name','Actualizar Usuario: '.$user->origen)
@section('content')

    {!! Form::open(['route'=>['user.update',$user],'method'=>'PUT'])!!}
        <div class="form-group">
            {!! Form::label('name','Nombre')!!}
            {!!Form::text('name',$user->name,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Correo',['class' => 'control-label'])!!}
            {!!Form::text('email',$user->email,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('type','Tipo',['class' => 'control-label'])!!}
            {!!Form::text('type',$user->type,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
                <center>
            {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

                </center>
        </div>

    {!! Form::close()!!}

@endsection
@endif
