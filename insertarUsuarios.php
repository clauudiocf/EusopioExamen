<!doctype html>
<html>
    <head>
	<title>insertar</title>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/code.js"></script>
        <link href="Css/css.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="../Css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="../Css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="../Css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../Css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
            <div id="logo"><a id="link" href="index.php">Nosocomio Municipal</a></div>
            
        </div>  
    </div>
    <div id="navegador">
        <div id="botonMenu"><a href="Privado/registroAtencion.php">Registro Atencion</a></div>
        <div id="botonMenu"><a href="Publico/registroPaciente.php">Registro Paciente</a></div>
        <div></div>
        <div></div>
        
    </div>
    <div style="text-align: center; margin-top: 50px;" id="principal">
        <div class="container">
            <form class="form-signin form-login" role="form" method="post" action="validar.php">
                <h1 class="form-signin-heading">Insertar Usuarios</h1>
                <input class="form-control" placeholder="usuario" type="text" id="usuario">
                <input class="form-control" placeholder="Contraseña"type="password" id="pass"><br>
                <input  class="btn btn-lg btn-primary btn-block" type="button" value="registrar" id="btnregistrar">
            </form>
       </div>
       <div id="resultado">
           
       </div>
    </div>
    <div id="piePagina"><p>Contacto: 999999nuevecito 555555cincorriente</p></div>
    </body>
</html>