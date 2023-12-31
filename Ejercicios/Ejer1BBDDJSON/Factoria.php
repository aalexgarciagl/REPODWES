<?php

require_once "PersonaDAOImpl.php"; 


class Factoria{
  
  static function devolverPersonaJSON($dni){
    $personaDAOImpl = new PersonaDAOImpl(); 
    $persona = $personaDAOImpl->seleccionarPersona($dni); 
    return json_encode($persona); 
  }

  static function devolverPeronasJSON(){
    $personaDAOImpl = new PersonaDAOImpl(); 
    $personas = $personaDAOImpl->seleccionarPersonas(); 
    return json_encode($personas); 
  }

  static function insertarPersona($persona){
    $personaDAOImpl = new PersonaDAOImpl(); 
    $personaDAOImpl -> insertarPersona($persona); 

  }

  static function converPersonaJsonPersonaObject($personaJson){
    return new Persona($personaJson["DNI"],$personaJson["Nombre"],$personaJson["Clave"],$personaJson["Tfno"]); 
  }

  static function borrarPersona($dni){
    $personaDAOImpl = new PersonaDAOImpl(); 
    $personaDAOImpl -> borrarPersona($dni);     
  }

  static function updatePersona($dni,$nuevosDatos){
    $personaDAOImpl = new PersonaDAOImpl(); 
    $personaDAOImpl -> updatePersona($dni,json_decode($nuevosDatos,true)); 
  }
}     