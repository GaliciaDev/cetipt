<?php
if ($_POST) {
    $ID = $_POST['id'];
    $Nombres = $_POST['nombres'];
    $Apellido_P = $_POST['apellidop'];
    $Apellido_M = $_POST['apellidom'];
    $Correo = $_POST['correo'];
    $Contrasena = $_POST['contraseña'];

    $conexion = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexion, "cetipt");

    // Escapar los datos para evitar inyección SQL
    $ID = mysqli_real_escape_string($conexion, $ID);
    $Nombres = mysqli_real_escape_string($conexion, $Nombres);
    $Apellido_P = mysqli_real_escape_string($conexion, $Apellido_P);
    $Apellido_M = mysqli_real_escape_string($conexion, $Apellido_M);
    $Correo = mysqli_real_escape_string($conexion, $Correo);

    // Verificar si el correo ya existe en la tabla "evaluadores"
    $query = "SELECT * FROM `evaluadores` WHERE `correo` = '$Correo'";
    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) > 0) {
        echo "El correo electrónico ya está registrado. Por favor, utiliza otro correo.";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT="15;URL=RegistroprofesoresEV.html">';
    } else {
        // Hashear la contraseña (utiliza la técnica de hashing que prefieras)
        $hashContrasena = password_hash($Contrasena, PASSWORD_DEFAULT);

        // Insertar los datos en la tabla "evaluadores"
        $query = "INSERT INTO `evaluadores`(`id`, `nombres`, `apellidop`, `apellidom`, `correo`, `contrasena`) VALUES ('$ID','$Nombres','$Apellido_P','$Apellido_M', '$Correo','$hashContrasena')";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            echo "Gracias, hemos recibido tus datos. Espere un momento por favor.\n";
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="15;URL=login.php">';
        } else {
            echo "Error en la consulta de Evaluadores.";
        }
    }

    mysqli_close($conexion);
} else {
    echo "ERROR";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=RegistroprofesoresEV.html>';
}
?>
