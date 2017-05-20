@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

@section('title','Lista de Lugares')
@section('name','Lista Lugares')
@section('content')


    <table class="table table-striped" >
        <thead >
            <th> NOMBRE</th>
            <th>DIRECCION</th>
            <th>TELÉFONO</th>
            <th>CORREO ELECTRÓNICO</th>
            <th>PÁGINA WEB</th>
            <th>TIPO</th>
            <th>ACCIONES</th>
        </thead>
        <tbody>
            @foreach($sitio as $sitios)
                <tr>
<!--                    <td>{{$sitios->id}}</td>-->
                    <td>{{$sitios->nombre}}</td>
                    <td>{{$sitios->direccion}}</td>
                    <td>{{$sitios->telefono}}</td>
                    <td>{{$sitios->correo}}</td>
                    <td>{{$sitios->paginaweb}}</td>
                    <td>{{$sitios->tipo}}</td>
                    <td>
                        @if(Auth::user()->type=="admin")
                        {!! Form::open([ 'method' => 'DELETE',
                        'route' => ['sitio.destroy', $sitios->id]
                        ]) !!}
                        {!! Form::submit('Borrar Sitio', ['class' => 'btn btn-danger']) !!}



                        <a href="{{route('sitio.edit',$sitios->id)}}"><button type="button" class="btn btn-default ">
          <span class="glyphicon glyphicon-warning"></span> Editar Sitio
        </button>
                            </a><br/>
        @endif

                        <a href="{{route('comentario.edit',$sitios->id)}}"><button type="button" class="btn btn-default ">
          <span class="glyphicon glyphicon-warning"></span> Registrar Comentario
        </button>
                            </a>


                        <a href="{{route('mapa.edit',$sitios->id)}}"><button type="button" class="btn btn-default ">
          <span class="glyphicon glyphicon-warning"></span> Ver Mapa del Sitio
        </button>
                            </a>
         {!! Form::close() !!}

                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
    {!!$sitio->render()!!}
<center><a href="/admin/comentario"><button type="button" class="btn btn-default ">
          <span class="glyphicon glyphicon-warning"></span> Listar Comentarios
        </button>
                            </a></center>
<center><a href="/home"><button type="button" class="btn btn-default ">
          <span class="glyphicon glyphicon-warning"></span> Regresar
        </button>
                            </a></center>
@endsection
