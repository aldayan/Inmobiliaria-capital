<?php
header('Content-Type: application/json');

$conexion = new mysqli("127.0.0.1", "root", "", "inmobiliaria_db", 3307);
if ($conexion->connect_error) {
    die(json_encode(["success" => false, "error" => $conexion->connect_error]));
}

$id = $_GET['id'] ?? null;

if (!$id) {
    echo json_encode(["success" => false, "message" => "ID no recibido"]);
    exit;
}

$sql = "SELECT * FROM productos WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();

if ($producto = $resultado->fetch_assoc()) {
    echo json_encode($producto);
} else {
    echo json_encode(["success" => false, "message" => "Producto no encontrado"]);
}
?>
