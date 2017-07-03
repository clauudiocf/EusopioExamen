<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario de Registro</title>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
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

