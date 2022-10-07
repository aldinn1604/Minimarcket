<?php
include("../bd/conexion.php");
$id_trabajador = $_POST['id_trabajador'];
$nombre_trabajador = $_POST['nombre_trabajador'];
$apellido_trabajador = $_POST['apellido_trabajador'];
$query = "INSERT INTO proveedor(id_trabajador,nombre_trabajador,apellido_trabajador) VALUES ('$id_trabajador','$nombre_trabajador','$apellido_trabajador')";
$result = $conexion->query($query);
if($result){
   header("location: agregar_tra.php");
}else{
echo "no inserto";
}
?>