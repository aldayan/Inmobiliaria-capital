const listarDesdeMySQL = () => {
    return fetch('/inmobiliaria/assets/api/listar_productos.php')
      .then(res => res.json());
  };


//creando sesion
const crearSesion = (email, contraseña) => {
    return fetch('http://localhost:3000/inmobiliaria', {
        method: 'POST',

        body: JSON.stringify({
            email,
            contraseña,
            id: uuid.v4()
        }),
    });

};
 
/*
//creando producto
const crearProducto = (url, url2, url3, url4, url5, url6, categoria, nombreProducto, ubicacion, costo, hablar, descripcion, caracteristicas, habitaciones, baños, parqueos, metros) => {
    return fetch('http://localhost:3000/inmobiliaria', {
        method: 'POST',
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            url,
            url2,
            url3, 
            url4, 
            url5, 
            url6,
            categoria,
            nombreProducto,
            ubicacion,
            costo,
            hablar,
            descripcion,
            caracteristicas, 
            habitaciones, 
            baños,
            parqueos, 
            metros
        }),
    });

};
*/

// eliminando producto

const eliminarProducto = (id) => {

    return fetch(`/inmobiliaria/assets/api/eliminar_producto.php?id=${id}`, {

        method: 'DELETE'
    });
};



//detalle del producto

const detalleProducto = (id) => {
    return fetch(`/inmobiliaria/assets/api/detalle_producto.php?id=${id}`).then((respuesta) => respuesta.json()

    );
};



//actualizar producto
/*
const actualizarProducto = (url,  url2,  url3, url4,  url5, url6,categoria, nombreProducto, ubicacion, costo, hablar, descripcion, caracteristicas, habitaciones, baños,  parqueos, metros, id) => {
    return fetch(`http://localhost:3000/inmobiliaria/${id}`, {
        method: 'PUT',

        headers: {
            "Content-Type": "application/json",
        },

        body: JSON.stringify({
            url,
            url2,
            url3, 
            url4, 
            url5, 
            url6,
            categoria,
            nombreProducto,
            ubicacion,
            costo,
            hablar,
            descripcion,  
            caracteristicas, 
            habitaciones, 
            baños,
            parqueos, 
            metros

        }),

    }).then((respuesta) => respuesta).catch(err => console.log(err));

};

*/



const actualizarProducto = (
    url, url2, url3, url4, url5, url6,
    categoria, nombre, ubicacion, costo,
    hablar, descripcion, caracteristicas,
    habitaciones, banos, parqueos, metros, id
  ) => {
    return fetch(`/inmobiliaria/assets/api/editar_producto.php?id=${id}`, {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        url, url2, url3, url4, url5, url6,
        categoria, nombre, ubicacion, costo,
        hablar, descripcion, caracteristicas,
        habitaciones, banos, parqueos, metros
      })
    }).then(res => res.json());
  };
  

export const service = {
    listarDesdeMySQL,
    crearSesion,
    eliminarProducto,
    detalleProducto,
    actualizarProducto,


    crearProducto: (
        url, url2, url3, url4, url5, url6, categoria, nombre, ubicacion,
        costo, hablar, descripcion, caracteristicas, habitaciones, banos,
        parqueos, metros
      ) => {
        return fetch('/inmobiliaria/assets/api/crear_producto.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            url, url2, url3, url4, url5, url6,
            categoria, nombre, ubicacion, costo,
            hablar, descripcion, caracteristicas,
            habitaciones, banos, parqueos, metros
          })
        });
      },
    

};