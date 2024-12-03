<?php
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

    $salida = "";

    $query = "SELECT id, nombre_operador, no_empleado, fecha, rum_economico, tipo, modelo, 
    llegada_operador, salida_operador, encendido_maquina, apagado_maquina, rum_tramo, 
    rum_subtramo, margen, valor_porcentaje, causa, rum_actividad, rum_descripcion, 
    rum_hora_inicio, rum_hora_termino, rum_horas_efectivas, rum_observaciones, 
    rum_actividad_1, rum_descripcion_1, rum_hora_inicio_1, rum_hora_termino_1, 
    rum_horas_efectivas_1, rum_observaciones_1, rum_actividad_2, rum_descripcion_2, 
    rum_hora_inicio_2, rum_hora_termino_2, rum_horas_efectivas_2, rum_observaciones_2, 
    rum_combustible, rum_combustible_1, rum_combustible_2, rum_camara1, rum_camara2, 
    rum_fecha_hora_camara1, rum_fecha_1, rum_ubicacion_1, 
    rum_fecha_2, rum_ubicacion_2, rum_firma, mapa
    FROM formulariodatos 
    ORDER BY id DESC";





    if (isset($_POST['consulta'])) {
        $q = $conn->real_escape_string($_POST['consulta']);
        $query="SELECT * FROM formulariodatos WHERE 
            id LIKE '%".$q."%' OR
            no_empleado LIKE '%".$q."%' OR
            fecha LIKE '%".$q."%' OR
            rum_economico LIKE '%".$q."%' OR
            tipo LIKE '%".$q."%' OR
            modelo LIKE '%".$q."%' OR
            llegada_operador LIKE '%".$q."%' OR
            salida_operador LIKE '%".$q."%' OR
            encendido_maquina LIKE '%".$q."%' OR
            apagado_maquina LIKE '%".$q."%' OR
            rum_tramo LIKE '%".$q."%' OR
            rum_subtramo LIKE '%".$q."%' OR
            margen LIKE '%".$q."%' OR
            valor_porcentaje LIKE '%".$q."%' OR
            causa LIKE '%".$q."%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
        $salida.="<table border=1 class='tabla_datos'>
        <thead>
            <tr id='titulo'>
                <td>Id</td>
                <td>Nombre</td>
                <td>No de empleado</td>
                <td>Fecha</td>
                <td>Teléfono</td>
                <td>Numero economico</td>
                <td>Tipo</td>
                <td>Modelo</td>
                <td>Llegada del operador</td>
                <td>Salida del operador</td>
                <td>Encendido de maquina</td>
                <td>Tramo</td>
                <td>Subramo</td>
                <td>Margen</td>
                <td>Valor del Porcentaje</td>
                <td>Causa</td>
            </tr>
        </thead>
        <tbody>";
    
    while ($fila = $resultado->fetch_assoc()) {
        $salida .= "<tr onclick='redireccionar(\"" . $fila['id'] . "\",\"" . $fila['nombre_operador'] . "\",\"" . $fila['no_empleado'] . "\",
        \"" . $fila['fecha'] . "\",\"" . $fila['rum_economico'] . "\",\"" . $fila['tipo'] . "\",\"" . $fila['modelo'] . "\",
        \"" . $fila['llegada_operador'] . "\",\"" . $fila['salida_operador'] . "\",\"" . $fila['encendido_maquina'] . "\",
        \"" . $fila['apagado_maquina'] . "\",\"" . $fila['rum_tramo'] . "\",\"" . $fila['rum_subtramo'] . "\",\"" . $fila['margen'] . "\",
        \"" . $fila['valor_porcentaje'] . "\",\"" . $fila['causa'] . "\",\"" . $fila['rum_actividad'] . "\",\"" . $fila['rum_descripcion'] . "\",
        \"" . $fila['rum_hora_inicio'] . "\",\"" . $fila['rum_hora_termino'] . "\",\"" . $fila['rum_horas_efectivas'] . "\",\"" . $fila['rum_observaciones'] . "\",
        \"" . $fila['rum_actividad_1'] . "\",\"" . $fila['rum_descripcion_1'] . "\",\"" . $fila['rum_hora_inicio_1'] . "\",\"" . $fila['rum_hora_termino_1'] . "\",
        \"" . $fila['rum_horas_efectivas'] . "\",\"" . $fila['rum_observaciones_1'] . "\",\"" . $fila['rum_actividad_2'] . "\",\"" . $fila['rum_descripcion_2'] . "\",
        \"" . $fila['rum_hora_inicio_2'] . "\",\"" . $fila['rum_hora_termino_2'] . "\",\"" . $fila['rum_horas_efectivas_2'] . "\",\"" . $fila['rum_observaciones_2'] . "\",
        \"" . $fila['rum_combustible'] . "\",\"" . $fila['rum_combustible_1'] . "\",\"" . $fila['rum_combustible_2'] . "\",\"" . $fila['rum_camara1'] . "\",
        \"" . $fila['rum_camara2'] . "\",\"" . $fila['rum_fecha_1'] . "\",\"" . $fila['rum_ubicacion_1'] . "\",\"" . $fila['rum_fecha_2'] . "\",
        \"" . $fila['rum_ubicacion_2'] . "\",\"" . $fila['rum_firma'] . "\",\"" . $fila['rum_fecha_hora_camara1'] . "\",\"" . $fila['mapa'] . "\")'>   
             
        
            <td>".$fila['id']."</td>
            <td>".$fila['nombre_operador']."</td>   
            <td>".$fila['no_empleado']."</td>
            <td>".$fila['fecha']."</td>
            <td>".$fila['rum_economico']."</td>
            <td>".$fila['tipo']. "</td>
            <td>".$fila['modelo']."</td>
            <td>".$fila['llegada_operador']."</td>
            <td>".$fila['salida_operador']."</td>
            <td>".$fila['encendido_maquina']."</td>
            <td>".$fila['apagado_maquina']."</td>
            <td>".$fila['rum_tramo']."</td>
            <td>".$fila['rum_subtramo']."</td>
            <td>".$fila['margen']."</td>
            <td>".$fila['valor_porcentaje']."</td>
            <td>".$fila['causa']."</td>";

        
            $salida .= "</tr>";
        }
        
        $salida.="</tbody></table>";
        
                    
        }else{
            $salida.="NO HAY DATOS :(";
        }
        
        echo $salida;
        
        $conn->close();
        
        ?>
