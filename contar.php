<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function contar($aArray){
    $contador = 0;

    foreach($aArray as $itam){

    }

    return $contador;

}

//uso
$aNotas = array(9,8,9.50,4,7,8);

$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50
);
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Gonzales Bustamante",
    "edad" => 66,
    "peso" => 79
);

$aPacientes[] = array(
    "dni" => "19.398.423",
    "nombre" => "Daniel Guarin",
    "edad" => 59,
    "peso" => 70
);

$aPacientes[] = array(
    "dni" => "40.098.123",
    "nombre" => "Tatiana loaiza",
    "edad" => 49,
    "peso" => 65
);


$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frio/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000
);
echo "Cantidad de productos: " . contar($aProductos);
echo "Cantidad de pacientes: " . contar($aProductos);
echo "Cantidad de notas: " . contar($aNotas);





?>