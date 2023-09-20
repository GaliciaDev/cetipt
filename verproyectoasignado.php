<!DOCTYPE html>
<html>
<head>
  <title>Inicioadministrador</title>
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
    
    <article>
    <table class="table-container">
        <?php
        // Realiza la conexión y consulta a la base de datos
        $conexion = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conexion, "cetipt");
        $ResultadoProyectos = mysqli_query($conexion, "SELECT * FROM `proyectos`");

        // Itera a través de los resultados y muestra en la tabla
        while ($fila = mysqli_fetch_assoc($ResultadoProyectos)) {
            echo "en construccion";      
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
