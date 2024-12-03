<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "u221169986_arsol";
$password = "Ar$0l.2030";
$dbname = "u221169986_inndaka";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Inicializar la variable de salida
$salida = array();

// Verificar si se recibió el parámetro de búsqueda
if (isset($_POST['buscar'])) {
    // Obtener el término de búsqueda y evitar inyección SQL
    $buscar = $conn->real_escape_string($_POST['buscar']);

    // Consulta SQL para buscar la información
    $sql = "SELECT *, CONCAT('archivos_subidos/', archivo) AS ruta_archivo FROM datos_personales 
            WHERE (titulo LIKE '%$buscar%' OR profesion LIKE '%$buscar%' OR nombres LIKE '%$buscar%' 
            OR apellido_paterno LIKE '%$buscar%' OR apellido_materno LIKE '%$buscar%' OR curp LIKE '%$buscar%' 
            OR rfc LIKE '%$buscar%' OR nss LIKE '%$buscar%' OR telefono LIKE '%$buscar%' OR correo LIKE '%$buscar%' 
            OR hijos LIKE '%$buscar%' OR no_cuenta LIKE '%$buscar%' OR estado_civil LIKE '%$buscar%' 
            OR licencia_conducir LIKE '%$buscar%' OR certificado_medico LIKE '%$buscar%' OR sexo LIKE '%$buscar%' 
            OR tipo_sangre LIKE '%$buscar%' OR cp LIKE '%$buscar%' OR calle_numero LIKE '%$buscar%' 
            OR colonia LIKE '%$buscar%' OR ciudad LIKE '%$buscar%' OR estado LIKE '%$buscar%' 
            OR fecha_firma_inicial LIKE '%$buscar%' OR puesto LIKE '%$buscar%' OR empresa LIKE '%$buscar%' 
            OR telefono_empresarial LIKE '%$buscar%' OR correo_empresarial LIKE '%$buscar%' 
            OR salario_mensual LIKE '%$buscar%' OR base LIKE '%$buscar%' OR ubicacion LIKE '%$buscar%' 
            OR fecha_firma_final LIKE '%$buscar%' OR motivo_baja LIKE '%$buscar%' OR archivo LIKE '%$buscar%' 
            OR no_infonavit LIKE '%$buscar%' OR nota LIKE '%$buscar%' OR estado_contratacion LIKE '%$buscar%' 
            OR fecha_Firma_Salario LIKE '%$buscar%' OR ine_path LIKE '%$buscar%' OR licencia_path LIKE '%$buscar%') 
            AND (estado_registro = 'activo' OR estado_registro = 'inactivo')
            ORDER BY id DESC";

    // Ejecutar la consulta
    $resultado = $conn->query($sql);

    // Verificar si se encontraron resultados
    if ($resultado->num_rows > 0) {
        // Iterar sobre los resultados y agregarlos al arreglo de salida
        while ($fila = $resultado->fetch_assoc()) {
            $salida[] = $fila;
        }
    }
}

// Cerrar la conexión
$conn->close();

// Devolver los resultados en formato JSON
echo json_encode($salida);
?>