<script>
function redireccionar(id, nombre, no_empleado, fecha, rum_economico, tipo, modelo, 
    llegada_operador, salida_operador, encendido_maquina, apagado_maquina, rum_tramo, 
    rum_subtramo, margen, valor_porcentaje, causa, rum_actividad, rum_descripcion, rum_hora_inicio,
    rum_hora_termino, rum_horas_efectivas, rum_observaciones, rum_actividad_1, rum_descripcion_1,
    rum_hora_inicio_1, rum_hora_termino_1, rum_horas_efectivas_1, rum_observaciones_1, rum_actividad_2,
    rum_descripcion_2, rum_hora_inicio_2, rum_hora_termino_2, rum_horas_efectivas_2, rum_observaciones_2, rum_combustible, rum_combustible_1, rum_combustible_2,
    rum_camara1, rum_camara2, rum_fecha_1, rum_ubicacion_1, rum_fecha_2, rum_ubicacion_2, rum_firma,
    rum_fecha_hora_camara1, mapa
) {
    // Construir la URL con los parámetros, incluyendo el mapa
    var url = "index.html?";
    url += "id=" + encodeURIComponent(id) +
        "&nombre=" + encodeURIComponent(nombre) +
        "&no_empleado=" + encodeURIComponent(no_empleado) +
        "&fecha=" + encodeURIComponent(fecha) +
        "&rum_economico=" + encodeURIComponent(rum_economico) +
        "&tipo=" + encodeURIComponent(tipo) +
        "&modelo=" + encodeURIComponent(modelo) +
        "&llegada_operador=" + encodeURIComponent(llegada_operador) +
        "&salida_operador=" + encodeURIComponent(salida_operador) +
        "&encendido_maquina=" + encodeURIComponent(encendido_maquina) +
        "&apagado_maquina=" + encodeURIComponent(apagado_maquina) +
        "&rum_tramo=" + encodeURIComponent(rum_tramo) +
        "&rum_subtramo=" + encodeURIComponent(rum_subtramo) +
        "&margen=" + encodeURIComponent(margen) +
        "&valor_porcentaje=" + encodeURIComponent(valor_porcentaje) +
        "&causa=" + encodeURIComponent(causa) +
        "&rum_actividad=" + encodeURIComponent(rum_actividad) +
        "&rum_descripcion=" + encodeURIComponent(rum_descripcion) +
        "&rum_hora_inicio=" + encodeURIComponent(rum_hora_inicio) +
        "&rum_hora_termino=" + encodeURIComponent(rum_hora_termino) +
        "&rum_horas_efectivas=" + encodeURIComponent(rum_horas_efectivas) +
        "&rum_observaciones=" + encodeURIComponent(rum_observaciones) +
        "&rum_actividad_1=" + encodeURIComponent(rum_actividad_1) +
        "&rum_descripcion_1=" + encodeURIComponent(rum_descripcion_1) +
        "&rum_hora_inicio_1=" + encodeURIComponent(rum_hora_inicio_1) +
        "&rum_hora_termino_1=" + encodeURIComponent(rum_hora_termino_1) +
        "&rum_horas_efectivas_1=" + encodeURIComponent(rum_horas_efectivas_1) +
        "&rum_observaciones_1=" + encodeURIComponent(rum_observaciones_1) +
        "&rum_actividad_2=" + encodeURIComponent(rum_actividad_2) +
        "&rum_descripcion_2=" + encodeURIComponent(rum_descripcion_2) +
        "&rum_hora_inicio_2=" + encodeURIComponent(rum_hora_inicio_2) +
        "&rum_hora_termino_2=" + encodeURIComponent(rum_hora_termino_2) +
        "&rum_horas_efectivas_2=" + encodeURIComponent(rum_horas_efectivas_2) +
        "&rum_observaciones_2=" + encodeURIComponent(rum_observaciones_2) +
        "&rum_combustible=" + encodeURIComponent(rum_combustible) +
        "&rum_combustible_1=" + encodeURIComponent(rum_combustible_1) +
        "&rum_combustible_2=" + encodeURIComponent(rum_combustible_2) +
        "&rum_camara1=" + encodeURIComponent(rum_camara1) +
        "&rum_camara2=" + encodeURIComponent(rum_camara2) +
        "&rum_fecha_hora_camara1=" + encodeURIComponent(rum_fecha_hora_camara1) +
        "&rum_fecha_1=" + encodeURIComponent(rum_fecha_1) +
        "&rum_ubicacion_1=" + encodeURIComponent(rum_ubicacion_1) +
        "&rum_fecha_2=" + encodeURIComponent(rum_fecha_2) +
        "&rum_ubicacion_2=" + encodeURIComponent(rum_ubicacion_2) +
        "&rum_firma=" + encodeURIComponent(rum_firma) +
        "&mapa=" + encodeURIComponent(mapa);

    // Redirigir a la página con los parámetros
    window.location.href = url;
}





    function redireccionarParaActualizar(nombre_operador, no_empleado, fecha, rum_economico, tipo, modelo) {
            // Llenar los campos del formulario oculto con los datos de la fila seleccionada
            document.getElementById("nombre_operador").value = nombre_operador;
            document.getElementById("no_empleado").value = no_empleado;
            document.getElementById("fecha").value = fecha;
            document.getElementById("rum_economico").value = rum_economico;
            document.getElementById("tipo").value = tipo;
            document.getElementById("modelo").value = modelo;
            document.getElementById("mapa").value = mapa;
            
            // Enviar el formulario automáticamente
            document.getElementById("form_actualizar").submit();
        }

</script>



