

// En tu código JavaScript para capturar la firma
document.querySelector('.rum-Firma-Operador').addEventListener('click', function () {
  // Capturar la firma del operador desde signaturePad
  var firmaOperador = signaturePad.toDataURL();

  // Asignar la firma al campo oculto en el formulario
  document.getElementById('firmaOperador').value = firmaOperador;

  // Redirigir a firmaDigital.php si es necesario
  // window.location.href = 'firmaDigital.php';
});







function buscarInformacion() {
  var buscar = document.getElementById('rum-Input-Buscar').value;

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'buscar_RUM.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function() {
      if (xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);
          if (response.length > 0) {
              // Mostrar los datos en el formulario para editar
              mostrarDatos(response[0]);
          } else {
              // El ID no existe, crear un nuevo registro con ese ID
              crearNuevoRegistro(buscar);
          }
      } else {
          // Error en la solicitud AJAX
          alert('Error en la búsqueda');
      }
  };

  xhr.send('buscador=' + buscar);
}

function mostrarDatos(data) {
  // Mostrar los datos en el formulario para editar
  document.getElementById('rum-Input-Nombre-Operador').value = data['nombre_operador'] || '';
  document.getElementById('rum-Input-No-Empleado').value = data['no_empleado'] || '';
  document.getElementById('rum-Input-Fecha').value = data['fecha'] || '';
  document.getElementById('rum-Input-Economico').value = data['rum_economico'] || '';
  document.getElementById('rum-Input-Tipo').value = data['tipo'] || '';
  document.getElementById('rum-Input-Modelo').value = data['modelo'] || '';
  document.getElementById('rum-Input-Encendido-Maquina').value = data['encendido_maquina'] || '';
  document.getElementById('rum-Input-Apagado-Maquina').value = data['apagado_maquina'] || '';
  document.getElementById('rum-Input-Tramo').value = data['rum_tramo'] || '';
  document.getElementById('rum-Input-Subtramo').value = data['rum_subtramo'] || '';
  document.getElementById('rum-Input-Apagado-Margen').value = data['margen'] || '';
  document.getElementById('rum-Input-Actividad').value = data['rum_actividad'] || '';
  document.getElementById('rum-Input-Descripcion').value = data['rum_descripcion'] || '';
  document.getElementById('rum-Input-hora-inicio').value = data['rum_hora_inicio'] || '';
  document.getElementById('rum-Input-hora-termino').value = data['rum_hora_termino'] || '';
  document.getElementById('rum-Input-horas-efectivas').value = data['rum_horas_efectivas'] || '';
  document.getElementById('rum-Input-observaciones').value = data['rum_observaciones'] || '';
  document.getElementById('rum-Input-Actividad_1').value = data['rum_actividad_1'] || '';
  document.getElementById('rum-Input-Descripcion_1').value = data['rum_descripcion_1'] || '';
  document.getElementById('rum-Input-hora-inicio_1').value = data['rum_hora_inicio_1'] || '';
  document.getElementById('rum-Input-hora-termino_1').value = data['rum_hora_termino_1'] || '';
  document.getElementById('rum-Input-horas-efectivas_1').value = data['rum_horas_efectivas_1'] || '';
  document.getElementById('rum-Input-observaciones_1').value = data['rum_observaciones_1'] || '';
  document.getElementById('rum-Input-Actividad_2').value = data['rum_actividad_2'] || '';
  document.getElementById('rum-Input-Descripcion_2').value = data['rum_descripcion_2'] || '';
  document.getElementById('rum-Input-hora-inicio_2').value = data['rum_hora_inicio_2'] || '';
  document.getElementById('rum-Input-hora-termino_2').value = data['rum_hora_termino_2'] || '';
  document.getElementById('rum-Input-horas-efectivas_2').value = data['rum_horas_efectivas_2'] || '';
  document.getElementById('rum-Input-observaciones_2').value = data['rum_observaciones_2'] || '';
  document.getElementById('rum-Input-Apagado-Margen').value = data['margen'] || '';
  document.getElementById('rum-Input-Causa').value = data['causa'] || '';
  document.getElementById('id_formulario').value = data['id'] || ''; // Agrega este campo para mostrar el ID
  
  document.getElementById('rum-Input-Fecha-Foto').value = data['rum_fecha_1'] || ''; 
  document.getElementById('rum-Input-ubicacion-Foto').value = data['rum_ubicacion_1'] || '';

  document.getElementById('rum-Input-Fecha-Foto-2').value = data['rum_fecha_2'] || ''; 
  document.getElementById('rum-Input-ubicacion-Foto-2').value = data['rum_ubicacion_2'] || '';

 

  document.getElementById('vista-previa-Camara1').src = data.rum_camara1 || ''; // Asigna la URL de la imagen al campo de la cámara 1
  document.getElementById('vista-previa-Camara2').src = data.rum_camara2 || ''; // Asigna la URL de la imagen al campo de la cámara 2


  document.getElementById('vista-previa-combustible').src = data.rum_combustible || '';
  document.getElementById('vista-previa-combustible_1').src = data.rum_combustible_1 || '';
  document.getElementById('vista-previa-combustible_2').src = data.rum_combustible_2 || '';

  

 // Asignar el mapa solo si existe uno en los datos
 if (data['mapa']) {
  mostrarMapa(data['mapa']);
} else {
  // Si no hay mapa asignado, limpiar el contenedor del mapa
  const contenedorMapa = document.getElementById('mapa-container');
  contenedorMapa.innerHTML = '';
}
}

