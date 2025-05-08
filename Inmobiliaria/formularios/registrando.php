

<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
   
    <link rel="stylesheet" type=" text/css" href="../assets/css/style-index.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../assets/css/style-registra.css" media="screen">
    <link href="../assets/css/style-botones.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4a7e8b2fe8.js" crossorigin="anonymous"></script>
    <title>Registrando Usuario | CAPITAL.</title>

    <link rel="icon" href="../assets/img/logo2.jpg">
</head>

<body>

<header class="menu inicio">
        <div class="container">

            <h1 class="titulo-menu">
              <a href="../index.php" class="titulo-menu">INMOBILIARIA | CAPITAL.</a>
            </h1>


            <nav class="lista-menu">
            <ul class="menu-enlaces">
                    <li class="enlaces-menu"><a href="../index.php">Inicio</a></li>
                    <li class="enlaces-menu"><a href="../inmuebles/alquilar.php">Alquilar</a></li>
                    <li class="enlaces-menu"><a href="../inmuebles/comprar.php">Comprar</a></li>
                    <li class="enlaces-menu"><a href="../login/login.php">Login</a></li> 
                    <li class="enlaces-menu"><a href="registrar.php">Registrarse</a></li>
                    

                </ul>

                <div class="menu-boton">
                <i class="fa-solid fa-bars"></i>
               </div>
            
            </nav>

        </div>
    </header>

    <main class="desarrollo">
    <div class="container">
            <div class="row mx-0 mx-md-5 mb-5 contenedor">

              <form class="formulario" action="../assets/php/registrar/registrar-usuario-login.php" method="POST">

                <div class="imagen">
                    <img class="d-block mx-auto mb-4" src="../assets/img/logo2.png" alt="logo">
                </div>

                <h2 class="mb-3 ">Registrando</h2>
                <p class="text-justify texto">Completar este formulario para tener mas información acerca de usted y poder contactarnos.</p>

            
                <div class="Form">
                    <label for="Imail" class="form-label"><b>Correo:</b></label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Email@gmail.com"  required>

                    
                 </div>
                
                <div class="Form my-4">
                    <label for="contraseña" class="form-label"><b>Contraseña:</b></label>
                    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña"  required>
                
               </div>
                   
                <div class="Form my-4">
                    <label for="id_cargo" class="form-label"><b>Sexo:</b></label>
                    <div class="individiduales mx-5  mb-5">
                        <select name="id_cargo"  class="form-control selecciona"  required>
                        <option value="">Elija su sexo</option>
                        <option value="2">Masculino</option>
                        <option value="2">Femenino</option>
                   </select>

                </div>


                <hr class="my-4">
                    <button type="submit" name="submit" class="boton"><h5 class="boton-registrar">Registrase y continuar</h5></button>
                </div>
                
               </form>

            </div>
            
            <section class="contactos " id="contactos ">
                <div class="container ">
                    <h2 class="titulo-contacto ">Conocenos y Contactanos</h2>

                    <div class="informacion-contacto">

                        <nav class="lista-contacto">
                            <img src="../assets/img/logo2.png" class="img-contacto" alt="logo">

                            <ul class="lista-informacion">
                                <li class="list-info "><a class="preguntas" href="../informacion/informacion.html">Quienes Somos</a></li>
                                <li class="list-info "><a class="preguntas" href="../informacion/informacion.html">Políticas de privacidad</a></li>
                                <li class="list-info "><a class="preguntas" href="../informacion/informacion.html">Programa de fidelidad</a></li>
                                <li class="list-info "><a class="preguntas" href="../informacion/informacion.html">Nuestras Tiendas</a></li>
                                <li class="list-info "><a class="preguntas" href="../informacion/informacion.html">Quiero ser Franquiciado</a></li>
                                <li class="list-info "><a class="preguntas" href="../informacion/informacion.html">Anuncie Aquí</a></li>
                            </ul>
                        </nav>

                        <div class="contacto ">

                            <div class="titulos-contacto ">
                                <h3 class=" contacto-subtexto ">Hablanos</h3>
                            </div>

                            <form action="https://formsubmit.co/aldayanaavila02@gmail.com" method="POST" class="contacto-form" id="form" name="form">
                                <input class="contacto-input" type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                                <input class="contacto-input" type="email" id="email" name="email" placeholder="E-mail" required>
                                <input class="contacto-input" type="text" id="asunto" name="asunto" placeholder="Asunto" required>
                                <textarea class="contacto-input" rows="5" type="text" cols="40" id="mensaje" name="mensaje" placeholder="Mensaje" required></textarea> <button type="submit " id="enviar " class="contacto-boton ">Enviar mensaje</button>
                                <br>
                                <p class="alerta " id="alerta "></p>
                            </form>

                        </div>
                    </div>
                </div>
            </section>

    
        </div>
    </main>

    <footer>
        
        <p>Hecho por
            <a href="https://">Aldayan A. Avila Dotel</a> 
        </p>
        <a href=""></a>
        <a href=""></a>

    </footer>


</body>

</html>