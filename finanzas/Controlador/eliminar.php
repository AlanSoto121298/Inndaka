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

//verifica que el id seleccionado tenga datos
if (!empty($_GET["id_persona"])){
    $id_persona=$_GET["id_persona"];

    //si encontro los datos de la persona los elimina
    $sql=$conexion->query(" DELETE from persona WHERE id_persona = $id_persona");

    //si los elimino la pagina se recargara
    if ($sql) {
        header("Location: ../index.php");
        exit();
    // si no los pudo eliminar mostrara este mensaje
    } else {
        echo '<div class="alert alert-danger">No ha sido posible eliminar este dato</div>';
    }

//si no encuentra a la persona por su id recarga la pagina
} else {

    header("Location: ../index.php");
    exit();
}

?>