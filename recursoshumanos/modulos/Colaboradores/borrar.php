<?php

// Establecer la conexión con la base de datos
$servername = "localhost";
    $username = "u221169986_arsol";
  	$password = "Ar$0l.2030";
  	$dbname = "u221169986_inndaka";
  	
  	
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se ha recibido el ID del equipo a eliminar
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Consulta para eliminar el equipo
    $sql = "DELETE FROM datos_personales WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Equipo eliminado correctamente.";
    } else {
        echo "Error al eliminar el equipo: " . $conn->error;
    }
} else {
    echo "No se proporcionó un ID válido para eliminar.";
}

// Cerrar la conexión
$conn->close();

?>
