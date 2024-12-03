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
include "../Modelo/conexion.php";

//verifica que no haya campos vacios
if (!empty($_POST["btnguardar"])) {
    if (!empty($_POST["nombres"]) && !empty($_POST["apellidos"]) && !empty($_POST["tipo_sangre"]) && !empty($_POST["enfermedad_cronica"]) && !empty($_POST["tipo_empleado"]) && !empty($_POST["fecha_ingreso"]) && !empty($_POST["status"]) && !empty($_FILES["fotografia"]["tmp_name"])) {
        
        //Toma los valores registrados en el formulario y los almacena en las varibles
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $tipo_sangre = $_POST["tipo_sangre"];
        $enfermedad_cronica = $_POST["enfermedad_cronica"];
        $tipo_empleado = $_POST["tipo_empleado"];
        $fecha_ingreso = $_POST["fecha_ingreso"];
        $status = $_POST["status"];
        $fotografia = file_get_contents($_FILES['fotografia']['tmp_name']);

        //Hace la insercion de los datos a la BD
        $stmt = $conexion->prepare("INSERT INTO persona (nombre, apellido, tipo_sangre, enfermedad, tipo_emp, fecha_ing, status, fotografia) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $nombres, $apellidos, $tipo_sangre, $enfermedad_cronica, $tipo_empleado, $fecha_ingreso,$status,$fotografia);
        
        //Sila insercion se hizo correcta recargar la pagina para que no se dupliquen campos ni datos
        if ($stmt->execute()) {
            header("Location: ../index.php"); // Redirigir a index.php
            exit(); // Asegurarse de que no se ejecute más código
        } else {
            echo '<div class="alert alert-danger">El registro falló</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Algunos de los datos no han sido ingresados</div>';
    }
}

?>