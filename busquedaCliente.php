<?php
$servidor="localhost";
$usuario="root";
$password="";
$bd="carpinteria";

$enlace=mysqli_connect($servidor, $usuario, $password, $bd);
if($enlace){
}else{
  echo "(error al conectar)";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
</html>
<?php
    $sql2="SELECT * from clientes WHERE nombre ='$_GET[busqueda]'";
  $consulta =mysqli_query($enlace,$sql2);
      while($resultado = mysqli_fetch_array($consulta))
          {
          ?>
          <table border="1" class="table table-hover table-warning table-bordered table-sm" >
            <tr>
              <td><?php echo $resultado ['nombre']?></td>
              <td><?php echo $resultado ['apellidos']?></td>
              <td><?php echo $resultado ['telefono']?></td>
              <td><?php echo $resultado ['direccion']?></td>
              <td><?php echo $resultado ['fecha']?></td>
              <td><?php echo $resultado ['encargo']?></td>
            </tr>
          <?php
            }
           ?>
            </table><br>
