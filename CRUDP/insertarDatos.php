<?php

include "../config/conexion.php";

$categoria = $_POST['categoriasP'];
$marca = $_POST['marcasP'];
$nombre = $_POST['nombreP'];
$descripcion = $_POST['descripcionP'];
$precio = $_POST['precioP'];

$sql = "INSERT INTO productos(categoriaId,marcaId,nombreProducto,descripcionProducto,precioProducto)
    VALUES ('$categoria','$marca','$nombre','$descripcion','$precio')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/productos/index.php");
} else {
    echo "Datos no insertados";
}
