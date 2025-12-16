<?php 
// MODO SIN BASE DE DATOS - Solo simulación
// include '../../includes/conexion.php';
// $mysqli->set_charset("utf8mb4");

// Datos del formulario
$nom = $_POST['nombre'] ?? 'Sin nombre';
$precio = $_POST['precio'] ?? 0;
$stock = $_POST['stock'] ?? 0;

$id1 = $_POST['id1'] ?? '';
$cant1 = $_POST['cantidad1'] ?? 0;

$id2 = $_POST['id2'] ?? '';
$cant2 = $_POST['cantidad2'] ?? 0;

$id3 = $_POST['id3'] ?? '';
$cant3 = $_POST['cantidad3'] ?? 0;

$id4 = $_POST['id4'] ?? '';
$cant4 = $_POST['cantidad4'] ?? 0;

$id5 = $_POST['id5'] ?? '';
$cant5 = $_POST['cantidad5'] ?? 0;




//cargar imagen de la pieza (simulado)
$archivo = $_FILES["imagen"] ?? null;
$nombreArchivo = $archivo ? $archivo["name"] : "sin-imagen.png";
$carpetaDestino = "../../assets/images/computers/";

// Simular guardado de imagen
if ($archivo && $archivo["error"] == 0) {
    $rutaTemporal = $archivo["tmp_name"];
    $nombreArchivo = $nom . ".png";
    // move_uploaded_file($rutaTemporal, $carpetaDestino . $nombreArchivo);
}

// SIMULACIÓN DE ÉXITO (sin base de datos)
$al_com = true; // Simular inserción exitosa
$id_com = rand(1, 1000); // ID simulado

// Simular registro de componentes
$componentes_registrados = 0;
if (!empty($id1) && !empty($cant1)) $componentes_registrados++;
if (!empty($id2) && !empty($cant2)) $componentes_registrados++;
if (!empty($id3) && !empty($cant3)) $componentes_registrados++;
if (!empty($id4) && !empty($cant4)) $componentes_registrados++;
if (!empty($id5) && !empty($cant5)) $componentes_registrados++;

// Mostrar resultado exitoso
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
    <div class="admin-container" style="padding: 4rem 2rem;">
        <div class="admin-form-container" style="max-width: 700px; margin: 0 auto; text-align: center;">
            <div style="font-size: 4rem; margin-bottom: 1rem;">✅</div>
            <h1 style="color: #10b981; margin-bottom: 1rem;">¡Computadora Registrada!</h1>
            <div style="background: rgba(16, 185, 129, 0.1); border: 1px solid #10b981; border-radius: 12px; padding: 1.5rem; margin: 2rem 0; text-align: left;">
                <h3 style="color: #10b981; margin-bottom: 1rem;">📋 Datos Registrados:</h3>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Nombre:</strong> <?php echo htmlspecialchars($nom); ?></p>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Precio:</strong> $<?php echo number_format($precio, 2); ?> MXN</p>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Stock:</strong> <?php echo $stock; ?> unidades</p>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>Componentes:</strong> <?php echo $componentes_registrados; ?> registrados</p>
                <p style="color: #94a3b8; margin: 0.5rem 0;"><strong>ID Simulado:</strong> #<?php echo $id_com; ?></p>
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
