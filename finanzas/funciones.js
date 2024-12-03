function cargarDatosPersona(id_persona) {
    fetch(`Controlador/detalle_modificar.php?id_persona=${id_persona}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la respuesta del servidor');
            }
            return response.json();
        })
        .then(data => {
            if (data.error) {
                alert(data.error);
                return;
            }

            document.getElementById('id_persona').value = data.id_persona || '';
            document.getElementById('nombre').value = data.nombre || '';
            document.getElementById('apellido').value = data.apellido || '';
            document.getElementById('tipo_sangre').value = data.tipo_sangre || '';
            document.getElementById('enfermedad_cronica').value = data.enfermedad || '';
            document.getElementById('tipo_empleado').value = data.tipo_emp || '';
            document.getElementById('fecha_ingreso').value = data.fecha_ing || '';
            document.getElementById('status').value = data.status || '';

            // Mostrar la imagen si está disponible
            const imgPrevia = document.getElementById('imagenPrevia');
            if (data.fotografia) {
                const base64Data = `data:image/jpeg;base64,${data.fotografia}`;
                imgPrevia.src = base64Data;
                imgPrevia.style.display = 'block';
            } else {
                imgPrevia.src = '';
                imgPrevia.style.display = 'none';
            }
        })
        .catch(error => {
            console.error('Error al cargar los datos:', error);
            alert('No se pudieron cargar los datos para la edición.');
        });
}
