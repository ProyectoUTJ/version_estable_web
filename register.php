<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/logincss.css">
    <link rel="icon" type="image/png" href="img/logo.ico">
    <!-- CSS only -->

    <!--  -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!--  -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <!-- <div class="container">
        <div class="row justify-content-md-center" style="margin-top:10%">
            <form class="col-3" method="POST" action="./php/registrar.php">
                <h2>Registro</h2>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="Nombre" name="nombre">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label">Confirmar Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" name="pass2">
                </div>
               
                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="submit" class="btn btn-success">Login</button>
            </form>
        </div>
    </div> -->


        <!-- REGISTRO FORM FUNCIONAL -->
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->
                <br>
                    <img src="img/logog.png" width="60"  class="image-container"><br>
                    <h2>Registro</h2>
                    <h5>Ingrese su datos</h5>
                <br>
                <!-- Icon -->
                <!-- <div class="fadeIn first">
                <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
                </div> -->

                <!-- Login Form -->
                <form method="POST" action="./php/registrar.php">
                
                <input type="text" id="login" class="fadeIn second" name="nombre" placeholder="*Nombre"><br>

                <input type="text" id="login" class="fadeIn second" name="apellidoM" placeholder="*Apellido Materno"><br>


                <input type="text" id="login" class="fadeIn second" name="apellidoP" placeholder="*Apellido Paterno"><br>

                <input type="text" id="login" class="fadeIn second" name="telefono" placeholder="*Número telefonico"><br>

                <input type="text" id="login" class="fadeIn second" name="correo" placeholder="*Correo electrónico">
                
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="*Contraseña">
                
                <input type="submit" class="fadeIn fourth" value="Aceptar">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="login.php">Ya tengo una cuenta</a>
                </div>

            </div>
    </div>
    <!-- LOGIN FORM  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>