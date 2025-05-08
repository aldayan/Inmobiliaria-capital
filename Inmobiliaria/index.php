
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inmobiliaria | CAPITAL.</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./assets/css/style-index.css" rel="stylesheet">
    <link href="./assets/css/style-botones.css" rel="stylesheet">
    <link rel="icon" href="./assets/img/logo2.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4a7e8b2fe8.js" crossorigin="anonymous"></script>
</head>

<body>

    <header class="menu" >
        <div class="container">

            <h1 class="titulo-menu">
              <a href="index.php" class="titulo-menu">INMOBILIARIA - CAPITAL.</a>
            </h1>


            <nav class="lista-menu">
            <ul class="menu-enlaces">
                    <li class="enlaces-menu"><a href="#inicio">Inicio</a></li>
                    <li class="enlaces-menu"><a href="./inmuebles/alquilar.php">Alquilar</a></li>
                    <li class="enlaces-menu"><a href="./inmuebles/comprar.php">Comprar</a></li> 
                    <li class="enlaces-menu"><a href="./login/login.php">Login</a></li> 
                    <li class="enlaces-menu"><a href="./formularios/registrar.php">Registrarse</a></li> 
                </ul>
                
                <div class="menu-boton">
                <i class="fa-solid fa-bars"></i>
               </div>
            
            </nav>  

        </div>
    </header>

    <main class="desarrollo">
        <div class="container">

            <section class="buscador-pizarra">
                <div class="container">

            <div class="presentacion ">
             <p class="presentacion-titulo">Encuentra el hogar de tus sueños </p>
                <p class="presentacion-contenido"> Somos una una empresa que se dedica a
                     la compra, venta y alquiler de propiedades como casas, departamentos, oficinas, terrenos, 
                     etc. Una que inmobiliaria ofrece servicios profesionales como asesoramiento legal, tasación, 
                     gestión de trámites, marketing, etc. Nos encargamos de ayudar a los clientes a encontrar la propiedad que mejor 
                    se adapte a sus necesidades, preferencias y presupuesto.</p>

                    <input type="text" class="buscador" id="buscador"   placeholder="Buscar inmuebles...">
            </div>
                

                </div>
            </section>


            <section class="zonas-ventas articulo" id="ventas">
                <div class="container">

                    <div class="zonas">
                        <h3 class="titulo-ventas">Zonas en venta</h3>
                        <a class="ver" href="./inmuebles/comprar.php">Ver todo</a>
                    </div>

                    <div class="venta" data-venta> </div>

                </div>
            </section>


            <div class="cartulinas articulo">
             <p class="cartulina-titulo">Hazte con la comodidad en un instante</p>
               
                    <ul class="presentacion-cartulina">
                    Les ofrecemos servicios de asesoramiento, gestión y publicidad. Los beneficios de una inmobiliaria son varios, entre ellos:
                        <li class="beneficios">Ahorro de tiempo y dinero: Nos encargamos de buscar las propiedades 
                            que se ajustan a las necesidades y al presupuesto del cliente, así como de negociar 
                            las condiciones del contrato y de realizar los trámites legales necesarios.
                        </li>
                        <li class="beneficios">
                        Seguridad y confianza:  contamos con profesionales cualificados y con experiencia en el sector, 
                        que garantizan la legalidad y la calidad de las propiedades,
                        así como el cumplimiento de los derechos y obligaciones de las partes.
                        </li>
                        <li class="beneficios">
                        Asesoramiento personalizado: ofrecemos un servicio integral y adaptado a cada cliente, 
                        brindando información sobre el mercado inmobiliario, las opciones de financiación,
                         los aspectos fiscales y las ventajas e inconvenientes de cada propiedad.
                        </li>

                    </ul>
            

                    
            </div>
                

      

           <section class="zonas-alquiler articulo" id="alquiler"  >
                <div class="container ">

                    <div class="zonas">
                        <h3 class="titulo-alquiler">Zonas de alquiler</h3>
                        <a class="ver" href="./inmuebles/alquilar.php">Ver todo</a>
                    </div>

                    <div class="alquilar" data-alquilar> </div>
                     
                </div>
            </section>


  

            <section class="contactos " id="contactos ">
                <div class="container ">
                    <h2 class="titulo-contacto ">Conocenos y Contactanos</h2>

                    <div class="informacion-contacto">

                        <nav class="lista-contacto">
                            <img src="./assets/img/logo2.png" class="img-contacto" alt="logo">

                            <ul class="lista-informacion">
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Quienes Somos</a></li>
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Políticas de privacidad</a></li>
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Programa de fidelidad</a></li>
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Nuestras Tiendas</a></li>
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Quiero ser Franquiciado</a></li>
                                <li class="list-info "><a class="preguntas" href="informacion/informacion.html">Anuncie Aquí</a></li>
                            </ul>
                        </nav>

                        <div class="contacto">

                            <div class="titulos-contacto ">
                                <h3 class=" contacto-subtexto ">Hablanos</h3>
                            </div>

                            <form action="https://formsubmit.co/aldayanaavila02@gmail.com" method="POST" class="contacto-form" id="form" name="form">
                                <input class="contacto-input" type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                                <input class="contacto-input" type="email" id="email" name="email" placeholder="E-mail" required>
                                <input class="contacto-input" type="text" id="asunto" name="asunto" placeholder="Asunto" required>
                                <textarea class="contacto-input" rows="5" type="text" cols="40" id="mensaje" name="mensaje" placeholder="Mensaje" required></textarea> 
                                <button type="submit " id="enviar " class="contacto-boton ">Enviar mensaje</button>
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


   
    <script type="module" src="./assets/js/index-producto.js"></script>
    <script src="./assets/js/menu.js"></script>
    <script src="./assets/js/ventana.js"></script>
    <script src="./assets/js/buscador.js"></script>
 
</body>

</html>