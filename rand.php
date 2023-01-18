<?php
// SE HABILITA TODO LOS ERRORES Y ADVERTENCIAS 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




/*$valu = rand(1,5);
//si el valor es 1 o el valor es 3 o el valor es 5 entonces
if ($valor == 1 || $valor == 3 || $valor == 5) {
    echo "El nuemero $valor es impar";
}else{
    echo "El numero $valor es par";
}*/
/*
if ($valor % 2 == 0){
    echo "El numero $valor es par";
} else{
    echo "El numero $valor es impar";
}*/

$aProductos = array();
$aProductos[] = array("nombre" => "Smart TV 55\" 4K UHD",
                    "marca" => "Hitachi",
                    "modelo" => "554KS20",
                    "stock" => 60,
                    "precio" => 58000
                );
$aProductos[] = array("nombre" => "Samsung Galaxy A30 Blanco",
                    "marca" => "Samsung",
                    "modelo" => "Galaxy A30",
                    "stock" => 0,
                    "precio" => 22000
                );
$aProductos[] = array("nombre" => "Aire Acondicionado Split Inverter Frio/Calor Surrey 2900F",
                    "marca" => "Surrey",
                    "modelo" => "553AIQ1201E",
                    "stock" => 5,
                    "precio" => 45000
                );
print_r($aProductos);

