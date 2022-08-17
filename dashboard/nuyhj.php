<?php
    include("../php/loginconx.php");
    include("../php/conexion.php");
    include("../php/consutas.php");
    
    // Activa las sesiones
    session_start();
    
    //VARIABLES PARA MOSTRAR DATOS 
    $id =  $_GET['id'];
    $sql = "SELECT * FROM vehiculo WHERE id_vehiculo='".$id."'";
    $sqll = "SELECT * FROM vehiculo";

    $resultado=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_assoc($resultado);

    $as=mysqli_query($conexion,$sqll);
    $kk=mysqli_fetch_assoc($as);

    $marca = $fila["marca"];
    $age = $fila["age"];
    $nombre = $fila["nombre"];
    $placas = $fila["placas"];
    $Capcombustible = $fila["Capcombustible"];
    $kilometraje = $fila["kilometraje"];

    mysqli_close($conexion);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../img/logo.ico">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?php echo $nombre;?></title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <!-- <div class="logo-image-small">
            <img src="../assets/Estaflot.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="indexdash.php" class="simple-text logo-normal">
          <div class="image-container">
          <img src="../img/logog.png" width="100"  class="image-container">
          </div> 
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
        <li class="active">
            <a href="automovil.php">
                <p>
                <i class="nc-icon nc-bus-front-12"></i>
                Vehículos
                </p>
            </a>
          </li>
          <li>
            <a href="conductor.php">
                <p>
                <i class="nc-icon nc-single-02"></i>
                Conductores
                </p>
            </a>
          </li>
          <li >
            <a href="vimant.php">
                <p>
                <i class="nc-icon nc-settings"></i>
                Mantenimiento
                </p>
            </a>
          </li>        
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;" >Empresas</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
                <!--  
              <div class="input-group no-border">
                 <input type="text" value="" class="form-control" placeholder="Search..."> 
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
              -->
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Perfil</a>
                  <a class="dropdown-item" href="../php/cerrarsesion.php">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            
            <h3 class="description"></h3>
             
            <center>
            <!-- INFORMACION DE -->
            <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title"> Detalles del vehículo </h5>
              </div>
              <div class="card-body">
              
                <form action="crud/taller.php" method="PUT">
                  
                <div class="row">
                
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Marca </label>
                        <input name="id" type="hidden"  value="<?php echo $id;?>">
                        <input style="text-align:center;" name="marca" disabled type="text" class="form-control" value="<?php echo $marca;?>">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Año</label>
                        <input style="text-align:center;" name="age" disabled type="text" class="form-control" value="<?php echo $age;?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input style="text-align:center;" name="nombre" disabled type="text" class="form-control" value="<?php echo $nombre;?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Placas</label>
                        <input style="text-align:center;" name="placas" disabled type="text" class="form-control" value="<?php echo $placas;?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Capacidad de combustible</label>
                        <input style="text-align:center;" name="Capcombustible" disabled type="text" class="form-control" value="<?php echo $Capcombustible;?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label style="color:red"><strong>Kilometraje</strong></label>
                        <i class="nc-icon nc-bulb-63"></i>
                        <input style="text-align:center;" name="kilometraje" disabled type="text" class="form-control" value="<?php echo $kilometraje;?>">
                    
                      </div>
                    </div>

                
                    <div class="col-md-6 pl-1">
                    
                      <div class="form-group">
                        
                      </div>
                    </div>
                  </div>
                    <hr>
                    <strong><h5>Esto recomienda el fabricante </h5></strong>
                    <?php 
                        foreach ($dee as $mm): 
                    ?>
                    <p>Cada <?= $mm['kilometraje']; ?> se recomienda hacer el servicio <br></p>
                    <textarea  style="text-align:center;"   cols="30" disabled rows="10" class="form-control" ><?= $mm['detalle']; ?></textarea>
                    <?php endforeach;?>     
                    <hr>


                  <div class="row">
                    <div class="update ml-auto mr-auto">
                        <a href="automovil.php"><button type="button" class="btn btn-primary btn-round">Volver</button></a>
                        <button  type="submit" class="btn btn-primary btn-round">Mandar a taller </button>
                    </div>
                  </div>
                </form>
                

              </div>
            </div>
          </div>
            <!-- INFORMACION DE -->
            </center>
          </div>
        </div>
      </div>
      
      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licencia</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © 2022 EstaFlot
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html> 