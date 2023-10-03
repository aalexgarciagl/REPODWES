<?php

require(__DIR__."/utils/Controller.php");
require(__DIR__."/BBDD/ConexionBD.php");

header("Content-Type:application/json");
$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths = $_SERVER['REQUEST_URI'];
$argu = explode("/",$paths);
unset($argu[0]); 


if($requestMethod == "GET"){
  if(empty($argu[1])){
     
  }

}elseif($requestMethod == "POST"){

}elseif($requestMethod == "DELETE"){

}elseif($requestMethod == "PUT"){

}