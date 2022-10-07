<?php
include("../bd/conexion.php");
$id_categoria = $_POST['id_categoria'];
$nombre_categoria = $_POST['nombre_categoria'];
$query = "INSERT INTO categoria(id_categoria,nombre_categoria) VALUES ('$id_categoria','$nombre_categoria')";
$result = $conexion->query($query);

if($result){
   header("location: agregar_cat.php");
}else{
echo "no inserto";
}
?>