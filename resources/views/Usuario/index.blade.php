@if(Auth::user()->type=="admin")

@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

@section('title','Lista de Usuarios')
@section('name','Lista Usuarios')
@section('content')


    <table class="table table-striped" >
        <thead >
            <th> NOMBRE</th>
            <th>CORREO ELECTRÓNICO</th>
            <th>TIPO</th>
            <th>ACCIONES</th>
        </thead>
        <tbody>
            @foreach($user as $users)
                <tr>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->type}}</td>
                    <td>

                        {!! Form::open([ 'method' => 'DELETE',
                        'route' => ['user.destroy', $users->id]
                        ]) !!}
                        {!! Form::submit('Borrar Usuario', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        <a href="{{route('user.edit',$users->id)}}"><button type="button" class="btn btn-default ">
          <span class="glyphicon glyphicon-warning"></span> Editar Usuario
        </button>
                            </a>

                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
    {!!$user->render()!!}
@endsection
@endif
