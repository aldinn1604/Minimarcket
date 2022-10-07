<?php
include("../bd/conexion.php");
$id_producto = $_POST['id_producto'];
$nombre_producto = $_POST['nombre_producto'];
$precio_producto = $_POST['precio_producto'];
$presentacion = $_POST['presentacion'];
$cantidad=$_POST['cantidad'];
$fecha_caducidad=$_POST['fecha_caducidad'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$categoria=$_POST['categoria'];
$query = "UPDATE producto SET nombre_producto='$nombre_producto', precio_producto='$precio_producto', presentacion='$presentacion', cantidad='$cantidad', fecha_caducidad='$fecha_caducidad', imagen='$imagen' WHERE id_producto='$id_producto'";
$result = $conexion->query($query);

if($result){
  header("location: agregar_pro.php");
  //echo "se modifico";
}else{
echo "no modifico";
}
?>