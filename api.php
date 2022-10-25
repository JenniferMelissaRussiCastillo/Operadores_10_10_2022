<?php 
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json;charset=utf-8");

    $res = new stdClass();
    $num1 =55.78;
    $num2 = 2;
    //operardor suma 
    $suma = $num1 + $num2;
    $res->numero1=$num1;
    $res->numero2=$num2;
    $res->suma= $suma;

    //operador resta
    $resta = $num1- $num2;
    $res->resta=$resta;

    //operador dividir
    $division = $num1 / $num2;
    $res-> division=$division;

    //operario multiplicar
    $multiplicar = $num1 * $num2;
    $res-> multiplicar =$multiplicar;

    //-------------------------------------------------------------------
    // operardor potencia (elevar)
    $potencia = $num1 ** $num2+1;
    $res->potencia = $potencia;

    // operador modulo (resto)
    $modulo = $num1 % $num2;
    $res->modulo =$modulo;
    //---------------------------------------------------------------------

    // operador de raiz 
    $raizCuadrada = sqrt($num1);
    $res->raiz= $raizCuadrada;

   $elevar = $num1 **3;
   $resta = $num1 - $elevar;
   $suma= $elevar + $resta;
   $res->operarion =$suma; 
    
   // operador raiz cubica
   $raizCubica = pow($num1,(1/3));
   $res->raizCubica=$raizCubica;


   //operador numero aleatorio
   $aleatorio = rand(1,$num1);
   $res-> aleatorio = $aleatorio;

   // operador numero aleatorio redondeo
   $redondear= round($num1,1);
   $res->redondear= $redondear;
   echo json_encode($res, JSON_PRETTY_PRINT);
   echo "Soy el servisor operadores   ".$_SERVER['HTTP_HOST']." gracias por conectarme :)";
    
?> 