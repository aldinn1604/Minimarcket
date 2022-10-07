<?php
include("../bd/conexion.php");
$id_producto = $_POST['id_producto'];
$nombre_producto = $_POST['nombre_producto'];
$precio_producto = $_POST['precio_producto'];
$presentacion = $_POST['presentacion'];
$cantidad=$_POST['cantidad'];
$fecha_caducidad=$_POST['fecha_caducidad'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$id_categoria_fk=$_POST['id_categoria_fk'];
$query = "INSERT INTO producto(id_producto,nombre_producto,precio_producto,presentacion,cantidad,fecha_caducidad,imagen,id_categoria_fk) VALUES ('$id_producto','$nombre_producto','$precio_producto','$presentacion','$cantidad','$fecha_caducidad','$imagen','$id_categoria_fk')";
$result = $conexion->query($query);

if($result){
   header("location: agregar_pro.php");
}else{
echo "no inserto";
}
?>