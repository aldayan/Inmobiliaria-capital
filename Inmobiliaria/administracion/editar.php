
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
    
    <title>Editando | CAPITAL.</title>

    <link rel="icon" href="../assets/img/logo2.jpg">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <nav class="navbar  fixed-top ">
        <div class="container">
            <a href="#" class="navbar-brand">
                <strong class="titulo-editar">INMOBILIARIA - CAPITAL.</strong>
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
                    <h1 class="h2">Editando descripcion del inmueble</h1>
                </div>
        
                <section class="agregar">
                <div class="container">
                    <div class="agregados">
                   

                        <form class="agregar-form" data-form-editar>
                            
                        <div class="caracteristicas">

                            <select class="primeros-detalles select1" name="categoria" id="categoria" required data-categoria>
                                <option style="text-align: left; color: rgb(141, 84, 9);">Estado del inmueble</option>
                                <option class="opciones" value="1">venta</option>
                                <option class="opciones" value="2">Alquiler</option>
                                </select>
                            <input class="primeros-detalles"  type="text" name="nombre" id="nombre" placeholder="Titulo del inmueble" required data-nombre>
                            <input class="primeros-detalles"  type="text" name="ubicacion" id="ubicacion" placeholder="Ubicacion del inmueble" required data-ubicacion>
                            <input class="primeros-detalles" type="text" name="precio" id="precio" placeholder="Costo del inmueble" required data-costo>
                            
                        </div>


                        <div class="galeria"> 
                             <h3 class="seccion">Galeria de imagenes</h3>
                             <hr class="separador">

                            <input type="file"  class="imagen"  accept="image/*"   data-url>
                            <input type="file"  class="imagen"  accept="image/*"   data-url2>
                            <input type="file"  class="imagen"  accept="image/*"   data-url3>
                            <input type="file"  class="imagen"  accept="image/*"   data-url4>
                            <input type="file"  class="imagen"  accept="image/*"   data-url5>
                            <input type="file"  class="imagen"  accept="image/*"   data-url6>
                        </div>


                      
                      <div class="detallada">
                        <h3 class="seccion">Informacion detallada</h3>
                        <hr class="separador">

                            <textarea class="informacion" rows="5" type="text " cols="40 " id="hablar" name="hablar" placeholder="Hable  del inmueble" required data-habla></textarea>
                            <select class="informacion select" multiple name="caracteristicas" id="caracteristicas" data-caracteristicas>
                                <option style="margin-bottom: 10px; background: rgb(141, 84, 9); color: white; padding: 10px;">Seleccione las caracteristicas del inmueble:</option>
                                <option class="opciones" >venta</option>
                                <option class="opciones" >Alquiler</option>
                                <option class="opciones" >MotoCross</option>
                                <option class="opciones" >venta</option>
                                <option class="opciones" >Alquiler</option>
                                <option class="opciones" >MotoCross</option>
                                </select>
                            <textarea class="informacion" rows="5" type="text " cols="40 " id="descripcion " name="descripcion" placeholder="Descripcion del inmueble" required data-descripcion></textarea>
                        </div>


                          <div class="mas">
                            <h3 class="seccion">Mas informacion </h3>
                             <hr class="separador">

                            <input class="inmueble" type="number" name="habitaciones" id="habitaciones" placeholder="Cantidad de habitaciones del inmueble" required data-habitaciones>
                            <input class="inmueble" type="number" name="baños" id="baños" placeholder="Cantidad de baños del inmueble" required data-baños>
                            <input class="inmueble" type="number" name="parqueos" id="parqueos" placeholder="Cantidad de parqueos del inmueble" required data-parqueos>
                            <input class="inmueble" type="number" name="metros" id="metros" placeholder="Cantidad de parqueos del inmueble" required data-metros>
                       </div> 

                            <button type="submit " id="agregar" class="agregar-boton">Editar Producto</button>
                        </form>
                    </div>
                </div>
            </section>

            </main>
        </div>
    </div>

    <script type="module" src="../assets/js/editar-producto.js">
    </script>
</body>

</html>
