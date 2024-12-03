<?php
$servername = "localhost";
    $username = "u221169986_arsol";
  	$password = "Ar$0l.2030";
  	$dbname = "u221169986_inndaka";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

$query = "SELECT id, CONCAT('/Colaboradores/archivos_subidos/', archivo) AS titulo, profesion, rfc,fecha_nacimiento, curp, no_infonavit, nss, 
correo, hijos, no_cuenta, estado_civil, licencia_conducir, certificado_medico, cp, 
calle_numero, colonia, ciudad, estado, base, correo_empresarial, 
nota, motivo_baja, sexo, archivo, fecha_firma_inicial, fecha_firma_final, ine_path, licencia_path,
datos_personales.* FROM datos_personales";


$whereClause = "(estado_registro = 'activo' OR estado_registro = 'inactivo')";

if (isset($_POST['consulta'])) {
    $q = $conn->real_escape_string($_POST['consulta']);
    $whereClause .= " AND (
        id LIKE '%" . $q . "%' OR
        nombres LIKE '%" . $q . "%' OR
        apellido_paterno LIKE '%" . $q . "%' OR
        apellido_materno LIKE '%" . $q . "%' OR
        telefono LIKE '%" . $q . "%' OR
        tipo_sangre LIKE '%" . $q . "%' OR
        puesto LIKE '%" . $q . "%' OR
        empresa LIKE '%" . $q . "%' OR
        telefono_empresarial LIKE '%" . $q . "%' OR
        ubicacion LIKE '%" . $q . "%' OR
        salario_mensual LIKE '%" . $q . "%' OR
        estado_registro LIKE '%" . $q . "%' OR
        fecha_Firma_Salario LIKE '%" . $q . "%' OR
        estado_contratacion LIKE '%" . $q . "%'
        
    )";
}

$query .= " WHERE " . $whereClause . " ORDER BY id DESC";

$resultado = $conn->query($query);

if ($resultado->num_rows > 0) {
     $salida.="<div class='tabla-contenedor'>"; // Abre el contenedor
    $salida .= "<table border=1 class='tabla_datos'>
        <thead>
            <tr id='titulo'>
            <td>Id</td>
                <td>Nombre</td>
                <td>Ap paterno</td>
                <td>Ap materno</td>
                <td>Teléfono</td>
                <td>Tipo-sangre</td>
                <td>Puesto</td>
                <td>Empresa</td>
                <td>Tel. empresarial</td>
                <td>Ubicacion</td>
                <td>Actualizacion de Salario</td>
                <td>Salario mensual</td>
                <td>Estatus</td>
                <td>Estado de Contratacion</td>
                <td>Borrar</td>
            </tr>
        </thead>
        <tbody>";

    while ($fila = $resultado->fetch_assoc()) {
        $estatusColor = ($fila['estado_registro'] == 'activo') ? 'lightgreen' : 'lightcoral';
        $salida .= "<tr id='fila-{$fila['id']}' style='background-color:{$estatusColor};' onclick='redireccionarConDatos(\"{$fila['id']}\",\"{$fila['nombres']}\", \"{$fila['apellido_paterno']}\", \"{$fila['apellido_materno']}\",\"{$fila['telefono']}\", \"{$fila['tipo_sangre']}\", \"{$fila['puesto']}\", \"{$fila['empresa']}\", \"{$fila['telefono_empresarial']}\", \"{$fila['ubicacion']}\", \"{$fila['salario_mensual']}\", \"{$fila['titulo']}\", \"{$fila['profesion']}\",\"{$fila['rfc']}\",\"{$fila['fecha_nacimiento']}\",\"{$fila['curp']}\",\"{$fila['no_infonavit']}\",\"{$fila['nss']}\",\"{$fila['correo']}\",\"{$fila['hijos']}\",\"{$fila['no_cuenta']}\",\"{$fila['estado_civil']}\",\"{$fila['licencia_conducir']}\",\"{$fila['certificado_medico']}\",\"{$fila['cp']}\",\"{$fila['calle_numero']}\",\"{$fila['colonia']}\",\"{$fila['ciudad']}\",\"{$fila['estado']}\",\"{$fila['base']}\",\"{$fila['correo_empresarial']}\",\"{$fila['estado_registro']}\",\"{$fila['nota']}\",\"{$fila['motivo_baja']}\",\"{$fila['sexo']}\",\"{$fila['archivo']}\",\"{$fila['fecha_firma_inicial']}\",\"{$fila['fecha_firma_final']}\",\"{$fila['fecha_Firma_Salario']}\",\"{$fila['estado_contratacion']}\",\"{$fila['ine_path']}\",\"{$fila['licencia_path']}\")'>  
            <td>{$fila['id']}</td>
            <td>{$fila['nombres']}</td>
            <td>{$fila['apellido_paterno']}</td>
            <td>{$fila['apellido_materno']}</td>
            <td>{$fila['telefono']}</td>
            <td>{$fila['tipo_sangre']}</td>
            <td>{$fila['puesto']}</td>
            <td>{$fila['empresa']}</td>
            <td>{$fila['telefono_empresarial']}</td>
            <td>{$fila['ubicacion']}</td>
            <td>{$fila['fecha_Firma_Salario']}</td>
            <td>{$fila['salario_mensual']}</td>
            <td>{$fila['estado_registro']}</td>
            <td>{$fila['estado_contratacion']}</td>
            <td><button class='borrar-btn' style='background-color: red; color: white; border: none; padding: 8px 12px; cursor: pointer; border-radius: 30px;' data-id='" . $fila['id'] . "' onclick='event.stopPropagation();'>Borrar</button></td>
        </tr>";
    }

    $salida .= "</tbody></table>";
     $salida.="</div>"; // Cierra el contenedor
} else {
    $salida .= "NO EXISTEN REGISTROS DE ESTA PERSONA CON ANTERIORIDAD";
}

