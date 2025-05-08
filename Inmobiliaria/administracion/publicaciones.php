<?php
session_start();
include("../dba/db.php");

$usuario = $_SESSION['correo'];
if(!isset($usuario)){

    header("location:../login/login.php");

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../assets/css/style-administracion.css" media="screen">
    <link href="../assets/css/style-botones.css" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    
    <title>Publicaciones | ADDE CAPITAL. S.A.</title>

    <link rel="icon" href="../assets/img/logo2.jpg">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <nav class="navbar  fixed-top ">
        <div class="container">
            <a href="#" class="navbar-brand">
                <strong class="titulo-publicaciones" >INMOBILIARIA - CAPITAL.</strong>
            </a>

            <button type="button" class="navbar-toggler d-md-none" data-toggle="collapse" data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="Desplegar menú de navegación">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse  d-md-none" id="menu-principal">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link " href="administracion.php">Usuarios Registrados</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="agregar.php">Agregar Inmuebles</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="publicaciones.php">Ver todas las publicaciones</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../chat/chat.php">Chat</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../login/cerrar.php"> Cerrar sesión </a> </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-5">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="administracion.php">
                                <span data-feather="home">Usuarios Registrados</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="agregar.php">
                                <span data-feather="file"></span>Agregar Inmuebles
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="publicaciones.php">
                                <span data-feather="bar-chart-2"></span>Ver todas las publicaciones
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="../chat/chat.php">
                            <span data-feather="layers"></span>Chat
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="../login/cerrar.php">
                                <span data-feather="layers"></span>Cerrar sesión
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>

            
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Todas las publicaciones</h1>
                </div>
    

                        <section class="zonas-ventas articulo" id="ventas">
                            <div class="container">
            
                               
                                <div class="productos-publicados" data-contenedor></div>
            
                            </div>
                        </section>
            </main>
        </div>
    </div>

    <script type="module" src="../assets/js/producto.js"></script>
</body>

</html>
