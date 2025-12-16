<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/admin-styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<title>Registro de Computadoras - TecnoShop Admin</title>
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
					<div class="admin-user-role">Gestión de Computadoras</div>
				</div>
				<button class="admin-logout-btn" onclick="location.href='../../index.php'">
					🚪 Salir
				</button>
			</div>
		</nav>
	</header>

	<div class="admin-container">
		<a href="menu_admin.php" class="back-button">← Volver al Panel</a>
		
		<h1 class="admin-page-title">Registro de Computadoras</h1>
		<p class="admin-page-subtitle">Agrega una nueva computadora al inventario</p>

		<form action="alta_computadora_ocu.php" method="post" enctype="multipart/form-data" class="admin-form-container">
			
			<div class="form-header">
				<h2>💻 Nueva Computadora</h2>
				<p>Completa los datos de la computadora y sus componentes</p>
			</div>

			<!-- Datos de la Computadora -->
			<div class="form-section">
				<h3 class="form-section-title">
					<span class="form-section-icon">💻</span>
					Información del Producto
				</h3>
				<div class="form-grid">
					<div class="form-group full-width">
						<label for="nombre">Nombre de la Computadora<span class="required">*</span></label>
						<input type="text" id="nombre" name="nombre" required placeholder="Ej: Unreal Ryzen Gaming PC">
					</div>
					<div class="form-group">
						<label for="precio">Precio (MXN)<span class="required">*</span></label>
						<input type="number" id="precio" name="precio" required placeholder="15999" min="0" step="0.01">
					</div>
					<div class="form-group">
						<label for="stock">Stock Disponible<span class="required">*</span></label>
						<input type="number" id="stock" name="stock" required placeholder="10" min="0">
					</div>
					<div class="form-group full-width">
						<label for="imagen">Imagen de la Computadora<span class="required">*</span></label>
						<div class="file-input-wrapper">
							<input type="file" id="imagen" name="imagen" accept="image/*" required>
							<div class="file-input-label">
								📸 Seleccionar imagen de la computadora
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Componentes -->
			<div class="form-section">
				<h3 class="form-section-title">
					<span class="form-section-icon">🔧</span>
					Componentes de la Computadora
				</h3>
				<p style="color: #94a3b8; margin-bottom: 1rem; font-size: 0.9rem;">
					Ingresa los IDs de los componentes y las cantidades necesarias
				</p>
				<table class="components-table">
					<thead>
						<tr>
							<th>ID Pieza</th>
							<th>Cantidad</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="text" name="id1" placeholder="Ej: 1"></td>
							<td><input type="number" name="cantidad1" placeholder="1" min="0"></td>
						</tr>
						<tr>
							<td><input type="text" name="id2" placeholder="Ej: 2"></td>
							<td><input type="number" name="cantidad2" placeholder="1" min="0"></td>
						</tr>
						<tr>
							<td><input type="text" name="id3" placeholder="Ej: 3"></td>
							<td><input type="number" name="cantidad3" placeholder="1" min="0"></td>
						</tr>
						<tr>
							<td><input type="text" name="id4" placeholder="Ej: 4"></td>
							<td><input type="number" name="cantidad4" placeholder="1" min="0"></td>
						</tr>
						<tr>
							<td><input type="text" name="id5" placeholder="Ej: 5"></td>
							<td><input type="number" name="cantidad5" placeholder="1" min="0"></td>
						</tr>
					</tbody>
				</table>
			</div>

			<!-- Form Actions -->
			<div class="form-actions">
				<button type="button" class="btn-secondary" onclick="location.href='menu_admin.php'">
					Cancelar
				</button>
				<button type="submit" class="btn-success">
					✓ Registrar Computadora
				</button>
			</div>
		</form>
	</div>

	<script>
		// Update file input label with selected filename
		document.getElementById('imagen').addEventListener('change', function(e) {
			const fileName = e.target.files[0]?.name || 'Seleccionar imagen de la computadora';
			document.querySelector('.file-input-label').textContent = '📸 ' + fileName;
		});
	</script>

</body>
</html>