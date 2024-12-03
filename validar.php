<?php
$conexion=mysqli_connect("localhost", "u221169986_arsol","Ar$0l.2030", "u221169986_inndaka");

if(isset($_POST['registrar'])){

    if(strlen($_POST['username'])>=1 && strlen($_POST['password'])>=1){

        $username = trim($_POST['username']);
        $password = trim($_POST['password']); 
    }
}
?>