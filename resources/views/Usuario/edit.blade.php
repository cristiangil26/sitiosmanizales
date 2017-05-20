@if(Auth::user()->type=="admin")
@extends('layouts.master')
@section('title','Actualizar Usuario')
@section('name','Actualizar Usuario: '.$user->origen)
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
    {!! Form::open(['route'=>['user.update',$user],'method'=>'PUT'])!!}
        <div class="form-group">
            {!! Form::label('name','Nombre')!!}
            {!!Form::text('name',$user->name,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Correo',['class' => 'control-label'])!!}
            {!!Form::select('email',[$user->email=>$user->email],null,['class'=>'form-control'])!!}
            <!--{!!Form::text('email',$user->email,['class'=>'form-control'])!!}-->
        </div>
        <div class="form-group">
            {!! Form::label('type','Tipo',['class' => 'control-label'])!!}
            {!!Form::select('type',['usuario'=>'usuario','admin'=>'admin'],null,['class'=>'form-control'])!!}
            <!--{!!Form::text('type',$user->type,['class'=>'form-control'])!!}-->
        </div>

        <div class="form-group">
                <center>
            {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

<a href="/admin/user"><button type="button" class="btn btn-default "style=" background-color: black">
          <span class="glyphicon glyphicon-warning"></span> Regresar
        </button>
                            </a>
                </center>
        </div>

    {!! Form::close()!!}

@endsection
@endif
