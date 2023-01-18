<?php
date_default_timezone_set("America/Bogota");

$fecha = date("d/m/Y");
$nombreCompleto = "Gaston Perez";
$edad = 34;

$aPeliculas = array();
$aPeliculas[0] = "Volver al Futuro";
$aPeliculas[1] = "Titanic";
$aPeliculas[2] = "El dia despues del mañana";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Personal</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Ficha Persona</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tbody>
                        <tr>
                            <th>Fecha</th>
                            <td><?php echo $fecha; ?></td>
                        </tr>
                        <tr>
                            <th>Nombre y Apellido</th>
                            <td><?php echo $nombreCompleto; ?></td>
                        </tr>
                        <tr>
                            <th>Edad:</th>
                            <td><?php echo $edad; ?></td>
                        </tr>
                        <tr>
                            <th>Peliculas Favoritas</th>
                            <td><?php
                                echo $aPeliculas[0] . "<br>";
                                echo $aPeliculas[1] . "<br>";
                                echo $aPeliculas[2];

                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>

</html>