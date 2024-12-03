<?php
// Obtener datos del formulario
$user_id = $_POST["user_id"];
$descripcion_actividad = $_POST["descripcion_actividad"];
$inicio_trabajo = $_POST["inicio_trabajo"];
$fin_trabajo = $_POST["fin_trabajo"];
$combustible = $_POST["combustible"];
$horas_efectivas = $_POST["horas_efectivas"];
$observaciones = $_POST["observaciones"];

// Conectar a la base de datos (reemplaza con tus credenciales)
$servername = "localhost";
    $username = "u221169986_arsol";
  	$password = "Ar$0l.2030";
  	$dbname = "u221169986_inndaka";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

// Insertar los datos en la base de datos
$sql = "INSERT INTO registro_actividades (user_id, descripcion_actividad, inicio_trabajo, fin_trabajo, combustible, horas_efectivas, observaciones)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $user_id, $descripcion_actividad, $inicio_trabajo, $fin_trabajo, $combustible, $horas_efectivas, $observaciones);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Información guardada exitosamente"]);
} else {
    echo json_encode(["success" => false, "message" => "Error al guardar la información"]);
}

$stmt->close();
$conn->close();
?>
