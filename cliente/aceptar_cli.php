<?php
include("../bd/conexion.php");
$dni_cliente = $_POST['dni_cliente'];
$ruc_cliente = $_POST['ruc_cliente'];
$nombre_cliente = $_POST['nombre_cliente'];
$apellido_cliente = $_POST['apellido_cliente'];
$query = "INSERT INTO cliente(dni_cliente,ruc_cliente,nombre_cliente,apellido_cliente) VALUES ('$dni_cliente','$ruc_cliente','$nombre_cliente','$apellido_cliente')";
$result = $conexion->query($query);
if($result){
   header("location: agregar_cli.php");
}else{
echo "no inserto";
}
?>