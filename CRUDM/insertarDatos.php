<?php

include "../config/conexion.php";

$nombreM = $_POST['nombreM'];
$estadoM = $_POST['estadoM'];

$sql = "INSERT INTO marcas(nombreMarca, estadoMarca)
    VALUES ('$nombreM','$estadoM')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/marcas/index.php");
} else {
    echo "Datos no insertados";
}
