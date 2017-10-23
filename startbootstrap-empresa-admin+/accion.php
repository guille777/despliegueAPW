<?php
include "./lib/adminbknd.php";
include "./lib/seguridad.php";
  $admin= new Admin();
  $seguridad = new Seguridad();
	  if($seguridad->getUsuario()!=null && $seguridad->getRol()!="admin"){
      header('Location: login.php');
		}
		//lo siguiente trabajar con las cookies
	?>
<?php
//usamoos sesion admin para controlar la pagina...  INCLUIMOS SESIONES Y SEGURIDAD?

//ACCEDEMOS A INPUTS name="accion" value"registroHo" mandar aqui otros
if(isset($_POST["accion"])){
  if($_POST["accion"]=="registroHo"){
        $horarioReg=$admin->insertarHorario($_POST['id_us'],$_POST['inicio'],$_POST['fin'],$_POST['horas'],$_POST['bonus']);
        if ($horarioReg!=null) {
          echo "<h2 class='succes'>Horario registrado correctamente</h2></br>";

          $resultado=$admin->mostrarHorarios();
          foreach ($resultado as $key => $fila) {
            echo "id_usuario : ".$fila["id_us"]."<br>";
            echo "inicio : ".$fila["inicio"]."<br>";
            echo "fin : ".$fila["fin"]."<br>";
            echo "horas : ".$fila["horas"]."<br>";
          }
          echo "<a href=admin.php>panel</a>";
        }else{
          echo "no se ha insertado";
        }
  }
}
// else{
//   echo "no";
// }
?>
