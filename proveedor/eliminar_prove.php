<?php
include("../bd/conexion.php");
$id_proveedor = $_REQUEST['id_proveedor'];
$query = "DELETE FROM proveedor  WHERE id_proveedor='$id_proveedor'";
$result = $conexion->query($query);

if($result){
  header("location: agregar_prove.php");
  //echo "se modifico";
}else{
echo "no ELIMINO";
}
?>