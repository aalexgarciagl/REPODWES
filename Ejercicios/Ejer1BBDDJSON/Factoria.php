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
} 