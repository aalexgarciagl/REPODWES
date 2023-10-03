<?php

require (__DIR__ ."/../utils/Constantes.php");  
require (__DIR__."/../model/Usuario.php");


class ConexionBD{


  private static function conectar(){
    $conexion = mysqli_connect(Constantes::URL,Constantes::USER,Constantes::PASSWORD,Constantes::NAME);

    if (!$conexion) {
      print "Fallo al conectar a MySQL: " . mysqli_connect_error();
      die();
    }

    return $conexion; 
  }

  private static function desconectar($conexion){
    mysqli_close($conexion);        
  }


  //Si user es igual a 0 significa que no encontro al usuario. 
  static function seleccionarPersona($c,$p){   
    $user = 0;   
    $conexion = self::conectar(); 
    $stmt = mysqli_prepare($conexion,Constantes::$selecUser); 
    mysqli_stmt_bind_param($stmt,"ss",$c,$p);  
    mysqli_stmt_execute($stmt); 
    $resultado = mysqli_stmt_get_result($stmt);
    while($fila = mysqli_fetch_array($resultado)){
      $user = new Usuario($fila["idUsuario"],$fila["nombre"],$fila["pass"],$fila["correo"],$fila["partidasJugadas"],$fila["partidasGanadas"]); 
    }
    self::desconectar($conexion);     
    return $user; 
  }
}