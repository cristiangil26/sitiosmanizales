@if(Auth::user()->type=="admin")
@extends('layouts.master')
@section('title','Actualizar Lugar')
@section('name','Actualizar Lugar : '.$sitio->nombre)
@section('content')

    {!! Form::open(['route'=>['sitio.update',$sitio],'method'=>'PUT'])!!}
        <div class="form-group">
            {!! Form::label('nombre','Nombre')!!}
            {!!Form::text('nombre',$sitio->nombre,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('direccion','Direccion',['class' => 'control-label'])!!}
            {!!Form::text('direccion',$sitio->direccion,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('latitud','Latitud',['class' => 'control-label'])!!}
            {!!Form::text('latitud',$sitio->latitud,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('longitud','Longitud',['class' => 'control-label'])!!}
            {!!Form::text('longitud',$sitio->longitud,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('telefono','Teléfono')!!}
            {!!Form::text('telefono',$sitio->telefono,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('correo','Correo Electrónico')!!}
            {!!Form::text('correo',$sitio->correo,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('paginaweb','Página Web')!!}
            {!!Form::text('paginaweb',$sitio->paginaweb,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('tipo ','Tipo de Lugar')!!}
            {!!Form::select('tipo',['Hospital'=>'Hospital','Restaurante'=>'Restaurante','Peluquería'=>'Peluquería','Mensajería'=>'Mensajería','Bar'=>'Bar','Discoteca'=>'Discoteca','Supermercado'=>'Supermercado','Banco'=>'Banco'],null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
                <center>
            {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

                </center>
        </div>

    {!! Form::close()!!}

@endsection
@endif
