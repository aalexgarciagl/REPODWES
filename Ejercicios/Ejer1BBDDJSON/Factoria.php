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

  static function converPersonaJsonPersonaObject($personaJson){
    return new Persona($personaJson["DNI"],$personaJson["Nombre"],$personaJson["Clave"],$personaJson["Tfno"]); 
  }

  static function borrarPersona($dni){
    $personaDAOImpl = new PersonaDAOImpl(); 
    $personaDAOImpl -> borrarPersona($dni);     
  }
}     