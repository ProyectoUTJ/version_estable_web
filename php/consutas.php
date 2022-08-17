<?php
include("conexion.php");


// ------------------------------
//             PAGINACIÓN

// 1
$limite_e = 4;
$total_e = $conexion->query('SELECT count(*) from empresa') or die($conexion->error);
$total_empresa = mysqli_fetch_row($total_e);
$pagina_empresa = round($total_empresa[0] / $limite_e);
// 2
// 3
// 4

// ------------------------------

// ------------------------------
//              CONSULTAS

// 1
$consulta= "SELECT*FROM empresa ORDER BY id_empresa DESC limit 4 ";

// 2
$conductor = "SELECT * FROM conductor  WHERE empresa = 2  ";

// 3 NOMBRE DE LA EMPRESA PARA LOS CONDUCTORES
$conductord = " SELECT * FROM empresa a INNER JOIN conductor b ON a.id_empresa = 2 && b.empresa =2";

// 4
$vehi = "SELECT * FROM vehiculo WHERE empresa = 2  ORDER BY kilometraje  ";

// 5
$ver = "SELECT marca,kilometraje,id_vehiculo
        FROM vehiculo  
        WHERE kilometraje >=700 && empresa = 2";

// 6
$mante = "SELECT vh.id_vehiculo,vh.marca,vh.nombre,vh.placas
FROM vehiculo vh 
JOIN status_vehiculo sv 
ON vh.id_vehiculo = sv.vehiculo
WHERE sv.estado =1";

// 7

$detalle = "SELECT *  FROM manual_mantenimiento WHERE id_mantenimiento = 1";
// ------------------------------

// ------------------------------
//          EJECTURAR CONSULTA

// 1
$stmt = $conexion->prepare($consulta); 
$stmt->execute();
$result = $stmt->get_result(); // get the mysqli result

// 2
$ccc = $conexion->prepare($conductor); 
$ccc->execute();
$resultc = $ccc->get_result(); // get the mysqli result

// 3
$ch = $conexion->prepare($conductord); 
$ch->execute();
$conductorempresa = $ch->get_result(); // get the mysqli result

// 4
$vh = $conexion->prepare($vehi); 
$vh ->execute();
$resultv = $vh->get_result(); // get the mysqli result

// 5
$mo = $conexion->prepare($ver); 
$mo ->execute();
$mov = $mo->get_result(); // get the mysqli result

// 6
$mnn = $conexion->prepare($mante); 
$mnn ->execute();
$manttt = $mnn->get_result(); // get the mysqli result

// 7
$ddd = $conexion->prepare($detalle); 
$ddd ->execute();
$dee = $ddd->get_result(); // get the mysqli result

// ------------------------------
?>