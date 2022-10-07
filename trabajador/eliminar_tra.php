<?php
include("../bd/conexion.php");
$id_trabajador = $_REQUEST['id_trabajador'];
$query = "DELETE FROM trabajador  WHERE id_trabajador='$id_trabajador'";
$result = $conexion->query($query);

if($result){
  header("location: agregar_tra.php");
  //echo "se modifico";
}else{
echo "no ELIMINO";
}
?>