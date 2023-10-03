<?php

class Constantes{

  const URL = "localhost";
  const USER = "root";
  const PASSWORD = ""; 
  const NAME = "buscaminas"; 

  static $selecUser = "SELECT * FROM Usuarios
  WHERE correo = ? AND pass = ?;
  "; 
}