<?php
include "lib/usuario.php";
include "./lib/seguridad.php";
  $user=new UsuarioBD();
  $seguridad=new Seguridad();
    if($seguridad->getUsuario()==null){
      header('Location: login.php');
      exit;
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Página protegida</title>
    <link rel="stylesheet" href="./css/test.css">
  </head>
  <body>
    <div>
      <?php
      $ip = $_SERVER['REMOTE_ADDR'];
          // echo ", la ip suya es".$ip;
       ?>
      <h2>Estoy dentro. Tu usuario es <?=$seguridad->getUsuario()." ".$ip?></h2>
      <?php
      $tabla=$user->buscarUsuario2($_SESSION['usuario']);
      foreach ($tabla as $key => $value) {
        echo $value['usuario']."<br>";
        echo $value['nombre']."<br>";
        echo $value['apellidos']."<br>";
        echo $value['telefono'];
      }
      ?>
      <!-- <a href="jugador.php">Inserta Jugadores</a> -->
      <form method="post" action="protegida.php">
        <input type="hidden" name="accion" value="logout">
        <input type="submit" value="LogOut">
      </form>
      <br><a href="admin.php">Solo admin</a>
    </div>




    <?php
    if(isset($_POST["accion"])){
        if ($_POST["accion"]=="logout") {
        $seguridad->logOut();
        echo "<h2>LogOut, sesion cerrada</h2></br>";
        echo "<a href=index2.php>Sal y vuelve al principio</a>";
        }
    }
    ?>
  </body>
</html>
