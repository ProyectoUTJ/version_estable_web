<?php
  include("../php/loginconx.php");
  include("../php/consutas.php");
  // Activa las sesiones
  session_start();
  // Comprueba si existe la sesión 'email', en caso contrario vuelve a la página de login
  if (!isset($_SESSION['login'])) header('Location: ../login.php');
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../img/logo.ico">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>EMPRESA</title>
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
   <script src="https://cdn.plot.ly/plotly-2.12.1.min.js"></script>
  
</head>

<body class="">
  <div class="wrapper ">

<!-- SIDEBAR ARCHIVO -->
<div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <!-- <div class="logo-image-small">
            <img src="../assets/Estaflot.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="dashempresa.php" class="simple-text logo-normal">
          <div class="image-container">
            <img src="../img/logog.png" width="100"  class="image-container">
          </div> 
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
        <li >
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
<!-- SIDEBAR ARCHIVO -->


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
            <a class="navbar-brand"  href="javascript:;">EMPRESA</a>
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
            <!-- CONTENIDO DE DASHBOARD -->
            <h3 class="description">

                <h2 style="text-align:center;">GRÁFICAS DE CONSUMO</h2>
<strong>                <hr></strong>
                <div id="consumog"></div>
                <strong>                <hr></strong>
                <div id="consumod"></div>
                <hr>
                
            </h3>
          </div>
        </div>
      </div>
      <!-- <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="" target="_blank">Licencia</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © 2022 EstaFlot
              </span>
            </div>
          </div>
        </div>
      </footer> -->
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
  
  <script type="text/javascript">
    $(document).ready(function(){
        $('#consumog').load('grafica/consumop.php');
        $('#consumod').load('grafica/consumod.php');
        $('#manteg').load('grafica/vmante.php');
    });
</script>
</body>

</html>