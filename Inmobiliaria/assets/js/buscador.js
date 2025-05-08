document.addEventListener("keyup",  e=>{

    if(e.target.matches("#buscador")){

        if (e.key === "Escape")e.target.value="";

            document.querySelectorAll(".articulo").forEach(inmueble =>{
                 inmueble.textContent.toLowerCase().includes(e.target.value.toLowerCase())
                     ?inmueble.classList.remove("filtro")
                         :inmueble.classList.add("filtro")

});

    };


});