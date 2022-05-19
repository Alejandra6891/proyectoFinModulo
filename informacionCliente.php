<?php
//conexion con la base de datos
$servidor="localhost";
$usuario="root";
$password="";
$bd="carpinteria";

$enlace=mysqli_connect($servidor, $usuario, $password, $bd);

if($enlace){
  echo "<script>alert('Nuevo cliente registrado con éxito');
  window.location='/2daw/proyecto/clienteCarpinteria.html'</script>";
}else{
  echo "<script>alert('no se pudo registrar');window.history.go(-1);</script>";
}
$nombre = $_GET["nombre"];
$apellidos = $_GET["apellidos"];
$telefono = $_GET["telefono"];
$direccion = $_GET["direccion"];
$fecha = $_GET["fecha"];
$encargo = $_GET["encargo"];
//realizamos la setencia de sql
$sql="INSERT INTO clientes VALUES( '$nombre',
                                    '$apellidos',
                                    '$telefono',
                                    '$direccion',
                                    '$fecha',
                                    '$encargo')";
//ejecutamos la setencia
$ejecutar= mysqli_query($enlace,$sql);
if(!$ejecutar){
  echo"hubo algun error";
}else{
  echo "datos guardados correctamente";
}
?>
