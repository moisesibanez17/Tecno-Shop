<!DOCTYPE html>
<html lang="es" style="scroll-behavior: smooth;">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/global-styles.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<title>Catálogo de Computadoras - TecnoShop</title>
</head>
<body>

	<!-- Header -->
	<header class="header">
		<nav class="navbar">
			<div class="logo">
				<h1 onclick="location.href='../../index.php'" style="cursor: pointer;">💻 Tecno<span class="accent">Shop</span></h1>
			</div>
			<div class="nav-links">
				<a href="../../index.php" class="nav-link">Inicio</a>
				<a href="catalogo_computadoras.php" class="nav-link">Computadoras</a>
				<a href="catalogo_piezas.php" class="nav-link">Componentes</a>
				<a href="login.php" class="nav-link-btn">Iniciar Sesión</a>
			</div>
		</nav>
	</header>

	<!-- Sección de Computadoras -->
	<section class="products-section">
		<div class="container">
			<div class="section-header">
				<h2 class="section-title">🖥️ Catálogo de Computadoras</h2>
				<p class="section-subtitle">Equipos de alto rendimiento para gaming, trabajo y creatividad</p>
			</div>

			<div class="products-grid">
				
				<!-- Unreal Ryzen -->
				<div class="product-card">
					<div class="product-badge">Premium</div>
					<img src="../../assets/images/computers/unreal ryzen.png" alt="Unreal Ryzen" class="product-image">
					<h3 class="product-title">Unreal Ryzen</h3>
					<p class="product-price">$18,900</p>
					<p class="product-stock">Stock: 3 unidades</p>
					<button class="btn btn-primary" onclick="location.href='../products/computers/Unreal Ryzen.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Tejocote Premium -->
				<div class="product-card">
					<div class="product-badge">Destacado</div>
					<img src="../../assets/images/computers/Tejocote premium.png" alt="Tejocote Premium" class="product-image">
					<h3 class="product-title">Tejocote Premium</h3>
					<p class="product-price">$15,500</p>
					<p class="product-stock">Stock: 5 unidades</p>
					<button class="btn btn-primary" onclick="location.href='../products/computers/Tejocote premium.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Super Intel -->
				<div class="product-card">
					<img src="../../assets/images/computers/super intel.png" alt="Super Intel" class="product-image">
					<h3 class="product-title">Super Intel</h3>
					<p class="product-price">$12,000</p>
					<p class="product-stock">Stock: 8 unidades</p>
					<button class="btn btn-primary" onclick="location.href='../products/computers/Super Intel.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Canaima -->
				<div class="product-card">
					<img src="../../assets/images/computers/canaima.png" alt="Canaima" class="product-image">
					<h3 class="product-title">Canaima</h3>
					<p class="product-price">$8,500</p>
					<p class="product-stock">Stock: 15 unidades</p>
					<button class="btn btn-primary" onclick="location.href='../products/computers/Canaima.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Econopc -->
				<div class="product-card">
					<div class="product-badge">Económica</div>
					<img src="../../assets/images/computers/econopc.png" alt="Econopc" class="product-image">
					<h3 class="product-title">Econopc</h3>
					<p class="product-price">$5,200</p>
					<p class="product-stock">Stock: 20 unidades</p>
					<button class="btn btn-primary" onclick="location.href='../products/computers/Econopc.php'">
						Ver Detalles
					</button>
				</div>

			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="footer-content">
				<div class="footer-section">
					<h3>💻 TecnoShop</h3>
					<p>Tu tienda de confianza en tecnología</p>
				</div>
				<div class="footer-section">
					<h4>Enlaces Rápidos</h4>
					<a href="../../index.php">Inicio</a>
					<a href="catalogo_computadoras.php">Computadoras</a>
					<a href="catalogo_piezas.php">Componentes</a>
				</div>
				<div class="footer-section">
					<h4>Contacto</h4>
					<p>📧 info@tecnoshop.com</p>
					<p>📱 (555) 123-4567</p>
				</div>
			</div>
			<div class="footer-bottom">
				<p>&copy; 2025 TecnoShop. Todos los derechos reservados.</p>
			</div>
		</div>
	</footer>

</body>
</html>
