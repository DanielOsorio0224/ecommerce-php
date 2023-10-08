<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <div class="container">
        <h1 class="text-center bg-black" style="color:white; padding:5px">Lista de productos</h1>
    </div>
    <br>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Categoria</th>
      <th scope="col">Marca</th>
      <th scope="col">Precio</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
        require("config/conexion.php");

        $sql = $conexion -> query("SELECT * FROM productos
                                   INNER JOIN categorias ON productos.categoriaid = categorias.id
                                   INNER JOIN marcas ON productos.marcaid = marcas.id 
        ");

        while ($resultado = $sql ->fetch_assoc()){
    ?>
    <tr>
      <th><?= $resultado['id'] ?></th>
      <th><?= $resultado['nombrecategoria'] ?></th>
      <th><?= $resultado['nombremarca'] ?></th>
      <th><?= $resultado['precio'] ?></th>
      <th><?= $resultado['descripcion'] ?></th>
      <th><?= $resultado['nombre'] ?></th>
      <th>
        <a href="./formularios/editar_form.php?id=<?php echo $resultado['id'] ?>" class="btn btn-warning">Editar</a>
        <a href="" class="btn btn-danger">Eliminar</a>
      </th>
    </tr>
    <?php
        }
    ?>
    
  </tbody>
</table>
  <div class="container">
    <a href="./formularios/agregarform.php" class="btn btn-success">Guardar producto</a>
  </div>      


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>