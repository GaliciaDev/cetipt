<!DOCTYPE html>
<html>
<head>
    <title>Inicioadministrador</title>
   <link rel="stylesheet" href="css/estiloadmin.css">
</head>
<body>
<header>
  <span class="menu"><i class="material-icons">Menu</i></span>
</header>
<section class="main">
  <aside class="keep">
    <ul>
      <li>

        <a href="">
          <span><i class="material-icons">Alumnos</i></span>
           
          <span class="notif red">1</span>
        </a>
      </li>      
      <li>
        <a href="/">
          <span><i class="material-icons">Asesor</i></span>
           
          <span class="notif yellow">2</span>
        </a>
      </li>
      <li>
        <a href="/">
          <span><i class="material-icons">Administradores</i></span>
           
          <span class="notif green">3</span>     
        </a>
      </li>
    </ul>
  </aside>
  <article>

        <article>
            <h2>Mover Usuario por ID</h2>
    <form action="mover_usuarios.php" method="post">
        <label for="id">ID del Usuario:</label>
        <input type="text" name="id" id="id">
        <label for="tabla_origen">Tabla de Origen:</label>
        <select name="tabla_origen" id="tabla_origen">
            <option value="profesores">Profesor</option>
            <option value="evaluadores">Evaluador</option>
            <option value="administradores">Administrador</option>
        </select>
        <label for="tabla_destino">Mover a:</label>
        <select name="tabla_destino" id="tabla_destino">
            <option value="profesores">Profesor</option>
            <option value="evaluadores">Evaluador</option>
            <option value="administradores">Administrador</option>
        </select>
        <input type="submit" value="Mover Usuario">
    </form>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Contraseña</th>
            </tr>
            <?php
            // Realiza la conexión y consulta a la base de datos
            $conexion = mysqli_connect("localhost", "root", "");
            mysqli_select_db($conexion, "cetipt");
            $ResultadoAdministradores = mysqli_query($conexion, "SELECT * FROM `administradores`");

            // Itera a través de los resultados y muestra en la tabla
            while ($fila = mysqli_fetch_assoc($ResultadoAdministradores)) {
                echo "<tr>";
                echo "<td>{$fila['id']}</td>";
                echo "<td>{$fila['nombres']}</td>";
                echo "<td>{$fila['apellidop']}</td>";
                echo "<td>{$fila['apellidom']}</td>";
                echo "<td>{$fila['correo']}</td>";
                echo "<td>{$fila['contrasena']}</td>";
                echo "</tr>";
            }

            // Cierra la conexión
            mysqli_close($conexion);
            ?>
        </table>
    </article>
</section>
</body>
</html>
