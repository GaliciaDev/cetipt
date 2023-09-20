<?php
if ($_POST) {
    $Id = $_POST['id'];
    $Nombres = $_POST['nombres'];
    $Apellido_P = $_POST['apellidop'];
    $Apellido_M = $_POST['apellidom'];
    $Grupo = $_POST['grupo'];
    $Carrera = $_POST['carrera'];
    $Correo = $_POST['correo'];
    $Contraseña = $_POST['contraseña'];

    // Validar el formato del correo electrónico
    if (!filter_var($Correo, FILTER_VALIDATE_EMAIL)) {
        echo "El correo electrónico proporcionado no es válido.";
        exit;
    }

    $conexion = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexion, "cetipt");

    // Escapar los datos para prevenir inyección SQL
    $Id = mysqli_real_escape_string($conexion, $Id);
    $Nombres = mysqli_real_escape_string($conexion, $Nombres);
    $Apellido_P = mysqli_real_escape_string($conexion, $Apellido_P);
    $Apellido_M = mysqli_real_escape_string($conexion, $Apellido_M);
    $Grupo = mysqli_real_escape_string($conexion, $Grupo);
    $Carrera = mysqli_real_escape_string($conexion, $Carrera);
    $Correo = mysqli_real_escape_string($conexion, $Correo);

    // Verificar si el correo ya existe en la tabla 'alumnos'
    $query = "SELECT * FROM `alumnos` WHERE `correo` = '$Correo'";
    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) > 0) {
        echo "El correo electrónico ya está registrado. Por favor, utiliza otro correo.";
    } else {
        // Hashear la contraseña (utiliza la técnica de hashing que prefieras)
        $hashContraseña = password_hash($Contraseña, PASSWORD_DEFAULT);

        // Insertar los datos en la tabla 'alumnos'
        $query = "INSERT INTO `alumnos`(`id`, `nombres`, `apellidop`, `apellidom`, `grupo`, `carrera`, `correo`, `contrasena`) VALUES ('$Id','$Nombres','$Apellido_P','$Apellido_M','$Grupo','$Carrera','$Correo','$hashContraseña')";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            echo "Gracias, hemos recibido tus datos. Espere un momento por favor.\n";
        } else {
            echo "Error en la consulta de Alumnos.";
        }
    }

    mysqli_close($conexion);
} else {
    echo "ERROR";
}
?>
