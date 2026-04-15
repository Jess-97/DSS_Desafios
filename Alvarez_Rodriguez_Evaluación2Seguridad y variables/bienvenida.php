<?php
session_start();
if (!isset($_SESSION["nombre_usuario"])) {
    header("Location: login.php");
    exit();
}
$nombre = $_SESSION["nombre_usuario"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida - Moda Mía</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

<script>
    setTimeout(() => {
        const mensaje = document.querySelector(".mensaje-exito");
        if (mensaje) {
            mensaje.style.opacity = "0";
            setTimeout(() => mensaje.remove(), 500);
        }
    }, 2500);
</script>

    <?php if (isset($_SESSION["mensaje"])): ?>
    <div class="mensaje-exito">
        <?php 
            echo $_SESSION["mensaje"]; 
            unset($_SESSION["mensaje"]);
        ?>
    </div>
<?php endif; ?>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-logo">
        <img src="img/logo.jpeg" alt="Moda Mía">
        <span class="nav-brand">Moda Mía</span>
    </div>
    <ul class="nav-links">
        <li><a href="bienvenida.php" class="nav-item active"> Inicio</a></li>
        <li><a href="productos.php" class="nav-item"> Productos</a></li>
       <li><a href="perfil.php" class="nav-item">Perfil</a></li>
    </ul>
</nav>



<!-- HERO BIENVENIDA -->
<div class="hero">
    <div class="hero-content">
        <h1 class="hero-title">Tu moda, tu estilo </h1>
        <p class="hero-sub">Descubre las prendas más trendy de la temporada</p>
    </div>
    <div class="hero-bubbles">
       
    </div>
</div>

<!-- CONTENIDO -->
<div class="container">

    <!-- Welcome card -->
    <div class="welcome-card">
        <div class="welcome-img">
    <img src="img/avatar.jpeg" alt="Bienvenida">

        </div>
        <div class="welcome-text">
            <h2>¡Hola, <?php echo htmlspecialchars($nombre); ?>! </h2>
            <p>Bienvenida a Moda Mía. ¡Estás lista para brillar hoy!</p>
            <div class="welcome-badges">
                <span class="wb">Tendencias nuevas</span>
                <span class="wb">🔥 Ofertas exclusivas</span>
            </div>
        </div>
    </div>

    <!-- Productos destacados -->
    <div class="section-title"> Productos destacados</div>
    <div class="products-grid">

        <div class="product-card">
            <img src="img/vestidof.jpg">
            <div class="product-info">
                <h4>Vestido Floral</h4>
                <div class="price">$28.99</div>
                <span class="badge"> Top ventas</span>
                <button class="btn-agregar">🛒 Agregar al carrito</button>
            </div>
        </div>

        <div class="product-card">
            <img src="img/tacones.jpg" alt="Tacones Nude">
            <div class="product-info">
                <h4>Tacones Nude</h4>
                <div class="price">$35.99</div>
                <span class="badge">🆕 ¡Nuevo!</span>
                <button class="btn-agregar">🛒 Agregar al carrito</button>
            </div>
        </div>

        <div class="product-card">
            <img src="img/bolso.jpg" alt="Bolso Mini Rosa">
            <div class="product-info">
                <h4>Bolso Mini Rosa</h4>
                <div class="price">$19.99</div>
                <span class="badge">🆕 ¡Nuevo!</span>
                <button class="btn-agregar">🛒 Agregar al carrito</button>
            </div>
        </div>

        <div class="product-card">
            <img src="img/blusa.jpg" alt="Blusa Elegante">
            <div class="product-info">
                <h4>Blusa Elegante</h4>
                <div class="price">$22.50</div>
                <span class="badge">🏷️ Oferta</span>
                <button class="btn-agregar">🛒 Agregar al carrito</button>
            </div>
        </div>

    </div>

    <!-- Nueva colección -->
    <div class="section-title">🆕 Nueva colección</div>
    <div class="products-grid">

        <div class="product-card">
            <img src="img/chaqueta.jpg" alt="Chaqueta Rosa">
            <div class="product-info">
                <h4>Chaqueta Rosa</h4>
                <div class="price">$45.00</div>
                <span class="badge">🆕 ¡Nuevo!</span>
                <button class="btn-agregar">🛒 Agregar al carrito</button>
            </div>
        </div>

        <div class="product-card">
            <img src="img/falda.jpeg" alt="Falda Plisada">
            <div class="product-info">
                <h4>Falda Plisada</h4>
                <div class="price">$18.99</div>
                <span class="badge"> Top ventas</span>
                <button class="btn-agregar">🛒 Agregar al carrito</button>
            </div>
        </div>

        <div class="product-card">
            <img src="img/zapatos.jpeg" alt="Zapatos Blancos">
            <div class="product-info">
                <h4>Zapatos Blancos</h4>
                <div class="price">$32.00</div>
                <span class="badge"> Oferta</span>
                <button class="btn-agregar">🛒 Agregar al carrito</button>
            </div>
        </div>

        <div class="product-card">
            <img src="img/cartera.jpeg" alt="Cartera Elegante">
            <div class="product-info">
                <h4>Cartera Elegante</h4>
                <div class="price">$27.50</div>
                <span class="badge">🆕 ¡Nuevo!</span>
                <button class="btn-agregar">🛒 Agregar al carrito</button>
            </div>
        </div>

    </div>
</div>
<!-- FOOTER -->
<footer>
    <p>© 2026 Moda Mía – Ropa y Zapatos de Mujer </p>
</footer>

</body>
</html>