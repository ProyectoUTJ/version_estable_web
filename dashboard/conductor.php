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
          <img src="" width="100"  class="hidden">
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
          <li class="active">
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
            <a class="navbar-brand" href="javascript:;">Empresas</a>
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            
                <p data-toggle="modal" data-target=".bd-example-modal-lg">
                  <i class="nc-icon nc-simple-add" id="modalll"></i>
                  Nueva conductor
                </p>

                <style>
                    #modalll{
                        cursor: pointer;
                    }
                    .table-hover tbody tr:hover td {
                        background: #D7DFDF;
                    }
                    .image-container {
                    display: flex;
                    justify-content: center;
                    }
                </style>

            <!-- MODAL GRANDE  -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                    <div class="modal-header" >
                        <h5 class="modal-title" id="exampleModalLabel" style="font-size:25px;" >
                            <span class="material-symbols-outlined">local_taxi</span>
                            Registro de conductor
                        </h5>
                    
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="material-symbols-outlined">cancel</span>
                        </button>

                    </div>

                        <!-- FORMULARIO INSERT EMPRESA -->
                        <br>        
                        <form method="POST" action="crud/regempresa.php" style="text-align:center;">

                            <label for="" style="font-size:25px">*Nombre de la empresa: </label>
                            <input type="text" id="login" class="fadeIn second" name="nombre" placeholder="Nombre" size="30"><br>
                            
                            <label for="" style="font-size:25px">*Dirección: </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="login" class="fadeIn second" name="direccion" placeholder="Dirección"  size="30"><br>

                            <label for="" style="font-size:25px">*Teléfono: </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="login" class="fadeIn second" name="telefono" placeholder="Teléfono"  size="30"><br>

                            <label for="" style="font-size:25px">*RFC: </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="login" class="fadeIn second" name="rfc" placeholder="RFC"  size="30"><br>

                            <label for="" style="font-size:25px">*Contraseña: </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="login" class="fadeIn second" name="contra" placeholder="Correo electrónico"  size="30">

                            <label for="" style="font-size:25px">*Contraseña: </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="login" class="fadeIn second" name="recontra" placeholder="Contraseña"  size="30">
                            
                            <label for="" style="font-size:25px">*Correo electrónico: </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                            <input type="text" id="login" class="fadeIn second" name="correo" placeholder="Contraseña"  size="30"><br>
                            
                            <label for="" style="font-size:25px">*Tipo: </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="password" id="password" class="fadeIn third" name="tipo" placeholder="Tipo" size="30">
                            
                          
                            <button type="button" style="height:45px;width:150px; font-size:15px;" class="btn btn-danger" data-dismiss="modal">
                                Cerrar
                            </button>
                            <button id="enviar" type="submit" style="height:45px;width:170px; font-size:11px;" class="btn btn-success" >
                                Guardar cambios
                            </button>

                        </form>
                        <!-- FORMULARIO INSERT AUTOMOVIL -->
                    </div>
                </div>
            </div>
            <!-- MODAL GRANDE -->

            <!-- CONTENIDO TABLA -->
                <table class="table table-hover table-bordered">
                    <thead style="text-align:center;"class="thead-light table-bordered">
                        <tr >
                            <th scope="col" style="font-size:12px">Nombre</th>
                            <th scope="col" style="font-size:12px">Apellido Paterno</th>
                            <th scope="col" style="font-size:12px">Apellido Materno</th>
                            <th scope="col" style="font-size:12px">Teléfono</th>
                            <th scope="col" style="font-size:12px">Email </th>
                            <th scope="col" style="font-size:12px"></th>
                            <th scope="col" style="font-size:12px"></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($conductorempresa as $fila  ):?>
                        <tr style="text-align:center;">
                              
                            <td style="font-size:15px" ><?= $fila['nombre_cond']; ?></td>
                            <td style="font-size:15px" ><?= $fila['apellidoP']; ?></td>
                            <td style="font-size:15px" ><?= $fila['apellidoM']; ?></td>
                            <td style="font-size:15px" ><?= $fila['telefono']; ?></td>
                            <td style="font-size:15px"><?= $fila['usuario']; ?></td>

                            <td>
                                <?php echo "<a  href='editar.php?id=".$fila['id_conductor']."'>
                                <i class='nc-icon nc-ruler-pencil'></i>
                                </a> ";?>
                                
                            </td>

                            <td>

                            <?php echo "<a onclick='return confirmar()' href='crud/be.php?id=".$fila['id_conductor']."'>
                                <i class='nc-icon nc-box'></i>
                                </a> ";?>

                            </td> 
                            
                        </tr>
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