<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/admin-styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<title>Registro de Sucursales - TecnoShop Admin</title>
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
					<div class="admin-user-role">Gestión de Sucursales</div>
				</div>
				<button class="admin-logout-btn" onclick="location.href='../../index.php'">
					🚪 Salir
				</button>
			</div>
		</nav>
	</header>

	<div class="admin-container">
		<a href="menu_admin.php" class="back-button">← Volver al Panel</a>
		
		<h1 class="admin-page-title">Registro de Sucursales</h1>
		<p class="admin-page-subtitle">Agrega una nueva sucursal al sistema</p>

		<form action="alta_sucursal_ocu.php" method="post" class="admin-form-container">
			
			<div class="form-header">
				<h2>🏢 Nueva Sucursal</h2>
				<p>Completa los datos de la sucursal</p>
			</div>

			<!-- Datos de Identificación -->
			<div class="form-section">
				<h3 class="form-section-title">
					<span class="form-section-icon">📋</span>
					Datos de Identificación
				</h3>
				<div class="form-grid">
					<div class="form-group">
						<label for="primer_nombre">Nombre de la Sucursal<span class="required">*</span></label>
						<input type="text" id="primer_nombre" name="primer_nombre" required placeholder="Sucursal Centro">
					</div>
					<div class="form-group">
						<label for="telefono">Teléfono<span class="required">*</span></label>
						<input type="tel" id="telefono" name="telefono" required placeholder="(555) 123-4567">
					</div>
				</div>
			</div>

			<!-- Datos de Ubicación -->
			<div class="form-section">
				<h3 class="form-section-title">
					<span class="form-section-icon">📍</span>
					Datos de Ubicación
				</h3>
				<div class="form-grid">
					<div class="form-group">
						<label for="calle">Calle<span class="required">*</span></label>
						<input type="text" id="calle" name="calle" required placeholder="Av. Principal">
					</div>
					<div class="form-group">
						<label for="casa">Número<span class="required">*</span></label>
						<input type="number" id="casa" name="casa" required placeholder="123" min="1">
					</div>
					<div class="form-group">
						<label for="colonia">Colonia<span class="required">*</span></label>
						<input type="text" id="colonia" name="colonia" required placeholder="Centro">
					</div>
					<div class="form-group">
						<label for="municipio">Municipio<span class="required">*</span></label>
						<input type="text" id="municipio" name="municipio" required placeholder="Guadalajara">
					</div>
					<div class="form-group full-width">
						<label for="estado">Estado<span class="required">*</span></label>
						<input type="text" id="estado" name="estado" required placeholder="Jalisco">
					</div>
				</div>
			</div>

			<!-- Form Actions -->
			<div class="form-actions">
				<button type="button" class="btn-secondary" onclick="location.href='menu_admin.php'">
					Cancelar
				</button>
				<button type="submit" class="btn-success">
					✓ Registrar Sucursal
				</button>
			</div>
		</form>
	</div>

</body>
</html>