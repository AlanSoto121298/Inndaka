<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "u221169986_arsol";
$password = "Ar$0l.2030";
$dbname = "u221169986_inndaka";


// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener término de búsqueda
$buscar = $_POST['buscador'] ?? '';

// Evitar posibles problemas de inyección SQL
$buscar = $conexion->real_escape_string($buscar);

// Buscar información en las tablas
$sql = "SELECT * FROM formulariodatos 
        WHERE nombre_operador LIKE '%$buscar%' OR id LIKE '%$buscar%' OR no_empleado LIKE '%$buscar%' OR fecha LIKE '%$buscar%' 
        OR rum_economico LIKE '%$buscar%' OR tipo LIKE '%$buscar%' OR modelo LIKE '%$buscar%' 
        OR llegada_operador LIKE '%$buscar%' OR salida_operador LIKE '%$buscar%' OR encendido_maquina LIKE '%$buscar%' 
        OR apagado_maquina LIKE '%$buscar%' OR rum_tramo LIKE '%$buscar%' OR rum_subtramo LIKE '%$buscar%' 
        OR margen LIKE '%$buscar%' OR valor_porcentaje LIKE '%$buscar%' OR causa LIKE '%$buscar%'
        OR rum_actividad LIKE '%$buscar%' OR rum_descripcion LIKE '%$buscar%' 
        OR rum_hora_inicio LIKE '%$buscar%' OR rum_hora_termino LIKE '%$buscar%' 
        OR rum_horas_efectivas LIKE '%$buscar%' OR rum_observaciones LIKE '%$buscar%' 
        OR rum_combustible LIKE '%$buscar%'
        OR rum_actividad_1 LIKE '%$buscar%' OR rum_descripcion_1 LIKE '%$buscar%' 
        OR rum_hora_inicio_1 LIKE '%$buscar%' OR rum_hora_termino_1 LIKE '%$buscar%' 
        OR rum_horas_efectivas_1 LIKE '%$buscar%' OR rum_observaciones_1 LIKE '%$buscar%' 
        OR rum_combustible_1 LIKE '%$buscar%'
        OR rum_actividad_2 LIKE '%$buscar%' OR rum_descripcion_2 LIKE '%$buscar%' 
        OR rum_hora_inicio_2 LIKE '%$buscar%' OR rum_hora_termino_2 LIKE '%$buscar%' 
        OR rum_horas_efectivas_2 LIKE '%$buscar%' OR rum_observaciones_2 LIKE '%$buscar%' 
        OR rum_combustible_2 LIKE '%$buscar%' OR rum_fecha_1 LIKE '%$buscar%' OR rum_ubicacion_1 LIKE '%$buscar%' 
        OR rum_firma LIKE '%$buscar%'";      
  

$resultado = $conexion->query($sql);

if ($resultado) {
    $datos = array();
    while ($fila = $resultado->fetch_assoc()) {
        $datos[] = array(
            'id' => $fila['id'],
        
/*                 'hora' => determinarAMPM($fila['encendido_maquina']),
 */                'rum_fecha_1' => $fila['rum_fecha_1'],
                'rum_ubicacion_1' => $fila['rum_ubicacion_1'],  
       
/*                 'hora' => determinarAMPM($fila['apagado_maquina']),
 */                'rum_fecha_2' => $fila['rum_fecha_2'],
                'rum_ubicacion_2' => $fila['rum_ubicacion_2'],
  
            'nombre_operador' => $fila['nombre_operador'],
            'no_empleado' => $fila['no_empleado'],
            'fecha' => $fila['fecha'],
            'rum_economico' => $fila['rum_economico'],
            'tipo' => $fila['tipo'],
            'modelo' => $fila['modelo'],
            'llegada_operador' => $fila['llegada_operador'],   
            'salida_operador' => $fila['salida_operador'],
            'encendido_maquina' => $fila['encendido_maquina'],
            'apagado_maquina' => $fila['apagado_maquina'],
            'rum_tramo' => $fila['rum_tramo'],
            'rum_subtramo' => $fila['rum_subtramo'],
            'margen' => $fila['margen'],
            'valor_porcentaje' => $fila['valor_porcentaje'],
            'causa' => $fila['causa'],
            
            'rum_actividad' => $fila['rum_actividad'],
            'rum_descripcion' => $fila['rum_descripcion'],
            'rum_hora_inicio' => $fila['rum_hora_inicio'],
            'rum_hora_termino' => $fila['rum_hora_termino'],
            'rum_horas_efectivas' => $fila['rum_horas_efectivas'],
            'rum_observaciones' => $fila['rum_observaciones'],

      /*       'rum_combustible' => obtenerImagenBase64($fila['rum_combustible']), */

            'rum_actividad_1' => $fila['rum_actividad_1'],
            'rum_descripcion_1' => $fila['rum_descripcion_1'],
            'rum_hora_inicio_1' => $fila['rum_hora_inicio_1'],
            'rum_hora_termino_1' => $fila['rum_hora_termino_1'],
            'rum_horas_efectivas_1' => $fila['rum_horas_efectivas_1'],
            'rum_observaciones_1' => $fila['rum_observaciones_1'],

       /*      'rum_combustible_1' => obtenerImagenBase64($fila['rum_combustible_1']), */

            'rum_actividad_2' => $fila['rum_actividad_2'],
            'rum_descripcion_2' => $fila['rum_descripcion_2'],
            'rum_hora_inicio_2' => $fila['rum_hora_inicio_2'],
            'rum_hora_termino_2' => $fila['rum_hora_termino_2'],
            'rum_horas_efectivas_2' => $fila['rum_horas_efectivas_2'],
            'rum_observaciones_2' => $fila['rum_observaciones_2'],
/* 
            'rum_combustible_2' => obtenerImagenBase64($fila['rum_combustible_2']), */

                // Aquí, solo almacenamos las rutas de las imágenes, no las convertimos en base64
                'rum_combustible' => $fila['rum_combustible'],
                'rum_combustible_1' => $fila['rum_combustible_1'],
                'rum_combustible_2' => $fila['rum_combustible_2'],

                'rum_camara1' => $fila['rum_camara1'],
                'rum_camara2' => $fila['rum_camara2'],

                'rum_firma' => $fila['rum_firma'],

        );
    }
    
    echo json_encode($datos);
} else {
    echo json_encode(array());
}

$conexion->close();


?>
