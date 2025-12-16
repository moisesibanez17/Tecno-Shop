<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/css/admin-styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>Orden de Computadora</title>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1>💻 Ordenar Computadora</h1>
            <p>Completa el formulario para realizar tu orden</p>
        </div>

        <div class="admin-form-container">
            <form action="../admin/alta_orden_computadora.php" method="POST" class="admin-form">
                <h2 style="color: #6366f1; margin-bottom: 2rem;">📦 Datos de la Orden</h2>

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
                        <label for="id_computadora">🖥️ ID de Computadora</label>
                        <select id="id_computadora" name="id_computadora" required>
                            <option value="1">Computadora #1 - Tejocote Premium</option>
                            <option value="2">Computadora #2 - Unreal Ryzen</option>
                            <option value="3">Computadora #3 - Super Intel</option>
                            <option value="4">Computadora #4 - Econopc</option>
                            <option value="5">Computadora #5 - Canaima</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="cantidad_computadora">📊 Cantidad</label>
                        <input type="number" id="cantidad_computadora" name="cantidad_computadora" value="1" min="1" max="10" required>
                        <small style="color: #94a3b8;">Stock simulado: 10 unidades</small>
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
                    <button type="button" class="btn-secondary" onclick="location.href='catalogo_computadoras.php'">
                        ❌ Cancelar
                    </button>
                </div>
            </form>
        </div>

        <div style="max-width: 800px; margin: 2rem auto; padding: 1.5rem; background: rgba(99, 102, 241, 0.05); border-radius: 12px;">
            <h3 style="color: #6366f1; margin-bottom: 1rem;">💡 Información de Ejemplo</h3>
            <div style="display: grid; gap: 1rem; color: #94a3b8; font-size: 0.9rem;">
                <p><strong>Computadoras disponibles (simuladas):</strong></p>
                <ul style="margin: 0; padding-left: 1.5rem;">
                    <li>ID 1: Tejocote Premium - $25,000 MXN</li>
                    <li>ID 2: Unreal Ryzen - $22,000 MXN</li>
                    <li>ID 3: Super Intel - $20,000 MXN</li>
                    <li>ID 4: Econopc - $12,000 MXN</li>
                    <li>ID 5: Canaima - $15,000 MXN</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
