<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-black p-2 text-white text-center">Agregar Producto</h1>

    <div class="container">
      
    <form action="../crud/insertar_datos.php" method="POST">
        <label for="">Categorias</label>    
        <select class="form-select mb-3" name="categorias">
            <option selected disabled>--Sellecionar categoria--</option>
            <?php
                include('../config/conexion.php');

                $sql = $conexion->query("SELECT * FROM categorias");
                while( $resultado = $sql->fetch_assoc()){
                    echo "<option value='".$resultado['id']."'>".$resultado['nombrecategoria']."</option>";
                }
            ?>
        </select>
        
        <label for="">Marcas</label>    
        <select class="form-select mb-3" name="marcas">
            <option selected disabled>--Sellecionar marca--</option>
            <?php
                include('../config/conexion.php');

                $sql = $conexion->query("SELECT * FROM marcas");
                while( $resultado = $sql->fetch_assoc()){
                    echo "<option value='".$resultado['id']."'>".$resultado['nombremarca']."</option>";
                }
            ?>
        </select>
  <div class="mb-3">
    <label class="form-label">Precio</label>
    <input type="text" class="form-control" name="precio" >
    </div>
    
  <div class="mb-3">
    <label class="form-label">Descripcion</label>
    <input type="text" class="form-control" name="descripcion">
    </div>
    
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" >
    </div>

  </div>
    <div class="text-center">
  <button type="submit" class="btn btn-danger">Enviar</button>
  <a href="../index.php" class="btn btn-dark">Regresar</a>
  </div>
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>