<?php
// Conexión a la base de datos
$servername = "localhost";
    $username = "u221169986_arsol";
  	$password = "Ar$0l.2030";
  	$dbname = "u221169986_inndaka";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";
// Obtener el ID de la captura desde la solicitud GET
$id_captura = $_GET['id'] ?? '';

// Enviar el ID de la captura a la consola
echo "<script>console.log('ID de captura recibido: " . $id_captura . "');</script>";

if ($id_captura !== '') {
    // Consulta preparada para obtener la imagen de la base de datos
    $sql = "SELECT imagen FROM capturas WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id_captura);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado && $resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        // Obtener el contenido binario de la imagen
        $imagenBinaria = $fila['imagen'];

        // Mostrar la imagen en formato adecuado (por ejemplo, enviarla como respuesta)
        header("Content-type: image/jpeg"); // Asegúrate de establecer el tipo de contenido adecuado

        // Output de la imagen binaria
        echo $imagenBinaria;
    } else {
        // Si no se encuentra la imagen, enviar mensaje a la consola
        echo "<script>console.log('Imagen no encontrada');</script>";
    }
    $stmt->close();
} else {
    // Si no se proporciona el ID de la captura, enviar mensaje a la consola
    echo "<script>console.log('ID de captura no válido');</script>";
}

$conexion->close();
?>
