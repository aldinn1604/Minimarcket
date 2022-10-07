<?php
include("../bd/conexion.php");
$id_cajero = $_POST['id_cajero'];
$nombre_cajero = $_POST['nombre_cajero'];
$apellido_cajero = $_POST['apellido_cajero'];
$numero_cajero = $_POST['numero_cajero'];
$query = "UPDATE producto SET nombre_cajero='$nombre_cajero', apellido_cajero='$apellido_cajero', numero_cajero='$numero_cajero'";
$result = $conexion->query($query);

if($result){
  header("location: agregar_caj.php");
  //echo "se modifico";
}else{
echo "no modifico";
}
?>