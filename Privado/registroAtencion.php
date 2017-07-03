<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>RegistroAtencion</title>
    </head>
    <body>
        <div class="group">
          <form action="registro.php" method="POST">
            <h2><em>Formulario de Registro</em></h2>  
                <label for="rut">Rut</label><input type="text" name="rut" class="form-input" required/>
                <br>
                <label for="nombreCompleto">Nombre completo</label><input type="text" name="nombreCompleto" class="form-input" required/>
                <br>
                <label for="fechaContratacion">Fecha de contratacion</label><input type="datetime" name="fechaContratacion" class="form-input" required/>
                <br>
                <label for="especialidad">Especialidad</label><input type="text" name="especialidad" class="form-input" required/>
                <br>
                <label for="valorConsulta">Valor Consulta</label><input type="number" name="valorConsulta" class="form-input" />
                <br>
               <center> <input class="form-btn" name="submit" type="submit" value="RegistrarDatos" /></center>
          </form>
        </div>
    </body>
</html>

