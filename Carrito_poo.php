<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definicion de clases


//Programa
$Cliente1 = new Cliente();
$Cliente1->dni = "34765456";
$Cliente1->nombre = "Bernabé";
$Cliente1->correo = "bernabe@gmail.com";
$Cliente1->telefono = "+541188598686";
$Cliente1->descuento = 0.05;
//print_r($cliente1);
$Cliente1->imprimir();

$producto1 = new Producto();
$producto1->cod = "AB8767";
$producto1->nombre = "Notebook 15\" HP";
$producto1->descripcion = "Esta es una computadora HP";
$producto1->precio = 30800;
$producto1->iva = 21;
$producto1->imprimir();

$producto2 = new Producto();
$producto2->cod = "QWR579";
$producto2->nombre = "Heladera Whirlpool";
$producto2->descripcion = "Esta es una heladera no froze";
$producto2->precio = 76000;
$producto2->iva = 10.5;
$producto2->imprimir();

$carrito = new Carrito();
$carrito->cliente = $cliente1;
print_r($carrito);
$carrito->cargarProducto($producto1);
$carrito->cargarProducto($producto2);
print_r($carrito);
$carrito->imprimirTicket(); //Imprime el ticket de la compra

