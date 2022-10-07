<?php
include("../bd/conexion.php");
$id_cajero = $_REQUEST['id_cajero'];
$query = "DELETE FROM cajero  WHERE id_cajero='$id_cajero'";
$result = $conexion->query($query);

if($result){
  header("location: agregar_caj.php");
  //echo "se modifico";
}else{
echo "no ELIMINO";
}
?>