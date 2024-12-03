<?php

if (!empty($_GET["id_cuenta"])){
    $id_cuenta=$_GET["id_cuenta"];
    $sql=$conexion->query(" delete from cuenta where id_cuenta=$id_cuenta ");
    if ($sql==1) {
        echo '<div class="alert alert-success">Persona eliminada correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">No ha sido posible eliminar este dato</div>';
    }
}

?>