<?php

include("../dba/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CAPITAL.</title>
    <link rel="stylesheet" href="../assets/css/style-login.css">
    <link rel="stylesheet" href="../assets/css/style-index.css">
    <link href="../assets/css/style-botones.css" rel="stylesheet">
    <link rel="icon" href="../assets/img/logo2.jpg">
    <script src="https://kit.fontawesome.com/4a7e8b2fe8.js" crossorigin="anonymous"></script>

</head>
<body>
<header class="menu inicio">
        <div class="container">

            <h1 class="titulo-menu">
                <a href="../index.php" class="titulo-menu">INMOBILIARIA - CAPITAL.</a>
            </h1>


            <nav class="lista-menu">
            <ul class="menu-enlaces">
                    <li class="enlaces-menu"><a href="../index.php">Inicio</a></li>
                    <li class="enlaces-menu"><a href="../inmuebles/alquilar.php">Alquilar</a></li>
                    <li class="enlaces-menu"><a href="../inmuebles/comprar.php">Comprar</a></li>
                    <li class="enlaces-menu"><a href="login.php">Login</a></li>
                    <li class="enlaces-menu"><a href="../formularios/registrar.php">Registrarse</a></li>
            </ul>
                    <div class="menu-boton">
                <i class="fa-solid fa-bars"></i>
               </div>
            
            </nav>

        </div>
    </header>

    <main class="desarrollo">
        <div class="container">
        

       <div class="wrapper fadeInDown ">
          <div class="formContent" id="formContent">
          
            <div class="fadeIn first py-5">
                <img src="../assets/img/logo2.png" id="icon" alt="User Icon" />
            </div>
        
            <form class="wrapper form" action="../assets/php/validaciones/validacion-login.php" method="POST">
                <input type="text" id="correo" class="fadeIn second" name="correo" placeholder="Correo electronico" required autofocus>
                <input type="password" id="contraseña" class="fadeIn third" name="contraseña" placeholder="Contraseña" required>
                <input type="submit" class="fadeIn fourth" value="Iniciar">
            </form>

           </div>
       </div>

  
      <section class="contactos" id="contactos ">
                <div class="container">

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
            <a href="https://">Aldayan A. Avila Dotel</a>  </p>
        <a href=""></a>
        <a href=""></a>

    </footer>
    <script src="../assets/js/menu.js"></script>
</body>
</html>