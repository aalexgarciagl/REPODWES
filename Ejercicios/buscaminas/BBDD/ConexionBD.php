<?php

require (__DIR__ ."../utils/Constantes.php");  


class ConexionBD{


  static function conectar(){
    $conexion = mysqli_connect(Constantes::URL,Constantes::USER,Constantes::PASSWORD,Constantes::NAME);

    if (!$conexion) {
      print "Fallo al conectar a MySQL: " . mysqli_connect_error();
      die();
    }

    return $conexion; 
  }

  static function desconectar($conexion){
    mysqli_close($conexion);        
  }
}