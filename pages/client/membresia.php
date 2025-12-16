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
    <title>Membresías - TecnoShop</title>
    <style>
        .membership-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }
        .membership-hero {
            text-align: center;
            margin-bottom: 3rem;
        }
        .membership-hero h1 {
            font-size: 3rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }
        .membership-hero p {
            font-size: 1.2rem;
            color: var(--text-secondary);
        }
        .login-section {
            max-width: 500px;
            margin: 0 auto 3rem;
            background: rgba(30, 41, 59, 0.8);
            padding: 2rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .login-section h2 {
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            text-align: center;
            font-size: 1.5rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-group label {
            display: block;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        .form-group input {
            width: 100%;
            padding: 0.875rem;
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            color: var(--text-primary);
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }
        .form-group input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .membership-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        .membership-card {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.9) 0%, rgba(30, 41, 59, 0.7) 100%);
            border-radius: 24px;
            padding: 2.5rem;
            text-align: center;
            border: 2px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        .membership-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: var(--gradient);
        }
        .membership-card.diamond {
            border-color: #b9f2ff;
        }
        .membership-card.diamond::before {
            background: linear-gradient(135deg, #b9f2ff 0%, #7dd3fc 100%);
        }
        .membership-card.gold {
            border-color: #fbbf24;
        }
        .membership-card.gold::before {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
        }
        .membership-card.silver {
            border-color: #94a3b8;
        }
        .membership-card.silver::before {
            background: linear-gradient(135deg, #cbd5e1 0%, #94a3b8 100%);
        }
        .membership-card.bronze {
            border-color: #d97706;
        }
        .membership-card.bronze::before {
            background: linear-gradient(135deg, #f97316 0%, #d97706 100%);
        }
        .membership-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 50px rgba(59, 130, 246, 0.3);
            border-color: var(--primary-color);
        }
        .membership-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(59, 130, 246, 0.1);
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        .membership-card:hover .membership-icon {
            transform: scale(1.1) rotate(5deg);
        }
        .membership-icon img {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }
        .membership-card h3 {
            font-size: 2rem;
            color: var(--text-primary);
            margin-bottom: 1rem;
            font-weight: 700;
        }
        .membership-benefits {
            background: rgba(15, 23, 42, 0.5);
            border-radius: 16px;
            padding: 1.5rem;
            margin: 1.5rem 0;
            text-align: left;
        }
        .membership-benefits ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .membership-benefits li {
            color: var(--text-secondary);
            padding: 0.75rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            font-size: 0.95rem;
            display: flex;
            align-items: center;
        }
        .membership-benefits li:last-child {
            border-bottom: none;
        }
        .membership-benefits li::before {
            content: "★";
            color: var(--accent-color);
            font-size: 1.2rem;
            margin-right: 0.75rem;
        }
        .membership-card button {
            width: 100%;
            margin-top: 1rem;
        }
        .features-comparison {
            margin-top: 4rem;
            background: rgba(30, 41, 59, 0.5);
            padding: 2rem;
            border-radius: 20px;
        }
        .features-comparison h2 {
            text-align: center;
            color: var(--text-primary);
            margin-bottom: 2rem;
            font-size: 2rem;
        }
        @media (max-width: 768px) {
            .membership-hero h1 {
                font-size: 2rem;
            }
            .membership-grid {
                grid-template-columns: 1fr;
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

    <div class="membership-container">
        <div class="membership-hero">
            <h1>🌟 Membresías Exclusivas</h1>
            <p>Únete a nuestro programa de beneficios y obtén descuentos, puntos y ventajas exclusivas</p>
        </div>

        <form action="alta_membresia.php" method="post">
            <div class="login-section">
                <h2>🔐 Ingresa tus Credenciales</h2>
                <div class="form-group">
                    <label for="correo">📧 Correo Electrónico</label>
                    <input type="email" name="correo" id="correo" required placeholder="tu@email.com">
                </div>
                <div class="form-group">
                    <label for="contraseña">🔒 Contraseña</label>
                    <input type="password" name="contraseña" id="contraseña" required placeholder="••••••••">
                </div>
            </div>

            <div class="membership-grid">
                <!-- Membresía Diamante -->
                <div class="membership-card diamond">
                    <div class="membership-icon">
                        <img src="../../assets/images/diamante.png" alt="Diamante">
                    </div>
                    <h3>💎 Diamante</h3>
                    <div class="membership-benefits">
                        <ul>
                            <li>100 puntos por compra</li>
                            <li>Vigencia: 1 año</li>
                            <li>15% descuento en todo</li>
                            <li>Envío gratis siempre</li>
                            <li>Acceso anticipado</li>
                            <li>Soporte VIP 24/7</li>
                        </ul>
                    </div>
                    <button type="submit" name="membresia" value="Diamante" class="btn btn-primary">
                        Seleccionar Diamante
                    </button>
                </div>

                <!-- Membresía Oro -->
                <div class="membership-card gold">
                    <div class="membership-icon">
                        <img src="../../assets/images/oro.png" alt="Oro">
                    </div>
                    <h3>🥇 Oro</h3>
                    <div class="membership-benefits">
                        <ul>
                            <li>50 puntos por compra</li>
                            <li>Vigencia: 6 meses</li>
                            <li>10% descuento</li>
                            <li>Envío gratis +$2000</li>
                            <li>Ofertas exclusivas</li>
                            <li>Soporte prioritario</li>
                        </ul>
                    </div>
                    <button type="submit" name="membresia" value="Oro" class="btn btn-primary">
                        Seleccionar Oro
                    </button>
                </div>

                <!-- Membresía Plata -->
                <div class="membership-card silver">
                    <div class="membership-icon">
                        <img src="../../assets/images/plata.png" alt="Plata">
                    </div>
                    <h3>🥈 Plata</h3>
                    <div class="membership-benefits">
                        <ul>
                            <li>10 puntos por compra</li>
                            <li>Vigencia: 3 meses</li>
                            <li>5% descuento</li>
                            <li>Envío gratis +$5000</li>
                            <li>Ofertas especiales</li>
                            <li>Soporte estándar</li>
                        </ul>
                    </div>
                    <button type="submit" name="membresia" value="Plata" class="btn btn-primary">
                        Seleccionar Plata
                    </button>
                </div>

                <!-- Membresía Bronce -->
                <div class="membership-card bronze">
                    <div class="membership-icon">
                        <img src="../../assets/images/bronce.png" alt="Bronce">
                    </div>
                    <h3>🥉 Bronce</h3>
                    <div class="membership-benefits">
                        <ul>
                            <li>5 puntos por compra</li>
                            <li>Vigencia: 1 mes</li>
                            <li>3% descuento</li>
                            <li>Ofertas mensuales</li>
                            <li>Newsletter exclusivo</li>
                            <li>Programa de puntos</li>
                        </ul>
                    </div>
                    <button type="submit" name="membresia" value="Bronce" class="btn btn-primary">
                        Seleccionar Bronce
                    </button>
                </div>
            </div>

            <div class="features-comparison">
                <h2>✨ Todos los Planes Incluyen</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
                    <div style="text-align: center; padding: 1rem;">
                        <div style="font-size: 3rem; margin-bottom: 0.5rem;">🎁</div>
                        <h3 style="color: var(--text-primary); margin-bottom: 0.5rem;">Recompensas</h3>
                        <p style="color: var(--text-secondary);">Acumula puntos en cada compra</p>
                    </div>
                    <div style="text-align: center; padding: 1rem;">
                        <div style="font-size: 3rem; margin-bottom: 0.5rem;">🎯</div>
                        <h3 style="color: var(--text-primary); margin-bottom: 0.5rem;">Ofertas</h3>
                        <p style="color: var(--text-secondary);">Acceso a ofertas exclusivas</p>
                    </div>
                    <div style="text-align: center; padding: 1rem;">
                        <div style="font-size: 3rem; margin-bottom: 0.5rem;">🔔</div>
                        <h3 style="color: var(--text-primary); margin-bottom: 0.5rem;">Notificaciones</h3>
                        <p style="color: var(--text-secondary);">Entérate primero de lanzamientos</p>
                    </div>
                    <div style="text-align: center; padding: 1rem;">
                        <div style="font-size: 3rem; margin-bottom: 0.5rem;">💳</div>
                        <h3 style="color: var(--text-primary); margin-bottom: 0.5rem;">Sin Compromiso</h3>
                        <p style="color: var(--text-secondary);">Cancela cuando quieras</p>
                    </div>
                </div>
            </div>
        </form>
    </div>

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
                    <a href="membresia.php">Membresías</a>
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
