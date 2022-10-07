<?php
include("../bd/conexion.php");
$dni_cliente = $_REQUEST['dni_cliente'];
$query = "DELETE FROM cliente  WHERE dni_cliente='$dni_cliente'";
$result = $conexion->query($query);

if($result){
  header("location: agregar_cli.php");
  //echo "se modifico";
}else{
echo "no ELIMINO";
}
?>