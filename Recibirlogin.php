<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreUsuario = $_POST['usuario'];
    $contrasena = $_POST['Pass'];

    $conexion = mysqli_connect("localhost", "root", "", "cetipt");

    // Verificar la conexión
    if (!$conexion) {
        die("Error en la conexión a la base de datos: " . mysqli_connect_error());
    }

    // Escapar los datos para evitar inyección SQL
    $nombreUsuario = mysqli_real_escape_string($conexion, $nombreUsuario);

    // Definir las tablas y los tipos de usuario
    $tablas = array(
        "administrador" => "administradores",
        "profesor" => "profesores",
        "evaluador" => "evaluadores",
        "alumno" => "alumnos"
    );

    $tipoUsuario = $_POST["tipo_usuario"];

    // Validar el tipo de usuario y realizar la consulta correspondiente
    if (array_key_exists($tipoUsuario, $tablas)) {
        $tablaUsuario = $tablas[$tipoUsuario];
        $consulta = "SELECT id, nombres, contrasena FROM $tablaUsuario WHERE correo='$nombreUsuario'";
        $resultado = mysqli_query($conexion, $consulta);

        // Verificar si las credenciales son válidas
        if (mysqli_num_rows($resultado) == 1) {
            $fila = mysqli_fetch_assoc($resultado);
            $hashContrasenaAlmacenada = $fila["contrasena"];

            // Verificar la contraseña con password_verify
            if (password_verify($contrasena, $hashContrasenaAlmacenada)) {
                $_SESSION["Enviar"] = true;
                $_SESSION["usuario1"] = $fila["nombres"];
                $_SESSION["usuario_id"] = $fila["id"];

                // Redirigir al usuario a su página principal
                if ($tipoUsuario == "administrador") {
                    header("Location: inicioadmin.html");
                } elseif ($tipoUsuario == "evaluador") {
                    header("Location: inicioprofesorev.html");
                } elseif ($tipoUsuario == "alumno") {
                    header("Location: inicioalumno.html");
                } elseif ($tipoUsuario == "profesor") {
                    header("Location: inicioprofesor.html");
                }
                exit;
            } else {
                echo "Usuario y contraseña incorrectos.";
            }
        } else {
            echo "Usuario y contraseña incorrectos.";
        }
    } else {
        echo "Tipo de usuario no válido.";
    }

    // Cierra la conexión
    mysqli_close($conexion);
}

?>
