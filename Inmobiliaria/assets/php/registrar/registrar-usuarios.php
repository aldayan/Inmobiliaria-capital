<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$ubicacion=$_POST['ubicacion'];



$i;
$campo = array(); 
if(strlen($cedula)!=11){ 
    array_push($campo,"la cedula debe tener 11 caracteres"); 
} if(strlen($telefono)!=10){ 
    array_push($campo,"el telefono debe tener 10 caracteres"); 
} 
if(count($campo)>0){ 
    echo"<div class='error'>"; 
    for($i = 0; $i < count($campo); $i++ ){ 
        echo"<li>".$campo[$i]."</i>"; 
    } 
}

//base de datos
$conexion = mysqli_connect("127.0.0.1", "root", "", "inmobiliaria_db", 3307);


$sql = "INSERT INTO formulario (nombre, apellido, cedula, telefono, direccion, ubicacion) 
        VALUES ('$nombre','$apellido','$cedula','$telefono','$direccion','$ubicacion')";

$ejecutar = mysqli_query ($conexion,$sql) or die (mysqli_error($conexion));

 if ($ejecutar){

    
header("location:../../../formularios/registrando.php");

}
else {
   
    echo  "Hay un error";
}

?>

