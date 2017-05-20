@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

@section('title','Lista de Comentarios')
@section('name','Lista Comentarios')
@section('content')


    <table class="table table-striped" >
        <thead >
            <th> DESCRIPCIÓN</th>
            <th>USUARIO</th>
            <th>NOMBRE SITIO</th>
        </thead>
        <tbody>
            @foreach($comentario as $comentarios)
                <tr>
                    <td>{{$comentarios->descripcion}}</td>
                    <td>{{$comentarios->user}}</td>
                    <td>{{$comentarios->sitio_nombre}}</td>
                    <td>
                        @if(Auth::user()->type=="admin")
                        {!! Form::open([ 'method' => 'DELETE',
                        'route' => ['comentario.destroy', $comentarios->id]
                        ]) !!}
                        {!! Form::submit('Borrar Comentario', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}

                    @endif


                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {!!$comentario->render()!!}
<center><a href="/home"><button type="button" class="btn btn-default ">
          <span class="glyphicon glyphicon-warning"></span> Regresar
        </button>
                            </a></center>
@endsection
