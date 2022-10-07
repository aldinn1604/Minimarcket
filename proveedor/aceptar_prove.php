<?php
include("../bd/conexion.php");
$id_proveedor = $_POST['id_proveedor'];
$ruc_proveedor = $_POST['ruc_proveedor'];
$nombre_proveedor = $_POST['nombre_proveedor'];
$apellido_proveedor = $_POST['apellido_proveedor'];
$query = "INSERT INTO proveedor(id_proveedor,ruc_proveedor,nombre_proveedor,apellido_proveedor) VALUES ('$id_proveedor','$ruc_proveedor','$nombre_proveedor','$apellido_proveedor')";
$result = $conexion->query($query);
if($result){
   header("location: agregar_prove.php");
}else{
echo "no inserto";
}
?>