<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery-1.11.1.min.js"></script>
     <script type="text/javascript" src="js/code.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="Css/css.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div id="header">
        <div id="menuSecundario">
            <div id="orden"></div>
            <div id="inicioSesion">
                <a href="iniciosesion.php"> INICIAR SESION </a>
            </div>
            <div id="registroUsuario">
                <a href="insertarUsuarios.php">REGISTRO USUARIO</a>
            </div>
        </div>
        <div id="menuTop">
            <div id="logo">Nosocomio Municipal</div>
        </div>  
    </div>
    <div id="navegador">
        <div id="botonMenu"><a href="Privado/registroAtencion.php">Registro Atencion</a></div>
        <div id="botonMenu"><a href="Publico/registroPaciente.php">Registro Paciente</a></div>
        <div></div>
        <div></div>
        
    </div>
    <div class="container">
        <form class="form-signin form-login" role="form" method="post" action="validar.php">
            <h2 class="form-signin-heading">Ingresar</h2>
            <input type="email" name="usuario" class="form-control" placeholder="usuario" required autofocus>
            <input type="password" name="pass" class="form-control" placeholder="contraseña" required>
            <button id="enviar" type="submit" class="btn btn-lg btn-primary btn-block">aceptar</button>
        </form>
    </div>
    <div class="container" id="resultado">
        
    </div>
</body>
</html>