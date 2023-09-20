<?php
if (isset($_GET['registro']) && is_numeric($_GET['registro'])) {
    $id = $_GET['registro'];

    $conexion = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexion, "cetipt");

    $query = "DELETE FROM `alumnos` WHERE `registro` = $id";
    if (mysqli_query($conexion, $query)) {
        header("Location: veralumnos.php"); // Redirigir a la página de nuevo
        exit();
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
} else {
    echo "registro no válido.";
}
?>
