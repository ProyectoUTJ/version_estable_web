<?php
    include("../../php/conexion.php");
            $id = $_GET['id'];
            $marca = $_GET['marca'];
            $age = $_GET['age'];
            $nombre = $_GET['nombre'];
            $placas = $_GET['placas'];
            $Capcombustible = $_GET['Capcombustible'];
            $kilometraje = $_GET['kilometraje'];
            

            $sql = "UPDATE vehiculo SET marca='$marca' ,age='$age',nombre='$nombre',
            placas='$placas',Capcombustible='$Capcombustible',kilometraje='$kilometraje'
            WHERE id_vehiculo='$id'";

            $resultado =mysqli_query($conexion,$sql);

            if (mysqli_query($conexion, $sql)) {
                echo"<script>
                location.assign('../automovil.php');
                </script>";
            }else{
                echo"<script>
                alert('No se actualizaron');
                location.assign('automovil.php');
                </script>";
            }
            mysqli_close($conexion);
            // Aqui entra cuando se presiona el boton de enviar 
   
    
?>