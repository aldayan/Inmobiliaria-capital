import { service } from "./service.js";

// Función principal para cargar los datos del inmueble
const obtenerInformacion = () => {
    const ur = new URL(window.location);
    const id = ur.searchParams.get("id");

    // Redirecciona si no hay ID
    if (!id) {
        window.location.href = "/index.html";
        return;
    }

    // Obtener referencias del DOM
    const url = document.querySelector('[data-url]');
    const url2 = document.querySelector('[data-url2]');
    const url3 = document.querySelector('[data-url3]');
    const url4 = document.querySelector('[data-url4]');
    const url5 = document.querySelector('[data-url5]');
    const url6 = document.querySelector('[data-url6]');

    const nombre = document.querySelector('[data-nombre]');
    const ubicacion = document.querySelector('[data-ubicacion]');
    const costo = document.querySelector('[data-costo]');
    const descripcion = document.querySelector('[data-descripcion]');
    const habitaciones = document.querySelector('[data-habitacion]');
    const banos = document.querySelector('[data-baños]');
    const parqueos = document.querySelector('[data-parqueos]');
    const metros = document.querySelector('[data-metros]');

    // Solicitar los datos al backend
    service.detalleProducto(id).then(perfil => {
        // Mostrar imágenes
        url.src  = perfil.imagen1 || "";
        url2.src = perfil.imagen2 || "";
        url3.src = perfil.imagen3 || "";
        url4.src = perfil.imagen4 || "";
        url5.src = perfil.imagen5 || "";
        url6.src = perfil.imagen6 || "";

        // Mostrar datos generales
        nombre.value = perfil.nombre || "";
        ubicacion.value = perfil.ubicacion || "";
        costo.value = perfil.costo || "";
        descripcion.value = perfil.descripcion || "";

        habitaciones.value = perfil.habitaciones || "";
        banos.value = perfil.banos || "";
        parqueos.value = perfil.parqueos || "";
        metros.value = perfil.metros || "";
    }).catch(() => {
        alert("Ocurrió un error cargando los datos del inmueble.");
    });
};

// Ejecutar la función
obtenerInformacion();
