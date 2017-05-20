<!doctype html>
<html lang="es">
  <head>
      <header>
		<title>Mapa del Sitio</title>
		<link rel="stylesheet" href="complementos/css/estilos.css">
	</header>
    <meta charset="UTF-8">
    <style type="text/css">

     #mapa { height: 500px;width: 1200px}

    </style>
      <center>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        var nombre='{{$sitio->nombre}}'
        var lat={{$sitio->latitud}}
        var lon={{$sitio->longitud}}
    function initialize() {
      var marcadores = [
        [nombre, lat, lon],
      ];
      var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 13,
        center: new google.maps.LatLng( 5.067966 ,-75.5105),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    </script>
          </center>
  </head>
  <body>
      <section id="contenedor">
       <header>
           <center> <img  src="/complementos/images/bannerciudad.jpg" height="200" width="1200"></center>

        </header>
          <center><div id="mapa"></div></center>
      </section>
  </body>
</html>
