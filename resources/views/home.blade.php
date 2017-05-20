@if(Auth::user()->type=="admin")
<link rel="stylesheet" href="complementos/css/estilos.css">
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Panel de Administracion</title>
    <link rel="stylesheet" href="complementos/css/estilos.css">
    <section id="contenedor">
        <header>
            <img  src="/complementos/images/bannerciudad.jpg" height="200" width="1200">

        </header>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">


                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
<ul class="nav">
				<li><a href="">Administrar</a>
                    <ul>
						<li><a href="admin/sitio/create">Registrar Lugar</a></li>
                        <li><a href="admin/sitio">Listar Lugares</a></li>
                        <li><a href="admin/user">Listar Usuarios</a></li>
					</ul>
				</li>

			</ul>
<div><center><img  src="/complementos/images/administrador.png"> </center></div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    </section>

</body>

</html>

@endif

@if(Auth::user()->type=="usuario")
<html>
	<head>
		<title>Página Principal</title>
		<link rel="stylesheet" href="complementos/css/estilos.css">
	</head>
	<body style="background-color:white">
        <section id="contenedor">
        <header>
            <img  src="/complementos/images/bannerciudad.jpg" height="200" width="1200">

        </header>
            <section id="banner">
		<div id="header">
			<ul class="nav">
				<li><a href="">Lugares</a>
                    <ul>
						<li><a href="/admin/sitio">Listar Lugares</a></li>
					</ul>
				</li>

				<li><a href="">Comentarios</a>
					<ul>
						<li><a href="admin/comentario">Listar Comentarios</a></li>

					</ul>
				</li>
                <li><a href="">{{ Auth::user()->name }}</a>
                <ul>
                <li>
                    <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}</form></li>
                    </ul>
                </li>
			</ul>

		</div>
            </section>

            <section id="formacion">
                <table >

                <tr>
                    <td> <img style='float:left;' src="/complementos/images/hospital.PNG" width="150" height="150">
                    <center><h3>HOSPITALES</h3></center>

                    </td>
                    <td width="150" heigth="100"></td>
                    <td> <img style='float:left;' src="/complementos/images/iconorestaurante.jpg" width="150" height="150">
                    <center><h3>RESTAURANTES</h3></center>
                    </td>
                    <td width="150" heigth="100"></td>
                    <td> <img style='float:left;' src="/complementos/images/peluqueria.jpg" width="150" height="150">
                    <center><h3>PELUQUERIAS</h3></center>
                    </td>
                     <td width="150" heigth="100"></td>
                    <td> <img style='float:left;' src="/complementos/images/mensajeria.jpg" width="150" height="150">
                    <center><h3>MENSAJERIAS</h3></center>
                    </td>

                </tr>
            </table>

        </section>
            <section id="formacion">
                <table >

                <tr>
                    <td> <img style='float:left;' src="/complementos/images/bar.PNG" width="150" height="150">
                    <center><h3>BARES</h3></center>
                    </td>
                    <td width="150" heigth="100"></td>
                    <td> <img style='float:left;' src="/complementos/images/discoteca.PNG" width="150" height="150">
                    <center><h3>DISCOTECAS</h3></center>
                    </td>
                    <td width="150" heigth="100"></td>
                    <td> <img style='float:left;' src="/complementos/images/supermercado.jpg" width="170" height="150">
                    <center><h3>SUPERMERCADOS</h3></center>
                    </td>
                     <td width="150" heigth="100"></td>
                    <td> <img style='float:left;' src="/complementos/images/banco.PNG" width="150" height="150">
                    <center><h3>BANCOS</h3></center>
                    </td>

                </tr>
            </table>

        </section>
	</body>
</html>

@endif
