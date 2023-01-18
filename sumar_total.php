<?php

$aproductos = array();

$aproductos[] = array(
    "nombre" => "smart",
    "marca" => "hitachi",
    "modelo" => "554ks20",
    "stock" => 60,
    "precio" => 58000
);

$aproductos[] = array(
    "nombre" => "televisor",
    "marca" => "samsung",
    "modelo" => "galaxy a30",
    "stock" => 0,
    "precio" => 22000
);

$aproductos[] = array(
    "nombre" => "lavadora",
    "marca" => "surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Listado de Productos</title>
</head>

<body>
    <main class="container">
        <div class="row text-center py-5">

            <div class="col-12">

                <table class="table table_hover border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Stock</th>
                            <th>precio</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $aproductos[0]["nombre"] ?></td>
                            <td><?php echo $aproductos[0]["marca"] ?></td>
                            <td><?php echo $aproductos[0]["modelo"] ?></td>
                            <td><?php
                           

                                if ($aproductos[0]["stock"]==0) {

                                    echo "sin stock";
                                } else if ($aproductos[0]["stock"] <= 10) {

                                    echo "poco stock";
                                } else {

                                    echo "hay stock";
                                }

                                ?>x|
                            </td>
                            <td><?php echo $aproductos[0]["precio"] ?></td>
                            <td> <button class="bt-button btn-primary btn">Acción</button></td>

                        </tr>
                        

                        <tr>
                            <td><?php echo $aproductos[1]["nombre"] ?></td>
                            <td><?php echo $aproductos[1]["marca"] ?></td>
                            <td><?php echo $aproductos[1]["modelo"] ?></td>
                            <td><?php

                                if ($aproductos[1]["stock"]==0) {

                                    echo "sin stock";
                                } else if ($aproductos[1]["stock"] <= 10) {

                                    echo "poco stock";
                                } else {

                                    echo "hay stock";
                                }

                                ?>
                            </td>
                            <td><?php echo $aproductos[1]["precio"] ?></td>
                            <td> <button class="bt-button btn-primary btn">Acción</button></td>
                        </tr>

                        <tr>
                            <td><?php echo $aproductos[2]["nombre"] ?></td>
                            <td><?php echo $aproductos[2]["marca"] ?></td>
                            <td><?php echo $aproductos[2]["modelo"] ?></td>
                            <td><?php
                            $subtotal = 0;

                                if ($aproductos[2]["stock"]== 0) {

                                    echo "sin stock";
                                } elseif ($aproductos[2]["stock"] <= 10) {

                                    echo "poco stock";
                                } else {

                                    echo "hay stock";
                                }

                                ?>
                            </td>
                            <td><?php echo $aproductos[2]["precio"] ?></td>
                            <td> <button class="bt-button btn-primary btn">Acción</button></td>

                        </tr>
                        <?php
                        $subtotal = $subtotal + $aproductos[0]["precio"];
                        $subtotal = $subtotal + $aproductos[1]["precio"];
                        $subtotal = $subtotal + $aproductos[2]["precio"]
                        ?>

                    </tbody>
                </table>

            </div>
        </div>
        <div class="row">
            <div class="col 12 py-5">
                <h2>El subtotal es: $<?php echo $subtotal; ?></h2>

            </div>

        </div>

    </main>

</body>

</html>