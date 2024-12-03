<?php
// Conexión a la base de datos (ajusta los detalles según tu configuración)
$servername = "localhost";
    $username = "u221169986_arsol";
  	$password = "Ar$0l.2030";
  	$dbname = "u221169986_inndaka";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Variables con los datos del formulario
    // Ajusta las variables según los campos del formulario
    $id = $_POST['id'] ?? ''; // Se asume que hay un campo oculto 'id' en el formulario para identificar el registro a actualizar
    $titulo = $_POST['titulo'] ?? '';
    $profesion = $_POST['profesion'] ?? '';
    $rfc = $_POST['rfc'] ?? '';
    $nombres = $_POST['nombres'] ?? '';
    $apellido_Paterno = $_POST['apellido_Paterno'] ?? '';
    $apellido_Materno = $_POST['apellido_Materno'] ?? '';
    $fecha_nacimiento = $_POST['fecha_nacimiento'] ?? '';
    $curp = $_POST['curp'] ?? '';
    $no_infonavit = $_POST['no_infonavit'] ?? '';
    $nss = $_POST['nss'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $hijos = $_POST['hijos'] ?? '';
    $no_cuenta = $_POST['no_cuenta'] ?? '';
    $estado_civil = $_POST['estado_civil'] ?? '';
    $licencia_conducir = $_POST['licencia_conducir'] ?? '';
    $certificado_medico = $_POST['certificado_medico'] ?? '';
    $sexo = $_POST['sexo'] ?? '';
    $tipo_sangre = $_POST['tipo_sangre'] ?? '';

    $cp = $_POST['cp'] ?? '';
    $calle_numero = $_POST['calle_numero'] ?? '';
    $colonia = $_POST['colonia'] ?? '';
    $ciudad = $_POST['ciudad'] ?? '';
    $estado = $_POST['estado'] ?? '';

    $base = $_POST['base'] ?? '';
    $puesto = $_POST['puesto'] ?? '';
    $empresa = $_POST['empresa'] ?? '';

    $telefono_empresarial = $_POST['telefono_empresarial'] ?? '';
    $correo_empresarial = $_POST['correo_empresarial'] ?? '';
    $fecha_Firma_Salario = $_POST['fecha_Firma_Salario'] ?? '';
    $salario_mensual = $_POST['salario_mensual'] ?? '';
    $estado_registro = $_POST['estado_registro'] ?? '';

    $fecha_firma_final = $_POST['fecha_firma_final'] ?? '';
    $ubicacion = $_POST['ubicacion'] ?? '';
    $motivo_baja = $_POST['motivo_baja'] ?? '';
    $fecha_firma_inicial = $_POST['fecha_firma_inicial'] ?? '';

    $nota = $_POST['nota'] ?? '';

    $estado_contratacion = $_POST['estado_contratacion'] ?? '';

 // Archivo
    // Verificar si se ha proporcionado un nuevo archivo de imagen
    $archivo = $_FILES['archivo'] ?? '';
    $ruta_destino_archivo = '';

    // Verificar si ya hay una imagen guardada en la base de datos
    if ($archivo && $archivo['name']) {
        // Se ha proporcionado un nuevo archivo, subirlo y guardar la ruta
        $ruta_destino_archivo = 'archivos_subidos/' . $id . '_' . basename($archivo['name']);
        if (move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo)) {
            echo "El archivo se ha subido correctamente.";
        } else {
            echo "Error al subir el archivo.";
        }
    } else {
        // No se ha proporcionado un nuevo archivo de imagen, utilizar la ruta existente en la base de datos
        $sql_select_imagen = "SELECT archivo FROM datos_personales WHERE id=?";
        $stmt_select_imagen = $conn->prepare($sql_select_imagen);
        $stmt_select_imagen->bind_param("i", $id);
        $stmt_select_imagen->execute();
        $stmt_select_imagen->bind_result($foto_actual);
        $stmt_select_imagen->fetch();
        $stmt_select_imagen->close();

        if ($foto_actual) {
            // Ya hay una imagen guardada en la base de datos, conservarla
            $ruta_destino_archivo = $foto_actual;
        } else {
            // No hay una imagen existente ni un nuevo archivo proporcionado
            $ruta_destino_archivo = '';
        }
    }


    // Documentos
    $ruta_documentos = 'archivos_documentos/';

    // INE
    $ruta_ine = obtenerRutaArchivo($_FILES['ine'] ?? '', 'ine_path', $ruta_documentos, $conn, $id);

    // Licencia
    $ruta_licencia = obtenerRutaArchivo($_FILES['licencia'] ?? '', 'licencia_path', $ruta_documentos, $conn, $id);

    // Resto de los campos del formulario ...

    // Verificar si se debe realizar una actualización o una inserción
    $accion = $_POST['accion'] ?? '';
    if ($accion === 'Actualizar') {
        // Actualizar los datos
        $sql = "UPDATE datos_personales SET 
        titulo = ?, 
        profesion = ?, 
        rfc = ?,
        nombres = ?,
        apellido_Paterno = ?,
        apellido_Materno = ?,
        fecha_nacimiento = ?,
        curp = ?,
        no_infonavit = ?,
        nss = ?,
        telefono = ?,
        correo = ?,
        hijos = ?,
        no_cuenta = ?,
        estado_civil = ?,
        licencia_conducir = ?,
        certificado_medico = ?,
        sexo = ?,
        tipo_sangre = ?,
        cp = ?,
        calle_numero = ?,
        colonia = ?,
        ciudad = ?,   
        estado = ?,
        base = ?,
        puesto = ?,
        empresa = ?,
        telefono_empresarial = ?,
        correo_empresarial = ?,
        fecha_Firma_Salario = ?,
        salario_mensual = ?,
        estado_registro = ?,
        fecha_firma_final = ?,
        ubicacion = ?,
        motivo_baja = ?,
        fecha_firma_inicial = ?,
        nota = ?,
        estado_contratacion = ?,
        ine_path = ?, 
        licencia_path = ?, 
        archivo = ?
        WHERE id=?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssi",
            $titulo,
            $profesion,
            $rfc,
            $nombres,
            $apellido_Paterno,
            $apellido_Materno,
            $fecha_nacimiento,
            $curp,
            $no_infonavit,
            $nss,
            $telefono,
            $correo,
            $hijos,
            $no_cuenta,
            $estado_civil,
            $licencia_conducir,
            $certificado_medico,
            $sexo,
            $tipo_sangre,
            $cp,
            $calle_numero,
            $colonia,
            $ciudad,
            $estado,
            $base,
            $puesto,
            $empresa,
            $telefono_empresarial,
            $correo_empresarial,
            $fecha_Firma_Salario,
            $salario_mensual,
            $estado_registro,
            $fecha_firma_final,
            $ubicacion,
            $motivo_baja,
            $fecha_firma_inicial,
            $nota,
            $estado_contratacion,
            $ruta_ine,
            $ruta_licencia,
            $ruta_destino_archivo,
            $id);
    } else {
        // Insertar nuevos datos
        $sql = "INSERT INTO datos_personales 
        (titulo , 
        profesion , 
        rfc,
        nombres ,
        apellido_Paterno ,
        apellido_Materno ,
        fecha_nacimiento ,
        curp ,
        no_infonavit ,
        nss ,
        telefono,
        correo,
        hijos,
        no_cuenta,
        estado_civil,
        licencia_conducir,
        certificado_medico,
        sexo,
        tipo_sangre,
        cp,
        calle_numero,
        colonia,
        ciudad,   
        estado,
        base,
        puesto,
        empresa,
        telefono_empresarial,
        correo_empresarial,
        fecha_Firma_Salario,
        salario_mensual,
        estado_registro,
        fecha_firma_final,
        ubicacion,
        motivo_baja,
        fecha_firma_inicial,
        nota,
        estado_contratacion,
        ine_path, 
        licencia_path, 
        archivo) 
        VALUES 
        (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssssssssssssssssssssssssssssssssss",
            $titulo,
            $profesion,
            $rfc,
            $nombres,
            $apellido_Paterno,
            $apellido_Materno,
            $fecha_nacimiento,
            $curp,
            $no_infonavit,
            $nss,
            $telefono,
            $correo,
            $hijos,
            $no_cuenta,
            $estado_civil,
            $licencia_conducir,
            $certificado_medico,
            $sexo,
            $tipo_sangre,
            $cp,
            $calle_numero,
            $colonia,
            $ciudad,
            $estado,
            $base,
            $puesto,
            $empresa,
            $telefono_empresarial,
            $correo_empresarial,
            $fecha_Firma_Salario,
            $salario_mensual,
            $estado_registro,
            $fecha_firma_final,
            $ubicacion,
            $motivo_baja,
            $fecha_firma_inicial,
            $nota,
            $estado_contratacion,
            $ruta_ine,
            $ruta_licencia,
            $ruta_destino_archivo);
    }

    // Ejecutar la consulta y verificar si se realizó correctamente
    if ($stmt->execute() === TRUE) {
        header("Location: Buscador.php");
        echo json_encode(array('success' => true, 'message' => 'Los datos se han guardado correctamente en la base de datos.'));
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();

function obtenerRutaArchivo($archivo, $columna, $ruta_documentos, $conn, $id) {
    $ruta = '';

    if ($archivo && $archivo['name']) {
        // Se ha proporcionado un nuevo archivo, subirlo y guardar la ruta
        $ruta = $ruta_documentos . basename($archivo['name']);
        if (move_uploaded_file($archivo['tmp_name'], $ruta)) {
            echo "El archivo se ha subido correctamente.";
        } else {
            echo "Error al subir el archivo.";
        }
    } else {
        // Obtener la ruta actual desde la base de datos si no se proporciona un nuevo archivo
        $sql_select = "SELECT $columna FROM datos_personales WHERE id=?";
        $stmt_select = $conn->prepare($sql_select);
        $stmt_select->bind_param("i", $id);
        $stmt_select->execute();
        $stmt_select->bind_result($archivo);
        $stmt_select->fetch();
        $ruta = $archivo;
        $stmt_select->close();
    }

    return $ruta;
}
?>
