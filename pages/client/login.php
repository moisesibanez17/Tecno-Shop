<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/global-styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<title>Iniciar Sesión - TecnoShop</title>
	<style>
		body {
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			min-height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 20px;
			font-family: 'Poppins', sans-serif;
		}

		.login-container {
			background: white;
			border-radius: 20px;
			box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
			overflow: hidden;
			max-width: 1000px;
			width: 100%;
			display: grid;
			grid-template-columns: 1fr 1fr;
			min-height: 600px;
		}

		.login-left {
			padding: 60px 50px;
			display: flex;
			flex-direction: column;
			justify-content: center;
		}

		.login-right {
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 40px;
		}

		.login-right img {
			max-width: 100%;
			height: auto;
			filter: brightness(0) invert(1);
			opacity: 0.9;
		}

		.login-header {
			margin-bottom: 40px;
		}

		.login-header h1 {
			color: #2d3748;
			font-size: 32px;
			font-weight: 700;
			margin: 0 0 10px 0;
		}

		.login-header p {
			color: #718096;
			font-size: 16px;
			margin: 0;
		}

		.form-group {
			margin-bottom: 24px;
		}

		.form-group label {
			display: block;
			color: #2d3748;
			font-size: 14px;
			font-weight: 600;
			margin-bottom: 8px;
		}

		.form-group input {
			width: 100%;
			padding: 12px 16px;
			border: 2px solid #e2e8f0;
			border-radius: 10px;
			font-size: 15px;
			transition: all 0.3s;
			font-family: 'Poppins', sans-serif;
		}

		.form-group input:focus {
			outline: none;
			border-color: #667eea;
			box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
		}

		.btn-login {
			width: 100%;
			padding: 14px;
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			color: white;
			border: none;
			border-radius: 10px;
			font-size: 16px;
			font-weight: 600;
			cursor: pointer;
			transition: transform 0.2s, box-shadow 0.2s;
			margin-top: 10px;
			font-family: 'Poppins', sans-serif;
		}

		.btn-login:hover {
			transform: translateY(-2px);
			box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
		}

		.btn-create {
			width: 100%;
			padding: 12px;
			background: white;
			color: #667eea;
			border: 2px solid #667eea;
			border-radius: 10px;
			font-size: 15px;
			font-weight: 600;
			cursor: pointer;
			transition: all 0.3s;
			margin-top: 15px;
			font-family: 'Poppins', sans-serif;
		}

		.btn-create:hover {
			background: #667eea;
			color: white;
		}

		.divider {
			text-align: center;
			margin: 30px 0;
			position: relative;
		}

		.divider::before {
			content: '';
			position: absolute;
			left: 0;
			top: 50%;
			width: 100%;
			height: 1px;
			background: #e2e8f0;
		}

		.divider span {
			background: white;
			padding: 0 15px;
			color: #718096;
			font-size: 14px;
			position: relative;
			z-index: 1;
		}

		.back-button {
			position: absolute;
			top: 20px;
			left: 20px;
			background: white;
			color: #667eea;
			border: none;
			padding: 10px 20px;
			border-radius: 10px;
			font-weight: 600;
			cursor: pointer;
			display: flex;
			align-items: center;
			gap: 8px;
			transition: all 0.3s;
			font-family: 'Poppins', sans-serif;
		}

		.back-button:hover {
			background: #f7fafc;
			transform: translateX(-5px);
		}

		@media (max-width: 768px) {
			.login-container {
				grid-template-columns: 1fr;
			}

			.login-right {
				display: none;
			}

			.login-left {
				padding: 40px 30px;
			}

			.back-button {
				position: static;
				margin-bottom: 20px;
				width: fit-content;
			}
		}
	</style>
</head>
<body>
	<button class="back-button" onclick="location.href='../../index.php'">
		<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
			<line x1="19" y1="12" x2="5" y2="12"></line>
			<polyline points="12 19 5 12 12 5"></polyline>
		</svg>
		Volver al inicio
	</button>

	<div class="login-container">
		<div class="login-left">
			<div class="login-header">
				<h1>¡Bienvenido de nuevo!</h1>
				<p>Ingresa tus credenciales para continuar</p>
			</div>

			<form action="inicio_sesion.php" method="post">
				<div class="form-group">
					<label for="correo">Correo electrónico</label>
					<input type="email" id="correo" name="correo" required placeholder="ejemplo@correo.com">
				</div>

				<div class="form-group">
					<label for="contraseña">Contraseña</label>
					<input type="password" id="contraseña" name="contraseña" required placeholder="Ingresa tu contraseña">
				</div>

				<button type="submit" class="btn-login">Iniciar sesión</button>

				<div class="divider">
					<span>¿No tienes cuenta?</span>
				</div>

				<button type="button" class="btn-create" onclick="location.href='alta_cliente.php'">
					Crear cuenta nueva
				</button>
			</form>
		</div>

		<div class="login-right">
			<img src="../../assets/images/logo.png" alt="Logo TechPro Store">
		</div>
	</div>
</body>
</html>