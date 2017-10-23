<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <link rel="stylesheet" href="css/test.css">
  <style>h2.fail{color: red;}h2.succes{color: green;}</style>
</head>
<body>
<!-- <h2 class="succes">REGISTRATE PARA PODER HACER LOGGIN</h2> -->
  <?php
    if(isset($_POST["accion"])){
      include "lib/usuario.php";
      // echo "registrando usuario";
      // include "lib/seguridad.php";
        $user=new UsuarioBD();
        // $seguridad = new Seguridad();
        //Registro de usuario buscamos registro, y decimos si no estan vacios los campos de post,ontraseñas
        if($_POST["accion"]=="registro"){
        // var_dump($_POST);
          if (!empty($_POST["usuario"]) && !empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["correo"]) && !empty($_POST["pass"]) && !empty($_POST["pass2"]) && !empty($_POST["telefono"])) {
          // echo "datos validados";
          // echo "<br>";
            if($_POST["pass"]==$_POST["pass2"]){
              // echo "contraseña valida";
              //se puede mejoar con un select de roles, que ataca o recoge la tabla roles en BD
              $resultado=$user->insertarUsuario($_POST["usuario"],$_POST["nombre"],$_POST["apellidos"],$_POST["correo"],$_POST["pass"],$_POST["telefono"]);
                if($resultado!=null){
                  echo "<h2 class='succes'>Usuario registrado correctamente</h2></br>";
                  $resultado=$user->buscarUsuarioInsert($_POST["usuario"]);
                    foreach ($resultado as $key => $fila) {
                      echo "nombre : ".$fila["nombre"]."<br>";
                      echo "apellidos: ".$fila["apellidos"]."<br>";
                      echo "usuario : ".$fila["usuario"]."<br>";
                    }
                      echo "<a href=login.php>Ves a login</a>";
//no me muestra la informacion insertada porque me redirecciona a index.....+++
// header('Location: index.php');
                }else{
                //Usuario no insertado
                echo "<h2 class='fail'>El usuario no ha sido insertado. Revisa los datos</h2></br>";
                echo "<a href=registro.php>Ves a registro</a>";
              }
              }else{
              //Contraseñas diferentes
              echo "<h2>Las contraseñas no son iguales</h2></br>";
              echo "<a href=registro.php>Ves a registro</a>";
              }
              }else{
              //Datos en blanco
              header('Location: registro.php');
            }

        }
    }
if (empty($_POST)) {
?>
<!-- onsubmit="return validar();" -->
<form action="registro.php" method="post">
  <fieldset>
    <legend><h1>Registro</h1></legend>
    <input type="text" name="usuario" id="" placeholder="Usuario" required><br><br>
    <input type="text" name="nombre" id="" placeholder="nombre" required><br><br>
    <input type="text" name="apellidos" id="" placeholder="Apellidos" required><br><br>
    <input type="text" name="correo" id="" placeholder="Email" required><br><br>
    <input type="password" name="pass" id="" placeholder="Contraseña" required><br><br>
    <input type="password" name="pass2" id="" placeholder="Repite Contraseña" required><br><br>
    <input type="text" name="telefono" id="" placeholder="telefono" required><br><br>
  </fieldset>
  <input type="hidden" name="accion" value="registro">
  <input type="submit" name="" value="registrarse">
</form>
<a href="login.php">Volver</a>
<?php }
?>
</body>
</html>
