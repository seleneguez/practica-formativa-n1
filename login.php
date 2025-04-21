<?php
// Recibir datos del POST
$nombre = $_POST['nombre'] ?? '';
$password = $_POST['password'] ?? '';

// Realizar verificación basica
if (empty($nombre) || empty($password)) {
    $respuesta = ['status' => 'error', 'mensaje' => 'Por favor, completa todos los campos.'];
} else {
    $respuesta = ['status' => 'ok', 'mensaje' => 'Datos recibidos y verificados correctamente.'];
}

// Devolver respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($respuesta);
?>
