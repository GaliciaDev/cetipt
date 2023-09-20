<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $conexion = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexion, "cetipt");

    $query = "DELETE FROM `evaluadores` WHERE `id` = $id";
    if (mysqli_query($conexion, $query)) {
        header("Location: verevaluadores.php"); // Redirigir a la página de nuevo
        exit();
    } else {
        echo "Error al eliminar el id: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
} else {
    echo "id no válido.";
}
?>
