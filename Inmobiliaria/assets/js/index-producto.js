import { service } from "./service.js";




//creando tarjeta para index
const crearNueva = (url, nombre, costo, hablar, habitaciones, banos, parqueos,  metros, id) => {


    const tarjeta = document.createElement('div');
    const contenedor = `
    
<div class="caja-inmobiliaria articulo" style="background-image:url(${url}); background-position: center;">
      <div class="caja-contenido" >

     <a class="vinculo" href="descripcion/descripcion.html?id=${id}"><img src="./assets/img/desplazar.png" class="desplazar" onclick="desplazar()" alt="desplazar" data-desplazar></a> 

             <div class="cabecera">
                  <h3 class="nombre contenido-cabecera" >${nombre}</h3>

                      <p class="costo contenido-cabecera">$${costo}</p>
                      
                   <p class="descripcion contenido-cabecera">${hablar}</p>
             </div> 

               <hr>

            <div class="cuerpo">
                <p class="texto">Habitaciones: ${habitaciones}</p>
                <p class="texto">Baños: ${banos}</p>
                <p class="texto">Parqueos: ${parqueos}</p>
                <p class="texto">Metros: ${metros}</p>
            </div>
       
    
       </div>
</div>`

    tarjeta.innerHTML = contenedor;

    return tarjeta;
};



const cards = [{

    category: "data-venta",
    value: 1

}, {

    category: "data-alquilar",
    value: 2
}];


service.listarDesdeMySQL().then(productos => {
    cards.forEach(({ category, value }) => {
      const contenedor = document.querySelector(`[${category}]`);
      if (!contenedor) return;
  
      // Filtrar por categoría (1 = venta, 2 = alquiler)
      const filtrados = productos.filter(p => p.categoria == value);
  
      // Mostrar solo los primeros 6
      const visibles = filtrados.slice(0, 6);
  
      visibles.forEach(p => {
        const tarjeta = crearNueva(
          p.imagen1,
          p.nombre,
          p.costo,
          p.hablar,
          p.habitaciones,
          p.banos,
          p.parqueos,
          p.metros,
          p.id
        );
        contenedor.appendChild(tarjeta);
      });
    });
  }).catch(() => {
    alert('Ocurrió un error cargando las propiedades.');
  });
  
