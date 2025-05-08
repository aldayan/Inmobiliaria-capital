<?php
$conexion = new mysqli("127.0.0.1", "root", "", "inmobiliaria_db", 3307);
if ($conexion->connect_error) {
    echo json_encode([]);
    exit;
}

$resultado = $conexion->query("SELECT id, categoria, nombre, costo, hablar, ubicacion,
 imagen1, habitaciones, banos, parqueos, metros 
FROM productos");

$productos = [];
while ($fila = $resultado->fetch_assoc()) {
    $productos[] = $fila;
}

echo json_encode($productos);
?>
