<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.plot.ly/plotly-2.12.1.min.js"></script>
</head>
<body>
    <!-- CONTENIDO  -->

    <div id="consumod"></div>

</body>
<!-- SELECT CON INFORMACION -->

<?php
include("../../php/conexion.php");


$sqls = "SELECT b.consumo ,a.placas from vehiculo a 
inner join consumo b on a.id_vehiculo=b.vehiculo 
where a.empresa=2 and a.Tipcombustible='diesel' ORDER BY b.id_consumo desc ";

$resultado = mysqli_query($conexion,$sqls);

$valorX = array();
$valorY = array();

while ($ver=mysqli_fetch_row($resultado)) {
    $valorY[]=$ver[0];
    $valorX[]=$ver[1];
}
$datosX=json_encode($valorX);
$datosY=json_encode($valorY);
?>

<script>
    function crearCadena(json) {
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }
</script>

<script type="text/javascript">
    DatosX = crearCadena('<?php echo $datosX?>');
    DatosY = crearCadena('<?php echo $datosY?>');

var trace1 = {
  x: DatosX,
  y: DatosY,
  name: 'Rest of world',
  marker: {color: 'rgb(55, 83, 109)'},
  type: 'bar'
};

var trace2 = {
  x: DatosX,
  y: DatosY,
  name: 'China',
  marker: {color: 'rgb(26, 118, 255)'},
  type: 'bar'
};

var data = [trace1];

var layout = {
  title: 'Reporte de consumo de diesel',
  xaxis: {tickfont: {
      size: 14,
      color: 'rgb(107, 107, 107)'
    }},
  yaxis: {
    title: 'Suma de consumos',
    titlefont: {
      size: 16,
      color: 'rgb(107, 107, 107)'
    },
    tickfont: {
      size: 14,
      color: 'rgb(107, 107, 107)'
    }
  },
  legend: {
    x: 0,
    y: 1.0,
    bgcolor: 'rgba(255, 255, 255, 0)',
    bordercolor: 'rgba(255, 255, 255, 0)'
  },
  barmode: 'group',
  bargap: 0.20,
  bargroupgap: 0.7
};

Plotly.newPlot('consumod', data, layout);

</script>



<script>
    $(document).ready(function(){
        $('#consumod').load('consumod.php');
    });
</script>
    <!-- USO DE LIBRERIA JS -->
    <script src="jquery-3.6.0.min.js"></script>
    <script src="plotly-2.12.1.min.js"></script>
    <!-- USO DE LIBRERIA JS -->
</html>