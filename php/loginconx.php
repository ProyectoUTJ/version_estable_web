<?php
    // CONEXION A BD
    include "conexion.php";

    // Variables del formulario
    $email = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
    $password = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;

    $emaild = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
    $passwordd = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;

    // Consulta a bd 
    $adminsistema = $conexion->query("SELECT * from adminsistema 
                                    where correo ='$email' 
                                    AND password='$password'
                                    ")or die($conexion->error);

    $adminempresa = $conexion->query("SELECT * from adminempresa 
                                    where usuario ='$emaild' 
                                    AND password='$passwordd'
                                    ")or die($conexion->error);

    // Comprobamos que nos llega los datos del formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (mysqli_num_rows($adminsistema)>0) {
            // Si son correctos, creamos la sesión
            session_start();
            $_SESSION['login'] = $_REQUEST['login'];
            // Redireccionamos a la página segura
            header('Location: ../dashboard/empresas.php');
            die();         
        }elseif (mysqli_num_rows($adminempresa)>0) {
            // Si son correctos, creamos la sesión
            session_start();
            $_SESSION['login'] = $_REQUEST['login'];
            // Redireccionamos a la página segura
            header('Location: ../dashboard/dashempresa.php');
            die();                 
        } else {
            echo "NINGUNA";
        }
    }
?>