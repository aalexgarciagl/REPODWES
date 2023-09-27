<?php

class Constantes{

  static $insertPersona = "INSERT INTO personas (DNI, Nombre, Clave, Tfno) VALUES (?,?,?,?)";

  static $selecPersona = "SELECT * FROM personas WHERE DNI = ?";
  static $seleccAllPersonas = "SELECT * FROM personas"; 
   
}