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
	<title>Registro de Clientes - TecnoShop</title>
	<style>
		.register-container {
			max-width: 900px;
			margin: 2rem auto;
			padding: 0 2rem;
		}
		.register-header {
			text-align: center;
			margin-bottom: 3rem;
		}
		.register-header h1 {
			font-size: 2.5rem;
			background: var(--gradient);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-clip: text;
			margin-bottom: 0.5rem;
		}
		.register-header p {
			color: var(--text-secondary);
			font-size: 1.1rem;
		}
		.register-form {
			background: linear-gradient(135deg, rgba(30, 41, 59, 0.9) 0%, rgba(30, 41, 59, 0.7) 100%);
			border-radius: 24px;
			padding: 2.5rem;
			border: 1px solid rgba(255, 255, 255, 0.1);
			box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
		}
		.form-section {
			margin-bottom: 2.5rem;
		}
		.form-section:last-of-type {
			margin-bottom: 2rem;
		}
		.form-section h2 {
			color: var(--text-primary);
			font-size: 1.5rem;
			margin-bottom: 1.5rem;
			padding-bottom: 0.75rem;
			border-bottom: 2px solid rgba(59, 130, 246, 0.3);
			display: flex;
			align-items: center;
			gap: 0.5rem;
		}
		.form-section h2::before {
			content: attr(data-icon);
			font-size: 1.75rem;
		}
		.form-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
			gap: 1.5rem;
		}
		.form-group {
			display: flex;
			flex-direction: column;
		}
		.form-group label {
			color: var(--text-primary);
			font-weight: 500;
			margin-bottom: 0.5rem;
			font-size: 0.95rem;
		}
		.form-group label .required {
			color: #ef4444;
			margin-left: 0.25rem;
		}
		.form-group input {
			padding: 0.875rem;
			background: rgba(15, 23, 42, 0.8);
			border: 1px solid rgba(255, 255, 255, 0.1);
			border-radius: 12px;
			color: var(--text-primary);
			font-size: 1rem;
			font-family: 'Poppins', sans-serif;
			transition: all 0.3s ease;
		}
		.form-group input:focus {
			outline: none;
			border-color: var(--primary-color);
			box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
			background: rgba(15, 23, 42, 0.95);
		}
		.form-group input::placeholder {
			color: rgba(203, 213, 225, 0.5);
		}
		.form-group.full-width {
			grid-column: 1 / -1;
		}
		.submit-section {
			display: flex;
			gap: 1rem;
			margin-top: 2rem;
		}
		.submit-section button {
			flex: 1;
			padding: 1rem 2rem;
			font-size: 1.1rem;
		}
		.btn-secondary-outline {
			background: transparent;
			border: 2px solid var(--primary-color);
			color: var(--primary-color);
			border-radius: 12px;
			font-weight: 600;
			cursor: pointer;
			transition: all 0.3s ease;
			font-family: 'Poppins', sans-serif;
		}
		.btn-secondary-outline:hover {
			background: var(--primary-color);
			color: white;
			transform: translateY(-2px);
		}
		.login-link {
			text-align: center;
			margin-top: 2rem;
			color: var(--text-secondary);
		}
		.login-link a {
			color: var(--primary-color);
			text-decoration: none;
			font-weight: 600;
			transition: color 0.3s ease;
		}
		.login-link a:hover {
			color: var(--accent-color);
		}
		.password-strength {
			margin-top: 0.5rem;
			font-size: 0.85rem;
			color: var(--text-secondary);
		}
		@media (max-width: 768px) {
			.register-header h1 {
				font-size: 2rem;
			}
			.register-form {
				padding: 1.5rem;
			}
			.form-grid {
				grid-template-columns: 1fr;
			}
			.submit-section {
				flex-direction: column;
			}
		}
	</style>
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
				<a href="membresia.php" class="nav-link">Membresías</a>
				<a href="login.php" class="nav-link-btn">Iniciar Sesión</a>
			</div>
		</nav>
	</header>

	<div class="register-container">
		<div class="register-header">
			<h1>Crea tu Cuenta</h1>
			<p>Únete a TecnoShop y disfruta de beneficios exclusivos</p>
		</div>

		<form action="alta_cliente_ocu.php" method="post" class="register-form">
			<!-- Datos Personales -->
			<div class="form-section">
				<h2 data-icon="👤">Datos Personales</h2>
				<div class="form-grid">
					<div class="form-group">
						<label for="primer_nombre">Primer Nombre<span class="required">*</span></label>
						<input type="text" id="primer_nombre" name="primer_nombre" required placeholder="Juan">
					</div>
					<div class="form-group">
						<label for="segundo_nombre">Segundo Nombre</label>
						<input type="text" id="segundo_nombre" name="segundo_nombre" placeholder="Carlos (opcional)">
					</div>
					<div class="form-group">
						<label for="ap_paterno">Apellido Paterno<span class="required">*</span></label>
						<input type="text" id="ap_paterno" name="ap_paterno" required placeholder="Pérez">
					</div>
					<div class="form-group">
						<label for="ap_materno">Apellido Materno<span class="required">*</span></label>
						<input type="text" id="ap_materno" name="ap_materno" required placeholder="García">
					</div>
					<div class="form-group">
						<label for="fec_nac">Fecha de Nacimiento<span class="required">*</span></label>
						<input type="date" id="fec_nac" name="fec_nac" required>
					</div>
					<div class="form-group">
						<label for="telefono">Teléfono<span class="required">*</span></label>
						<input type="tel" id="telefono" name="telefono" required placeholder="(555) 123-4567">
					</div>
				</div>
			</div>

			<!-- Datos de Cuenta -->
			<div class="form-section">
				<h2 data-icon="🔐">Datos de Cuenta</h2>
				<div class="form-grid">
					<div class="form-group full-width">
						<label for="correo">Correo Electrónico<span class="required">*</span></label>
						<input type="email" id="correo" name="correo" required placeholder="tucorreo@ejemplo.com">
					</div>
					<div class="form-group">
						<label for="contraseña">Contraseña<span class="required">*</span></label>
						<input type="password" id="contraseña" name="contraseña" required placeholder="••••••••" minlength="6">
						<div class="password-strength">Mínimo 6 caracteres</div>
					</div>
					<div class="form-group">
						<label for="confirmar">Confirmar Contraseña<span class="required">*</span></label>
						<input type="password" id="confirmar" name="confirmar" required placeholder="••••••••" minlength="6">
					</div>
				</div>
			</div>

			<!-- Dirección -->
			<div class="form-section">
				<h2 data-icon="📍">Dirección de Entrega</h2>
				<div class="form-grid">
					<div class="form-group">
						<label for="calle">Calle<span class="required">*</span></label>
						<input type="text" id="calle" name="calle" required placeholder="Av. Principal">
					</div>
					<div class="form-group">
						<label for="casa">Número<span class="required">*</span></label>
						<input type="text" id="casa" name="casa" required placeholder="123">
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

			<!-- Botones -->
			<div class="submit-section">
				<button type="button" class="btn-secondary-outline" onclick="location.href='login.php'">
					Cancelar
				</button>
				<button type="submit" class="btn btn-primary">
					✓ Crear mi Cuenta
				</button>
			</div>

			<div class="login-link">
				¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a>
			</div>
		</form>
	</div>

	<!-- Footer -->
	<footer class="footer" style="margin-top: 4rem;">
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