function mostrarMapa(mapa) {
// Obtener el contenedor del mapa
const contenedorMapa = document.getElementById('mapa-container');

// Crear un iframe para mostrar el mapa
const iframe = document.createElement('iframe');
iframe.src = mapa;
iframe.width = '100%';
iframe.height = '500';

// Limpiar el contenedor del mapa y agregar el iframe
contenedorMapa.innerHTML = '';
contenedorMapa.appendChild(iframe);
}

function crearNuevoRegistro(id) {
  // Redirigir a una página donde puedas crear un nuevo registro con el ID proporcionado
  window.location.href = 'crear_registro.php?id=' + id;
}









guardarFoto.addEventListener('click', () => {
  const context = canvas.getContext('2d');
  canvas.width = video.videoWidth;
  canvas.height = video.videoHeight;
  context.drawImage(video, 0, 0, canvas.width, canvas.height);

  const imageBlob = dataURItoBlob(canvas.toDataURL('image/png'));
  const fechaHora = new Date().toISOString();
  const ubicacionInfo = 'Tu ubicación'; // Puedes obtener la ubicación del usuario aquí

  console.log("Datos a enviar al servidor:");
  console.log("Imagen: ", imageBlob);
  console.log("Fecha y hora: ", fechaHora);
  console.log("Ubicación: ", ubicacionInfo);

  const formData = new FormData();
  formData.append('imagen', imageBlob);
  formData.append('fecha_hora', fechaHora);
  formData.append('ubicacion', ubicacionInfo);

  fetch('guardar_captura.php', {
    method: 'POST',
    body: formData
  })
    .then(response => {
      // ...
    })
    .catch(error => {
      // ...
    });
});

function dataURItoBlob(dataURI) {
  const byteString = atob(dataURI.split(',')[1]);
  const mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
  const arrayBuffer = new ArrayBuffer(byteString.length);
  const byteArray = new Uint8Array(arrayBuffer);

  for (let i = 0; i < byteString.length; i++) {
    byteArray[i] = byteString.charCodeAt(i);
  }

  return new Blob([arrayBuffer], { type: mimeString });
}

// Función para mostrar la imagen correspondiente al ID de la captura
function mostrarImagen(idCaptura) {
  // Lógica para obtener la imagen correspondiente al ID de la captura
  // Supongamos que haces una solicitud AJAX para obtener la imagen del servidor
  $.ajax({
    type: "GET",
    url: "obtener_imagen.php?id_captura=" + idCaptura,
    success: function (imagenBinaria) {
      // Mostrar la imagen en el contenedor 'imagenCapturada'
      var imagenSrc = "data:image/jpeg;base64," + btoa(imagenBinaria); // Convertir la imagen binaria a Base64
      document.getElementById('imagenCapturada').innerHTML = '<img src="' + imagenSrc + '" alt="Foto Capturada">';
      document.getElementById('imagenCapturada').style.display = 'block'; // Mostrar el contenedor de la imagen
    },
    error: function () {
      console.log("Error al obtener la imagen");
    }
  });
}

