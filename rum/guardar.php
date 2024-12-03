<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
    $username = "u221169986_arsol";
  	$password = "Ar$0l.2030";
  	$dbname = "u221169986_inndaka";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";
// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
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
        while ($row = $result->fetch_assoc()) {
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

    // Aquí deberías agregar el código para insertar los valores en la base de datos
    // Puedes usar una consulta INSERT INTO

    // Por ejemplo:
    // Preparar la consulta SQL
    $sql = "INSERT INTO formulariodatos (nombre_operador, no_empleado, fecha, rum_economico, tipo, modelo) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $nombre_operador, $no_empleado, $fecha, $rum_economico, $tipo, $modelo);
    if ($stmt->execute() === TRUE) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }
}

if (isset($_POST['Actualizar'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $nombre_operador = $_POST['nombre_operador'];
    $no_empleado = isset($_POST['no_empleado']) ? $_POST['no_empleado'] : null;
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : null;
    $rum_economico = isset($_POST['rum_economico']) ? $_POST['rum_economico'] : null;
    $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;
    $modelo = isset($_POST['modelo']) ? $_POST['modelo'] : null;

    // Campos extras
    $rum_tramo = isset($_POST['rum_tramo']) ? $_POST['rum_tramo'] : null;
    $rum_subtramo = isset($_POST['rum_subtramo']) ? $_POST['rum_subtramo'] : null;
    $margen = isset($_POST['margen']) ? $_POST['margen'] : null;
    $causa = isset($_POST['causa']) ? $_POST['causa'] : null;

    // Nuevos campos
    $encendido_maquina = isset($_POST['encendido_maquina']) ? $_POST['encendido_maquina'] : null;
    $rum_fecha_1 = $_POST['rum_fecha_1'];
    $rum_ubicacion_1 = $_POST['rum_ubicacion_1'];
    $apagado_maquina = $_POST['apagado_maquina'];
    $rum_fecha_2 = $_POST['rum_fecha_2'];
    $rum_ubicacion_2 = $_POST['rum_ubicacion_2'];

    $rum_fecha_hora_camara1 = $_POST['rum_fecha_hora_camara1'];
    $rum_ubicacion_camara1 = $_POST['rum_ubicacion_camara1'];
    $rum_fecha_hora_camara2 = $_POST['rum_fecha_hora_camara2'];
    $rum_ubicacion_camara2 = $_POST['rum_ubicacion_camara2'];   

    // Más campos
    


    // Ruta de la carpeta destino principal
    $carpeta_destino_principal = 'carpeta_destino/';
    // Ruta de la subcarpeta
    $carpeta_destino_secundaria = 'monitorista vista/carpeta_destino/';

    // Verificar y crear las carpetas si no existen
    if (!file_exists($carpeta_destino_principal)) {
        mkdir($carpeta_destino_principal, 0777, true); // Crea la carpeta destino principal si no existe
    }
    if (!file_exists($carpeta_destino_secundaria)) {
        mkdir($carpeta_destino_secundaria, 0777, true); // Crea la subcarpeta si no existe
    }


    /* ------------------ START SCRIPT QUE ME ACTUALIZA LAS IMAGENES POR ID "CAMARAS" ------------------*/
    // Actualizar la imagen 1 solo si se proporciona una nueva imagen
    if ($_FILES['rum_camara1']['error'] === UPLOAD_ERR_OK) {
        $nombre_imagen_1 = $_FILES['rum_camara1']['name'];
        $ruta_imagen_principal_1 = $carpeta_destino_principal . $nombre_imagen_1;
        move_uploaded_file($_FILES['rum_camara1']['tmp_name'], $ruta_imagen_principal_1);

        // Guardar la imagen en la subcarpeta
        $ruta_imagen_secundaria_1 = $carpeta_destino_secundaria . $nombre_imagen_1;
        copy($ruta_imagen_principal_1, $ruta_imagen_secundaria_1);

        // Aquí actualizas el campo en tu base de datos solo si se proporciona una nueva imagen
        $sql_update_image_1 = "UPDATE formulariodatos SET rum_camara1 = ? WHERE id = ?";
        $stmt_update_image_1 = $conn->prepare($sql_update_image_1);
        $stmt_update_image_1->bind_param("si", $ruta_imagen_principal_1, $id);
        $stmt_update_image_1->execute();
    }



    // Actualizar la imagen 2 solo si se proporciona una nueva imagen
    if ($_FILES['rum_camara2']['error'] === UPLOAD_ERR_OK) {
        $nombre_imagen_2 = $_FILES['rum_camara2']['name'];
        $ruta_imagen_principal_2 = $carpeta_destino_principal . $nombre_imagen_2;
        move_uploaded_file($_FILES['rum_camara2']['tmp_name'], $ruta_imagen_principal_2);

        // Guardar la imagen en la subcarpeta
        $ruta_imagen_secundaria_2 = $carpeta_destino_secundaria . $nombre_imagen_2;
        copy($ruta_imagen_principal_2, $ruta_imagen_secundaria_2);

        // Aquí actualizas el campo en tu base de datos solo si se proporciona una nueva imagen
        $sql_update_image_2 = "UPDATE formulariodatos SET rum_camara2 = ? WHERE id = ?";
        $stmt_update_image_2 = $conn->prepare($sql_update_image_2);
        $stmt_update_image_2->bind_param("si", $ruta_imagen_principal_2, $id);
        $stmt_update_image_2->execute();
    }

    /* ------------------END SCRIPT QUE ME ACTUALIZA LAS IMAGENES POR ID "CAMARAS" ------------------*/


    /* ------------------START SCRIPT QUE ME ACTUALIZA LAS IMAGENES POR ID "COMBUSTIBLE" ------------------*/

    // Actualizar la imagen rum_combustible solo si se proporciona una nueva imagen
    if ($_FILES['rum_combustible']['error'] === UPLOAD_ERR_OK) {
        $nombre_imagen_combustible = $_FILES['rum_combustible']['name'];
        $ruta_imagen_principal_combustible = $carpeta_destino_principal . $nombre_imagen_combustible;
        move_uploaded_file($_FILES['rum_combustible']['tmp_name'], $ruta_imagen_principal_combustible);

        // Guardar la imagen en la subcarpeta
        $ruta_imagen_secundaria_combustible = $carpeta_destino_secundaria . $nombre_imagen_combustible;
        copy($ruta_imagen_principal_combustible, $ruta_imagen_secundaria_combustible);

        // Actualizar el campo en la base de datos solo si se proporciona una nueva imagen
        $sql_update_combustible = "UPDATE formulariodatos SET rum_combustible = ? WHERE id = ?";
        $stmt_update_combustible = $conn->prepare($sql_update_combustible);
        $stmt_update_combustible->bind_param("ss", $ruta_imagen_principal_combustible, $id);
        $stmt_update_combustible->execute();
    }

    // Actualizar la imagen rum_combustible_1 solo si se proporciona una nueva imagen
    if ($_FILES['rum_combustible_1']['error'] === UPLOAD_ERR_OK) {
        $nombre_imagen_combustible_1 = $_FILES['rum_combustible_1']['name'];
        $ruta_imagen_principal_combustible_1 = $carpeta_destino_principal . $nombre_imagen_combustible_1;
        move_uploaded_file($_FILES['rum_combustible_1']['tmp_name'], $ruta_imagen_principal_combustible_1);

        // Guardar la imagen en la subcarpeta
        $ruta_imagen_secundaria_combustible_1 = $carpeta_destino_secundaria . $nombre_imagen_combustible_1;
        copy($ruta_imagen_principal_combustible_1, $ruta_imagen_secundaria_combustible_1);

        // Actualizar el campo en la base de datos solo si se proporciona una nueva imagen
        $sql_update_combustible_1 = "UPDATE formulariodatos SET rum_combustible_1 = ? WHERE id = ?";
        $stmt_update_combustible_1 = $conn->prepare($sql_update_combustible_1);
        $stmt_update_combustible_1->bind_param("ss", $ruta_imagen_principal_combustible_1, $id);
        $stmt_update_combustible_1->execute();
    }

    // Actualizar la imagen rum_combustible_2 solo si se proporciona una nueva imagen
    if ($_FILES['rum_combustible_2']['error'] === UPLOAD_ERR_OK) {
        $nombre_imagen_combustible_2 = $_FILES['rum_combustible_2']['name'];
        $ruta_imagen_principal_combustible_2 = $carpeta_destino_principal . $nombre_imagen_combustible_2;
        move_uploaded_file($_FILES['rum_combustible_2']['tmp_name'], $ruta_imagen_principal_combustible_2);

        // Guardar la imagen en la subcarpeta
        $ruta_imagen_secundaria_combustible_2 = $carpeta_destino_secundaria . $nombre_imagen_combustible_2;
        copy($ruta_imagen_principal_combustible_2, $ruta_imagen_secundaria_combustible_2);

        // Actualizar el campo en la base de datos solo si se proporciona una nueva imagen
        $sql_update_combustible_2 = "UPDATE formulariodatos SET rum_combustible_2 = ? WHERE id = ?";
        $stmt_update_combustible_2 = $conn->prepare($sql_update_combustible_2);
        $stmt_update_combustible_2->bind_param("ss", $ruta_imagen_principal_combustible_2, $id);
        $stmt_update_combustible_2->execute();
    }



    /* ------------------END SCRIPT QUE ME ACTUALIZA LAS IMAGENES POR ID "COMBUSTIBLE" ------------------*/



    // Preparar la consulta SQL para actualizar los demás campos
    $sql = "UPDATE formulariodatos 
    SET id = ?,
        no_empleado = ?, 
        fecha = ?,
        rum_economico = ?, 
        tipo = ?, 
        modelo = ?, 
        rum_tramo =?, 
        rum_subtramo = ?, 
        margen = ?, 
        causa = ?,
        encendido_maquina = ?,
        rum_fecha_1 = ?,
        rum_ubicacion_1 = ?,
        apagado_maquina = ?,
        rum_fecha_2 = ?,
        rum_ubicacion_2 = ?,
        rum_fecha_hora_camara1 = ?,
        rum_ubicacion_camara1 = ?,
        rum_fecha_hora_camara2 = ?, 
        rum_ubicacion_camara2 = ?
    WHERE id = ?";  // Quité la coma extra al final de esta línea

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssssssssssssssssssss",
        $id,
        $no_empleado,
        $fecha,
        $rum_economico,
        $tipo,
        $modelo,
        $rum_tramo,
        $rum_subtramo,
        $margen,
        $causa,
        $encendido_maquina, // Moví esta variable antes de $nombre_operador
        $rum_fecha_1,
        $rum_ubicacion_1,
        $apagado_maquina,
        $rum_fecha_2,
        $rum_ubicacion_2,
        $rum_fecha_hora_camara1,
        $rum_ubicacion_camara1,
        $rum_fecha_hora_camara2, 
        $rum_ubicacion_camara2,
        $id
    );  // Asegúrate de pasar el id correcto para la condición WHERE


    if ($stmt->execute() === TRUE) {
        header("Location: index.html");
    } else {
        echo "Error al actualizar datos: " . $conn->error;
    }
}



// Cerrar la conexión
$conn->close();
