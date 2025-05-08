import { service } from "./service.js";


//editando producto
const formulario = document.querySelector('[data-form-editar]');

//const img= document.querySelector('[data-url]');
let url = "", url2 = "", url3 = "", url4 = "", url5 = "", url6 = "";


const leerImagen = (input) => {
    return new Promise((resolve) => {
        const file = input.files[0];
        if (!file) return resolve("");
        const reader = new FileReader();
        reader.onload = () => resolve(reader.result);
        reader.readAsDataURL(file);
    });
};

const obtenerInformacion = () => {

    const ur = new URL(window.location);
    const id = ur.searchParams.get("id");


    if (id == null) {
        window.location.href = "publicaciones.php";
    }
   
    const categoria = document.querySelector('[data-categoria]');
    const nombre = document.querySelector('[data-nombre]');
    const ubicacion = document.querySelector('[data-ubicacion]');
    const hablar= document.querySelector('[data-habla]');
    const costo = document.querySelector('[data-costo]');
    const descripcion = document.querySelector('[data-descripcion]');
    const caracteristicas= document.querySelector('[data-caracteristicas]');
    const habitaciones= document.querySelector('[data-habitaciones]');
    const banos= document.querySelector('[data-baños]');
    const parqueos = document.querySelector('[data-parqueos]');
    const metros = document.querySelector('[data-metros]');

    service.detalleProducto(id).then((perfil) => {

        
        categoria.value = perfil.categoria;
        nombre.value = perfil.nombre;
        ubicacion.value = perfil.ubicacion;
        costo.value = perfil.costo;
        hablar.value=perfil.hablar;
        descripcion.value = perfil.descripcion;
        caracteristicas.value=perfil.caracteristicas;
        habitaciones.value=perfil.habitaciones;
        banos.value=perfil.banos;
        parqueos.value=perfil.parqueos;
        metros.value=perfil.metros;

        url  = perfil.imagen1 || "";
        url2 = perfil.imagen2 || "";
        url3 = perfil.imagen3 || "";
        url4 = perfil.imagen4 || "";
        url5 = perfil.imagen5 || "";
        url6 = perfil.imagen6 || "";

    });


};

obtenerInformacion();


formulario.addEventListener('submit', async (evento) => {
    evento.preventDefault();

    const ur = new URL(window.location);
    const id = ur.searchParams.get("id");
    


  
    const categoria = document.querySelector('[data-categoria]').value;
    const nombre = document.querySelector('[data-nombre]').value;
    const ubicacion = document.querySelector('[data-ubicacion]').value;
    const costo = document.querySelector('[data-costo]').value;
    const hablar= document.querySelector('[data-habla]').value;
    const descripcion = document.querySelector('[data-descripcion]').value;
    const caracteristicas= document.querySelector('[data-caracteristicas]').value;
    const habitaciones= document.querySelector('[data-habitaciones]').value;
    const banos = document.querySelector('[data-baños]').value;
    const parqueos = document.querySelector('[data-parqueos]').value;
    const metros = document.querySelector('[data-metros]').value;
    
    // Leer nuevas imágenes (solo si el usuario selecciona alguna)
    const nuevaUrl = await leerImagen(document.querySelector('[data-url]'));
    const nuevaUrl2 = await leerImagen(document.querySelector('[data-url2]'));
    const nuevaUrl3 = await leerImagen(document.querySelector('[data-url3]'));
    const nuevaUrl4 = await leerImagen(document.querySelector('[data-url4]'));
    const nuevaUrl5 = await leerImagen(document.querySelector('[data-url5]'));
    const nuevaUrl6 = await leerImagen(document.querySelector('[data-url6]'));

    // Reemplazar solo si hay nueva imagen
    if (nuevaUrl)  url  = nuevaUrl ;
    if (nuevaUrl2) url2 = nuevaUrl2;
    if (nuevaUrl3) url3 = nuevaUrl3;
    if (nuevaUrl4) url4 = nuevaUrl4;
    if (nuevaUrl5) url5 = nuevaUrl5;
    if (nuevaUrl6) url6 = nuevaUrl6;

    service.actualizarProducto(url, url2, url3, url4, url5, url6,
        categoria, nombre, ubicacion, costo,
        hablar, descripcion, caracteristicas,
        habitaciones, banos, parqueos, metros, id).then(() => {
        window.location.href = 'publicaciones.php';
    })
});

