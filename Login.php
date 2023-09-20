<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta charset="utf-8"/>
  <title>Inicio de sesion</title>
  <link rel="stylesheet" href="css/estilologin.css">
</head>
<header>
  <center> <div align="left"><img src="img/ceti.png" alt="Logo de ceti"></div></center>
</header>
<body>
<div class="login-page">
  <div class="form">
    <?php
    session_start();
    if (isset($_SESSION["Enviar"])) {
      echo '<span class="Etiquetas">Hola '.$_SESSION["usuario1"].'</span><br>';
      echo '<a href="cerrarsesion.php">Cerrar sesión</a>';
    }
    else {
      echo '<div class="login">
      <form action="Recibirlogin.php" method="post" id="Forlogin" name="formlogin">
          <span class="Etiquetas">Tipo de usuario:&nbsp;&nbsp;</span>
          <select name="tipo_usuario" class="CajasL">
              <option value="administrador">Administrador</option>
              <option value="profesor">Profesor</option>
              <option value="evaluador">Evaluador</option>
              <option value="alumno">Alumno</option>
          </select>
          <br>
          <span class="Etiquetas">Usuario:&nbsp;&nbsp;</span>
          <input autofocus type="text" name="usuario" class="CajasL">
          <br>
          <span class="Etiquetas">Password:</span>
          <input type="password" name="Pass" class="CajasL" id="CajaPass">
          <button class="Etiquetas" type="submit">Acceder</button>
      </form> 
      </div>';
    }
    ?>      
  </div>
</div>
<footer>
  <center><p></p></center>
</footer>
</body>
</html>
