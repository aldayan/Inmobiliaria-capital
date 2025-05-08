<?php
header('Content-Type: application/json');


$conexion =new mysqli("127.0.0.1", "root", "", "inmobiliaria_db", 3307);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$data = json_decode(file_get_contents("php://input"), true);


// Validar que $data no sea null
if (!$data) {
    echo json_encode(["success" => false, "message" => "No se recibió ningún dato"]);
    exit;
}

// Asegúrate de que las claves coincidan con los nombres esperados
$sql = "INSERT INTO productos 
    (categoria, nombre, ubicacion, costo, hablar, descripcion, caracteristicas, habitaciones, banos, parqueos, metros, imagen1, imagen2, imagen3, imagen4, imagen5, imagen6) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);

if (!$stmt) {
    echo json_encode(["success" => false, "error" => $conexion->error]);
    exit;
}

// Asegúrate de que los tipos de datos coincidan: s = string, i = int, d = double
$stmt->bind_param(
    "sssssssiiisssssss",
    $data['categoria'], $data['nombre'], $data['ubicacion'], $data['costo'], $data['hablar'],
    $data['descripcion'], $data['caracteristicas'], 
    $data['habitaciones'], $data['banos'], $data['parqueos'], $data['metros'],
    $data['url'], $data['url2'], $data['url3'], $data['url4'], $data['url5'], $data['url6']
);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => $stmt->error]);
}
?>