// Llamada a la función para mostrar la imagen capturada (debe pasar el ID de la captura)
var idCaptura = 46/* tu lógica para obtener el ID de la captura */;
mostrarImagen(idCaptura);



/* ------------------------------------------------------------------------------------- */

function guardarFirma() {
  // Obtén la firma (puedes implementar esto según cómo estés manejando las firmas)
  var firmaOperador = obtenerFirmaOperador();  // Reemplaza esto con tu lógica real
  var firmaLider = obtenerFirmaLider();  // Reemplaza esto con tu lógica real
  var firmaCliente = obtenerFirmaCliente();  // Reemplaza esto con tu lógica real

  // Agrega las firmas al formulario como campos ocultos
  document.getElementById('firmaForm').innerHTML +=
    `<input type="hidden" name="firmaOperador" value="${firmaOperador}">
       <input type="hidden" name="firmaLider" value="${firmaLider}">
       <input type="hidden" name="firmaCliente" value="${firmaCliente}">`;

  // Envía el formulario
  $.ajax({
    type: "POST",
    url: "guardarFirma.php",
    data: { firmaOperador: firmaOperador, firmaLider: firmaLider, firmaCliente: firmaCliente },
    success: function (data) {
      // data contiene el ID de la firma insertada
      cargarFirma(data);
    },
    error: function (error) {
      console.log("Error al guardar las firmas: " + error);
    }
  });
}

function cargarFirma(firmaId) {
  // Utiliza AJAX para obtener la firma desde la base de datos
  $.ajax({
    type: "GET",
    url: "obtenerFirma.php?id=" + firmaId, // Reemplaza obtenerFirma.php con el nombre de tu script para obtener firmas
    success: function (firma) {
      // firma contiene la firma recuperada desde la base de datos
      document.getElementById("rum-P-Firma-Operador").innerHTML = "Firma del operador: " + firma;
    },
    error: function (error) {
      console.log("Error al obtener la firma: " + error);
    }
  });
}

// Implementa las funciones para obtener las firmas según tu lógica
function obtenerFirmaOperador() {
  // Implementa la lógica para obtener la firma del operador
  return "firmaOperador";
}

function obtenerFirmaLider() {
  // Implementa la lógica para obtener la firma del líder de proyecto
  return "firmaLider";
}

function obtenerFirmaCliente() {
  // Implementa la lógica para obtener la firma del cliente
  return "firmaCliente";
}







// En tu código JavaScript
document.getElementById('firmaContainer').innerHTML = '<img src="' + data.rutaFirma + '" alt="Firma Digital">';

/* --------------------------------------ID_USER----------------------------------------------- */

function enviarFormulario(event) {
  event.preventDefault();

  // Obtener el formulario y el ID del usuario
  var formulario = document.getElementById("miFormulario");
  var userId = document.getElementById("user_id").value;

  // Agregar el ID del usuario al formulario
  var formData = new FormData(formulario);
  formData.append("user_id", userId);

  // Realizar la solicitud al servidor (puedes usar Fetch API o AJAX)
  fetch("guardar_informacion.php", {
    method: "POST",
    body: formData
  })
    .then(response => response.json())
    .then(data => {
      // Manejar la respuesta del servidor, si es necesario
      console.log(data);
    })
    .catch(error => {
      console.error("Error al enviar el formulario:", error);
    });

  // Cerrar la ventana modal u realizar otras acciones después de enviar el formulario
  toggleModal();
}





