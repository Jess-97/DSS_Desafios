<?php
// 🔐 Iniciar sesión
session_start();

// ✅ Zona horaria de El Salvador (SOLUCIÓN al problema de la fecha)
date_default_timezone_set("America/El_Salvador");

$mensaje = "";

// Verifica si el formulario fue enviado
if($_POST){

    // Limpiar datos
    $nombre = trim($_POST["nombre_completo"]);
    $correo = trim($_POST["correo"]);
    $password = trim($_POST["password"]);

    // Validar campos
    if($nombre != "" && $correo != "" && $password != ""){

        // Conexión a la BD
        $conexion = new PDO("mysql:host=localhost;dbname=sistema_usuarios;charset=utf8mb4", "root", "");

        // Verificar si el correo ya existe
        $verificar = $conexion->prepare("SELECT id FROM usuarios WHERE correo_usuario = ?");
        $verificar->execute([$correo]);

        if($verificar->rowCount() > 0){

            $mensaje = "Este correo ya está registrado";

        } else {

            // Encriptar contraseña
            $password_cifrado = password_hash($password, PASSWORD_DEFAULT);

            // Insertar usuario
            $sql = $conexion->prepare("INSERT INTO usuarios (nombre_completo, correo_usuario, contraseña) VALUES (?, ?, ?)");
            $sql->execute([$nombre, $correo, $password_cifrado]);

            // 🔥 Crear sesión automáticamente
            session_regenerate_id(true);

            $_SESSION["nombre_usuario"] = $nombre;
            $_SESSION["correo"] = $correo;

            // ✅ Fecha correcta (sin hora)
            $_SESSION["fecha_login"] = date("Y-m-d");

            // Redirigir
            header("Location: bienvenida.php");
            exit();
        }

    } else {
        $mensaje = "Todos los campos son obligatorios";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Moda Mia</title>
<link rel="stylesheet" href="css/regis_login.css">

</head>
<body>

<header>
    <div class="logo">
    <img src="img/logo.png" alt="Logo">
    <span>Ropa y Zapatos de Mujer</span>
</header>

<div class="container">
    <div class="form-box">

        <h2>Crear cuenta</h2>
        <p>Descubre tu estilo y compra lo que amas </p>

        <!-- Se muestra el mensaje SOLo si se envia el formulario-->
        <?php if($_POST && $mensaje != ""){ ?>
            <div class="msg"><?php echo $mensaje; ?></div>
        <?php } ?>

        <form method="POST">
            <input type="text" name="nombre_completo" placeholder=" Nombre completo">
            <input type="email" name="correo" placeholder=" Correo electrónico">
            <input type="password" name="password" placeholder=" Contraseña">
            <button type="submit">Registrarse</button>
        </form>

        <div class="extra">
            ¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a>
        </div>

    </div>
</div>

</body>
</html>