<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="complementos/css/estilos.css">
    <title>@yield('title','Default')</title>
      <link rel="stylesheet" href="{{ asset('complementos/css/bootstrap.css')}}">

  </head>
  <body>

      <section id="contenedor">
      <header>
            <center><img  src="/complementos/images/bannerciudad.jpg" height="200" width="1200"></center>

        </header>

      <center><h1>@yield('name','Default')</h1></center>
      <section>
        @include('flash::message')
        @yield('content')

      </section>
     <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
      <script src="{{asset('complementos/js/bootstrap.js')}}"></script>
          </section>
    </body>
</html>
