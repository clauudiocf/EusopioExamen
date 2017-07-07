<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>RegistroAtencion</title>
        <link href="../Css/css.css" rel="stylesheet" type="text/css"/>
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
                <a href="../iniciosesion.php">INICIAR SESION</a>
            </div>
            <div id="registroUsuario">
                <a href="../insertarUsuarios.php">REGISTRO USUARIO</a>
            </div>
        </div>
        <div id="menuTop">
            <div id="logo"><a id="link" href="../index.php">Nosocomio Municipal</a></div>
        </div>  
    </div>
    <div id="navegador">
        <div id="botonMenu"><a href="registroAtencion.php">Registro Atencion</a></div>
        <div id="botonMenu"><a href="../Publico/registroPaciente.php">Registro Paciente</a></div>
        <div></div>
        <div></div>
        
    </div>
    <div style="text-align: center;" id="principal">
        <div class="group">
          <form class="form-signin form-login" action="registro.php" method="POST">
            <h2 class="form-signin-heading"><em>Formulario de Registro</em></h2>  
                <input class="form-control" placeholder="Rut" type="text" name="rut" class="form-input" required/>
                <input class="form-control" placeholder="Nombre Completo" type="text" name="nombreCompleto" class="form-input" required/>
                <input class="form-control" placeholder="Fecha Contratacion" type="datetime" name="fechaContratacion" class="form-input" required/>
                <input class="form-control" placeholder="Especialidad" type="text" name="especialidad" class="form-input" required/>
                <input class="form-control" placeholder="Valor Consulta" type="number" name="valorConsulta" class="form-input" /><br>
               <center> <input class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value="RegistrarDatos" /></center>
          </form>
        </div>
    </div>
    <div id="piePagina"><p>Contacto: 999999nuevecito 555555cincorriente</p></div>
    </body>
</html>

