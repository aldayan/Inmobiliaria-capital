import { service } from "./service.js";

const formulario = document.querySelector('[data-form-agregar]');

const leerImagen = (input) => {
    return new Promise((resolve) => {
        const file = input.files[0];
        if (!file) return resolve("");
        const reader = new FileReader();
        reader.onload = () => resolve(reader.result);
        reader.readAsDataURL(file);
    });
};

formulario.addEventListener('submit', async (evento) => {
    evento.preventDefault();

    // Esperar que las imágenes se lean
    const url = await leerImagen(document.querySelector('[data-url]'));
    const url2 = await leerImagen(document.querySelector('[data-url2]'));
    const url3 = await leerImagen(document.querySelector('[data-url3]'));
    const url4 = await leerImagen(document.querySelector('[data-url4]'));
    const url5 = await leerImagen(document.querySelector('[data-url5]'));
    const url6 = await leerImagen(document.querySelector('[data-url6]'));

    const categoria = document.querySelector('[data-categoria]').value;
    const nombre = document.querySelector('[data-nombre]').value;
    const ubicacion = document.querySelector('[data-ubicacion]').value;
    const costo = document.querySelector('[data-costo]').value;
    const hablar = document.querySelector('[data-habla]').value;
    const descripcion = document.querySelector('[data-descripcion]').value;
    const caracteristicas = document.querySelector('[data-caracteristicas]').value;
    const habitaciones = document.querySelector('[data-habitaciones]').value;
    const banos = document.querySelector('[data-baños]').value;
    const parqueos = document.querySelector('[data-parqueos]').value;
    const metros = document.querySelector('[data-metros]').value;

    service.crearProducto(
        url, url2, url3, url4, url5, url6,
        categoria, nombre, ubicacion, costo,
        hablar, descripcion, caracteristicas,
        habitaciones, banos, parqueos, metros
    ).then(() => {
        window.location.href = 'publicaciones.php';
    }).catch(err => console.log(err));


 
});
