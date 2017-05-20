

@if(Auth::user()->type=="admin")
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel de Administración</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" >Sitios Manizales</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            @if (Route::has('login'))
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())

                    <li>
                         <a href="{{ url('/login') }}">Iniciar Sesion</a>
                    </li>
                    <li>
                        <a href="{{ url('/register') }}">Registrarse</a>
                    </li>
                    @else


                        <li><a href="admin/sitio/create">Registrar Lugar</a></li>
                        <li><a href="admin/sitio">Listar Lugares</a></li>
                        <li><a href="admin/user">Listar Usuarios</a></li>
                        <li><a href="admin/comentario">Listar Comentarios</a></li>
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
            @endif
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header >
        <div class="header-content" >
            <div class="header-content-inner">
                <h1 id="homeHeading">Administración</h1>
                <hr>
                <p>En esta Página el Administrador podrá Administrar a los Usuarios, Comentarios y los Sitios.</p>
            </div>
        </div>
    </header>

<!--
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>
            </div>
        </div>
    </aside>
-->


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>

@endif

@if(Auth::user()->type=="usuario")
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Página Principal</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" >Sitios Manizales</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            @if (Route::has('login'))
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())

                    <li>
                         <a href="{{ url('/login') }}">Iniciar Sesion</a>
                    </li>
                    <li>
                        <a href="{{ url('/register') }}">Registrarse</a>
                    </li>
                    @else
						<li><a href="/admin/sitio">Listar Lugares</a></li>

						<li><a href="admin/comentario">Listar Comentarios</a></li>
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
            @endif
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header >
        <div class="header-content" >
            <div class="header-content-inner">
                <h1 id="homeHeading">Encuentra Los mejores lugares de la Ciudad</h1>
                <hr>
                <p>Aqui encontrarás información de diferentes sitios de la ciudad de Manizales como son: Hospitales, Restaurantes, Peluquerias, Mensajerías, Bares, Discotecas, Supermercados y Bancos</p>
            </div>
        </div>
    </header>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">

            <div class="row no-gutter popup-gallery">
                <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/manizales.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/manizales.jpg" class="img-responsive" alt="" width="449">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-name">
                                    Ciudad Manizales
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/hospital.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/hospital.jpg" class="img-responsive" alt="" width="449">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    Hospital
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/restaurante.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/restaurante.jpg" class="img-responsive" alt="" width="449">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    Restaurante
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/peluqueria.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/peluqueria.jpg" class="img-responsive" alt=""  width="449">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    Peluquería
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/correo.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/correo.jpg" class="img-responsive" alt="" width="449" >
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    Mensajería
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/bar.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/bar.jpg" class="img-responsive" alt="" width="449">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    Bar
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/discoteca.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/discoteca.jpg" class="img-responsive" alt="" width="449">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    Discoteca
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/supermercado.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/supermercado.jpg" class="img-responsive" alt="" width="449">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    Supermercado
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/banco.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/banco.jpg" class="img-responsive" alt="" width="449">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Categoría
                                </div>
                                <div class="project-name">
                                    Banco
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>

<!--
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>
            </div>
        </div>
    </aside>
-->

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">DATOS DE CONTACTO</h2>
                    <hr class="primary">
                    <p>Si usted desea saber información especifica de algun sitio, hacer algun reclamo o sugerencia acerca de la página, Usted podrá contactarse con nosotros a traves del correo o un número telefónico los cuales aparecen en la parte de abajo.</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">lugaresmanizales@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
<!--
<html>
<!--
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
-->

@endif
