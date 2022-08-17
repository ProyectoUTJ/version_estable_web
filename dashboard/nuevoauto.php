<?php
    include("../php/loginconx.php");
    include("../php/conexion.php");
    
    // Activa las sesiones
    session_start();
    $a = $_SESSION['login'];
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Registro de vehiculo</title>
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
                <h5 class="card-title"> Registro de vehículo </h5>
              </div>
              <div class="card-body">
              
                <form action="crud/aggauto.php" method="POST">
                  
                <div class="row">
                
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Marca </label>
                        <input name="id_vehiculo" type="hidden" >
                        <input style="text-align:center;" id="marca" name="marca" type="text" class="form-control" placeholder="Marca">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Año</label>
                        <select name="age" id="" class="form-control">
                            <option style="text-align:center;" value="">Año</option>
                            <option style="text-align:center;" value="2016">2016</option>
                            <option style="text-align:center;" value="2017">2017</option>
                            <option style="text-align:center;" value="2018">2018</option>
                            <option style="text-align:center;" value="2019">2019</option>
                            <option style="text-align:center;" value="2020">2020</option>
                            <option style="text-align:center;" value="2021">2021</option>
                            <option style="text-align:center;" value="2022">2022</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input style="text-align:center;" name="nombre" type="text" class="form-control" placeholder="Nombre">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Placas</label>
                        <input style="text-align:center;" name="placas" type="text" class="form-control" placeholder="Placas">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Capacidad de combustible</label>
                        <input style="text-align:center;" name="capacidad" type="number" class="form-control" placeholder="Capacidad de combustible">
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Tipcombustible</label>
                        <select name="tipoc" id="" class="form-control">
                            <option style="text-align:center;"  value="">Combustible</option>
                            <option style="text-align:center;" value="gasolina">Gasolina</option>
                            <option style="text-align:center;" value="kilovatio">Kilovatio</option>
                            <option style="text-align:center;" value="dicel">Dicel</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Tipo de vehículo</label>
                        <select name="tipov" id="" class="form-control">
                            <option style="text-align:center;" value="">Vehículo</option>
                            <option style="text-align:center;" value="ligero">Ligero</option>
                            <option style="text-align:center;" value="pesado">Pesado</option>
                            <option style="text-align:center;" value="motocicleta">Motocicleta</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Kilometraje</label>
                        <input style="text-align:center;" name="kilometraje" type="number" class="form-control" placeholder="Kilometraje">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                    <div class="form-group">
                        <label>Empresa</label>
                        <input style="text-align:center;" name="empresa" type="text" class="form-control" VALUE="Frammex">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                    <div class="form-group">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                    <div class="form-group">

                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="update ml-auto mr-auto">
                        <a href="automovil.php"><button type="button" class="btn btn-primary btn-round">Volver</button></a>
                        <button  type="submit" class="btn btn-primary btn-round">Registar vehículo</button>
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
      
      <!-- <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
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
</body>

</html> 