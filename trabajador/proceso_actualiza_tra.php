<?php
include("../bd/conexion.php");
$id_trabajador = $_POST['id_trabajador'];
$nombre_trabajador = $_POST['nombre_trabajador'];
$apellido_trabajador = $_POST['apellido_trabajador'];
$query = "UPDATE trabajador SET nombre_trabajador='$nombre_trabajador', apellido_trabajador='$apellido_trabajador'";
$result = $conexion->query($query);
if($result){
  header("location: agregar_tra.php");
  //echo "se modifico";
}else{
echo "no modifico";
}
?>