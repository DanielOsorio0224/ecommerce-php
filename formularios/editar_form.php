<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<body>
    <h1 class="text-center bg-black" style="color:white; padding:5px">Editar Productos</h1>

    <form class="container">
        <?php
        include_once("../config/conexion.php");

        $sql = "SELECT * FROM productos WHERE id=".$_GET['id'];
        $resultado = $conexion-> query($sql);

        $row = $resultado->fetch_assoc();
      ?>
        <label >CAtegorias</label>    
        <select class="form-select mb-3" >        
        <option selected disabled>--Seleccione categorias--</option>
        
        </select>
        <label >Marcas</label>
        <select class="form-select mb-3" >
        <option selected disabled>--Seleccione marcas--</option>
        
        </select>
  <div class="mb-3">
    <label class="form-label">Precio</label>
    <input type="text" class="form-control" name="precio" value="<?php echo $row['precio']; ?>">    
  </div>
  <div class="mb-3">
    <label class="form-label">Descripcion</label>
    <input type="text" class="form-control" name="descripcion">
  </div>
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-danger">Agregar</button>
    <a href="../index.php" class="btn btn-dark">Regresar</a>
  </div>  
</form>
</body>