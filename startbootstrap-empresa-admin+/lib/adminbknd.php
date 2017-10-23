<?php
include "db.php";
/**
 *
 */
class Admin extends db{

  function __construct(){
  parent::__construct();
  }


public function insertarHorario($id_us,$inicio,$fin,$horas,$bonus){
  $sqlInsercion="INSERT INTO horarios(id_horario,id_us,inicio,fin,horas,bonus) Values(NULL,'".$id_us."','".$inicio."','".$fin."','".$horas."','".$bonus."')";
    $resultado=$this->realizarConsulta($sqlInsercion);
    if ($resultado!=null) {
      return true;
    }else{
      return false;
    }
}
public function mostrarHorarios(){
  $sql="SELECT * FROM horarios";
      return $resultado=$this->realizarConsulta($sql);
}
//actualizar y borrar.. mejorar funcionamiento pagina ÁWS Y PHPMYADMIN panel administrador optimizar?


}
 ?>
