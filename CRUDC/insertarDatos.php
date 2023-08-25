<?php

include "../config/conexion.php";

$nombreC = $_POST['nombreC'];
$estadoC = $_POST['estadoC'];

$sql = "INSERT INTO categorias(nombreCategoria, EstadoCategoria)
    VALUES ('$nombreC','$estadoC')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/categorias/index.php");
} else {
    echo "Datos no insertados";
}
