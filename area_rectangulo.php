<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definicion
function calcularAreaRect($base, $altura){
    $resultado = $base * $altura;
    return $resultado;

}



//uso
echo "El area es" . calcularAreaRect(100,0.60). "<br>";
echo "El area es" . calcularAreaRect(800,300);

