<!doctype html>
<html>
    <head>
	<title>insertar</title>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/code.js"></script>
        <link href="Css/css.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
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
        <div>
            <h1>Insertar Usuarios</h1>
            <label>Usuario:</label>
            <input type="text" id="usuario"><br>
            <label>Contraseña:</label>
            <input type="password" id="pass"><br>
            <input type="button" value="registrar" id="btnregistrar">
       </div>
       <div id="resultado">
           
       </div>
    </div>
    <div id="piePagina"><p>Contacto: 999999nuevecito 555555cincorriente</p></div>
    </body>
</html>