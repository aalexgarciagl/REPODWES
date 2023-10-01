<?php

require "ConexionBD.php"; 
require "Constantes.php"; 
require "Persona.php"; 

class PersonaDAOImpl{


  public function insertarPersona($persona){
    $conexion = ConexionBD::conectar(); 
    $stmt = mysqli_prepare($conexion,Constantes::$insertPersona); 
    mysqli_stmt_bind_param($stmt,"ssis",$persona->dni,$persona->nombre,$persona->clave,$persona->telef); 

    try{
      mysqli_stmt_execute($stmt);
    }catch(Exception $e){
      $e->getMessage();
    }
    ConexionBD::desconectar($conexion); 
  }

  public function seleccionarPersona($dni){
    $persona = 0; 
    $conexion = ConexionBD::conectar(); 
    $stmt = mysqli_prepare($conexion,Constantes::$selecPersona); 
    mysqli_stmt_bind_param($stmt,"s",$dni); 
    mysqli_stmt_execute($stmt); 
    $resultado = mysqli_stmt_get_result($stmt);
    while($fila = mysqli_fetch_array($resultado)){
      $persona = new Persona($fila["DNI"],$fila["Nombre"],$fila["Clave"],$fila["Tfno"]); 
    }
    ConexionBD::desconectar($conexion); 
    return $persona; 
  }

  public function seleccionarPersonas(){
    $personas = []; 
    $conexion = ConexionBD::conectar(); 
    $stmt = mysqli_prepare($conexion, Constantes::$seleccAllPersonas);
    mysqli_stmt_execute($stmt); 
    $resultados = mysqli_stmt_get_result($stmt);

    while( $fila = mysqli_fetch_array($resultados)){
      $personas[] = new Persona($fila["DNI"],$fila["Nombre"],$fila["Clave"],$fila["Tfno"]);
    }     

    ConexionBD::desconectar($conexion);
    return $personas; 
  }

  public function borrarPersona($dni){
    $conexion = ConexionBD::conectar();
    $stmt = mysqli_prepare($conexion, Constantes::$borrarPersona);
    mysqli_stmt_bind_param($stmt, "s", $dni);
    
    if (mysqli_stmt_execute($stmt)) {      
        ConexionBD::desconectar($conexion);
        return true;
    } else {      
        ConexionBD::desconectar($conexion);
        return false;
    }
  }

  public function updatePersona($dni,$nuevosDatos){
    $conexion = ConexionBD::conectar();
    $stmt = mysqli_prepare($conexion, Constantes::$updatePersona);
    mysqli_stmt_bind_param($stmt, "siss",$nuevosDatos["Nombre"],$nuevosDatos["Clave"],$nuevosDatos["Tfno"] ,$dni);

    if (mysqli_stmt_execute($stmt)) {      
      ConexionBD::desconectar($conexion);
      return true;
    } else {      
      ConexionBD::desconectar($conexion);
      return false;
    }
  }
}