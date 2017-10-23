<?php
//COMENTADO includes parte php llama a la clase usuario,seguridad,otras etc
include "lib/usuario.php";
$user=new UsuarioBD();
include "lib/seguridad.php";
$seguridad = new Seguridad();
// include "lib/clases.php";
// $clase= new Clases();
// include "lib/libros.php";
// $libro= new Libros();
// include "lib/electronica.php";
// $elec= new Electronica();

//Proyecto para gestor: realizar toda la parte de login y registro, apartado bases de datos para usuarios y jugadores-club, incorporar
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bare - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>

  </head>

  <body>
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">FLORIDA S.A</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Horarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sugerencias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pluses</a>
              </li>
              <li class="nav-item">
             <?php
        if($seguridad->getUsuario()==null){
              echo "<a class='nav-link' href='login.php'>Login</a>";
        }else {
          echo "hola ".$seguridad->getUsuario();
          echo "<a href='protegida.php'>My perfil</a>";
        }
        ?>
        </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Bienvenid@</h1><br>
          <h2>AHORA REALIZAR LA PARTE DE ADMINISTRADOR Y FLUJO DE PAGINA CON SYMFONY Y EL FRONT-VISTA CON WORDPRESS</h2>
          <p class="lead">aaa</p>
          <ul class="list-unstyled">
            <li>Bootstrap 4.0.0-beta</li>
            <li>jQuery 3.2.1</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="css/jquery/jquery.min.js"></script>
    <script src="css/popper/popper.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
