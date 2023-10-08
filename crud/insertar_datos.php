<?php
    include('../config/conexion.php');
    
    $categoria = $_POST['categorias'];
    $marca = $_POST['marcas'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $nombre = $_POST['nombre'];

    $sql = "INSERT INTO productos(categoriaid,marcaid,precio,descripcion,nombre) VALUES
            ('$categoria','$marca','$precio','$descripcion','$nombre')";

    $resultado = mysqli_query($conexion, $sql);

    if($resultado){
        Header("Location: ../index.php");
    }else{
        echo "lacagaste";
    }
?>