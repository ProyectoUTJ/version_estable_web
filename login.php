<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/logincss.css">
    <link rel="icon" type="image/png" href="img/logo.ico">
    <title>Login</title>
    <!-- CSS only -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--  -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <!-- <div class="container">
        <div class="row justify-content-md-center" style="margin-top:15%">
            <form class="col-3" method="POST" action="./php/login.php">
                <h2>Iniciar Sesión</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">

                </div>
                <a href="./restablecer.php">Olvidé mi contraseña</a> <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> -->

    <!-- LOGIN FORM FUNCIONAL -->
    <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <br>
                
                    <h2>Iniciar sesión</h2><br>
                    <img src="img/logog.png" width="100"  class="image-container">
                <br>

                <!-- Icon -->
                <div class="fadeIn first">
                
                </div>

                <!-- Login Form -->
                <form method="POST" action="php/loginconx.php">
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Correo eletrónico">
                <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Contraseña">
                <input type="submit" class="fadeIn fourth" value="Aceptar">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="register.php">Aún no tengo cuenta</a>
                    <a class="underlineHover" href="#">Olvide mi contraseña</a>
                </div>

            </div>
    </div>
    <!-- LOGIN FORM  -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>