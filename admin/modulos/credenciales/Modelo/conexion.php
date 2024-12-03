<?php
$conexion=new mysqli("localhost","u221169986_arsol","Ar$0l.2030","u221169986_inndaka"); //servidor,usuario,contraseña,nombre de la base de datos, puerto (en caso de que el puerto no este en 3306 poner el puerto que especifico)
$conexion->set_charset("utf8");

if($conexion->connect_errno) {
    die("Ha ocurrido un error durante la conexion");
}
?>