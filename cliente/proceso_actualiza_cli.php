<?php
include("../bd/conexion.php");
$dni_cliente = $_POST['dni_cliente'];
$ruc_cliente = $_POST['ruc_cliente'];
$nombre_cliente = $_POST['nombre_cliente'];
$apellido_cliente = $_POST['apellido_cliente'];
$query = "UPDATE cliente SET ruc_cliente='$ruc_cliente', nombre_cliente='$nombre_cliente', apellido_cliente='$apellido_cliente'";
$result = $conexion->query($query);

if($result){
  header("location: agregar_cli.php");
  //echo "se modifico";
}else{
echo "no modifico";
}
?>