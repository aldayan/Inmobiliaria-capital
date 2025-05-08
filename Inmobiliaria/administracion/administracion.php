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
    
    <title  >Administracion | CAPITAL. </title>

    <link rel="icon" href="../assets/img/logo2.jpg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <nav class="navbar fixed-top">
        <div class="container">

            <a href="#" class="navbar-brand">
                <strong class="titulo">INMOBILIARIA - CAPITAL.</strong>
            </a>

            <button type="button" class="navbar-toggler d-md-none" data-toggle="collapse" data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="Desplegar menú de navegación">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu-principal">
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
                            <a class="nav-link" aria-current="page" href="administracion.php">
                                Usuarios Registrados
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="agregar.php">
                                 Agregar Inmuebles
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="publicaciones.php">
                               Ver todas las publicaciones
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="../chat/chat.php">
                             Chat
                            </a>
                        </li>


                        <li class="nav-item jaja">
                            <a class="nav-link " href="../login/cerrar.php">
                                Cerrar sesión
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
                <h2 class="h2" >Usuarios registrados</h2>

                
                </div>
            
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id="tablax">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Cédula</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Dónde vive</th>
                                <th scope="col">Actualizar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           $conexion = mysqli_connect("127.0.0.1", "root", "", "inmobiliaria_db", 3307);

                            $sql = "SELECT id,nombre,apellido,cedula,telefono,direccion,ubicacion FROM formulario";
                            $resultado = mysqli_query($conexion, $sql);
                            while ($mostrar = mysqli_fetch_row($resultado)) {
                            ?>
                                <tr>
                                    <td><?php echo $mostrar['0'] ?></td>
                                    <td><?php echo $mostrar['1'] ?></td>
                                    <td><?php echo $mostrar['2'] ?></td>
                                    <td><?php echo $mostrar['3'] ?></td>
                                    <td><?php echo $mostrar['4'] ?></td>
                                    <td><?php echo $mostrar['5'] ?></td>
                                    <td><?php echo $mostrar['6'] ?></td>
                                 

                                    <td><a href="../assets/php/editar/editar pasantes activos.php?
                                        id=<?php echo $mostrar['0'] ?> &
                                        nombre=<?php echo $mostrar['1'] ?> &
                                        apellido=<?php echo $mostrar['2'] ?> &
                                        cedula=<?php echo $mostrar['3'] ?> &
                                        telefono=<?php echo $mostrar['4'] ?> &
                                        direccion=<?php echo $mostrar['5'] ?> &
                                        donde_vives=<?php echo $mostrar['6'] ?> &
                                      

                                    " button class="btn btn-edit"><i class="fas fa-edit"></i></a></button></td>
                                    <td><a href="../assets/php/borrar/eliminar pasantes activos.php? id=<?php echo $mostrar['0'] ?> " button class="btn btn-danger"><i class="fas fa-trash"></i></a></button></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>


    <!-- ARCHIVOS BOOTSTRAP JAVASCRIPT -->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#tablax').DataTable({
      
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ usuarios",
                    info: "Mostrando del usuario _START_ al _END_ de un total de _TOTAL_ usuarios",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
              
                lengthMenu: [ [10, 25, -1], [10, 25, "All"] ],
            });
    });


</script>
</body>

</html>


