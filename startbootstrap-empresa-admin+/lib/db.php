<?php
  class db{
    //-- Variables de Identificacion conexion a base datos objetos --\\
    private $host="localhost";
    private $user="root";
    private $pass="root";
    private $db_name="empresa2DAW";
    //variable que conecta
    protected $conexion;
    //cotrol de errores y msj error, devuelve true o false
    private $error=false;
    private $error_msj="";

    function __construct(){
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno){
        $this->error=true;
      }
    }

    public function getErrorConexion(){
      return $this->error;
    }

    function msjError(){
    return $this->error_msj;
    }
    //se realiza control de errores para heredar a todas las consultas...luego funciones con == true false
    public function realizarConsulta($consulta){
      if($this->error==false){
        return $resultado = $this->conexion->query($consulta);
      }else{
        $this->error_msj="Imposible realizar la consulta: ".$consulta;
        return null;
      }
    }
}
?>
