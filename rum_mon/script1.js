
function redireccionar(url) {
  window.location.href = url;
}



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

function mostrarDatos(datos) {
  console.log('ID encontrado:', datos.id);
  // Aquí muestras los datos en el formulario para editar
  // Por ejemplo, puedes asignar los valores a los campos del formulario
  document.getElementById('nombre_operador').value = datos.nombre_operador;
  document.getElementById('no_empleado').value = datos.no_empleado;
  // Asigna los demás campos de acuerdo a tus necesidades
  
}

function crearNuevoRegistro(id) {
  // Aquí puedes redirigir a una página para crear un nuevo registro con el ID buscado
  // Por ejemplo:
  window.location.href = 'crear_registro.php?id=' + id;
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
  document.getElementById('rum-Input-Causa').value = data['causa'] || '';
  document.getElementById('id_formulario').value = data['id'] || ''; // Agrega este campo para mostrar el ID


  document.getElementById('vista-previa-Camara1').src = data.rum_camara1 || ''; // Asigna la URL de la imagen al campo de la cámara 1
  document.getElementById('vista-previa-Camara2').src = data.rum_camara2 || ''; // Asigna la URL de la imagen al campo de la cámara 2


  document.getElementById('vista-previa-combustible').src = data.rum_combustible || '';
  document.getElementById('vista-previa-combustible_1').src = data.rum_combustible_1 || '';
  document.getElementById('vista-previa-combustible_2').src = data.rum_combustible_2 || '';

  document.getElementById('rum-Input-Valor-Porcentaje').value = data['valor_porcentaje'] || '';

  
}

function crearNuevoRegistro(id) {
  // Redirigir a una página donde puedas crear un nuevo registro con el ID proporcionado
  window.location.href = 'crear_registro.php?id=' + id;
}






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
/* document.getElementById('firmaContainer').innerHTML = '<img src="' + data.rutaFirma + '" alt="Firma Digital">';
 */
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






/* function mostrarVistaPrevia(inputId, imgId) {
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
} */
    



function mostrarVistaPrevia(inputId, imgId, horaId, ubicacionId) {
  var input = document.getElementById(inputId);
  var img = document.getElementById(imgId);
  var horaAdjunto = document.getElementById(horaId);
  var ubicacionAdjunto = document.getElementById(ubicacionId);

  var fechaHora = obtenerFechaHora();
  obtenerUbicacion(function(ubicacion) {
    // Mostrar información en los elementos específicos
    horaAdjunto.innerText = 'Hora de adjunto: ' + fechaHora;
    ubicacionAdjunto.innerText = 'Ubicación: ' + ubicacion;

    // Actualizar los campos ocultos en el formulario con los valores calculados
    document.getElementById('rum_fecha_hora_camara1').value = fechaHora;
    document.getElementById('rum_ubicacion_camara1').value = ubicacion;
    document.getElementById('rum_fecha_hora_camara2').value = fechaHora;
    document.getElementById('rum_ubicacion_camara2').value = ubicacion;
  });

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      img.src = e.target.result;
    };

    reader.readAsDataURL(input.files[0]);
  }
}

  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          img.src = e.target.result;

          // Obtener información adicional
          var fechaHora = obtenerFechaHora();
          obtenerUbicacion(function(ubicacion) {
              // Mostrar información en los elementos específicos
              horaAdjunto.innerText = 'Hora de adjunto: ' + fechaHora;
              ubicacionAdjunto.innerText = 'Ubicación: ' + ubicacion;
          });
      };

      reader.readAsDataURL(input.files[0]);
  }


function obtenerFechaHora() {
  var ahora = new Date();
  var fecha = ahora.toLocaleDateString();
  var horas = ahora.getHours();
  var minutos = ahora.getMinutes();
  var segundos = ahora.getSeconds();
  return fecha + ' ' + horas + ':' + minutos + ':' + segundos;
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


























// Función para calcular las horas efectivas de la primera actividad
function calcularHorasEfectivas() {
  var horaInicio = document.getElementById('rum-Input-hora-inicio').value;
  var horaTermino = document.getElementById('rum-Input-hora-termino').value;

  if (horaInicio && horaTermino) {
      var fechaInicio = new Date('2000-01-01 ' + horaInicio);
      var fechaTermino = new Date('2000-01-01 ' + horaTermino);

      var diferenciaMillis = fechaTermino - fechaInicio;
      var horasEfectivas = diferenciaMillis / (1000 * 60 * 60);

      document.getElementById('rum-Input-horas-efectivas').value = horasEfectivas.toFixed(2) + " hrs";
  }
}

// Función para calcular las horas efectivas de la segunda actividad
function calcularHorasEfectivas_1() {
  var horaInicio = document.getElementById('rum-Input-hora-inicio_1').value;
  var horaTermino = document.getElementById('rum-Input-hora-termino_1').value;

  if (horaInicio && horaTermino) {
      var fechaInicio = new Date('2000-01-01 ' + horaInicio);
      var fechaTermino = new Date('2000-01-01 ' + horaTermino);

      var diferenciaMillis = fechaTermino - fechaInicio;
      var horasEfectivas = diferenciaMillis / (1000 * 60 * 60);

      document.getElementById('rum-Input-horas-efectivas_1').value = horasEfectivas.toFixed(2) + " hrs";
  }
}

// Función para calcular las horas efectivas de la tercera actividad
function calcularHorasEfectivas_2() {
  var horaInicio = document.getElementById('rum-Input-hora-inicio_2').value;
  var horaTermino = document.getElementById('rum-Input-hora-termino_2').value;

  if (horaInicio && horaTermino) {
      var fechaInicio = new Date('2000-01-01 ' + horaInicio);
      var fechaTermino = new Date('2000-01-01 ' + horaTermino);

      var diferenciaMillis = fechaTermino - fechaInicio;
      var horasEfectivas = diferenciaMillis / (1000 * 60 * 60);

      document.getElementById('rum-Input-horas-efectivas_2').value = horasEfectivas.toFixed(2) + " hrs";
  }
}

// Obtener los elementos de los campos de hora de inicio y fin para cada actividad
var horaInicioInput = document.getElementById('rum-Input-hora-inicio');
var horaTerminoInput = document.getElementById('rum-Input-hora-termino');
var horaInicioInput_1 = document.getElementById('rum-Input-hora-inicio_1');
var horaTerminoInput_1 = document.getElementById('rum-Input-hora-termino_1');
var horaInicioInput_2 = document.getElementById('rum-Input-hora-inicio_2');
var horaTerminoInput_2 = document.getElementById('rum-Input-hora-termino_2');

// Agregar event listeners para cada conjunto de campos de hora de inicio y fin
horaInicioInput.addEventListener('input', calcularHorasEfectivas);
horaTerminoInput.addEventListener('input', calcularHorasEfectivas);
horaInicioInput_1.addEventListener('input', calcularHorasEfectivas_1);
horaTerminoInput_1.addEventListener('input', calcularHorasEfectivas_1);
horaInicioInput_2.addEventListener('input', calcularHorasEfectivas_2);
horaTerminoInput_2.addEventListener('input', calcularHorasEfectivas_2);















/* function redireccionarParaActualizar(id) {
  // Establecer el valor del campo de ID en el formulario oculto
  document.getElementById("id_formulario").value = id;
  // Enviar el formulario automáticamente
  document.getElementById("form_actualizar").submit();
} */