document.getElementById('tomarFoto').addEventListener('click', function () {
  // Tomar la foto y realizar otras operaciones necesarias.

  // Obtener la fecha y hora actual
  var fechaHoraActual = new Date();
  var formatoFechaHora = obtenerFormatoFechaHora(fechaHoraActual); // Puedes definir tu propio formato aquí

  // Mostrar la fecha y hora en el elemento "fechaHora"
  document.getElementById('fechaHora').innerText = formatoFechaHora;

  // Asignar la fecha y hora al campo de entrada "rum-Input-Encendido-Maquina"
  document.getElementById('rum-Input-Encendido-Maquina').value = formatoFechaHora;
});

function obtenerFormatoFechaHora(fecha) {
  // Puedes personalizar el formato de fecha y hora según tus necesidades
  var opciones = { hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: false };
  return fecha.toLocaleString('es-ES', opciones);
}






function mostrarVistaPrevia(inputId, imgId) {
  // Obtén el elemento de entrada de archivo
  var inputCombustible = document.getElementById(inputId);

  // Obtén el elemento <img> donde mostrar la vista previa
  var imgVistaPrevia = document.getElementById(imgId);

  // Verifica si se seleccionó un archivo
  if (inputCombustible.files.length > 0) {
      // Obtén el archivo seleccionado
      var archivo = inputCombustible.files[0];

      // Verifica si el archivo es una imagen
      if (archivo.type.match(/^image\//)) {
          // Crea un objeto URL para la vista previa de la imagen
          var urlVistaPrevia = URL.createObjectURL(archivo);

          // Muestra la vista previa de la imagen en el <img>
          imgVistaPrevia.src = urlVistaPrevia;
      } else {
          // El archivo no es una imagen, muestra un mensaje de error o realiza otra acción
          alert('El archivo seleccionado no es una imagen.');
      }
  } else {
      // No se seleccionó ningún archivo, borra la vista previa
      imgVistaPrevia.src = '';
  }
}
   






















function calcularHorasEfectivas() {
  // Obtener las horas de inicio y fin de trabajo para cada conjunto
  var horaInicio = document.getElementById('rum-Input-hora-inicio').value;
  var horaTermino = document.getElementById('rum-Input-hora-termino').value;

  var horaInicio1 = document.getElementById('rum-Input-hora-inicio_1').value;
  var horaTermino1 = document.getElementById('rum-Input-hora-termino_1').value;

  var horaInicio2 = document.getElementById('rum-Input-hora-inicio_2').value;
  var horaTermino2 = document.getElementById('rum-Input-hora-termino_2').value;

  // Validar que ambas horas estén ingresadas para cada conjunto
  if (horaInicio && horaTermino) {
      // Convertir las horas a objetos de fecha para facilitar el cálculo para el primer conjunto
      var fechaInicio = new Date('2000-01-01 ' + horaInicio);
      var fechaTermino = new Date('2000-01-01 ' + horaTermino);

      // Calcular la diferencia en milisegundos para el primer conjunto
      var diferenciaMillis = fechaTermino - fechaInicio;

      // Convertir la diferencia a horas para el primer conjunto
      var horasEfectivas = diferenciaMillis / (1000 * 60 * 60);

      // Actualizar el campo de horas efectivas para el primer conjunto con el resultado
      document.getElementById('rum-Input-horas-efectivas').value = horasEfectivas.toFixed(2) + " hrs";
  }

  if (horaInicio1 && horaTermino1) {
      // Convertir las horas a objetos de fecha para facilitar el cálculo para el segundo conjunto
      var fechaInicio1 = new Date('2000-01-01 ' + horaInicio1);
      var fechaTermino1 = new Date('2000-01-01 ' + horaTermino1);

      // Calcular la diferencia en milisegundos para el segundo conjunto
      var diferenciaMillis1 = fechaTermino1 - fechaInicio1;

      // Convertir la diferencia a horas para el segundo conjunto
      var horasEfectivas1 = diferenciaMillis1 / (1000 * 60 * 60);

      // Actualizar el campo de horas efectivas para el segundo conjunto con el resultado
      document.getElementById('rum-Input-horas-efectivas_1').value = horasEfectivas1.toFixed(2) + " hrs";
  }

  if (horaInicio2 && horaTermino2) {
      // Convertir las horas a objetos de fecha para facilitar el cálculo para el tercer conjunto
      var fechaInicio2 = new Date('2000-01-01 ' + horaInicio2);
      var fechaTermino2 = new Date('2000-01-01 ' + horaTermino2);

      // Calcular la diferencia en milisegundos para el tercer conjunto
      var diferenciaMillis2 = fechaTermino2 - fechaInicio2;

      // Convertir la diferencia a horas para el tercer conjunto
      var horasEfectivas2 = diferenciaMillis2 / (1000 * 60 * 60);

      // Actualizar el campo de horas efectivas para el tercer conjunto con el resultado
      document.getElementById('rum-Input-horas-efectivas_2').value = horasEfectivas2.toFixed(2) + " hrs";
  }
}

// Asignar la función al evento onchange de los campos de hora de inicio y fin para cada conjunto
document.getElementById('rum-Input-hora-inicio').addEventListener('change', calcularHorasEfectivas);
document.getElementById('rum-Input-hora-termino').addEventListener('change', calcularHorasEfectivas);

document.getElementById('rum-Input-hora-inicio_1').addEventListener('change', calcularHorasEfectivas);
document.getElementById('rum-Input-hora-termino_1').addEventListener('change', calcularHorasEfectivas);

document.getElementById('rum-Input-hora-inicio_2').addEventListener('change', calcularHorasEfectivas);
document.getElementById('rum-Input-hora-termino_2').addEventListener('change', calcularHorasEfectivas);































function mostrarVistaPrevia_5(inputId, imgId, horaId, ubicacionId) {
  var input = document.getElementById(inputId);
  var img = document.getElementById(imgId);
  var horaCampo = document.getElementById(horaId);
  var ubicacionCampo = document.getElementById(ubicacionId);
  var encendidoCampo = document.getElementById('rum-Input-Encendido-Maquina'); // ID del campo de encendido

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      img.src = e.target.result;

      // Obtener la hora actual
      var fechaHoraActual = new Date();
      var horaActual = fechaHoraActual.getHours();
      var minutosActual = fechaHoraActual.getMinutes();
      var ampm = horaActual >= 12 ? 'PM' : 'AM';

      // Formatear la hora
      horaActual = horaActual % 12;
      horaActual = horaActual ? horaActual : 12; // Si es 0, poner 12
      minutosActual = minutosActual < 10 ? '0' + minutosActual : minutosActual;

      // Mostrar la hora actual en el campo correspondiente
      var horaActualTexto = horaActual + ':' + minutosActual + ' ' + ampm;
      horaCampo.innerText = 'Encendido de máquina: ' + horaActualTexto;

      // Actualizar el campo de encendido de máquina con la hora de la foto
      encendidoCampo.value = horaActualTexto;

      // Mostrar la fecha actual en el campo correspondiente
      var fechaActual = obtenerFechaActual();
      document.getElementById('rum-Input-Fecha-Foto').value = fechaActual;

      // Obtener y mostrar la ubicación actual en el campo correspondiente
      obtenerUbicacion(function (ubicacion) {
        ubicacionCampo.innerText = 'Ubicación: ' + ubicacion;
        document.getElementById('rum-Input-ubicacion-Foto').value = ubicacion;
      });
    };

    reader.readAsDataURL(input.files[0]);
  }
}


