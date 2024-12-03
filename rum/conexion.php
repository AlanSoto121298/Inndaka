<?php
$servername = "localhost";
    $username = "u221169986_arsol";
  	$password = "Ar$0l.2030";
  	$dbname = "u221169986_inndaka";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*     echo "Conexión exitosa"; */
} catch(PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}
?>

