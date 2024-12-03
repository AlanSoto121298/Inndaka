<?php 

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["correo"]) && !empty($_POST["contraseña"]) && !empty($_POST["tipo"])) {
        
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $contraseña = $_POST["contraseña"];
        $tipo = $_POST["tipo"];

        // Aquí debes usar una declaración preparada
        $stmt = $conexion->prepare("INSERT INTO cuenta (nombre, apellido, correo, contraseña, tipo) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nombre, $apellido, $correo, $contraseña, $tipo);
        
        if ($stmt->execute()) {
            header("Location: index.php"); // Redirigir a index.php
            exit(); // Asegurarse de que no se ejecute más código
        } else {
            echo '<div class="alert alert-danger">El registro falló</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Algunos de los datos no han sido ingresados</div>';
    }
}

?>