<?php

class Conexion {

    static public function conectar() {
        $servername = "localhost";
        $username = "u221169986_arsol";
        $password = "Ar$0l.2030";
        $dbname = "u221169986_inndaka";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ));
            return $conn;
        } catch (PDOException $e) {
            die("Conexión fallida: " . $e->getMessage());
        }
    }
}

?>
