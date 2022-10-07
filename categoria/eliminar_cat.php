<?php
include("../bd/conexion.php");
$id_categoria = $_REQUEST['id_categoria'];
$query = "DELETE FROM categoria  WHERE id_categoria='$id_categoria'";
$result = $conexion->query($query);

if($result){
  header("location: agregar_cat.php");
  //echo "se modifico";
}else{
echo "no ELIMINO";
}
?>