<?php 
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json;charset=utf-8");

    $res = new stdClass();
    
   echo "Soy el servisor formularios JSON".$_SERVER['HTTP_HOST']." gracias por conectarme :)";
    
?> 