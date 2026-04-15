<?php
// 🔐 Iniciar sesión
session_start();

// ✅ Configurar zona horaria (evita error de fechas)
date_default_timezone_set("America/El_Salvador");

// Conexión a la base de datos
require_once("conexion.php");

// Variable para errores
$mensajeError = "";

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener datos del formulario
    $correo = $_POST["correo"];
    $clave  = $_POST["password"];

    // Consulta preparada (seguridad)
    $sql  = "SELECT id, nombre_completo, contraseña FROM usuarios WHERE correo_usuario = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([$correo]);

    // Obtener usuario
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar credenciales
    if ($usuario && password_verify($clave, $usuario["contraseña"])) {

        // 🔐 Seguridad extra
        session_regenerate_id(true);

        // Guardar datos en sesión
        $_SESSION["id"] = $usuario["id"];
        $_SESSION["nombre_usuario"] = $usuario["nombre_completo"];
        $_SESSION["correo"] = $correo;

        // ✅ Fecha correcta (sin hora)
        $_SESSION["fecha_login"] = date("Y-m-d");

        // Mensaje de éxito
        $_SESSION["mensaje"] = "Inicio de sesión correcto";

        // Redirigir
        header("Location: bienvenida.php");
        exit();

    } else {
        // Error si datos incorrectos
        $mensajeError = "Credenciales incorrectas";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login moda mía- </title>
    <link rel="stylesheet" href="css/regis_login.css">
</head>
<body>

<header class="navbar">
    <div class="logo">
    <img src="img/logo.png" alt="Logo">
    <span>Ropa y Zapatos de Mujer</span>
    </div>
    <nav>
        <a href="bienvenida.php">Inicio</a>
        <a href="productos.php">Productos</a>
        <a href="login.php">Login</a>
    </nav>
</header>

<div class="login-container">
    <div class="login-box">

        

        <h2>Iniciar sesión</h2>

        <?php if (!empty($mensajeError)) { ?>
            <p class="error"><?php echo $mensajeError; ?></p>
        <?php } ?>

        <form method="POST">
            <input type="email" name="correo" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Ingresar</button>
        </form>

        <p class="registro-link">
            ¿No tienes cuenta? <a href="registro.php">Regístrate</a>
        </p>

    </div>
</div>

</body>
</html>