<?php

$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

session_start();
$_SESSION['correo']=$correo;

$conexion = mysqli_connect("127.0.0.1", "root", "", "inmobiliaria_db", 3307);
$consulta="select * from  login where correo ='$correo' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==3){ //administrador
    echo'<script type="text/javascript">
    window.location.href="../../../administracion/administracion.php"
    </script>';
    
   

}else if($filas['id_cargo']==2){ //usuario
    echo'<script type="text/javascript">
    window.location.href="../../../usuarios/usuarios.php"
    </script>';

}
else{

     header("location:../../../login/login.php");

}

mysqli_free_result($resultado); 
mysqli_close($conexion);
?>