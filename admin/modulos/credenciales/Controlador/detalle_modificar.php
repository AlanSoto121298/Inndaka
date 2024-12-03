<?php

session_start();
error_reporting(0);

$validar = $_SESSION['username'];

if($validar == null || $validar == ''){
    header("Location: ../../../../admin.php");
    die();
}
?>

<?php
include "../Modelo/conexion.php";

if (isset($_GET['id_persona'])) {
    $id_persona = $_GET['id_persona'];

    $sql = $conexion->prepare("SELECT id_persona, nombre, apellido, tipo_sangre, enfermedad, tipo_emp, fecha_ing, status, fotografia FROM persona WHERE id_persona = ?");
    $sql->bind_param("i", $id_persona);

    if ($sql->execute()) {
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();

            // Convertir la fotografía a base64 si está presente
            if (!empty($data['fotografia'])) {
                $data['fotografia'] = base64_encode($data['fotografia']);
            } else {
                $data['fotografia'] = null;
            }

            // Depuración: Mostrar los datos que se envían al frontend
            header('Content-Type: application/json');
            echo json_encode($data, JSON_PRETTY_PRINT);
        } else {
            echo json_encode(["error" => "No se encontraron datos para el ID proporcionado"]);
        }
    } else {
        echo json_encode(["error" => "Error al ejecutar la consulta: " . $conexion->error]);
    }
} else {
    echo json_encode(["error" => "ID no proporcionado en la solicitud"]);
}
?>
