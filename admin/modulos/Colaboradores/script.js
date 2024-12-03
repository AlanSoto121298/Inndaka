const fileInput = document.getElementById('fileInput');
const uploadedImage = document.getElementById('uploadedImage');

fileInput.addEventListener('change', function () {
    const file = this.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            const fileURL = e.target.result;
            if (file.type.includes('image')) {
                uploadedImage.src = fileURL;
                uploadedImage.style.display = 'block'; // Mostrar la imagen
            } else {
                uploadedImage.src = '';
                uploadedImage.style.display = 'none'; // Ocultar la imagen si no es una imagen
            }
        };

        reader.readAsDataURL(file);
    } else {
        uploadedImage.src = '';
        uploadedImage.style.display = 'none'; // Ocultar la imagen si no se selecciona ningún archivo
    }
});

function changeImage() {
    fileInput.click();
}


// Función para manejar el clic en los títulos y ocultar/mostrar secciones
function toggleSection(toggleButtonId, divClassName) {
    const toggleButton = document.getElementById(toggleButtonId);
    const contentDiv = document.querySelector(`.${divClassName}`);
    let isVisible = true;

    toggleButton.addEventListener("click", function() {
        contentDiv.style.display = isVisible ? "none" : "block";
        isVisible = !isVisible;
    });
}

toggleSection("toggleButton1", "col-Div-Datos-Personales");


// Limpiar formularios
document.addEventListener("DOMContentLoaded", function () {
    const limpiarBoton = document.getElementById("limpiarBoton");

    limpiarBoton.addEventListener("click", function () {
        console.log("Botón de limpieza presionado"); // Verifica en la consola si se imprime este mensaje al hacer clic
        limpiarFormularios();
    });

    function limpiarFormularios() {
        const formularios = document.querySelectorAll("form[id^='formulario']");

        formularios.forEach((formulario) => {
            formulario.reset();
            const divs = formulario.querySelectorAll(".toggle-section");
            divs.forEach((div) => {
                div.style.display = "block";
            });
        });
    

        // Restablecer campo del archivo
        const fileInput = document.getElementById('fileInput');
        fileInput.value = ''; // Esto limpia el campo del archivo
        const uploadedImage = document.getElementById('uploadedImage');
        uploadedImage.src = ''; // Esto limpia la imagen previamente cargada (si hay alguna)
        uploadedImage.style.display = 'none'; // Oculta la imagen
    }

    limpiarBoton.addEventListener("click", limpiarFormularios);
});

function limpiarFormularios() {
    console.log("Botón de limpieza presionado"); // Verifica en la consola si se imprime este mensaje al hacer clic
    // Resto del código para limpiar los formularios...
}

/*
document.getElementById('colaboradorForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('procesar_formulario.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.querySelector('.alert').style.display = 'block';
        } else {
            console.error('Error al insertar datos');
        }
    })
    .catch(error => console.error('Error:', error));
});

*/

 


function imprimir() {
    window.print();
  }

  function descargarPDF() {
    window.location.href = 'generar_pdf.php'; // Reemplaza 'generar_pdf.php' con la ruta correcta hacia tu script PHP
  }


  function redireccionar() {
    window.location.href = '../colaboradores/index.php';
  }


  document.addEventListener("DOMContentLoaded", function () {
    // Botón "Guardar"
    document.getElementById("submitGuardar").addEventListener("click", function () {
        // Cambia el valor del campo oculto "accion" a "Guardar"
        document.getElementById('accion').value = 'Guardar';
    });

    // Botón "Actualizar"
    document.getElementById("submitActualizar").addEventListener("click", function () {
        // Cambia el valor del campo oculto "accion" a "Actualizar"
        document.getElementById('accion').value = 'Actualizar';
    });
});


/* OBTENER EL ID Y HACER EL UPDATE */

document.addEventListener("DOMContentLoaded", function () {
    // Botón "Actualizar"
    document.getElementById("submitActualizar").addEventListener("click", function () {
        // Obtener el valor de id que deseas actualizar (puedes obtenerlo de donde sea necesario)
        var id = obtenerIdDesdeDondeSeaNecesario();

        // Establecer el valor de id en el campo oculto
        document.getElementById('id_formulario').value = id;

        // Ahora puedes enviar el formulario
        document.getElementById('formulario1').submit();
    });
});


