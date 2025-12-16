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
	<title>Catálogo de Componentes - TecnoShop</title>
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

	<!-- Sección de Componentes -->
	<section class="products-section">
		<div class="container">
			<div class="section-header">
				<h2 class="section-title">🔧 Catálogo de Componentes y Periféricos</h2>
				<p class="section-subtitle">Todo lo que necesitas para construir o mejorar tu PC</p>
			</div>

			<div class="products-grid">
				
				<!-- NVIDIA 3050ti -->
				<div class="product-card">
					<div class="product-badge">Popular</div>
					<img src="../../assets/images/parts/NVIDIA 3050ti.png" alt="NVIDIA 3050ti" class="product-image">
					<h3 class="product-title">NVIDIA 3050ti</h3>
					<p class="product-price">$5,800</p>
					<p class="product-stock">Stock: 8 unidades</p>
					<button class="btn btn-primary" onclick="location.href='../products/parts/NVIDIA 3050ti.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Ryzen 3800x -->
				<div class="product-card">
					<div class="product-badge">Destacado</div>
					<img src="../../assets/images/parts/Ryzen 3800x.png" alt="Ryzen 3800x" class="product-image">
					<h3 class="product-title">Ryzen 3800x</h3>
					<p class="product-price">$6,200</p>
					<p class="product-stock">Stock: 7 unidades</p>
					<button class="btn btn-primary" onclick="location.href='../products/parts/Ryzen 3800x.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Intel 7 -->
				<div class="product-card">
					<img src="../../assets/images/parts/Intel 7.png" alt="Intel 7" class="product-image">
					<h3 class="product-title">Intel 7</h3>
					<p class="product-price">$4,200</p>
					<p class="product-stock">Stock: 10 unidades</p>
					<button class="btn btn-primary" onclick="location.href='../products/parts/Intel 7.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Gigabyte A320M -->
				<div class="product-card">
					<img src="../../assets/images/parts/Gigabyte A320M.png" alt="Gigabyte A320M" class="product-image">
					<h3 class="product-title">Gigabyte A320M</h3>
					<p class="product-price">$1,850</p>
					<p class="product-stock">Stock: 12 unidades</p>
					<button class="btn btn-primary" onclick="location.href='../products/parts/Gigabyte A320M.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Ram Hyper 8GB -->
				<div class="product-card">
					<img src="../../assets/images/parts/Ram Hyper 8GB.png" alt="Ram Hyper 8GB" class="product-image">
					<h3 class="product-title">Ram Hyper 8GB</h3>
					<p class="product-price">$1,400</p>
					<p class="product-stock">Stock: 22 unidades</p>
					<button class="btn btn-primary" onclick="location.href='../products/parts/Ram Hyper 8GB.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Teclado Razer -->
				<div class="product-card">
					<img src="../../assets/images/parts/Teclado Razer.png" alt="Teclado Razer" class="product-image">
					<h3 class="product-title">Teclado Razer</h3>
					<p class="product-price">$1,350</p>
					<p class="product-stock">Stock: 20 unidades</p>
					<button class="btn btn-primary" onclick="location.href='../products/parts/Teclado Razer.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Gabinete Corsair -->
				<div class="product-card">
					<img src="../../assets/images/parts/Gabinete corsair.png" alt="Gabinete Corsair" class="product-image">
					<h3 class="product-title">Gabinete Corsair</h3>
					<p class="product-price">$1,200</p>
					<p class="product-stock">Stock: 18 unidades</p>
					<button class="btn btn-primary" onclick="location.href='../products/parts/Gabinete corsair.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Razer Headset -->
				<div class="product-card">
					<img src="../../assets/images/parts/Razer Headset.png" alt="Razer Headset" class="product-image">
					<h3 class="product-title">Razer Headset</h3>
					<p class="product-price">$950</p>
					<p class="product-stock">Stock: 15 unidades</p>
					<button class="btn btn-primary" onclick="location.href='../products/parts/Razer Headset.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Fuente 600w -->
				<div class="product-card">
					<img src="../../assets/images/parts/Fuente 600w.png" alt="Fuente 600w" class="product-image">
					<h3 class="product-title">Fuente 600w</h3>
					<p class="product-price">$850</p>
					<p class="product-stock">Stock: 25 unidades</p>
					<button class="btn btn-primary" onclick="location.href='../products/parts/Fuente 600w.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Mouse Razer -->
				<div class="product-card">
					<img src="../../assets/images/parts/Mouse Razer.png" alt="Mouse Razer" class="product-image">
					<h3 class="product-title">Mouse Razer</h3>
					<p class="product-price">$680</p>
					<p class="product-stock">Stock: 30 unidades</p>
					<button class="btn btn-primary" onclick="location.href='../products/parts/Mouse Razer.php'">
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
