<?php

require_once "conexion.php";

class ModeloMonitores {

   static public function mdlMostrarMonitores() {
        
        $stmt = Conexion::conectar()->prepare("SELECT idmonitores, sku, departamento, responsable, responsableAnt, marca, modelo, color, ubicacion, detalles, extras, empresa, estado, 'X' AS acciones FROM monitores");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt = null;
    }

    static public function mdlRegistrarMonitores ($sku, $departamento, $responsable, $responsableAnt, $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $estado){
        $stmt = Conexion::conectar()->prepare("INSERT INTO monitores (sku, departamento, responsable, responsableAnt, marca, modelo, color, ubicacion, detalles, extras, empresa, estado) VALUES (:sku, :departamento, :responsable, :responsableAnt, :marca, :modelo, :color, :ubicacion, :detalles, :extras, :empresa, :estado)");

        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":responsable", $responsable, PDO::PARAM_STR);
        $stmt->bindParam(":responsableAnt", $responsableAnt, PDO::PARAM_STR);
        $stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
        $stmt->bindParam(":color", $color, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindParam(":extras", $extras, PDO::PARAM_STR);
        $stmt->bindParam(":empresa", $empresa, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "El monitor se registró correctamente";
        } else {
            return "Error al registrar el monitor";
        }

        $stmt = null;
    }

    static public function mdlEliminarMonitores ($idmonitores){
        $stmt = Conexion::conectar()->prepare("DELETE FROM monitores WHERE idmonitores = :idmonitores");

        $stmt->bindParam(":idmonitores", $idmonitores, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "El monitor se elimino correctamente";
        } else {
            return "Error no se pudo eliminar el monitor";
        }

        $stmt = null;
    }

    static public function mdlActualizarMonitores ($idmonitores, $sku,  $departamento, $responsable, $responsableAnt, $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $estado){
        $stmt = Conexion::conectar()->prepare("UPDATE monitores 
                                               SET 
                                               sku = :sku, 
                                               departamento = :departamento, 
                                               responsable = :responsable, 
                                               responsableAnt = :responsableAnt, 
                                               marca = :marca, 
                                               modelo = :modelo, 
                                               color = :color, 
                                               ubicacion = :ubicacion, 
                                               detalles = :detalles, 
                                               extras = :extras, 
                                               empresa = :empresa, 
                                               estado = :estado
                                               WHERE idmonitores = :idmonitores");

        $stmt->bindParam(":idmonitores", $idmonitores, PDO::PARAM_INT);
        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":responsable", $responsable, PDO::PARAM_STR);
        $stmt->bindParam(":responsableAnt", $responsableAnt, PDO::PARAM_STR);
        $stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
        $stmt->bindParam(":color", $color, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindParam(":extras", $extras, PDO::PARAM_STR);
        $stmt->bindParam(":empresa", $empresa, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "El monitor se actualizo correctamente";
        } else {
            return "Error no se pudo actualizar el monitor";
        }

        $stmt = null;
    }

}

?>
