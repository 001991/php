<?php
// SE HABILITA TODO LOS ERRORES Y ADVERTENCIAS 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//////////////////////////////////////////
$stock = 800;

//Si stock es mayor que  0, entonces:
/*if ($stock > 0) {
    echo "Hay stock";
} else {
    echo "No hay stock";
}*/

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
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Listado de Productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tbody>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Accion</th>

                        </tr>
                        <tr>
                            <td><?php 
                                echo $aProductos[0]["Nombre"]?></td>
                            <td><?php
                                echo $aProductos[0]["Marca"]?></td>
                            <td><?php 
                                echo $aProductos[0]["Modelo"]?></td>
                            <td><?php
                                echo $aProductos[0]["Stock"]>10? "Hay Stock" : ($aProductos[0]["Stock"]>0 && $aProductos[0]["Stock"]<=10? "poco stock" : "No hay Stock") ?></td>
                            <td><?php 
                                echo $aProductos[0]["Precio"]?></td>
                                <td><button class="btn-primary btn">Comprar</button></td>
                        </tr>
                        <tr>
                        <td><?php 
                                echo $aProductos[1]["Nombre"]?></td>
                            <td><?php
                                echo $aProductos[1]["Marca"]?></td>
                            <td><?php 
                                echo $aProductos[1]["Modelo"]?></td>
                            <td><?php
                                echo $aProductos[1]["Stock"]>10? "Hay Stock" : ($aProductos[1]["Stock"]>0 && $aProductos[1]["Stock"]<=10? "poco stock" : "No hay Stock") ?></td>
                            <td><?php 
                                echo $aProductos[1]["Precio"]?></td>
                                <td><button class="btn-primary btn">Comprar</button></td>
                        </tr>
                        <tr>
                        <td><?php 
                                echo $aProductos[2]["Nombre"]?></td>
                            <td><?php
                                echo $aProductos[2]["Marca"]?></td>
                            <td><?php 
                                echo $aProductos[2]["Modelo"]?></td>
                            <td><?php
                                echo $aProductos[2]["Stock"]>10? "Hay Stock" : ($aProductos[2]["Stock"]>0 && $aProductos[2]["Stock"]<=10? "poco stock" : "No hay Stock") ?></td>
                            <td><?php 
                                echo $aProductos[2]["Precio"]?></td>
                                <td><button class="btn-primary btn">Comprar</button></td>
                        </tr>
                     </tbody>
                </table>    
            </div>
        </div>
    </main>
</body>

</html>