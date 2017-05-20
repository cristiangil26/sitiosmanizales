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
				<li><a href="">Hospital</a>
                    <ul>
						<li><a href="">Listar Hospitales</a></li>
					</ul>
				</li>

				<li><a href="">Restaurante</a>
					<ul>
						<li><a href="admin/empresa">Listar Restaurantes</a></li>

					</ul>
				</li>

                <li><a href="">Peluquería</a>
                <ul>
                    <li><a href="">Listar Peluquerías</a></li>
                </ul>
                    </li>
                <li><a href="">Mensajería</a>
                <ul>
                    <li><a href="">Listar Mensajerías</a></li>
                </ul>
                </li>
                <li><a href="">Bar</a>
                <ul>
                    <li><a href="">Listar Bares</a></li>
                </ul>
                </li>
                 <li><a href="">Discoteca</a>
                <ul>
                    <li><a href="">Listar Discotecas</a></li>
                </ul>
                </li>
                <li><a href="">Supermercado</a>
                <ul>
                    <li><a href="">Listar Supermercados</a></li>
                </ul>
                </li>
                <li><a href="">Banco</a>
                <ul>
                    <li><a href="">Listar Bancos</a></li>
                </ul>
                </li>
                <li><a href="">{{ Auth::user()->name }}</a>
                <ul>
                    <li><a href="{{ url('/logout') }}">Logout</a></li>
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
