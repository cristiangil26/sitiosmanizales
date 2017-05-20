@if(Auth::user())
@extends('layouts.master')

@section('title','Registar Comentario ')
@section('name','Registrar Comentario:'.$sitio->nombre)
@section('content')


   {!! Form::open(['route'=>['comentario.update',$sitio],'method'=>'PUT'])!!}
        <div class="form-group" onfocus="">
            {!! Form::label('descripcion','Descripción')!!}
            {!!Form::text('descripcion',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('user','Usuario',['class' => 'control-label'])!!}
<!--            {!!Form::text('user',Auth::user()->name,['class'=>'form-control'])!!}-->
             {!!Form::select('user',[Auth::user()->name=>Auth::user()->name],null,['class'=>'form-control'])!!}
<!--
        </div>
        <div class="form-group">
            {!! Form::label('sitio','Sitio',['class' => 'control-label'])!!}
            {!!Form::text('sitio',$sitio->nombre,['class'=>'form-control'])!!}
           {!!Form::select('sitio_id',[$sitio->id=>$sitio->id],null,['class'=>'form-control'])!!}

        </div>
-->
        <div class="form-group">
            {!! Form::label('sitio','Sitio',['class' => 'control-label'])!!}
<!--            {!!Form::text('sitio',$sitio->nombre,['class'=>'form-control'])!!}-->
           {!!Form::select('sitio_nombre',[$sitio->nombre=>$sitio->nombre],null,['class'=>'form-control'])!!}

        </div>
        <div class="form-group">
                <center>
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

                </center>
        </div>

    {!! Form::close()!!}

@endsection
@endif
