<?php


class ConexionBD{
  const URL = "localhost";
  const USER = "root";
  const PASSWORD = ""; 
  const NAME = "ejemploProc"; 
  
  
  public static function conectar(){
    $conexion = mysqli_connect(self::URL,self::USER,self::PASSWORD,self::NAME);

    if (!$conexion) {
      print "Fallo al conectar a MySQL: " . mysqli_connect_error();
      die();
    }

    return $conexion; 
  }

  public static function desconectar($conexion){
    mysqli_close($conexion);        
  }
}