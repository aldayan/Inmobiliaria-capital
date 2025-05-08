import { service } from "./service.js";



//creando tarjeta para administracion 
const crearNuevaTarjeta = (url, nombre, costo, hablar, id) => {



    const linea = document.createElement('div');


    const contenido = ` 
    <div class="caja-inmobiliaria articulo" style="background-image:url(${url}); background-position: center;">
      <div class="caja-contenido" >

             <div class="cabecera">
                  <h3 class="nombre contenido-cabecera" >${nombre}</h3>

                      <p class="costo contenido-cabecera">$${costo}</p>
                      
                   <p class="descripcion contenido-cabecera">${hablar}</p>
             </div> 

               <hr>

               <div class="icons">
               <a href="editar.php?id=${id}" class="editar"><i class="fas fa-pen"></i></a>
               <i class="fas fa-trash-alt trashIcon icon" id="${id}" data-btn></i>
           </div>
          
       </div>
      
</div>
`

    linea.innerHTML = contenido;

    

    const btn = linea.querySelector('[data-btn]');
    btn.addEventListener('click', () => {

        const id = btn.id;

        service.eliminarProducto(id).then((respuesta) => {

            window.location.href = 'publicaciones.php';

        }).catch((error) => alert('ocurrio un error'));

    });
    return linea;

    
};


//agreganado producto a la tarjeta
const contenedor = document.querySelector('[data-contenedor]');

  

service.listarDesdeMySQL().then((data) => {
    if (!Array.isArray(data)) throw new Error("Formato inválido");

    data.forEach(({ imagen1, nombre, costo, hablar, id }) => {
        const tarjeta = crearNuevaTarjeta(imagen1, nombre, costo, hablar, id);
        contenedor.appendChild(tarjeta);
    });
}).catch((e) => {
    console.error("Error al cargar productos:", e);
});

