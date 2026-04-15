<?php
session_start();

// Zona horaria también aquí (por seguridad)
date_default_timezone_set("America/El_Salvador");

if(!isset($_SESSION["nombre_usuario"])){
    header("Location: login.php");
    exit();
}

$nombre = $_SESSION["nombre_usuario"];
$correo = $_SESSION["correo"] ?? "No disponible";

// ✅ Formato bonito: día/mes/año
$fecha = isset($_SESSION["fecha_login"]) 
    ? date("d/m/Y", strtotime($_SESSION["fecha_login"])) 
    : "No disponible";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Perfil</title>
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-logo">
        <img src="img/logo.jpeg">
        <span class="nav-brand">Moda Mía</span>
    </div>

    <ul class="nav-links">
        <li><a href="bienvenida.php" class="nav-item">Inicio</a></li>
        <li><a href="productos.php" class="nav-item">Productos</a></li>
        <li><a href="perfil.php" class="nav-item active">Perfil</a></li>
    </ul>
</nav>

<!-- HERO -->
<div class="hero">
    <div class="hero-content">
        <h1 class="hero-title">Tu Perfil 💕</h1>
        <p class="hero-sub">Administra tu información</p>
    </div>
</div>

<!-- CONTENIDO -->
<div class="container">

    <!-- TARJETA PRINCIPAL -->
    <div class="welcome-card">

        <div class="avatar-wrapper">
            <img src="img/avatar.jpeg" class="avatar-img">
        </div>

        <div class="welcome-text">
            <h2><?php echo htmlspecialchars($nombre); ?></h2>
            <p>Cliente de Moda Mía ✨</p>

            <div class="welcome-badges">
                <span class="wb">💖 Moda</span>
                <span class="wb">🛍️ Compras</span>
            </div>
        </div>

    </div>

    <!-- INFORMACIÓN -->
    <div class="section-title">Información personal</div>

    <div class="welcome-card">
        <div class="welcome-text">
            <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
            <p><strong>Correo:</strong> <?php echo htmlspecialchars($correo); ?></p>
            <p><strong>Último acceso:</strong> <?php echo $fecha; ?></p>
        </div>
    </div>

    <!-- ACTIVIDAD -->
    <div class="section-title">Tu actividad</div>

    <div class="products-grid">

        <div class="product-card">
            <div class="product-info">
                <h4>🛒 Compras</h4>
                <p><?php echo rand(1,5); ?></p>
            </div>
        </div>

        <div class="product-card">
            <div class="product-info">
                <h4>❤️ Favoritos</h4>
                <p><?php echo rand(1,10); ?></p>
            </div>
        </div>

        <div class="product-card">
            <div class="product-info">
                <h4>⭐ Nivel</h4>
                <p>Cliente nueva</p>
            </div>
        </div>

    </div>

    <!-- LOGOUT -->
    <div class="section-title">Opciones</div>

    <div class="logout-container">
        <a href="logout.php" class="btn-logout">Cerrar sesión</a>
    </div>

</div>

<!-- FOOTER -->
<footer>
    <p>© 2026 Moda Mía</p>
</footer>

</body>
</html>