<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/css/admin-styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>Orden de Pieza</title>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1>🔧 Ordenar Pieza</h1>
            <p>Completa el formulario para realizar tu orden</p>
        </div>

        <div class="admin-form-container">
            <form action="../admin/alta_orden_pieza.php" method="POST" class="admin-form">
                <h2 style="color: #8b5cf6; margin-bottom: 2rem;">📦 Datos de la Orden</h2>

                <div class="form-grid">
                    <div class="form-group">
                        <label for="correo">📧 Correo Electrónico</label>
                        <input type="email" id="correo" name="correo" value="cliente@example.com" required>
                        <small style="color: #94a3b8;">En modo simulación, cualquier correo es válido</small>
                    </div>

                    <div class="form-group">
                        <label for="contraseña">🔒 Contraseña</label>
                        <input type="password" id="contraseña" name="contraseña" value="123456" required>
                        <small style="color: #94a3b8;">En modo simulación, cualquier contraseña funciona</small>
                    </div>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label for="id_pieza">⚙️ Pieza a Ordenar</label>
                        <select id="id_pieza" name="id_pieza" required>
                            <option value="1">Pieza #1 - NVIDIA RTX 3050ti</option>
                            <option value="2">Pieza #2 - AMD Ryzen 3800x</option>
                            <option value="3">Pieza #3 - Intel Core i7</option>
                            <option value="4">Pieza #4 - RAM HyperX 8GB</option>
                            <option value="5">Pieza #5 - Gigabyte A320M</option>
                            <option value="6">Pieza #6 - Fuente 600W</option>
                            <option value="7">Pieza #7 - Gabinete Corsair</option>
                            <option value="8">Pieza #8 - Teclado Razer</option>
                            <option value="9">Pieza #9 - Mouse Razer</option>
                            <option value="10">Pieza #10 - Razer Headset</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="cantidad_pieza">📊 Cantidad</label>
                        <input type="number" id="cantidad_pieza" name="cantidad_pieza" value="1" min="1" max="15" required>
                        <small style="color: #94a3b8;">Stock simulado: 15 unidades</small>
                    </div>
                </div>

                <div style="background: rgba(249, 158, 11, 0.1); border: 1px solid #f59e0b; border-radius: 12px; padding: 1rem; margin: 1.5rem 0;">
                    <p style="color: #f59e0b; margin: 0; font-size: 0.9rem;">
                        ⚠️ <strong>Modo Sin Base de Datos:</strong> Esta es una simulación. Los datos no se guardarán permanentemente.
                    </p>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-success">
                        ✅ Realizar Orden
                    </button>
                    <button type="button" class="btn-secondary" onclick="location.href='catalogo_piezas.php'">
                        ❌ Cancelar
                    </button>
                </div>
            </form>
        </div>

        <div style="max-width: 800px; margin: 2rem auto; padding: 1.5rem; background: rgba(139, 92, 246, 0.05); border-radius: 12px;">
            <h3 style="color: #8b5cf6; margin-bottom: 1rem;">💡 Piezas Disponibles (Simuladas)</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; color: #94a3b8; font-size: 0.9rem;">
                <div>
                    <strong style="color: #6366f1;">Tarjetas de Video:</strong>
                    <ul style="margin: 0.5rem 0; padding-left: 1.5rem;">
                        <li>NVIDIA RTX 3050ti - $8,500</li>
                    </ul>
                </div>
                <div>
                    <strong style="color: #6366f1;">Procesadores:</strong>
                    <ul style="margin: 0.5rem 0; padding-left: 1.5rem;">
                        <li>AMD Ryzen 3800x - $5,200</li>
                        <li>Intel Core i7 - $6,000</li>
                    </ul>
                </div>
                <div>
                    <strong style="color: #6366f1;">Memoria RAM:</strong>
                    <ul style="margin: 0.5rem 0; padding-left: 1.5rem;">
                        <li>HyperX 8GB - $900</li>
                    </ul>
                </div>
                <div>
                    <strong style="color: #6366f1;">Placas Base:</strong>
                    <ul style="margin: 0.5rem 0; padding-left: 1.5rem;">
                        <li>Gigabyte A320M - $1,500</li>
                    </ul>
                </div>
                <div>
                    <strong style="color: #6366f1;">Componentes:</strong>
                    <ul style="margin: 0.5rem 0; padding-left: 1.5rem;">
                        <li>Fuente 600W - $1,200</li>
                        <li>Gabinete Corsair - $1,800</li>
                    </ul>
                </div>
                <div>
                    <strong style="color: #6366f1;">Periféricos:</strong>
                    <ul style="margin: 0.5rem 0; padding-left: 1.5rem;">
                        <li>Teclado Razer - $1,200</li>
                        <li>Mouse Razer - $800</li>
                        <li>Razer Headset - $1,500</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
