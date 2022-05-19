<?php

  $conexion=mysqli_connect('localhost','root','','carpinteria');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tabla clientes</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
  <body>

    <br>
        <table class="table table-hover table-info table-striped table-sm">
            <tr class="table-secondary">
              <th>nombre</th>
              <th>apellidos</th>
              <th>telefono</th>
              <th>direccion</th>
              <th>fecha</th>
              <th>encargo</th>
            </tr>
            <?php
            $sql="SELECT * from clientes";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
             ?>
            <tr>
              <td><?php echo $mostrar['nombre'] ?></td>
              <td><?php echo $mostrar['apellidos'] ?></td>
              <td><?php echo $mostrar['telefono'] ?></td>
              <td><?php echo $mostrar['direccion'] ?></td>
              <td><?php echo $mostrar['fecha'] ?></td>
              <td><?php echo $mostrar['encargo'] ?></td>
             </tr>
        <?php
        }
         ?>
       </table><br>

        <form action = "busquedaCliente.php" method= "GET">
        <input type = "text" name ="busqueda"><br>
        <input type="submit" value = "Buscar cliente por nombre" class="btn btn-secondary" name="btn1"></form>
        <?php


         ?>

  </body>
</html>
