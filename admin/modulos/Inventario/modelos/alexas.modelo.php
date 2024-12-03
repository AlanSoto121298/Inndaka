<?php

require_once "conexion.php";

class ModeloAlexas {

   static public function mdlMostrarAlexas() {
        
        $stmt = Conexion::conectar()->prepare("SELECT idalexas, sku, departamento, piso, detalles, redwifi, ubicacion, estado, 'X' AS acciones FROM alexas");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt = null;
    }

    static public function mdlRegistrarAlexas ($sku, $departamento, $piso, $detalles, $redwifi, $ubicacion, $estado){
        $stmt = Conexion::conectar()->prepare("INSERT INTO alexas (sku, departamento, piso, detalles, redwifi, ubicacion, estado) VALUES (:sku, :departamento, :piso, :detalles, :redwifi, :ubicacion, :estado)");

        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":piso", $piso, PDO::PARAM_STR);
        $stmt->bindParam(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindParam(":redwifi", $redwifi, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "La alexa se registró correctamente";
        } else {
            return "Error al registrar la alexa";
        }

        $stmt = null;
    }

    static public function mdlEliminarAlexas ($idalexas){
        $stmt = Conexion::conectar()->prepare("DELETE FROM alexas WHERE idalexas = :idalexas");

        $stmt->bindParam(":idalexas", $idalexas, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "La alexa se elimino correctamente";
        } else {
            return "Error no se pudo eliminar la alexa";
        }

        $stmt = null;
    }

    static public function mdlActualizarAlexas ($idalexas, $sku,  $departamento, $piso, $detalles, $redwifi, $ubicacion, $estado){
        $stmt = Conexion::conectar()->prepare("UPDATE alexas 
                                               SET 
                                               sku = :sku, 
                                               departamento = :departamento, 
                                               piso = :piso, 
                                               detalles = :detalles, 
                                               redwifi = :redwifi, 
                                               ubicacion = :ubicacion, 
                                               estado = :estado
                                               WHERE idalexas = :idalexas");

        $stmt->bindParam(":idalexas", $idalexas, PDO::PARAM_INT);
        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":piso", $piso, PDO::PARAM_STR);
        $stmt->bindParam(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindParam(":redwifi", $redwifi, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "La alexa se actualizo correctamente";
        } else {
            return "Error no se pudo actualizar la alexa";
        }

        $stmt = null;
    }

}

?>
