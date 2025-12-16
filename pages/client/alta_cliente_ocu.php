<?php 
// MODO SIN BASE DE DATOS - Solo simulación
// include '../../includes/conexion.php';
// $mysqli->set_charset("utf8mb4");

// Datos del formulario
$primer_nom = $_POST['primer_nombre'] ?? '';
$segundo_nom = $_POST['segundo_nombre'] ?? '';
$paterno = $_POST['ap_paterno'] ?? '';
$materno = $_POST['ap_materno'] ?? '';
$fec_nac = $_POST['fec_nac'] ?? '';
$fec_reg = date("Y-m-d H:i:s");

$correo = $_POST['correo'] ?? '';
$contraseña = $_POST['contraseña'] ?? '';
$telefono = $_POST['telefono'] ?? '';

$colonia = $_POST['colonia'] ?? '';
$municipio = $_POST['municipio'] ?? '';
$estado = $_POST['estado'] ?? '';
$calle = $_POST['calle'] ?? '';
$casa = $_POST['casa'] ?? '';

// Simulación de registro exitoso
$id_cliente = rand(100, 999);
$registro_exitoso = true;

if ($registro_exitoso) {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../assets/css/admin-styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
        <title>Registro Exitoso</title>
    </head>
    <body>
        <div class="admin-container" style="text-align: center; padding: 4rem 2rem;">
            <div class="admin-form-container" style="max-width: 700px; margin: 0 auto;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">🎉</div>
                <h1 style="color: #10b981; margin-bottom: 1rem;">¡Registro Exitoso!</h1>
                <p style="color: #94a3b8; font-size: 1.1rem; margin-bottom: 2rem;">Tu cuenta ha sido creada con éxito</p>
                
                <div style="background: rgba(16, 185, 129, 0.1); border: 1px solid #10b981; border-radius: 12px; padding: 1.5rem; margin: 2rem 0; text-align: left;">
                    <h3 style="color: #10b981; margin-bottom: 1rem;">👤 Datos del Cliente:</h3>
                    <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>ID Cliente:</strong> #<?php echo $id_cliente; ?></p>
                    <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Nombre:</strong> <?php echo $primer_nom . ' ' . $segundo_nom . ' ' . $paterno . ' ' . $materno; ?></p>
                    <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Correo:</strong> <?php echo $correo; ?></p>
                    <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Teléfono:</strong> <?php echo $telefono; ?></p>
                    <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Fecha Nacimiento:</strong> <?php echo $fec_nac; ?></p>
                    <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Fecha Registro:</strong> <?php echo $fec_reg; ?></p>
                </div>

                <div style="background: rgba(99, 102, 241, 0.1); border: 1px solid #6366f1; border-radius: 12px; padding: 1.5rem; margin: 2rem 0; text-align: left;">
                    <h3 style="color: #6366f1; margin-bottom: 1rem;">📍 Dirección:</h3>
                    <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Calle:</strong> <?php echo $calle; ?> #<?php echo $casa; ?></p>
                    <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Colonia:</strong> <?php echo $colonia; ?></p>
                    <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Municipio:</strong> <?php echo $municipio; ?></p>
                    <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Estado:</strong> <?php echo $estado; ?></p>
                </div>

                <p style="color: #f59e0b; margin: 1rem 0; font-size: 0.9rem;">
                    ⚠️ <strong>Modo Sin Base de Datos:</strong> Los datos no se guardaron permanentemente
                </p>
                
                <button class="btn-success" onclick="location.href='login.php'">
                    Ir al Login
                </button>
            </div>
        </div>
    </body>
    </html>
    <?php
} else {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../assets/css/admin-styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
        <title>Error en Registro</title>
    </head>
    <body>
        <div class="admin-container" style="text-align: center; padding: 4rem 2rem;">
            <div class="admin-form-container" style="max-width: 600px; margin: 0 auto;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">❌</div>
                <h1 style="color: #ef4444; margin-bottom: 1rem;">Error en el Registro</h1>
                <p style="color: #94a3b8; font-size: 1.1rem; margin-bottom: 2rem;">Hubo un error al procesar tu registro</p>
                <button class="btn-secondary" onclick="history.back()">
                    Volver
                </button>
            </div>
        </div>
    </body>
    </html>
    <?php
}
?>
