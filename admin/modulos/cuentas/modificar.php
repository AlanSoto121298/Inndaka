<?php
include "Modelo/conexion.php";
$id_cuenta=$_GET["id_cuenta"];

$sql=$conexion->query(" select * from cuenta where id_cuenta=$id_cuenta ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <form class="col-4 p-3 m-auto" method="POST">
        <h5 class="text-center text-secondary">Modificar</h5>
        <input type="hidden" name="id_cuenta" value="<?= $_GET["id_cuenta"] ?>">
        <?php 
        include "Controlador/modificar.php";

        while($datos=$sql->fetch_object()){ ?>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo" value="<?= $datos->correo ?>">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Contraseña</label>
                <input type="text" class="form-control" name="contraseña" value="<?= $datos->contraseña ?>">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Tipo de cuenta</label>
                <input type="text" class="form-control" name="tipo" value="<?= $datos->tipo ?>">
            </div>
        <?php }
        ?>


            <button type="submit" class="btn btn-primary" name="btneditar" value="ok">Editar</button>
    </form>
</body>
</html>