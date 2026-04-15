<?php
session_start();

if(!isset($_SESSION["nombre_usuario"])){
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
<title>Productos - Moda Mía</title>

<link rel="stylesheet" href="css/estilos.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-logo">
        <img src="img/logo.jpeg" alt="Moda Mía">
        <span class="nav-brand">Moda Mía</span>
    </div>

    <ul class="nav-links">
        <li><a href="bienvenida.php" class="nav-item">Inicio</a></li>
        <li><a href="productos.php" class="nav-item active">Productos</a></li>
        <li><a href="perfil.php" class="nav-item">Perfil</a></li>
    </ul>
</nav>

<!-- HERO -->
<div class="hero">
    <div class="hero-content">
        <h1 class="hero-title">Descubre tu estilo 💕</h1>
        <p class="hero-sub">Hola <?php echo htmlspecialchars($nombre); ?>, tenemos algo especial para ti</p>
    </div>
</div>

<!-- CONTENIDO -->
<div class="container">

    <!-- SECCIÓN 1 -->
    <div class="section-title">✨ Productos Destacados</div>

    <div class="products-grid">

        <div class="product-card">
            <img src="img/vestidof.jpg">
            <div class="product-info">
                <h4>Vestido Floral</h4>
                <div class="price">$28.99</div>
                <span class="badge">Top ventas</span>
                <button class="btn-agregar">Agregar al carrito</button>
            </div>
        </div>

        <div class="product-card">
            <img src="img/tacones.jpg">
            <div class="product-info">
                <h4>Tacones Nude</h4>
                <div class="price">$35.99</div>
                <span class="badge">Nuevo</span>
                <button class="btn-agregar">Agregar al carrito</button>
            </div>
        </div>

        <div class="product-card">
            <img src="img/bolso.jpg">
            <div class="product-info">
                <h4>Bolso Mini Rosa</h4>
                <div class="price">$19.99</div>
                <span class="badge">Oferta</span>
                <button class="btn-agregar">Agregar al carrito</button>
            </div>
        </div>

    </div>

    <!-- SECCIÓN 2 -->
    <div class="section-title">🆕 Nueva Colección</div>

    
<!-- PRODUCTOS -->
<div class="container">

<div class="products-grid">

<!-- 1 -->
<div class="product-card">
    <img src="img/Vestido.jpg">
    <div class="product-info">
        <h4>Vestido Floral</h4>
        <div class="price">$28.99</div>
        <span class="badge">Top ventas</span>

        <button class="btn-agregar">Agregar al carrito</button>
        <button class="btn-info"
            data-img="img/Vestido.jpg"
            data-title="Vestido Floral"
            data-price="$28.99"
            data-desc="Vestido floral elegante y cómodo, ideal para eventos casuales o formales.">
            Información
        </button>
    </div>
</div>

<!-- 2 -->
<div class="product-card">
    <img src="img/Tacones2.jpg">
    <div class="product-info">
        <h4>Tacones Nude</h4>
        <div class="price">$35.99</div>

        <button class="btn-agregar">Agregar al carrito</button>
        <button class="btn-info"
            data-img="img/Tacones2.jpg"
            data-title="Tacones Nude"
            data-price="$35.99"
            data-desc="Tacones elegantes y modernos para eventos especiales.">
            Información
        </button>
    </div>
</div>

<!-- 3 -->
<div class="product-card">
    <img src="img/bolsomini.jpg">
    <div class="product-info">
        <h4>Bolso Mini Rosa</h4>
        <div class="price">$19.99</div>

        <button class="btn-agregar">Agregar al carrito</button>
        <button class="btn-info"
            data-img="img/bolsomini.jpg"
            data-title="Bolso Mini Rosa"
            data-price="$19.99"
            data-desc="Bolso moderno, ligero y perfecto para salidas casuales.">
            Información
        </button>
    </div>
</div>

<!-- 4 -->
<div class="product-card">
    <img src="img/blusachic.jpg">
    <div class="product-info">
        <h4>Blusa Chic Moderna</h4>
        <div class="price">$22.99</div>

        <button class="btn-agregar">Agregar al carrito</button>
        <button class="btn-info"
            data-img="img/blusachic.jpg"
            data-title="Blusa Chic Moderna"
            data-price="$22.99"
            data-desc="Blusa elegante y cómoda para outfits casuales o de oficina.">
            Información
        </button>
    </div>
</div>

<!-- 5 -->
<div class="product-card">
    <img src="img/baggy.jpg">
    <div class="product-info">
        <h4>Jeans baggy</h4>
        <div class="price">$29.99</div>

        <button class="btn-agregar">Agregar al carrito</button>
        <button class="btn-info"
            data-img="img/baggy.jpg"
            data-title="Jeans Skinny"
            data-price="$29.99"
            data-desc="Jeans ajustados modernos y cómodos para uso diario.">
            Información
        </button>
    </div>
</div>

<!-- 6 -->
<div class="product-card">
    <img src="img/deportivo.jpg">
    <div class="product-info">
        <h4>Conjunto Deportivo</h4>
        <div class="price">$34.99</div>

        <button class="btn-agregar">Agregar al carrito</button>
        <button class="btn-info"
            data-img="img/deportivo.jpg"
            data-title="Conjunto Deportivo"
            data-price="$34.99"
            data-desc="Conjunto cómodo para ejercicio o uso diario.">
            Información
        </button>
    </div>
</div>

<!-- 7 -->
<div class="product-card">
    <img src="img/tacon.jpg">
    <div class="product-info">
        <h4>Tacones Elegantes</h4>
        <div class="price">$39.99</div>

        <button class="btn-agregar">Agregar al carrito</button>
        <button class="btn-info"
            data-img="img/tacon.jpg"
            data-title="Tacones Elegantes"
            data-price="$39.99"
            data-desc="Tacones sofisticados ideales para eventos formales.">
            Información
        </button>
    </div>
</div>

</div>
</div>

</div>

<!-- MODAL -->
<div id="modalInfo" class="modal">
    <div class="modal-content">

        <span class="close">&times;</span>

        <div class="modal-body">
            <img id="modalImg" class="modal-img">

            <div class="modal-text">
                <h2 id="modalTitle"></h2>
                <p id="modalDesc"></p>

                <div class="modal-details">
                    <p><strong>Precio:</strong> <span id="modalPrice"></span></p>
                    <p><strong>Disponibilidad:</strong> En stock ✔</p>
                    <p><strong>Entrega:</strong> 2 - 4 días 🚚</p>
                    <p><strong>Calidad:</strong> Premium ✨</p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- JS -->
<script>
const modal = document.getElementById("modalInfo");

document.querySelectorAll(".btn-info").forEach(btn => {
    btn.addEventListener("click", () => {
        modal.style.display = "flex";

        document.getElementById("modalImg").src = btn.dataset.img;
        document.getElementById("modalTitle").textContent = btn.dataset.title;
        document.getElementById("modalDesc").textContent = btn.dataset.desc;
        document.getElementById("modalPrice").textContent = btn.dataset.price;
    });
});

document.querySelector(".close").onclick = () => {
    modal.style.display = "none";
}

window.onclick = (e) => {
    if(e.target == modal){
        modal.style.display = "none";
    }
}
</script>
<!-- FOOTER -->
<footer>
    <p>© 2026 Moda Mía – Tu estilo, tu esencia 💕</p>
</footer>
</body>
</html>
