<?php

require (__DIR__."/../model/Partida.php");
require (__DIR__."/../BBDD/ConexionBD.php");


class Controller{

  static function crearPartida($u,$p){
    $user = ConexionBD::seleccionarPersona($u,$p);
    if($user != 0){
      
    }
  }

}