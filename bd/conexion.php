<?php
 $conexion = new mysqli("localhost","root","jimenez1604","minimarket");
 if($conexion){
     //echo "exito";
 }else{
     echo "mala conection";
 }
?>