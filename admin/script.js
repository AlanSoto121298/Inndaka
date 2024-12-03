let slideIndex = 0;

function showSlides() {
    let slides = document.getElementsByClassName("slide");

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slideIndex++;

    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "block";

    setTimeout(showSlides, 4000); // Cambia la imagen cada 3000 milisegundos (3 segundos)
}

// Inicia el carrusel
showSlides();



//PARA COLABORADORES
document.getElementById('colaboradores-container').addEventListener('click', function() {
    // Redirigir al otro index (ajusta la URL según tu necesidad)
    window.location.href = 'modulos/Colaboradores/index.php'; /*AKI PONES LA DIRECCION ADRIAN */
});


//PARA EL DE CUENTAS
document.getElementById('cuentas-container').addEventListener('click', function() {
    // Redirigir al otro index (ajusta la URL según tu necesidad)
    window.location.href = 'modulos/cuentas/index.php';  /*AKI PONES LA DIRECCION ADRIAN */
});


//PARA EL DE CREDENCIALES
document.getElementById('credenciales-container').addEventListener('click', function() {
    // Redirigir al otro index (ajusta la URL según tu necesidad)
    window.location.href = 'modulos/credenciales/index.php'; /*AKI PONES LA DIRECCION ADRIAN */
});



//PARA LA GACETA
document.getElementById('gaceta-container').addEventListener('click', function() {
    // Redirigir al otro index (ajusta la URL según tu necesidad)
    window.location.href = 'modulos/GACETA/index.php';  /*AKI PONES LA DIRECCION ADRIAN */
});

//PARA EL INVENTARIO
document.getElementById('inventario-container').addEventListener('click', function() {
    // Redirigir al otro index (ajusta la URL según tu necesidad)
    window.location.href = 'modulos/Inventario/index.php';  /*AKI PONES LA DIRECCION ADRIAN */
});

//PARA EL ORGANIGRAMA
document.getElementById('organigrama-container').addEventListener('click', function() {
    // Redirigir al otro index (ajusta la URL según tu necesidad)
    window.location.href = 'modulos/Organigrama/index.html';  /*AKI PONES LA DIRECCION ADRIAN */
});