document.addEventListener("DOMContentLoaded", function () {
    // Función para capturar el ID del registro y establecerlo en el campo oculto antes de enviar el formulario
    function capturarIdParaActualizar(id) {
        document.getElementById('id_formulario').value = id;
    }

    // Evento click para el botón de actualizar
    document.getElementById("submitActualizar").addEventListener("click", function () {
        // Capturar el ID del registro que se está actualizando
        var idRegistro = obtenerIdDelRegistro(); // Debes implementar esta función según la lógica de tu aplicación
        if (idRegistro) {
            // Establecer el ID capturado en el campo oculto
            capturarIdParaActualizar(idRegistro);
        } else {
            // Mostrar un mensaje de error o manejar la situación de que no se haya capturado el ID
            console.error("No se pudo capturar el ID del registro.");
        }
    });
});





function buscarInformacion() {
    var buscar = document.getElementById('col-Input-Buscar').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'buscar_informacion.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            console.log(response); // Verifica la estructura de los datos recibidos

            if (response.length > 0) {
                const data = response[0]; // Considerando que solo trabajamos con el primer resultado
                // Asigna los valores a los campos
                document.getElementById('id_formulario').value = data['id'] || '';
                document.getElementById('col-Input-Titulo').value = data['titulo'] || '';
                document.getElementById('col-Input-Profesion').value = data['profesion'] || '';
                document.getElementById('col-Input-Nombres').value = data['nombres'] || '';
                document.getElementById('col-Input-Apellido-Paterno').value = data['apellido_paterno'] || '';
                document.getElementById('col-Input-Apellido-Materno').value = data['apellido_materno'] || '';
                document.getElementById('col-Input-Fecha-Nacimiento').value = data['fecha_nacimiento'] || '';
                document.getElementById('col-Input-Curp').value = data['curp'] || '';
                document.getElementById('col-Input-Rfc').value = data['rfc'] || '';
                document.getElementById('col-Input-Nss').value = data['nss'] || '';
                document.getElementById('col-Input-Telefono').value = data['telefono'] || '';
                document.getElementById('col-Input-Correo').value = data['correo'] || '';
                document.getElementById('col-Input-Hijos').value = data['hijos'] || '';
                document.getElementById('col-Input-Cuenta').value = data['no_cuenta'] || '';
                document.getElementById('col-Input-Estado-Civil').value = data['estado_civil'] || '';
                document.getElementById('col-Input-Licencia-Conducir').value = data['licencia_conducir'] || '';
                document.getElementById('col-Input-Certificado-Medico').value = data['certificado_medico'] || '';
                document.getElementById('col-Input-Masculino').checked = data['sexo'] === 'Masculino';
                document.getElementById('col-Input-Mujer').checked = data['sexo'] === 'Femenino';
                document.getElementById('col-Input-Tipo-Sangre').value = data['tipo_sangre'] || '';
                document.getElementById('col-Input-Cp').value = data['cp'] || '';
                document.getElementById('col-Input-Calle-Numero').value = data['calle_numero'] || '';
                document.getElementById('col-Input-Colonia').value = data['colonia'] || '';
                document.getElementById('col-Input-Ciudad').value = data['ciudad'] || '';
                document.getElementById('col-Input-Estado').value = data['estado'] || '';
                document.getElementById('col-Input-Fecha-Firma-Inicial').value = data['fecha_firma_inicial'] || '';
                document.getElementById('col-Input-Puesto').value = data['puesto'] || '';
                document.getElementById('col-Input-Empresa').value = data['empresa'] || '';
                document.getElementById('col-Input-Telefono-Empresarial').value = data['telefono_empresarial'] || '';
                document.getElementById('col-Input-Correo-Empresarial').value = data['correo_empresarial'] || '';
                document.getElementById('col-Input-Salario-Mensual').value = data['salario_mensual'] || '';
                document.getElementById('col-Input-Base').value = data['base'] || '';
                document.getElementById('col-Input-Ubicacion').value = data['ubicacion'] || '';
                document.getElementById('col-Input-Fecha-Firma-Final').value = data['fecha_firma_final'] || '';
                document.getElementById('col-Input-Correo-Motivo-Baja').value = data['motivo_baja'] || '';
                document.getElementById('col_Input_no_infonavit').value = data['no_infonavit'] || '';
                document.getElementById('nota').value = data['nota'] || '';
                document.getElementById('col-Input-Estado-Contratacion').value = data['estado_contratacion'] || '';
                document.getElementById('col-Input-Estado_actOn').value = data['estado_registro'] || '';
                document.getElementById('col-Input-Fecha-Firma-Salario').value = data['fecha_Firma_Salario'] || '';

                // Mostrar los documentos subidos
                if (data['ine_path']) {
                    const inePreview = document.getElementById('preview-ine');
                    inePreview.innerHTML = `<iframe src="${data['ine_path']}" width="100%" height="450px"></iframe>`;
                }
                
                if (data['licencia_path']) {
                    const licenciaPreview = document.getElementById('preview-licencia');
                    licenciaPreview.innerHTML = `<iframe src="${data['licencia_path']}" width="100%" height="450px"></iframe>`;
                }
                
                const uploadedImage = document.getElementById('uploadedImage');
                
                if (data['archivo']) {
                    uploadedImage.src = data['archivo'];
                    uploadedImage.style.display = 'block'; // Mostrar la imagen
                } else {
                    uploadedImage.src = '';
                    uploadedImage.style.display = 'none'; // Ocultar la imagen
                }
                
            } else {
                console.log('No se encontraron resultados para la búsqueda.');
            }
        } else {
            console.error('Error en la solicitud AJAX');
        }
    };

    xhr.onerror = function () {
        console.error('Error en la solicitud AJAX');
    };

    // Envía los datos del formulario
    xhr.send('buscar=' + encodeURIComponent(buscar));
}

    
    
    
/* ---------------------------------------------------------------- */


