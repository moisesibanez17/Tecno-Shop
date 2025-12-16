<!DOCTYPE html>
<html lang="es" style="scroll-behavior: smooth;">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/global-styles.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<title>TecnoShop - Tu Tienda de Tecnología</title>
</head>
<body>
	
	<!-- Header -->
	<header class="header">
		<nav class="navbar">
			<div class="logo">
				<h1>💻 Tecno<span class="accent">Shop</span></h1>
			</div>
			<div class="nav-links">
				<a href="#inicio" class="nav-link">Inicio</a>
				<a href="#computadoras" class="nav-link">Computadoras</a>
				<a href="#piezas" class="nav-link">Componentes</a>			<a href="pages/client/membresia.php" class="nav-link">Membresías</a>				<a href="pages/client/login.php" class="nav-link-btn">Iniciar Sesión</a>
			</div>
		</nav>
	</header>

	<!-- Hero Section -->
	<section class="hero" id="inicio">
		<div class="hero-content">
			<h1 class="hero-title">Las Mejores <span class="gradient-text">Computadoras</span> y <span class="gradient-text">Componentes</span></h1>
			<p class="hero-subtitle">Encuentra el equipo perfecto para tus necesidades - Gaming, Trabajo o Estudio</p>
			<div class="hero-buttons">
				<button class="btn btn-primary" onclick="location.href='#computadoras'">
					🖥️ Explorar Computadoras
				</button>
				<button class="btn btn-secondary" onclick="location.href='#piezas'">
					🔧 Ver Componentes
				</button>
			</div>
		</div>
		<div class="hero-features">
			<div class="feature-item">
				<div class="feature-icon">🚚</div>
				<div class="feature-text">
					<strong>Envío Gratis</strong>
					<span>En compras mayores a $1,000</span>
				</div>
			</div>
			<div class="feature-item">
				<div class="feature-icon">✓</div>
				<div class="feature-text">
					<strong>Garantía</strong>
					<span>Todos nuestros productos</span>
				</div>
			</div>
			<div class="feature-item">
				<div class="feature-icon">💳</div>
				<div class="feature-text">
					<strong>Pago Seguro</strong>
					<span>Múltiples métodos de pago</span>
				</div>
			</div>
		</div>
	</section>

	<!-- Sección de Computadoras -->
	<section class="products-section" id="computadoras">
		<div class="container">
			<div class="section-header">
				<h2 class="section-title">🖥️ Computadoras de Alto Rendimiento</h2>
				<p class="section-subtitle">Equipos ensamblados con los mejores componentes del mercado</p>
			</div>
			<div class="products-grid">
				
				<!-- Unreal Ryzen -->
				<div class="product-card">
					<div class="product-badge">Premium</div>
					<img src="assets/images/computers/unreal ryzen.png" alt="Unreal Ryzen" class="product-image">
					<h3 class="product-title">Unreal Ryzen</h3>
					<p class="product-price">$18,900</p>
					<p class="product-stock">Stock: 3 unidades</p>
					<button class="btn btn-primary" onclick="location.href='pages/products/computers/Unreal Ryzen.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Tejocote Premium -->
				<div class="product-card">
					<div class="product-badge">Destacado</div>
					<img src="assets/images/computers/Tejocote premium.png" alt="Tejocote Premium" class="product-image">
					<h3 class="product-title">Tejocote Premium</h3>
					<p class="product-price">$15,500</p>
					<p class="product-stock">Stock: 5 unidades</p>
					<button class="btn btn-primary" onclick="location.href='pages/products/computers/Tejocote premium.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Super Intel -->
				<div class="product-card">
					<img src="assets/images/computers/super intel.png" alt="Super Intel" class="product-image">
					<h3 class="product-title">Super Intel</h3>
					<p class="product-price">$12,000</p>
					<p class="product-stock">Stock: 8 unidades</p>
					<button class="btn btn-primary" onclick="location.href='pages/products/computers/Super Intel.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Canaima -->
				<div class="product-card">
					<img src="assets/images/computers/canaima.png" alt="Canaima" class="product-image">
					<h3 class="product-title">Canaima</h3>
					<p class="product-price">$8,500</p>
					<p class="product-stock">Stock: 15 unidades</p>
					<button class="btn btn-primary" onclick="location.href='pages/products/computers/Canaima.php'">
						Ver Detalles
					</button>
				</div>
			</div>
			<div style="text-align: center; margin-top: 2rem;">
				<button class="btn btn-secondary" onclick="location.href='pages/client/catalogo_computadoras.php'">
					Ver Todas las Computadoras
				</button>
			</div>
		</div>
	</section>

	<!-- Sección de Componentes -->
	<section class="products-section" id="piezas" style="background: rgba(30, 41, 59, 0.3);">
		<div class="container">
			<div class="section-header">
				<h2 class="section-title">🔧 Componentes y Periféricos</h2>
				<p class="section-subtitle">Todo lo que necesitas para construir o mejorar tu PC</p>
			</div>
			<div class="products-grid">
				
				<!-- NVIDIA 3050ti -->
				<div class="product-card">
					<div class="product-badge">Popular</div>
					<img src="assets/images/parts/NVIDIA 3050ti.png" alt="NVIDIA 3050ti" class="product-image">
					<h3 class="product-title">NVIDIA 3050ti</h3>
					<p class="product-price">$5,800</p>
					<p class="product-stock">Stock: 8 unidades</p>
					<button class="btn btn-primary" onclick="location.href='pages/products/parts/NVIDIA 3050ti.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Intel 7 -->
				<div class="product-card">
					<img src="assets/images/parts/Intel 7.png" alt="Intel 7" class="product-image">
					<h3 class="product-title">Intel 7</h3>
					<p class="product-price">$4,200</p>
					<p class="product-stock">Stock: 10 unidades</p>
					<button class="btn btn-primary" onclick="location.href='pages/products/parts/Intel 7.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Gigabyte A320M -->
				<div class="product-card">
					<img src="assets/images/parts/Gigabyte A320M.png" alt="Gigabyte A320M" class="product-image">
					<h3 class="product-title">Gigabyte A320M</h3>
					<p class="product-price">$1,850</p>
					<p class="product-stock">Stock: 12 unidades</p>
					<button class="btn btn-primary" onclick="location.href='pages/products/parts/Gigabyte A320M.php'">
						Ver Detalles
					</button>
				</div>

				<!-- Mouse Razer -->
				<div class="product-card">
					<img src="assets/images/parts/Mouse Razer.png" alt="Mouse Razer" class="product-image">
					<h3 class="product-title">Mouse Razer</h3>
					<p class="product-price">$680</p>
					<p class="product-stock">Stock: 30 unidades</p>
					<button class="btn btn-primary" onclick="location.href='pages/products/parts/Mouse Razer.php'">
						Ver Detalles
					</button>
				</div>

			</div>
			<div style="text-align: center; margin-top: 2rem;">
				<button class="btn btn-secondary" onclick="location.href='pages/client/catalogo_piezas.php'">
					Ver Todos los Componentes
				</button>
			</div>
		</div>
	</section>

	<!-- Sección de Acceso -->
	<section class="dashboard-section">
		<div class="container">
			<h2 class="section-title">Acceso al Sistema</h2>
			<div class="cards-grid">
				
				<!-- Card Cliente -->
				<div class="card">
					<div class="card-icon">
						<svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
							<circle cx="12" cy="7" r="4"></circle>
						</svg>
					</div>
					<h3 class="card-title">Portal de Clientes</h3>
					<p class="card-description">Inicia sesión para realizar compras y gestionar tus pedidos</p>
					<button class="btn btn-primary" onclick="location.href='pages/client/login.php'">
						Iniciar Sesión
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</button>
				</div>

				<!-- Card Admin -->
				<div class="card">
					<div class="card-icon admin">
						<svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<path d="M12 2L2 7l10 5 10-5-10-5z"></path>
							<path d="M2 17l10 5 10-5"></path>
							<path d="M2 12l10 5 10-5"></path>
						</svg>
					</div>
					<h3 class="card-title">Panel de Administración</h3>
					<p class="card-description">Gestiona inventario, empleados y operaciones del negocio</p>
					<button class="btn btn-secondary" onclick="location.href='pages/admin/menu_admin.php'">
						Administrar
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
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
					<a href="#computadoras">Computadoras</a>
					<a href="#piezas">Componentes</a>
					<a href="pages/client/login.php">Mi Cuenta</a>
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