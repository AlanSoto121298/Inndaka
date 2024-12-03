// Obtén el botón por su ID
let btnBuscar = document.getElementById('rum-Btn-Buscar');

// Agrega un event listener para el clic en el botón
btnBuscar.addEventListener('click', function() {
    // Cambia la ubicación del navegador a la nueva página
    window.location.href = 'Buscador.php'; // Reemplaza 'nueva_pagina.html' con la URL de la página a la que deseas redirigir
});





// Función para mostrar el mapa seleccionado
function mostrarMapa() {
    var seleccion = document.getElementById('mapa').value;
    var contenedorMapa = document.getElementById('mapa-container');
    
    // Lógica para cargar el mapa seleccionado
    fetch(seleccion)
        .then(response => response.text())
        .then(data => {
            contenedorMapa.innerHTML = data;
        })
        .catch(error => {
            console.error('Error al cargar el mapa:', error);
        });
}

// Función para enviar el formulario
function enviarFormulario() {
    // Mostrar el mapa seleccionado antes de enviar el formulario
    mostrarMapa();
    // Retornar true para enviar el formulario
    return true;
}

// Escucha el evento de cambio en el campo de selección
document.getElementById('mapa').addEventListener('change', mostrarMapa);

// Muestra el mapa inicialmente al cargar la página
mostrarMapa();
