<?php

class Constantes{

  static $insertPersona = "INSERT INTO personas (DNI, Nombre, Clave, Tfno) VALUES (?,?,?,?)";

  static $selecPersona = "SELECT * FROM personas WHERE DNI = ?";
  static $seleccAllPersonas = "SELECT * FROM personas"; 
  
  static $borrarPersona = "DELETE FROM personas WHERE DNI = ?"; 
}