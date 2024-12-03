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


document.getElementById('gaceta-container').addEventListener('click', function() {
    // Redirigir al otro index (ajusta la URL según tu necesidad)
    window.location.href = 'modulos/GACETA/index.php';  /*PONGAN BIEN LA DIRECCION PRROS*/
});


document.getElementById('colaboradores-container').addEventListener('click', function() {
    // Redirigir al otro index (ajusta la URL según tu necesidad)
    window.location.href = 'modulos/Colaboradores/index.php';  /*PONGAN BIEN LA DIRECCION PRROS*/
});