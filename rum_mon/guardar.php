<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "u221169986_arsol";
$password = "Ar$0l.2030";
$dbname = "u221169986_inndaka";


// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_POST['buscar'])) {
    $nombre_operador = $_POST['nombre_operador'];
    // Aquí deberías agregar el código para buscar el formulario en la base de datos
    // Puedes usar una consulta SELECT
    
    // Por ejemplo:
    $sql = "SELECT * FROM formulariodatos WHERE nombre_operador = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nombre_operador);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Aquí puedes mostrar los resultados o realizar las operaciones que necesites
        }
    } else {
        echo "No se encontraron resultados.";
    }
}

if (isset($_POST['guardar'])) {
    $nombre_operador = $_POST['nombre_operador'];   
    $no_empleado = $_POST['no_empleado'];
    $fecha = $_POST['fecha'];
    $rum_economico = $_POST['rum_economico'];
    $tipo = $_POST['tipo'];
    $modelo = $_POST['modelo'];


    /* campos extras */
    $rum_tramo = $_POST['rum_tramo'];
    $rum_subtramo = $_POST['rum_subtramo'];
    $mapa = $_POST['mapa'];
    
    // Aquí deberías agregar el código para insertar los valores en la base de datos
    // Puedes usar una consulta INSERT INTO
    
    // Por ejemplo:
    // Preparar la consulta SQL
    $sql = "INSERT INTO formulariodatos (nombre_operador, no_empleado, fecha, rum_economico, tipo, modelo, rum_tramo, rum_subtramo, mapa) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $nombre_operador, $no_empleado, $fecha, $rum_economico, $tipo, $modelo, $rum_tramo, $rum_subtramo, $mapa);
    if ($stmt->execute() === TRUE) {
        header("Location: Buscador.php");
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}


if (isset($_POST['Actualizar'])) {
    function actualizarImagen($campo, $id, $carpeta_destino_principal, $carpeta_destino_secundaria, $conn) {
        if (isset($_FILES[$campo]) && $_FILES[$campo]['error'] === UPLOAD_ERR_OK) {
            $nombre_imagen = $_FILES[$campo]['name'];
            $ruta_imagen_principal = $carpeta_destino_principal . $id . "_" . $nombre_imagen;
            move_uploaded_file($_FILES[$campo]['tmp_name'], $ruta_imagen_principal);

            // Guardar la imagen en la subcarpeta
            $ruta_imagen_secundaria = $carpeta_destino_secundaria . $id . "_" . $nombre_imagen;
            copy($ruta_imagen_principal, $ruta_imagen_secundaria);

            // Actualizar el campo en la base de datos
            $sql_update = "UPDATE formulariodatos SET $campo = ? WHERE id = ?";
            $stmt_update = $conn->prepare($sql_update);
            $stmt_update->bind_param("ss", $ruta_imagen_principal, $id);
            $stmt_update->execute();
        }
    }

    $carpeta_destino_principal = 'carpeta_destino/';
    $carpeta_destino_secundaria = 'monitorista vista/carpeta_destino/';

    if (!file_exists($carpeta_destino_principal)) {
        mkdir($carpeta_destino_principal, 0777, true);
    }
    if (!file_exists($carpeta_destino_secundaria)) {
        mkdir($carpeta_destino_secundaria, 0777, true);
    }

    actualizarImagen('rum_combustible', $id, $carpeta_destino_principal, $carpeta_destino_secundaria, $conn);
    actualizarImagen('rum_combustible_1', $id, $carpeta_destino_principal, $carpeta_destino_secundaria, $conn);
    actualizarImagen('rum_combustible_2', $id, $carpeta_destino_principal, $carpeta_destino_secundaria, $conn);
    // Obtener los demás datos del formulario
    
    $id = $_POST['id'];
    $nombre_operador = $_POST['nombre_operador'];
    $no_empleado = $_POST['no_empleado'];
    $fecha = $_POST['fecha'];
    $rum_economico = $_POST['rum_economico'];
    $tipo = $_POST['tipo'];
    $modelo = $_POST['modelo'];

    /* ------------------------------------------- */

    $llegada_operador = $_POST['llegada_operador'];
    $salida_operador = $_POST['salida_operador'];
    $encendido_maquina = $_POST['encendido_maquina'];
    $apagado_maquina = $_POST['apagado_maquina'];
    
    /* ------------------------------------------- */
    
    
    /* campos extras */
    $rum_tramo = $_POST['rum_tramo'];
    $rum_subtramo = $_POST['rum_subtramo'];
    $margen = $_POST['margen'];
    $valor_porcentaje = $_POST['valor_porcentaje'];
    $causa = $_POST['causa'];
    
    
    /* ------------------------------------------- */

     /* ------------------------------------------- */
     $rum_actividad = $_POST['rum_actividad'];
     $rum_descripcion = $_POST['rum_descripcion'];
     $rum_hora_inicio = $_POST['rum_hora_inicio'];
     $rum_hora_termino = $_POST['rum_hora_termino'];
     $rum_horas_efectivas = $_POST['rum_horas_efectivas'];
     $rum_observaciones = $_POST['rum_observaciones']; 
     /* ------------------------------------------- */


    /* ------------------------------------------- */
    $rum_actividad_1 = $_POST['rum_actividad_1']; 
    $rum_descripcion_1 = $_POST['rum_descripcion_1'];
    $rum_hora_inicio_1 = $_POST['rum_hora_inicio_1'];
    $rum_hora_termino_1 = $_POST['rum_hora_termino_1'];
    $rum_horas_efectivas_1 = $_POST['rum_horas_efectivas_1'];
    $rum_observaciones_1 = $_POST['rum_observaciones_1'];
    
    /* ------------------------------------------- */


    /* ------------------------------------------- */
    $rum_actividad_2 = $_POST['rum_actividad_2']; 
    $rum_descripcion_2 = $_POST['rum_descripcion_2'];
    $rum_hora_inicio_2 = $_POST['rum_hora_inicio_2'];
    $rum_hora_termino_2 = $_POST['rum_hora_termino_2'];
    $rum_horas_efectivas_2 = $_POST['rum_horas_efectivas_2'];
    $rum_observaciones_2 = $_POST['rum_observaciones_2'];   
     /* ------------------------------------------- */

     
    // Preparar la consulta SQL para actualizar los datos
    $sql = "UPDATE formulariodatos 
            SET no_empleado = ?, 
            fecha = ?,
            rum_economico = ?,
            tipo = ?,
            modelo = ?,
            llegada_operador = ?,
            salida_operador  = ?,
            encendido_maquina = ?,
            apagado_maquina = ?,
            rum_tramo = ?,
            rum_subtramo = ?,
            margen = ?,
            valor_porcentaje = ?,
            causa = ?,
            rum_actividad = ?,
            rum_descripcion = ?,
            rum_hora_inicio = ?,
            rum_hora_termino = ?,
            rum_horas_efectivas = ?,
            rum_observaciones = ?,
            rum_actividad_1 = ?,
            rum_descripcion_1 = ?,
            rum_hora_inicio_1 = ?,
            rum_hora_termino_1 = ?,
            rum_horas_efectivas_1 = ?,
            rum_observaciones_1 = ?,
            rum_actividad_2 = ?, 
            rum_descripcion_2 = ?,
            rum_hora_inicio_2 = ?,
            rum_hora_termino_2 = ?, 
            rum_horas_efectivas_2 = ?,
            rum_observaciones_2 = ?
            WHERE id = ?";

    // Ejecutar la consulta SQL
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssssssssssssssssssssss", 
    $no_empleado, 
    $fecha, 
    $rum_economico, 
    $tipo, 
    $modelo,              
    $llegada_operador,
    $salida_operador,
    $encendido_maquina,
    $apagado_maquina,
    $rum_tramo,
    $rum_subtramo,
    $margen,
    $valor_porcentaje,
    $causa,
    $rum_actividad, 
    $rum_descripcion, 
    $rum_hora_inicio, 
    $rum_hora_termino, 
    $rum_horas_efectivas, 
    $rum_observaciones, 
    $rum_actividad_1, 
    $rum_descripcion_1, 
    $rum_hora_inicio_1, 
    $rum_hora_termino_1, 
    $rum_horas_efectivas_1, 
    $rum_observaciones_1, 
    $rum_actividad_2, 
    $rum_descripcion_2, 
    $rum_hora_inicio_2, 
    $rum_hora_termino_2, 
    $rum_horas_efectivas_2,  
    $rum_observaciones_2, 
    $id);
    if ($stmt->execute() === TRUE) {
        header("Location: Buscador.php");
    } else {
        echo "Error al actualizar datos: " . $conn->error;
    }
}



// Cerrar la conexión
$conn->close();
?>

