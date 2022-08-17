<?php
    include("../../php/conexion.php");
            $id = $_GET['id'] ;
            
            // $n = $_GET['marca'];
            // $d = $_GET['nombre'];
            
            // $r = $_GET['estado'];
            
            $sql = "UPDATE status_vehiculo SET estado = 0 WHERE vehiculo='$id'";

            $resultado =mysqli_query($conexion,$sql);

            if (mysqli_query($conexion, $sql)) {
                echo"<script>
                location.assign('../automovil.php');
                </script>";
            }else{
                echo"<script>
                alert('No se actualizaron');
                location.assign('vimant.php');
                </script>";
            }
            mysqli_close($conexion);
            // Aqui entra cuando se presiona el boton de enviar 

?>