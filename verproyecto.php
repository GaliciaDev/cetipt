<!DOCTYPE html>
<html>
<head>
  <title>Inicio administrador</title>
  <link rel="stylesheet" href="css/estiloadmin_2.css">
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
            <span><i class="material-icons">Evaluadores</i></span>
            <span class="notif green">3</span>
          </a>
        </li>
      </ul>
    </aside>
    <article>
      <table class="table-container">
        <?php
        // Realiza la conexión y consulta a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "cetipt");

        // Verificar la conexión
        if (!$conexion) {
            die("Error en la conexión a la base de datos: " . mysqli_connect_error());
        }

        $ResultadoProyectos = mysqli_query($conexion, "SELECT * FROM proyectos");

        // Itera a través de los resultados y muestra en la tabla
        while ($fila = mysqli_fetch_assoc($ResultadoProyectos)) {
            echo "<tr>";
            echo "<th>Registro</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>{$fila['id']}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Nombre del proyecto</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>{$fila['nproyecto']}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Nombre corto del proyecto</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>{$fila['ncproyecto']}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Tipo de proyecto</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>{$fila['tproyecto']}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Asesot tecnico</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>{$fila['asesort']}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Asesor metodologico</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>{$fila['asesorm']}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Problematica</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>{$fila['problematica']}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Solucion</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>{$fila['solucion']}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Justificacion</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>{$fila['justificacion']}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Objetivo General</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>{$fila['objetivog']}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Objetivos especificos</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>{$fila['objetivoses']}</td>";
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
