<?php
include("../bd/conexion.php");
$id_producto = $_REQUEST['id_producto'];
$query = "DELETE FROM producto  WHERE id_producto='$id_producto'";
$result = $conexion->query($query);

if($result){
  header("location: agregar_pro.php");
  //echo "se modifico";
}else{
echo "no ELIMINO";
}
?>