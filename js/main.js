//Evento para las flechas

botonesDerecha = document.querySelectorAll('.flecha-der');

botonesDerecha.forEach(boton => {
    boton.addEventListener('click', ()=>{
        filaa = boton.parentNode.childNodes[3];
        filaa.scrollLeft += filaa.offsetWidth;
        
    });
});

botonesIzquierda = document.querySelectorAll('.flecha-izq');

botonesIzquierda.forEach(boton => {
    boton.addEventListener('click', ()=>{
        filaa = boton.parentNode.childNodes[3];
        filaa.scrollLeft -= filaa.offsetWidth;
        
    });
});


