<?php
include "lib/usuario.php";
include "./lib/seguridad.php";
	$user=new UsuarioBD();
	$seguridad=new Seguridad();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel de administrador</title>
</head>
<body>
<?php
	  if($seguridad->getUsuario()!=null && $seguridad->getRol()=="admin"){
	  	echo "hola admin: ".$seguridad->getUsuario();
			echo "<br><a href='index2.php'>Home</a>";
		}else{
			header('Location: protegida.php');
		}
		//lo siguiente trabajar con las cookies
	?>
	<form action="accion.php" method="post">
	  <fieldset>
	    <legend><h1>Horarios</h1></legend>
	    <input type="text" name="id_us" id="" placeholder="numero" required><br><br>
	    <input type="date" name="inicio" id="" placeholder="inicio" required><br><br>
	    <input type="date" name="fin" id="" placeholder="fin" required><br><br>
	    <input type="horas" name="horas" id="" placeholder="horas" required><br><br>
	    <input type="text" name="bonus" id="" placeholder="bonus" required><br><br>
	  </fieldset>
	  <input type="hidden" name="accion" value="registroHo">
	  <input type="submit" name="" value="registrar">
	</form>
</body>
</html>
