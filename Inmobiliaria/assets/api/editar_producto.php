<?php
header('Content-Type: application/json');
$conexion = new mysqli("127.0.0.1", "root", "", "inmobiliaria_db", 3307);
if ($conexion->connect_error) {
    die(json_encode(["success" => false, "error" => $conexion->connect_error]));
}

$data = json_decode(file_get_contents("php://input"), true);
$id = $_GET['id'] ?? null;

if (!$id || !$data) {
    echo json_encode(["success" => false, "message" => "Faltan datos"]);
    exit;
}

$sql = "UPDATE productos SET 
    categoria=?, nombre=?, ubicacion=?, costo=?, hablar=?, descripcion=?, caracteristicas=?, 
    habitaciones=?, banos=?, parqueos=?, metros=?, imagen1=?, imagen2=?, imagen3=?, imagen4=?, imagen5=?, imagen6=? 
    WHERE id=?";

$stmt = $conexion->prepare($sql);
$stmt->bind_param(
    "sssssssiiisssssssi",
    $data['categoria'], $data['nombre'], $data['ubicacion'], $data['costo'], $data['hablar'],
    $data['descripcion'], $data['caracteristicas'], $data['habitaciones'], $data['banos'],
    $data['parqueos'], $data['metros'], $data['url'], $data['url2'], $data['url3'], $data['url4'], $data['url5'], $data['url6'],
    $id
);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => $stmt->error]);
}
?>
