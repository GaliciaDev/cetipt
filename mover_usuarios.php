<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idUsuario = $_POST['id'];
    $tablaOrigen = $_POST['tabla_origen'];
    $tablaDestino = $_POST['tabla_destino'];

    // Realiza la conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexion, "cetipt");

    // Verificar la conexión
    if (!$conexion) {
        die("Error en la conexión a la base de datos: " . mysqli_connect_error());
    }

    // Verificar si el usuario existe en la tabla de origen
    $query = "SELECT * FROM $tablaOrigen WHERE id = $idUsuario";
    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) > 0) {
        // Mover el usuario de la tabla de origen a la tabla de destino
        $query = "INSERT INTO $tablaDestino SELECT * FROM $tablaOrigen WHERE id = $idUsuario";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            // Eliminar el usuario de la tabla de origen
            $query = "DELETE FROM $tablaOrigen WHERE id = $idUsuario";
            $resultado = mysqli_query($conexion, $query);

            if ($resultado) {
                echo "Usuario con ID $idUsuario movido correctamente de '$tablaOrigen' a '$tablaDestino'.";
            } else {
                echo "Error al eliminar el usuario de '$tablaOrigen'.";
                echo '<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=cuentasad.html>';
            }
        } else {
            echo "Error al mover el usuario de '$tablaOrigen' a '$tablaDestino'.";
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=cuentasad.html>';
        }
    } else {
        echo "El usuario con ID $idUsuario no existe en la tabla '$tablaOrigen'.";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=cuentasad.html>';
    }

    // Cierra la conexión
    mysqli_close($conexion);
}
?>
