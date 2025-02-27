<?php 
header("Content-Type: application/json");
require_once __DIR__ . "/src/database.php"; // Asegura que la ruta sea correcta

// Verificar si los datos llegaron correctamente
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['id']) || empty($data['id'])) {
    echo json_encode(["success" => false, "error" => "Datos no recibidos correctamente"]);
    exit();
}

$id = intval($data['id']); // Convertir a número entero

$stmt = $conn->prepare("DELETE FROM membresia WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Registro eliminado exitosamente"]);
} else {
    echo json_encode(["success" => false, "error" => "Error al eliminar el registro"]);
}

$stmt->close();
$conn->close();
?>
