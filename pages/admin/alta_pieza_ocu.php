<?php 
// MODO SIN BASE DE DATOS - Solo simulación
// include '../../includes/conexion.php';
// $mysqli->set_charset("utf8mb4");

// Datos del formulario
$nom = $_POST['nombre'] ?? 'Sin nombre';
$precio = $_POST['precio'] ?? 0;
$stock = $_POST['stock'] ?? 0;

//cargar imagen de la pieza (simulado)
$archivo = $_FILES["imagen"] ?? null;
$nombreArchivo = $archivo ? $archivo["name"] : "sin-imagen.png";
$carpetaDestino = "../../assets/images/parts/";

if ($archivo && $archivo["error"] == 0) {
    $rutaTemporal = $archivo["tmp_name"];
    $nombreArchivo = $nom . ".png";
    // move_uploaded_file($rutaTemporal, $carpetaDestino . $nombreArchivo);
}

// SIMULACIÓN DE ÉXITO
$id_pieza = rand(1, 1000);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../assets/css/admin-styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>Componente Registrado</title>
</head>
<body>
    <div class="admin-container" style="padding: 4rem 2rem;">
        <div class="admin-form-container" style="max-width: 700px; margin: 0 auto; text-align: center;">
            <div style="font-size: 4rem; margin-bottom: 1rem;">✅</div>
            <h1 style="color: #10b981; margin-bottom: 1rem;">¡Componente Registrado!</h1>
            <div style="background: rgba(16, 185, 129, 0.1); border: 1px solid #10b981; border-radius: 12px; padding: 1.5rem; margin: 2rem 0; text-align: left;">
                <h3 style="color: #10b981; margin-bottom: 1rem;">🔧 Datos Registrados:</h3>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Nombre:</strong> <?php echo htmlspecialchars($nom); ?></p>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Precio:</strong> $<?php echo number_format($precio, 2); ?> MXN</p>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Stock:</strong> <?php echo $stock; ?> unidades</p>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Imagen:</strong> <?php echo htmlspecialchars($nombreArchivo); ?></p>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>ID Simulado:</strong> #<?php echo $id_pieza; ?></p>
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
