<?php
session_start();
// MODO SIN BASE DE DATOS - Solo simulación
// include '../../includes/conexion.php';
// $mysqli->set_charset("utf8mb4");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'] ?? '';
    $contraseña = $_POST['contraseña'] ?? '';
    $id_pieza = $_POST['id_pieza'] ?? 0;
    $cantidad_restar = $_POST['cantidad_pieza'] ?? 1;

    // Simulación de autenticación exitosa
    $autenticado = true;
    $id_cliente = rand(1, 100);
    $id_orden = rand(1000, 9999);
    $stock_actual = 15; // Stock simulado
    $nuevo_stock = $stock_actual - $cantidad_restar;

    if ($autenticado && $nuevo_stock >= 0) {
        // Simulación de orden exitosa
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="../../assets/css/admin-styles.css">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
            <title>Orden de Pieza Exitosa</title>
        </head>
        <body>
            <div class="admin-container" style="text-align: center; padding: 4rem 2rem;">
                <div class="admin-form-container" style="max-width: 600px; margin: 0 auto;">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">✅</div>
                    <h1 style="color: #10b981; margin-bottom: 1rem;">¡Orden de Pieza Completada!</h1>
                    <div style="background: rgba(16, 185, 129, 0.1); border: 1px solid #10b981; border-radius: 12px; padding: 1.5rem; margin: 2rem 0; text-align: left;">
                        <h3 style="color: #10b981; margin-bottom: 1rem;">🔧 Detalles de la Orden:</h3>
                        <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>ID Orden:</strong> #<?php echo $id_orden; ?></p>
                        <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>ID Cliente:</strong> #<?php echo $id_cliente; ?></p>
                        <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>ID Pieza:</strong> #<?php echo $id_pieza; ?></p>
                        <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Cantidad:</strong> <?php echo $cantidad_restar; ?></p>
                        <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Stock restante:</strong> <?php echo $nuevo_stock; ?></p>
                    </div>
                    <p style="color: #f59e0b; margin: 1rem 0; font-size: 0.9rem;">
                        ⚠️ <strong>Modo Sin Base de Datos:</strong> Los datos no se guardaron permanentemente
                    </p>
                    <button class="btn-success" onclick="location.href='../client/catalogo_piezas.php'">
                        Volver al Catálogo de Piezas
                    </button>
                </div>
            </div>
        </body>
        </html>
        <?php
    } else if ($nuevo_stock < 0) {
        // Stock insuficiente
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="../../assets/css/admin-styles.css">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
            <title>Stock Insuficiente</title>
        </head>
        <body>
            <div class="admin-container" style="text-align: center; padding: 4rem 2rem;">
                <div class="admin-form-container" style="max-width: 600px; margin: 0 auto;">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">📦</div>
                    <h1 style="color: #ef4444; margin-bottom: 1rem;">Stock Insuficiente</h1>
                    <p style="color: #94a3b8; font-size: 1.1rem; margin-bottom: 2rem;">
                        No hay suficiente stock disponible para esta pieza<br>
                        Stock actual: <?php echo $stock_actual; ?><br>
                        Cantidad solicitada: <?php echo $cantidad_restar; ?>
                    </p>
                    <p style="color: #f59e0b; margin: 1rem 0; font-size: 0.9rem;">
                        ⚠️ <strong>Modo Simulado:</strong> Datos de ejemplo
                    </p>
                    <button class="btn-secondary" onclick="history.back()">
                        Volver
                    </button>
                </div>
            </div>
        </body>
        </html>
        <?php
    } else {
        // No autenticado
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="../../assets/css/admin-styles.css">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
            <title>Error de Autenticación</title>
        </head>
        <body>
            <div class="admin-container" style="text-align: center; padding: 4rem 2rem;">
                <div class="admin-form-container" style="max-width: 600px; margin: 0 auto;">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">🔒</div>
                    <h1 style="color: #ef4444; margin-bottom: 1rem;">Error de Autenticación</h1>
                    <p style="color: #94a3b8; font-size: 1.1rem; margin-bottom: 2rem;">El correo o la contraseña no coinciden</p>
                    <p style="color: #f59e0b; margin: 1rem 0; font-size: 0.9rem;">
                        ⚠️ <strong>Modo Sin Base de Datos:</strong> Todas las órdenes se procesan exitosamente
                    </p>
                    <button class="btn-secondary" onclick="history.back()">
                        Volver
                    </button>
                </div>
            </div>
        </body>
        </html>
        <?php
    }
} else {
    // Si se accede sin POST
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../assets/css/admin-styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
        <title>Acceso Denegado</title>
    </head>
    <body>
        <div class="admin-container" style="text-align: center; padding: 4rem 2rem;">
            <div class="admin-form-container" style="max-width: 600px; margin: 0 auto;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">⚠️</div>
                <h1 style="color: #f59e0b; margin-bottom: 1rem;">Acceso No Permitido</h1>
                <p style="color: #94a3b8; font-size: 1.1rem; margin-bottom: 2rem;">Este archivo solo procesa órdenes enviadas desde el formulario</p>
                <button class="btn-secondary" onclick="location.href='../client/catalogo_piezas.php'">
                    Ir al Catálogo de Piezas
                </button>
            </div>
        </div>
    </body>
    </html>
    <?php
}
?>
