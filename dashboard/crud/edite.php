<?php
    include("../../php/conexion.php");
            $id = $_GET['id'];
            $n = $_GET['nombre'];
            $d = $_GET['direccion'];
            $te = $_GET['telefono'];
            $r = $_GET['rfc'];
            $e = $_GET['correo'];
            $t = $_GET['tipo'];
            
            $sql = "UPDATE empresa SET nombre_empresa='$n' ,direccion='$d',telefono='$te',rfc='$r',correo='$e',tipo='$t' WHERE id_empresa='$id'";

            $resultado =mysqli_query($conexion,$sql);

            if (mysqli_query($conexion, $sql)) {
                echo"<script>
                location.assign('../empresas.php');
                </script>";
            }else{
                echo"<script>
                alert('No se actualizaron');
                location.assign('empresas.php');
                </script>";
            }
            mysqli_close($conexion);
            // Aqui entra cuando se presiona el boton de enviar 
   
    
?>