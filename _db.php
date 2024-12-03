<?php

$host = "localhost";
$user = "u221169986_arsol";
$password = "Ar$0l.2030";
$database = "u221169986_inndaka";


$conexion = mysqli_connect($host, $user, $password, $database);
if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;


}

?>