import { service } from "./service.js";

const contenedor = document.querySelector(".ofertas-similares");
const ur = new URL(window.location);
const idActual = ur.searchParams.get("id");
if (!contenedor || !idActual) {
  console.warn("No se encontró el contenedor o el ID del producto.");
} else {
  
  service.detalleProducto(idActual).then((productoActual) => {
    service.listarDesdeMySQL().then((todos) => {
      const similares = todos
        .filter(p => p.categoria == productoActual.categoria && p.id != idActual)
        .slice(0, 6);

      similares.forEach(p => {
        const tarjeta = document.createElement("div");
        tarjeta.classList.add("tarjeta-similar");
        tarjeta.innerHTML = `
          <a href="descripcion.html?id=${p.id}">
            <img src="${p.imagen1}" alt="${p.nombre}" class="img-similar">
            <h4>${p.nombre}</h4>
            <p>${p.ubicacion}</p>
            <p><strong>$${p.costo}</strong></p>
          </a>
        `;
        contenedor.appendChild(tarjeta);
      });

      if (similares.length === 0) {
        contenedor.innerHTML = "<p>No hay propiedades similares.</p>";
      }
    });
  });
}