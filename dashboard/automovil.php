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
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>DASHBOARD</title>
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
        <a href="dashempresa.php" class="simple-text logo-normal">
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
          <li>
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
            <a class="navbar-brand" href="javascript:;">Dashboard para Empresas</a>
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
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="profile.php">Perfil</a>
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
            
                <p >
                  <a href="nuevoauto.php"><i class="nc-icon nc-simple-add"></i></a>
                  Nuevo automóvil
                  
                  <!-- MUESTRA ICONO SI ALGUN AUTO ESTA PROXIMO -->
                  <?php
                  $vuuu = "SELECT kilometraje FROM vehiculo WHERE kilometraje >=700";
                  if (mysqli_query($conexion,$vuuu)) {
                  ?>
                  <i class="nc-icon nc-ambulance" data-toggle="modal" data-target="#exampleModal" id="alerta"></i>
                  <?php
                  }else{?>
                  <?php
                }?>
                  <!-- MUESTRA ICONO SI ALGUN AUTO ESTA PROXIMO -->
                </p>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">

                           <h5 class="modal-title" id="exampleModalLabel" style="text-color: red;" >  ¡Alerta!</h5>
                          
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <p style="text-align:center; font-size:15px">Estos vehículos estan próximos para recibir su mantenimiento</p>

                         <!-- TABLA DE VEHICULOS MANTE -->
                          <table class="table table-hoverr">
                          <thead>
                              <tr>
                                <th scope="col" style="text-align:center;font-size:15px">Marca</th>
                                <th scope="col" style="text-align:center; font-size:15px">Kilometraje actual</th>
                            </thead>
                            <tbody>

                            <?php 
                              foreach ($mov as $mm):
                            ?>
                              <tr>
                                <th style="text-align:center; font-size:15px" scope="row"><?= $mm['marca']; ?></th>
                                <td style="text-align:center; font-size:15px" ><?= $mm['kilometraje']; ?></td>
                              </tr>
                            <?php endforeach;?>
                            </tbody>

                          </table>
                        <!-- TABLA DE VEHICULOS MANTE -->

                      </div>
                      <div class="modal-footer">
                        <?php
                          foreach ($mov as $ju):
                           echo "<a href='nuyhj.php?id=".$ju['id_vehiculo']."'><button type='button' style='height:50px;width:230px;' class='btn btn-primary'>Ver</button></a>";
                          endforeach;
                        ?>
                        
                      </div>
                       
                    </div>
                   
                  </div>
                </div>


                <style>
                    .table-hover tbody tr:hover td {
                        background: #D7DFDF;
                    }
                    #alerta{
                      position: relative;
                      float: right;
                      cursor: pointer;
                    }
                </style>

            <!-- CONTENIDO TABLA -->
                <table class="table table-hover table-bordered">
                    <thead style="text-align:center;"class="thead-light table-bordered">
                        <tr >
                            <th scope="col" style="font-size:10px">Marca</th>
                            <th scope="col" style="font-size:10px">Año</th>
                            <th scope="col" style="font-size:10px">Nombre</th>
                            <th scope="col" style="font-size:10px">Placas</th>
                            <th scope="col" style="font-size:10px">Capacidad de combustible</th>
                            <th scope="col" style="font-size:10px">Tipo de combustible</th>
                            <th scope="col" style="font-size:10px">Tipo de vehículo</th>
                            <th scope="col" style="font-size:10px">Kilometraje</th>
                            <th scope="col" style="font-size:10px">QR</th>
                            <th scope="col" style="font-size:10px"></th>
                            <th scope="col" style="font-size:10px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultv as $fila):?>
                        <tr style="text-align:center;">
                              
                            <td style="font-size:15px" ><?= $fila['marca']; ?></td>
                            <td style="font-size:15px" ><?= $fila['age']; ?></td>
                            <td style="font-size:15px" ><?= $fila['nombre']; ?></td>
                            <td style="font-size:15px" ><?= $fila['placas']; ?></td>
                            <td style="font-size:15px" ><?= $fila['Capcombustible']; ?></td>
                            <td style="font-size:15px" ><?= $fila['Tipcombustible']; ?></td>
                            <td style="font-size:15px" ><?= $fila['Tipvehiculo']; ?></td>
                            <td style="font-size:15px" ><?= $fila['kilometraje']; ?></td>
                            <td style="font-size:15px" ><img src="crud/<?= $fila['codigoQR'];?>" width="80" ></td>
                            
                            <td>
                                <?php echo "<a  href='editauto.php?id=".$fila['id_vehiculo']."'>
                                <i class='nc-icon nc-ruler-pencil'></i>
                                </a> ";?>
                                
                            </td>

                            <td>

                            <?php echo "<a onclick='return confirmar()' href='crud/be.php?id=".$fila['id_vehiculo']."'>
                                <i class='nc-icon nc-box'></i>
                                </a> ";?>

                            </td> 
                            
                        </tr>

                        <?php endforeach;?>
                    </tbody>
                </table>
                <!-- CONTENIDO TABLA -->
              
            </h3>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- SCRIPT DE CONFIRMACION -->
  <script>
    function confirmar() {
      return confirm('¿Estas seguro que quieres eliminar este registro?');
    }
  </script>
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