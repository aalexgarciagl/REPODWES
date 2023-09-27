<?php
require "Factoria.php"; 

header("Content-Type:application/json");
$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths = $_SERVER['REQUEST_URI'];

$argu = explode("/",$paths);
unset($argu[0]); 


if($requestMethod == "GET"){
  if(empty($argu[1])){
    $cod = 200;
    $mes = "OK";
    header('HTTP/1.1 '.$cod.' '.$mes);
    echo Factoria::devolverPeronasJSON(); 
  }elseif(count($argu)>=2){
    $cod = 405;
    $mes = "Demasiados argumentos";
    header('HTTP/1.1 '.$cod.' '.$mes);
    echo json_encode(['cod' => $cod,
                      'mes' => $mes]);
  }else{    
    header('HTTP/1.1 '.'200'.' '.'OKi');
    echo Factoria::devolverPersonaJSON($argu[1]);     
  }

}elseif($requestMethod == "POST"){



}else{
  $cod = 405;
  $mes = "Verbo no soportado";
  header('HTTP/1.1 '.$cod.' '.$mes);
  echo json_encode(['cod' => $cod,
                    'mes' => $mes]);
}