function obtenerFechaActual() {
  var ahora = new Date();
  var fecha = ahora.toISOString().slice(0, 19).replace("T", " ");  // Formato: YYYY-MM-DD HH:MM:SS
  return fecha;
}


function obtenerUbicacion(callback) {
  if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function (position) {
          var latitud = position.coords.latitude;
          var longitud = position.coords.longitude;

          var apiUrl = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitud}&lon=${longitud}`;

          fetch(apiUrl)
              .then(response => response.json())
              .then(data => {
                  if (data.display_name) {
                      var address = data.display_name;
                      callback(address);
                  } else {
                      callback('Ubicación no disponible');
                  }
              })
              .catch(error => {
                  console.error('Error al obtener la ubicación:', error.message);
                  callback('Ubicación no disponible');
              });
      }, function (error) {
          console.error('Error al obtener la ubicación:', error.message);
          callback('Ubicación no disponible');
      });
  } else {
      console.error('El navegador no soporta geolocalización');
      callback('Ubicación no disponible');
  }
}


function obtenerFechaHora() {
  var ahora = new Date();
  var fecha = ahora.toISOString().slice(0, 19).replace("T", " ");  // Formato: YYYY-MM-DD HH:MM:SS
  return fecha;
}



function adjuntarImagen(inputId, vistaPreviaId, horaId, ubicacionId) {

}






function mostrarVistaPrevia_1(inputId, imgId, horaId, ubicacionId) {
  var input = document.getElementById(inputId);
  var img = document.getElementById(imgId);
  var horaCampo = document.getElementById(horaId);
  var ubicacionCampo = document.getElementById(ubicacionId);
  var encendidoCampo = document.getElementById('rum-Input-Apagado-Maquina'); // ID del campo de encendido

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      img.src = e.target.result;

      // Obtener la hora actual
      var fechaHoraActual = new Date();
      var horaActual = fechaHoraActual.getHours();
      var minutosActual = fechaHoraActual.getMinutes();
      var ampm = horaActual >= 12 ? 'PM' : 'AM';

      // Formatear la hora
      horaActual = horaActual % 12;
      horaActual = horaActual ? horaActual : 12; // Si es 0, poner 12
      minutosActual = minutosActual < 10 ? '0' + minutosActual : minutosActual;

      // Mostrar la hora actual en el campo correspondiente
      var horaActualTexto = horaActual + ':' + minutosActual + ' ' + ampm;
      horaCampo.innerText = 'Apagado de máquina: ' + horaActualTexto;

      // Actualizar el campo de encendido de máquina con la hora de la foto
      encendidoCampo.value = horaActualTexto;

      // Mostrar la fecha actual en el campo correspondiente 
      var fechaActual = obtenerFechaActual();
      document.getElementById('rum-Input-Fecha-Foto-2').value = fechaActual;

      // Obtener y mostrar la ubicación actual en el campo correspondiente
      obtenerUbicacion(function (ubicacion) {
        ubicacionCampo.innerText = 'Ubicación: ' + ubicacion;
        document.getElementById('rum-Input-ubicacion-Foto-2').value = ubicacion;
      });
    };

    reader.readAsDataURL(input.files[0]);
  }
}


function obtenerFechaActual() {
  var ahora = new Date();
  var fecha = ahora.toISOString().slice(0, 19).replace("T", " ");  // Formato: YYYY-MM-DD HH:MM:SS
  return fecha;
}


function obtenerUbicacion(callback) {
  if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function (position) {
          var latitud = position.coords.latitude;
          var longitud = position.coords.longitude;

          var apiUrl = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitud}&lon=${longitud}`;

          fetch(apiUrl)
              .then(response => response.json())
              .then(data => {
                  if (data.display_name) {
                      var address = data.display_name;
                      callback(address);
                  } else {
                      callback('Ubicación no disponible');
                  }
              })
              .catch(error => {
                  console.error('Error al obtener la ubicación:', error.message);
                  callback('Ubicación no disponible');
              });
      }, function (error) {
          console.error('Error al obtener la ubicación:', error.message);
          callback('Ubicación no disponible');
      });
  } else {
      console.error('El navegador no soporta geolocalización');
      callback('Ubicación no disponible');
  }
}


function obtenerFechaHora() {
  var ahora = new Date();
  var fecha = ahora.toISOString().slice(0, 19).replace("T", " ");  // Formato: YYYY-MM-DD HH:MM:SS
  return fecha;
}



function adjuntarImagen(inputId, vistaPreviaId, horaId, ubicacionId) {

}



























/* mapa */

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

// Escucha el evento de cambio en el campo de selección
document.getElementById('mapa').addEventListener('change', mostrarMapa);

// Muestra el mapa inicialmente al cargar la página
mostrarMapa();

