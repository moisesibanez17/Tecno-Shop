<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/admin-styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<title>Gestión de Órdenes - TecnoShop Admin</title>
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
					<div class="admin-user-role">Gestión de Órdenes</div>
				</div>
				<button class="admin-logout-btn" onclick="location.href='../../index.php'">
					🚪 Salir
				</button>
			</div>
		</nav>
	</header>

	<div class="admin-container">
		<a href="menu_admin.php" class="back-button">← Volver al Panel</a>
		
		<h1 class="admin-page-title">Gestión de Órdenes</h1>
		<p class="admin-page-subtitle">Administra las órdenes de productos</p>

		<!-- Stats Cards -->
		<div class="stats-grid" style="margin-bottom: 3rem;">
			<div class="stat-card" style="--stat-color: #06b6d4;">
				<div class="stat-label">Total de Órdenes</div>
				<div class="stat-value">23</div>
			</div>
			<div class="stat-card" style="--stat-color: #10b981;">
				<div class="stat-label">Completadas Hoy</div>
				<div class="stat-value">8</div>
			</div>
			<div class="stat-card" style="--stat-color: #f59e0b;">
				<div class="stat-label">Pendientes</div>
				<div class="stat-value">5</div>
			</div>
			<div class="stat-card" style="--stat-color: #8b5cf6;">
				<div class="stat-label">En Proceso</div>
				<div class="stat-value">10</div>
			</div>
		</div>

		<!-- Alert Banner -->
		<div style="background: rgba(249, 158, 11, 0.1); border: 1px solid #f59e0b; border-radius: 12px; padding: 1rem; margin-bottom: 2rem; text-align: center;">
			<p style="color: #f59e0b; margin: 0;">
				⚠️ <strong>Modo Sin Base de Datos:</strong> Mostrando datos de ejemplo para demostración
			</p>
		</div>

		<!-- Órdenes de Computadoras -->
		<div class="admin-form-container" style="margin-bottom: 3rem;">
			<div class="form-header">
				<h2>💻 Órdenes de Computadoras</h2>
				<p>Listado de órdenes de computadoras completas</p>
			</div>

			<div style="overflow-x: auto;">
				<table style="width: 100%; border-collapse: collapse; background: rgba(255, 255, 255, 0.02); border-radius: 12px; overflow: hidden;">
					<thead>
						<tr style="background: rgba(99, 102, 241, 0.1); border-bottom: 2px solid rgba(99, 102, 241, 0.3);">
							<th style="padding: 1rem; text-align: left; color: #6366f1; font-weight: 600;">ID Orden</th>
							<th style="padding: 1rem; text-align: left; color: #6366f1; font-weight: 600;">Cliente</th>
							<th style="padding: 1rem; text-align: left; color: #6366f1; font-weight: 600;">Computadora</th>
							<th style="padding: 1rem; text-align: center; color: #6366f1; font-weight: 600;">Cantidad</th>
							<th style="padding: 1rem; text-align: center; color: #6366f1; font-weight: 600;">Fecha</th>
							<th style="padding: 1rem; text-align: center; color: #6366f1; font-weight: 600;">Estado</th>
						</tr>
					</thead>
					<tbody>
						<tr style="border-bottom: 1px solid rgba(148, 163, 184, 0.1);">
							<td style="padding: 1rem; color: #94a3b8;">#1001</td>
							<td style="padding: 1rem; color: #cbd5e1;">Juan Pérez</td>
							<td style="padding: 1rem; color: #cbd5e1;">Tejocote Premium</td>
							<td style="padding: 1rem; text-align: center; color: #cbd5e1;">2</td>
							<td style="padding: 1rem; text-align: center; color: #94a3b8;">16/12/2025</td>
							<td style="padding: 1rem; text-align: center;"><span style="background: #10b981; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem;">Completado</span></td>
						</tr>
						<tr style="border-bottom: 1px solid rgba(148, 163, 184, 0.1);">
							<td style="padding: 1rem; color: #94a3b8;">#1002</td>
							<td style="padding: 1rem; color: #cbd5e1;">María García</td>
							<td style="padding: 1rem; color: #cbd5e1;">Unreal Ryzen</td>
							<td style="padding: 1rem; text-align: center; color: #cbd5e1;">1</td>
							<td style="padding: 1rem; text-align: center; color: #94a3b8;">16/12/2025</td>
							<td style="padding: 1rem; text-align: center;"><span style="background: #f59e0b; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem;">Pendiente</span></td>
						</tr>
						<tr style="border-bottom: 1px solid rgba(148, 163, 184, 0.1);">
							<td style="padding: 1rem; color: #94a3b8;">#1003</td>
							<td style="padding: 1rem; color: #cbd5e1;">Carlos López</td>
							<td style="padding: 1rem; color: #cbd5e1;">Super Intel</td>
							<td style="padding: 1rem; text-align: center; color: #cbd5e1;">3</td>
							<td style="padding: 1rem; text-align: center; color: #94a3b8;">15/12/2025</td>
							<td style="padding: 1rem; text-align: center;"><span style="background: #8b5cf6; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem;">En Proceso</span></td>
						</tr>
						<tr style="border-bottom: 1px solid rgba(148, 163, 184, 0.1);">
							<td style="padding: 1rem; color: #94a3b8;">#1004</td>
							<td style="padding: 1rem; color: #cbd5e1;">Ana Martínez</td>
							<td style="padding: 1rem; color: #cbd5e1;">Econopc</td>
							<td style="padding: 1rem; text-align: center; color: #cbd5e1;">1</td>
							<td style="padding: 1rem; text-align: center; color: #94a3b8;">15/12/2025</td>
							<td style="padding: 1rem; text-align: center;"><span style="background: #10b981; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem;">Completado</span></td>
						</tr>
						<tr>
							<td style="padding: 1rem; color: #94a3b8;">#1005</td>
							<td style="padding: 1rem; color: #cbd5e1;">Luis Rodríguez</td>
							<td style="padding: 1rem; color: #cbd5e1;">Canaima</td>
							<td style="padding: 1rem; text-align: center; color: #cbd5e1;">2</td>
							<td style="padding: 1rem; text-align: center; color: #94a3b8;">14/12/2025</td>
							<td style="padding: 1rem; text-align: center;"><span style="background: #10b981; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem;">Completado</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<!-- Órdenes de Piezas -->
		<div class="admin-form-container">
			<div class="form-header">
				<h2>🔧 Órdenes de Piezas</h2>
				<p>Listado de órdenes de componentes individuales</p>
			</div>

			<div style="overflow-x: auto;">
				<table style="width: 100%; border-collapse: collapse; background: rgba(255, 255, 255, 0.02); border-radius: 12px; overflow: hidden;">
					<thead>
						<tr style="background: rgba(139, 92, 246, 0.1); border-bottom: 2px solid rgba(139, 92, 246, 0.3);">
							<th style="padding: 1rem; text-align: left; color: #8b5cf6; font-weight: 600;">ID Orden</th>
							<th style="padding: 1rem; text-align: left; color: #8b5cf6; font-weight: 600;">Cliente</th>
							<th style="padding: 1rem; text-align: left; color: #8b5cf6; font-weight: 600;">Pieza</th>
							<th style="padding: 1rem; text-align: center; color: #8b5cf6; font-weight: 600;">Cantidad</th>
							<th style="padding: 1rem; text-align: center; color: #8b5cf6; font-weight: 600;">Fecha</th>
							<th style="padding: 1rem; text-align: center; color: #8b5cf6; font-weight: 600;">Estado</th>
						</tr>
					</thead>
					<tbody>
						<tr style="border-bottom: 1px solid rgba(148, 163, 184, 0.1);">
							<td style="padding: 1rem; color: #94a3b8;">#2001</td>
							<td style="padding: 1rem; color: #cbd5e1;">Pedro Sánchez</td>
							<td style="padding: 1rem; color: #cbd5e1;">NVIDIA RTX 3050ti</td>
							<td style="padding: 1rem; text-align: center; color: #cbd5e1;">2</td>
							<td style="padding: 1rem; text-align: center; color: #94a3b8;">16/12/2025</td>
							<td style="padding: 1rem; text-align: center;"><span style="background: #10b981; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem;">Completado</span></td>
						</tr>
						<tr style="border-bottom: 1px solid rgba(148, 163, 184, 0.1);">
							<td style="padding: 1rem; color: #94a3b8;">#2002</td>
							<td style="padding: 1rem; color: #cbd5e1;">Laura Díaz</td>
							<td style="padding: 1rem; color: #cbd5e1;">AMD Ryzen 3800x</td>
							<td style="padding: 1rem; text-align: center; color: #cbd5e1;">1</td>
							<td style="padding: 1rem; text-align: center; color: #94a3b8;">16/12/2025</td>
							<td style="padding: 1rem; text-align: center;"><span style="background: #8b5cf6; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem;">En Proceso</span></td>
						</tr>
						<tr style="border-bottom: 1px solid rgba(148, 163, 184, 0.1);">
							<td style="padding: 1rem; color: #94a3b8;">#2003</td>
							<td style="padding: 1rem; color: #cbd5e1;">Roberto Gómez</td>
							<td style="padding: 1rem; color: #cbd5e1;">RAM HyperX 8GB</td>
							<td style="padding: 1rem; text-align: center; color: #cbd5e1;">4</td>
							<td style="padding: 1rem; text-align: center; color: #94a3b8;">15/12/2025</td>
							<td style="padding: 1rem; text-align: center;"><span style="background: #10b981; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem;">Completado</span></td>
						</tr>
						<tr style="border-bottom: 1px solid rgba(148, 163, 184, 0.1);">
							<td style="padding: 1rem; color: #94a3b8;">#2004</td>
							<td style="padding: 1rem; color: #cbd5e1;">Sofia Torres</td>
							<td style="padding: 1rem; color: #cbd5e1;">Teclado Razer</td>
							<td style="padding: 1rem; text-align: center; color: #cbd5e1;">2</td>
							<td style="padding: 1rem; text-align: center; color: #94a3b8;">15/12/2025</td>
							<td style="padding: 1rem; text-align: center;"><span style="background: #f59e0b; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem;">Pendiente</span></td>
						</tr>
						<tr style="border-bottom: 1px solid rgba(148, 163, 184, 0.1);">
							<td style="padding: 1rem; color: #94a3b8;">#2005</td>
							<td style="padding: 1rem; color: #cbd5e1;">Miguel Fernández</td>
							<td style="padding: 1rem; color: #cbd5e1;">Gigabyte A320M</td>
							<td style="padding: 1rem; text-align: center; color: #cbd5e1;">1</td>
							<td style="padding: 1rem; text-align: center; color: #94a3b8;">14/12/2025</td>
							<td style="padding: 1rem; text-align: center;"><span style="background: #10b981; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem;">Completado</span></td>
						</tr>
						<tr>
							<td style="padding: 1rem; color: #94a3b8;">#2006</td>
							<td style="padding: 1rem; color: #cbd5e1;">Elena Castro</td>
							<td style="padding: 1rem; color: #cbd5e1;">Mouse Razer</td>
							<td style="padding: 1rem; text-align: center; color: #cbd5e1;">3</td>
							<td style="padding: 1rem; text-align: center; color: #94a3b8;">14/12/2025</td>
							<td style="padding: 1rem; text-align: center;"><span style="background: #10b981; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem;">Completado</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>
