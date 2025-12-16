<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/admin-styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<title>Panel de Administración - TecnoShop</title>
</head>
<body>

	<!-- Header -->
	<header class="admin-header">
		<nav class="admin-nav">
			<div class="admin-logo" onclick="location.href='menu_admin.php'">
				<span style="font-size: 2rem;">⚙️</span>
				<h1>Admin <span style="color: #8b5cf6;">Panel</span></h1>
			</div>
			<div class="admin-user">
				<div class="admin-user-info">
					<div class="admin-user-name">Administrador</div>
					<div class="admin-user-role">Panel de Control</div>
				</div>
				<button class="admin-logout-btn" onclick="location.href='../../index.php'">
					🚪 Salir
				</button>
			</div>
		</nav>
	</header>

	<!-- Dashboard Container -->
	<div class="admin-container">
		<h1 class="admin-page-title">Panel de Administración</h1>
		<p class="admin-page-subtitle">Gestiona todos los aspectos de tu tienda desde aquí</p>

		<!-- Stats Grid -->
		<div class="stats-grid">
			<div class="stat-card" style="--stat-color: #3b82f6;">
				<div class="stat-label">Total Productos</div>
				<div class="stat-value">15+</div>
			</div>
			<div class="stat-card" style="--stat-color: #10b981;">
				<div class="stat-label">Ventas del Mes</div>
				<div class="stat-value">$25K</div>
			</div>
			<div class="stat-card" style="--stat-color: #f59e0b;">
				<div class="stat-label">Clientes Activos</div>
				<div class="stat-value">127</div>
			</div>
			<div class="stat-card" style="--stat-color: #8b5cf6;">
				<div class="stat-label">Sucursales</div>
				<div class="stat-value">5</div>
			</div>
		</div>

		<!-- Management Cards -->
		<div class="dashboard-cards">
			<!-- Empleados -->
			<div class="dashboard-card card-blue" onclick="location.href='alta_empleado.php'">
				<div class="card-header">
					<div class="card-icon">👥</div>
					<div class="card-arrow">→</div>
				</div>
				<div class="card-content">
					<h3>Gestión de Empleados</h3>
					<p>Registrar y administrar empleados de las sucursales</p>
				</div>
			</div>

			<!-- Sucursales -->
			<div class="dashboard-card card-purple" onclick="location.href='alta_sucursal.php'">
				<div class="card-header">
					<div class="card-icon">🏢</div>
					<div class="card-arrow">→</div>
				</div>
				<div class="card-content">
					<h3>Gestión de Sucursales</h3>
					<p>Crear y administrar sucursales de la tienda</p>
				</div>
			</div>

			<!-- Computadoras -->
			<div class="dashboard-card card-green" onclick="location.href='alta_computadora.php'">
				<div class="card-header">
					<div class="card-icon">💻</div>
					<div class="card-arrow">→</div>
				</div>
				<div class="card-content">
					<h3>Gestión de Computadoras</h3>
					<p>Registrar nuevas computadoras en el inventario</p>
				</div>
			</div>

			<!-- Componentes -->
			<div class="dashboard-card card-orange" onclick="location.href='alta_pieza.php'">
				<div class="card-header">
					<div class="card-icon">🔧</div>
					<div class="card-arrow">→</div>
				</div>
				<div class="card-content">
					<h3>Gestión de Componentes</h3>
					<p>Agregar piezas y componentes al catálogo</p>
				</div>
			</div>

			<!-- Órdenes -->
			<div class="dashboard-card card-cyan" onclick="location.href='ordenes.php'">
				<div class="card-header">
					<div class="card-icon">📦</div>
					<div class="card-arrow">→</div>
				</div>
				<div class="card-content">
					<h3>Gestión de Órdenes</h3>
					<p>Administrar pedidos de computadoras y componentes</p>
				</div>
			</div>
		</div>
	</div>

</body>
</html>