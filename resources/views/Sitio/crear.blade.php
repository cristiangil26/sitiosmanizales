@extends('layouts.master')

@section('title','Registar Lugar ')
@section('name','Registrar Lugar de la Ciudad')
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
<section>
    {{ Form::open(array('route' => 'sitio.store', 'method' => 'POST'), array('role' => 'form')) }}
        <div class="form-group" >
            {!! Form::label('nombre','Nombre')!!}

            {!!Form::text('nombre',null,['class'=>'form-control'])!!}

        </div>
         <div class="form-group" >
            {!! Form::label('direccion','Direccion del Lugar')!!}

            {!!Form::text('direccion',null,['class'=>'form-control'])!!}

        </div>
        <div class="form-group" >
            {!! Form::label('latitud','Latitud')!!}

            {!!Form::text('latitud',null,['class'=>'form-control'])!!}

        </div>
        <div class="form-group" >
            {!! Form::label('longitud','Longitud')!!}

            {!!Form::text('longitud',null,['class'=>'form-control'])!!}

        </div>
        <div class="form-group">
            {!! Form::label('telefono','Telefono fijo o móvil',['class' => 'control-label'])!!}
            {!!Form::text('telefono',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('correo','Correo Electrónico')!!}
            {!!Form::text('correo',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('paginaweb ','Direccion de Página Web')!!}
            {!!Form::text('paginaweb',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('tipo ','Tipo de Lugar')!!}
            {!!Form::select('tipo',['Hospital'=>'Hospital','Restaurante'=>'Restaurante','Peluquería'=>'Peluquería','Mensajería'=>'Mensajería','Bar'=>'Bar','Discoteca'=>'Discoteca','Supermercado'=>'Supermercado','Banco'=>'Banco'],null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
                <center>
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                    <a href="/home"><button type="button" class="btn btn-default "style=" background-color: black">
          <span class="glyphicon glyphicon-warning"></span> Regresar
        </button>
                            </a>
                </center>

        </div>

    {!! Form::close()!!}


@endsection