echo $salida;


$conn->close();
?>

<script>

$('.borrar-btn').click(function(event) {
    event.stopPropagation(); // Detiene la propagación del evento click para evitar que afecte al evento onclick de la fila

    var id = $(this).data('id');
    var fila = $(this).closest('tr'); // Obtener la fila que contiene el botón eliminar

    if (confirm("¿Estás seguro de que quieres eliminar este registro?")) {
        $.ajax({
            type: 'POST',
            url: 'borrar.php', // Ruta al script PHP que elimina el registro
            data: {
                id: id
            },
            success: function(response) {
                // Eliminar la fila correspondiente de la tabla
                fila.remove();
                alert("Registro eliminado correctamente.");
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
});



 function redireccionarConDatos(id, nombres, apellido_paterno, apellido_materno, telefono, 
    tipo_sangre, puesto, empresa, telefono_empresarial, ubicacion, salario_mensual, 
    titulo, profesion, rfc, fecha_nacimiento, curp, no_infonavit, nss, correo, hijos, 
    no_cuenta, estado_civil, licencia_conducir, certificado_medico, cp, calle_numero, 
    colonia, ciudad, estado, base, correo_empresarial, estado_registro, nota, motivo_baja, 
    sexo, archivo, fecha_firma_inicial, fecha_firma_final, fecha_Firma_Salario, 
    estado_contratacion, ine_path, licencia_path) {

    // Crear un contenedor para los documentos adjuntos
    const documentosContainer = document.createElement('div');

    // Crear elemento para el título
    const tituloElement = document.createElement('h2');
    tituloElement.textContent = 'Documentos Adjuntos';
    documentosContainer.appendChild(tituloElement);

    // Función para crear elementos de visualización y descarga de archivos
    function crearElementoArchivo(tipo, nombreArchivo, rutaArchivo) {
        const archivoContainer = document.createElement('div');

        // Crear elemento para el nombre del archivo
        const nombreElement = document.createElement('p');
        nombreElement.textContent = nombreArchivo;
        archivoContainer.appendChild(nombreElement);

        // Crear elemento para visualizar el archivo
        const visualizarButton = document.createElement('button');
        visualizarButton.textContent = 'Ver';
        visualizarButton.addEventListener('click', function() {
            window.open(rutaArchivo, '_blank');
        });
        archivoContainer.appendChild(visualizarButton);

        // Crear elemento para descargar el archivo
        const descargarButton = document.createElement('button');
        descargarButton.textContent = 'Descargar';
        descargarButton.addEventListener('click', function() {
            window.location.href = rutaArchivo;
        });
        archivoContainer.appendChild(descargarButton);

        documentosContainer.appendChild(archivoContainer);
    }

    // Agregar los documentos adjuntos al contenedor
    if (ine_path) {
        crearElementoArchivo('INE', 'INE.pdf', ine_path);
    }

    if (licencia_path) {
        crearElementoArchivo('Licencia', 'Licencia.pdf', licencia_path);
    }

    // Agregar el contenedor al cuerpo del documento
    document.body.appendChild(documentosContainer);

    // Redireccionar al formulario con los datos
    const datos = {
        id: id,
        nombres: nombres,
        apellido_paterno: apellido_paterno,
        apellido_materno: apellido_materno,
        telefono: telefono,
        tipo_sangre: tipo_sangre,
        puesto: puesto,
        empresa: empresa,
        telefono_empresarial: telefono_empresarial,
        ubicacion: ubicacion,
        salario_mensual: salario_mensual,
        titulo: titulo,
        profesion: profesion,
        rfc: rfc,
        fecha_nacimiento: fecha_nacimiento,
        curp: curp,
        no_infonavit: no_infonavit,
        nss: nss,
        correo: correo,
        hijos: hijos,
        no_cuenta: no_cuenta,
        estado_civil: estado_civil,
        licencia_conducir: licencia_conducir,
        certificado_medico: certificado_medico,
        cp: cp,
        calle_numero: calle_numero,
        colonia: colonia,
        ciudad: ciudad,
        estado: estado,
        base: base,
        correo_empresarial: correo_empresarial,
        estado_registro: estado_registro,
        nota: nota,
        motivo_baja: motivo_baja,
        sexo: sexo,
        archivo: archivo,
        fecha_firma_inicial: fecha_firma_inicial,
        fecha_firma_final: fecha_firma_final,
        fecha_Firma_Salario: fecha_Firma_Salario,
        estado_contratacion: estado_contratacion,
        ine_path: ine_path,
        licencia_path: licencia_path
    };

    const params = new URLSearchParams();
    params.append('datos', JSON.stringify(datos));

    window.location.href = 'index.php?' + params.toString();
}

</script>