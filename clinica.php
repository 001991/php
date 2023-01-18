<?php
//Definicion de paciente
$aPacientes = array();
$aPacientes[] = array(
    "DNI" => "33.765.012",
    "Nombre" => "Ana Acuña",
    "Ndad" => 45,
    "Peso" => 81.50
);
$aPacientes[] = array(
    "DNI" => "23.684.385",
    "Nombre" => "Gonzales Bustamante",
    "Edad" => 66,
    "Peso" => 79
);

$aPacientes[] = array(
    "DNI" => "19.398.423",
    "Nombre" => "Daniel Guarin",
    "Edad" => 59,
    "Peso" => 70
);

$aPacientes[] = array(
    "DNI" => "40.098.123",
    "Nombre" => "Tatiana loaiza",
    "Edad" => 49,
    "Peso" => 65
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="">Listado de Pacientes</h1>
            </div>
        </div>

        <div class="row txt-center py-5">
            <div class="col-12">
                <table class="table table-hover border">
                    <tbody>
                        <tr>
                            <th>DNI: </th>
                            <th>Nombre y Apellido: </th>
                            <th>Edad: </th>
                            <th>Peso: </th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($aPacientes as $Pacientes) { ?>

                        <tr>
                            <td><?php echo $aPacientes["DNI"]; ?></td>
                            <td><?php echo $aPacientes["Nombre"]; ?></td>
                            <td><?php echo $aPacientes["Edad"]; ?></td>
                            <td><?php echo $aPacientes["Peso"]; ?></td>
                        </tr>
                    <?php
                    } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </main>

</body>

</html>