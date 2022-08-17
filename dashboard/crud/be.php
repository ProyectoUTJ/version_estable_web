<?php
$id=$_GET['id'];
include("../../php/conexion.php");

$sql = "DELETE FROM empresa WHERE id_empresa='$id'";

$resultado=mysqli_query($conexion,$sql);
if ($resultado) {
    echo"<script>
    location.assign('../empresas.php');
    </script>";
}else{
    echo"<script>
    location.assign('../empresas.php');
    </script>";
}
?>