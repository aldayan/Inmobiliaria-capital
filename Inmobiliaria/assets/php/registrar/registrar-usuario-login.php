<?php
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$id_cargo=$_POST['id_cargo'];

session_start();
$_SESSION['correo']=$correo;
$conexion = mysqli_connect("127.0.0.1", "root", "", "inmobiliaria_db", 3307);

$consulta="INSERT INTO login VALUES (id,'$correo','$contraseña','$id_cargo')";
$resultado=mysqli_query($conexion,$consulta);

if($resultado){
   
    echo'<script type="text/javascript">
    window.location.href="../../../login/login.php"
    </script>';
  

}else
{
    echo'<script type="text/javascript">
    alert("Errorrr guardando los datos");
    window.location.href="../../../formularios/registrando.php"
    </script>';

}

?>