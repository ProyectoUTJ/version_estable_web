<?php
include "../../php/conexion.php";

// VARIABLES DE AGREGAR AUTO
$marca = $_POST['marca'];
$age = $_POST['age'];
$nombre = $_POST['nombre'];
$placas = $_POST['placas'];
$capacidad = $_POST['capacidad'];
$tipoc = $_POST['tipoc'];
$tipov = $_POST['tipov'];
$kilometraje = $_POST['kilometraje'];

$empresa = $_POST['empresa'];
$conductor = $_POST['conductor'];
        
        // -------------------------
        // QR
        // PARTE QR

            include('phpqrcode\qrlib.php');
            
            // how to save PNG codes to server
            $tempDir = "";

            $codeContents = "'".$marca."','".$age."','".$nombre."','".$placas."','".$capacidad."','".$tipoc."','".$tipov."','".$empresa;

            // we need to generate filename somehow, 
            // with md5 or with database ID used to obtains $codeContents...
            $fileName = 'v_v_'.md5($codeContents).'.png';

            $pngAbsoluteFilePath = $tempDir.$fileName;
            $urlRelativeFilePath = $tempDir.$fileName;

            // generating
            if (!file_exists($pngAbsoluteFilePath)) {
                QRcode::png($codeContents, $pngAbsoluteFilePath);
                echo 'File generated!';
                echo '<hr />';
            } else {
                echo 'File already generated! We can use this cached file to speed up site on common codes!';
                echo '<hr />';
            }

            // ------------------------
            $sql = "INSERT INTO vehiculo (marca,age,nombre,placas,Capcombustible,Tipcombustible,Tipvehiculo,kilometraje,codigoQR,empresa)
                    VALUES ('$marca','$age','$nombre','$placas','$capacidad','$tipoc','$tipov','$kilometraje','$pngAbsoluteFilePath',2)";
            if (mysqli_query($conexion,$sql)) {
                header('Location: ../automovil.php');
            }else {
                
            }

// }else {
//     header("Location: nuevoauto.php?error=Imagen no valida");
// }


?>