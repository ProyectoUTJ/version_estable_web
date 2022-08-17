<?php 
   include "../../php/conexion.php";

   $nombre = $_POST['nombre'];
   $direccion = $_POST['direccion'];
   $tf = $_POST['telefono'];
   $rfc = $_POST['rfc'];
   $pass = $_POST['contra'];
   $correo = $_POST['correo'];
   $tipo = $_POST['tipo'];

   $sql = "INSERT INTO empresa (nombre, direccion, telefono, rfc, password, correo, tipo) 
   VALUES('$nombre', '$direccion', '$tf','$rfc','$pass','$correo','$tipo')";

    // Validacion
   if( !isset($_POST['submit'] )){

        // COMPARACION DE PASSWORD
        if($_POST['contra'] == $_POST['recontra'] ){
            // INSERT
            if (mysqli_query($conexion,$sql)) {
                header('Location: ../empresas.php');
            }else{
            }
            
        }else{
            echo "password invalidos";
        }
    }else{
    }

?>