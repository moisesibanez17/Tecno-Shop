<?php 
// MODO SIN BASE DE DATOS - Solo simulación
// include '../../includes/conexion.php';
// $mysqli->set_charset("utf8mb4");

// Datos del formulario
$primer_nom = $_POST['primer_nombre'] ?? 'Sin nombre';
$segundo_nom = $_POST['segundo_nombre'] ?? '';
$paterno = $_POST['ap_paterno'] ?? 'Sin apellido';
$materno = $_POST['ap_materno'] ?? 'Sin apellido';
$fec_nac = $_POST['fec_nac'] ?? date('Y-m-d');
$fec_reg = date("Y-m-d H:i:s");
$telefono = $_POST['telefono'] ?? 'Sin teléfono';
$sucursal = $_POST['sucursal'] ?? 1;

$colonia = $_POST['colonia'] ?? 'Sin colonia';
$municipio = $_POST['municipio'] ?? 'Sin municipio';
$estado = $_POST['estado'] ?? 'Sin estado';
$calle = $_POST['calle'] ?? 'Sin calle';
$casa = $_POST['casa'] ?? 0;


// SIMULACIÓN DE ÉXITO (sin base de datos)
$id_empleado = rand(1, 1000); // ID simulado

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../assets/css/admin-styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>Empleado Registrado</title>
                        </head>
                        <body>
    <div class="admin-container" style="padding: 4rem 2rem;">
        <div class="admin-form-container" style="max-width: 700px; margin: 0 auto; text-align: center;">
            <div style="font-size: 4rem; margin-bottom: 1rem;">✅</div>
            <h1 style="color: #10b981; margin-bottom: 1rem;">¡Empleado Registrado!</h1>
            <div style="background: rgba(16, 185, 129, 0.1); border: 1px solid #10b981; border-radius: 12px; padding: 1.5rem; margin: 2rem 0; text-align: left;">
                <h3 style="color: #10b981; margin-bottom: 1rem;">👤 Datos Registrados:</h3>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Nombre:</strong> <?php echo htmlspecialchars($primer_nom . ' ' . $segundo_nom . ' ' . $paterno . ' ' . $materno); ?></p>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Teléfono:</strong> <?php echo htmlspecialchars($telefono); ?></p>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Fecha de Nacimiento:</strong> <?php echo $fec_nac; ?></p>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Sucursal:</strong> ID #<?php echo $sucursal; ?></p>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Dirección:</strong> <?php echo htmlspecialchars($calle . ' #' . $casa . ', ' . $colonia . ', ' . $municipio . ', ' . $estado); ?></p>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>ID Simulado:</strong> #<?php echo $id_empleado; ?></p>
            </div>
            <p style="color: #f59e0b; margin: 1rem 0; font-size: 0.9rem;">
                ⚠️ <strong>Modo Sin Base de Datos:</strong> Los datos no se guardaron permanentemente
            </p>
            <button class="btn-success" onclick="location.href='menu_admin.php'" style="margin-top: 1rem;">
                ← Volver al Panel
            </button>
        </div>
    </div>
</body>
</html>
