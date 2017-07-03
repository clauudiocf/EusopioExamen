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
      <label for="nombre">Rut</label><input type="text" name="rut" class="form-input" required/>
      <label for="nombre">Nombre completo</label><input type="text" name="nombreCompleto" class="form-input" required/>
      <label for="nombre">Nombre <span><em>(requerido)</em></span></label>
      <input type="text" name="nombre" class="form-input" required/>
      <label for="apellido">Apellido <span><em>(requerido)</em></span></label>
      <input type="text" name="apellido" class="form-input" required/>         
      <label for="email">Email <span><em>(requerido)</em></span></label>
      <input type="email" name="email" class="form-input" />
     <center> <input class="form-btn" name="submit" type="submit" value="RegistrarDatos" /></center>
    </p>
  </form>
</div>
</body>
</html>

