<?php
include("../bd/conexion.php");
$id_categoria = $_POST['id_categoria'];
$nombre_categoria = $_POST['nombre_categoria'];
$query = "UPDATE categoria SET nombre_categoria='$nombre_categoria";
$result = $conexion->query($query);

if($result){
  header("location: agregar_cat.php");
  //echo "se modifico";
}else{
echo "no modifico";
}
?>