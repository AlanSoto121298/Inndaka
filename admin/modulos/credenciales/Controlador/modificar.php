<?php

session_start();
error_reporting(0);

$validar = $_SESSION['username'];

if($validar == null || $validar == ''){
    header("Location: ../../../../index.php");
    die();
}
?>

<?php
ob_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Incluyendo la conexión a la base de datos
include "../Modelo/conexion.php";

// Verificando si el formulario fue enviado
if (!empty($_POST["btneditar"])) {
    if (!empty($_POST["id_persona"]) && !empty($_POST["nombre"]) && !empty($_POST["apellido"]) &&
        !empty($_POST["tipo_sangre"]) && !empty($_POST["enfermedad_cronica"]) &&
        !empty($_POST["tipo_empleado"]) && !empty($_POST["fecha_ingreso"]) &&
        !empty($_POST["status"])) {

        $id_persona = $_POST["id_persona"];
        $nombres = $_POST["nombre"];
        $apellidos = $_POST["apellido"];
        $tipo_sangre = $_POST["tipo_sangre"];
        $enfermedad_cronica = $_POST["enfermedad_cronica"];
        $tipo_empleado = $_POST["tipo_empleado"];
        $fecha_ingreso = $_POST["fecha_ingreso"];
        $status = $_POST["status"];

        // Lógica para manejar la fotografía
        if (isset($_FILES['fotografiaNueva']) && is_uploaded_file($_FILES['fotografiaNueva']['tmp_name'])) {
            // Nueva imagen cargada
            $fotografia = file_get_contents($_FILES['fotografiaNueva']['tmp_name']);

            $sql = $conexion->prepare(
                "UPDATE persona SET nombre=?, apellido=?, tipo_sangre=?, enfermedad=?, tipo_emp=?, fecha_ing=?, status=?, fotografia=? WHERE id_persona=?"
            );
            $sql->bind_param("ssssssssi", $nombres, $apellidos, $tipo_sangre, $enfermedad_cronica, $tipo_empleado, $fecha_ingreso, $status, $fotografia, $id_persona);
        } else {
            // No se subió nueva imagen; mantener la existente
            $sql = $conexion->prepare(
                "UPDATE persona SET nombre=?, apellido=?, tipo_sangre=?, enfermedad=?, tipo_emp=?, fecha_ing=?, status=? WHERE id_persona=?"
            );
            $sql->bind_param("sssssssi", $nombres, $apellidos, $tipo_sangre, $enfermedad_cronica, $tipo_empleado, $fecha_ingreso, $status, $id_persona);
        }

        if ($sql->execute()) {
            echo "<script>window.location.href='../index.php';</script>";
            exit();
        } else {
            echo "Error al ejecutar la consulta: " . $sql->error . "<br>";
        }
    } else {
        echo "Faltan campos por llenar.<br>";
    }
} else {
    echo "El formulario no se envió correctamente.<br>";
}
?>