document.addEventListener('DOMContentLoaded', function() {
    var input = document.getElementById('col-Input-Fecha-Firma-Final');
    input.addEventListener('focus', function() {
        input.setAttribute('data-placeholder', input.getAttribute('placeholder'));
        input.setAttribute('placeholder', '');
    });
    input.addEventListener('blur', function() {
        input.setAttribute('placeholder', input.getAttribute('data-placeholder'));
    });
}); 








//PARA QUE SE OCULTEN LOS INPUTS QUE YO DIGA
/* function redireccionar() {
    if (window.location.href.indexOf("chrome") != -1 || window.location.href.indexOf("safari") != -1) {
      window.location.href = 'Buscador.php';
    } else {
      window.open('Buscador.php', '_blank');
    }
  }
 */

  function redireccionar() {
    window.location.href = 'Buscador.php';
  }
  
  
  
  
  

 /* VISUALIZACION DE LOS DOCUMENTOS ADJUNTOS AL COLABORADOR */

 function previewFile(input, previewId) {
    const preview = document.getElementById(previewId);
    const file = input.files[0];
    const reader = new FileReader();

    reader.onloadend = function () {
        preview.innerHTML = '';
        if (file.type === 'application/pdf') {
            const iframe = document.createElement('iframe');
            iframe.src = URL.createObjectURL(file);
            preview.appendChild(iframe);
        } else if (file.type.startsWith('application/vnd.openxmlformats-officedocument.wordprocessingml')) {
            const iframe = document.createElement('iframe');
            iframe.src = 'https://docs.google.com/viewer?url=' + encodeURIComponent(URL.createObjectURL(file)) + '&embedded=true';
            preview.appendChild(iframe);
        } else if (file.type.startsWith('image/')) {
            const img = document.createElement('img');
            img.src = reader.result;
            preview.appendChild(img);
        } else {
            const para = document.createElement('p');
            para.textContent = 'Vista previa no disponible';
            preview.appendChild(para);
        }
        createDownloadButton(preview, file.name);
    }

    if (file) {
        reader.readAsDataURL(file);
    }
}

function createDownloadButton(preview, fileName) {
    const button = document.createElement('button');
    button.textContent = 'Descargar';
    button.classList.add('download-button');
    button.addEventListener('click', function () {
        const a = document.createElement('a');
        a.href = preview.querySelector('iframe').src;
        a.download = fileName;
        a.click();
    });
    preview.appendChild(button);
}

document.getElementById('ine').addEventListener('change', function () {
    previewFile(this, 'preview-ine');
});

document.getElementById('licencia').addEventListener('change', function () {
    previewFile(this, 'preview-licencia');
});

  






  // Función para ejecutar cuando se carga una nueva imagen
  function changeImage(event) {
    var input = event.target;
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var uploadedImage = document.getElementById('uploadedImage');
            uploadedImage.src = e.target.result;

            // Obtener la ruta de la imagen actual
            var rutaImagenActual = e.target.result;

            // Establecer la ruta de la imagen actual en el campo oculto
            var campoFotoActual = document.getElementById('foto_actual');
            campoFotoActual.value = rutaImagenActual;
        }
        reader.readAsDataURL(input.files[0]);
    }
}