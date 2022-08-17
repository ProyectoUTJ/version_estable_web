<?php 
$conexion = new mysqli('localhost','root','','flotilla');
if($conexion-> connect_error){
    die('No se pudo conectar al servidor');
}
?>  