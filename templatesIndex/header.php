<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Concesionario DELUXE</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">



  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


</head>

<body>

  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">Acerca de</h4>
            <p class="text-muted">Trabajando día a día para mejorar tu experiencia.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="vercarrito.php" class="text-white">Ver el carrito</a></li>
              <li><a href="#" class="text-white">Dale a "Me gusta" en Facebook</a></li>
              <li><a href="#" class="text-white">Escríbenos por correo</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <a href="vercarrito.php"><img src="img/carrito.png" style="height:50px; margin-right:5em;"></a>
    </div>
  </header>
  <style>
    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      background-image: radial-gradient(white, grey);
      overflow-x: hidden;
      /* Evita el desbordamiento horizontal */
    }

    body {
      background-image: radial-gradient(white, grey);
      overflow-x: hidden;
      /* Evita el desbordamiento horizontal */
    }

    .album .img{
      width: 18rem; 
      height:28rem; 
      display:flex; 
      flex-wrap:wrap; 
      justify-content:center
    }
  </style>
  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-4">
        <div class="col-lg-8 col-md-2 mx-auto">
          <h1 class="h1" style="margin:auto 0; flex-direction:row;font-size: 6em ">Concesionario</h1>
          <hr>
          <p class="p" style="margin:auto 0;">Crearemos uno de los concesionarios virtuales de mayor calidad de entre todos los conocidos en el mundo
            No vamos a parar hasta conseguir la máxima calidad
          </p>
        </div>
      </div>
    </section>

    <div class="album">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">