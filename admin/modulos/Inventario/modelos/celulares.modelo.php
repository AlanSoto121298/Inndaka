<?php

require_once "conexion.php";

class ModeloCelulares {

   static public function mdlMostrarCelulares() {
        
        $stmt = Conexion::conectar()->prepare("SELECT idcelulares, sku, responsable, responsableAnt, departamento, marca, modelo, color, ram, almacenamiento, imei, ubicacion, detalles, extras, empresa, estado, 'X' AS acciones FROM celulares");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt = null;
    }

    static public function mdlRegistrarCelulares ($sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ram, $almacenamiento, $imei, $ubicacion, $detalles, $extras, $empresa, $estado){
        $stmt = Conexion::conectar()->prepare("INSERT INTO celulares (sku, responsable, responsableAnt, departamento, marca, modelo, color, ram, almacenamiento, imei, ubicacion, detalles, extras, empresa, estado) VALUES (:sku, :responsable, :responsableAnt, :departamento, :marca, :modelo, :color, :ram, :almacenamiento, :imei, :ubicacion, :detalles, :extras, :empresa, :estado)");

        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":responsable", $responsable, PDO::PARAM_STR);
        $stmt->bindParam(":responsableAnt", $responsableAnt, PDO::PARAM_STR);
        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
        $stmt->bindParam(":color", $color, PDO::PARAM_STR);
        $stmt->bindParam(":ram", $ram, PDO::PARAM_STR);
        $stmt->bindParam(":almacenamiento", $almacenamiento, PDO::PARAM_STR);
        $stmt->bindParam(":imei", $imei, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindParam(":extras", $extras, PDO::PARAM_STR);
        $stmt->bindParam(":empresa", $empresa, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "La celular se registró correctamente";
        } else {
            return "Error al registrar la celular";
        }

        $stmt = null;
    }

    static public function mdlEliminarCelulares ($idcelulares){
        $stmt = Conexion::conectar()->prepare("DELETE FROM celulares WHERE idcelulares = :idcelulares");

        $stmt->bindParam(":idcelulares", $idcelulares, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "La celular se elimino correctamente";
        } else {
            return "Error no se pudo eliminar la celular";
        }

        $stmt = null;
    }

    static public function mdlActualizarCelulares ($idcelulares,$sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ram, $almacenamiento, $imei, $ubicacion, $detalles, $extras, $empresa, $estado){
        $stmt = Conexion::conectar()->prepare("UPDATE celulares 
                                               SET 
                                               sku = :sku, 
                                               responsable = :responsable, 
                                               responsableAnt = :responsableAnt, 
                                               departamento = :departamento, 
                                               marca = :marca, 
                                               modelo = :modelo, 
                                               color = :color, 
                                               ram = :ram, 
                                               almacenamiento = :almacenamiento, 
                                               imei = :imei, 
                                               ubicacion = :ubicacion, 
                                               detalles = :detalles, 
                                               extras = :extras, 
                                               empresa = :empresa, 
                                               estado = :estado
                                               WHERE idcelulares = :idcelulares");

        $stmt->bindParam(":idcelulares", $idcelulares, PDO::PARAM_INT);
        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":responsable", $responsable, PDO::PARAM_STR);
        $stmt->bindParam(":responsableAnt", $responsableAnt, PDO::PARAM_STR);
        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
        $stmt->bindParam(":color", $color, PDO::PARAM_STR);
        $stmt->bindParam(":ram", $ram, PDO::PARAM_STR);
        $stmt->bindParam(":almacenamiento", $almacenamiento, PDO::PARAM_STR);
        $stmt->bindParam(":imei", $imei, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindParam(":extras", $extras, PDO::PARAM_STR);
        $stmt->bindParam(":empresa", $empresa, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "La celular se actualizo correctamente";
        } else {
            return "Error no se pudo actualizar la celular";
        }

        $stmt = null;
    }

}

?>
