<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario de Registro1Paciente</title>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
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
        <div class="group">
          <form action="registro.php" method="POST">
            <h2><em>Formulario de Registro</em></h2>  
                <label for="rut">Rut</label><input type="text" name="rut" class="form-input" required/>
                <br>
                <label for="nombreCompleto">Nombre completo</label><input type="text" name="nombreCompleto" class="form-input" required/>
                <br>
                <label for="fechaNacimietno">Fecha Nacimiento</label><input type="datetime" name="fechaNacimiento" class="form-input" required/>
                <br>
                <label for="sexo">Sexo</label><input type="text" name="sexo" class="form-input" required/>
                <br>
                <label for="direccion">Direccion</label><input type="text" name="direccion" class="form-input" />
                <br>
                <label for="telefono">Telefono</label><input type="tel" name="telefono" class="form-input" />
                <br>
               <center> <input class="form-btn" name="submit" type="submit" value="RegistrarDatos" /></center>
          </form>
        </div>
    </body>
</html>

