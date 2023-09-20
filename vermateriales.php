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
          <span><i class="material-icons">Materiales</i></span>
           
          <span class="notif green">3</span>     
        </a>
      </li>
    </ul>
  </aside>
  <article>
    
    <article>
    <table>
    <tr>
        <th>Nombres</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Registro</th>
        <th>Softwares</th>
        <th>Mesas</th>
        <th>Bancas</th>
        <th>Computadoras</th>
        <th>Mamparas</th>
        <th>Otros</th>
    </tr>
    <?php
    // Realiza la conexión y consulta a la base de datos
    $conexion = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexion, "cetipt");
    $ResultadoMateriales = mysqli_query($conexion, "SELECT * FROM `materiales`");

    // Itera a través de los resultados y muestra en la tabla
    while ($fila = mysqli_fetch_assoc($ResultadoMateriales)) {
        echo "<tr>";
        echo "<td>{$fila['nombres']}</td>";
        echo "<td>{$fila['apellidop']}</td>";
        echo "<td>{$fila['apellidom']}</td>";
        echo "<td>{$fila['id']}</td>";
        echo "<td>{$fila['softwares']}</td>";
        echo "<td>{$fila['mesas']}</td>";
        echo "<td>{$fila['sillas']}</td>";
        echo "<td>{$fila['mamparas']}</td>";
        echo "<td>{$fila['computadoras']}</td>";
        echo "<td>{$fila['otrosmateriales']}</td>";
        echo "</tr>";
    }

    // Cierra la conexión
    mysqli_close($conexion);
    ?>
</table>
</article>

    
  </article>
</section>

</body>
</html>
