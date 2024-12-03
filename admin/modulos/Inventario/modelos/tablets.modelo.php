<?php

require_once "conexion.php";

class ModeloTablets {

   static public function mdlMostrarTablets() {
        
        $stmt = Conexion::conectar()->prepare("SELECT idtablets,  departamento, responsable, responsableAnt,  sku, marca, modelo, color, almacenamiento, imei, ubicacion, detalles, extras, empresa, estado, 'X' AS acciones FROM tablets");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt = null;
    }    
 
    static public function mdlRegistrarTablets ($departamento, $responsable, $responsableAnt, $sku, $marca, $modelo, $color, $almacenamiento, $imei, $ubicacion, $detalles, $extras, $empresa, $estado){
        $stmt = Conexion::conectar()->prepare("INSERT INTO tablets ( departamento, responsable, responsableAnt, sku, marca, modelo, color, almacenamiento, imei, ubicacion, detalles, extras, empresa, estado) VALUES (:departamento, :responsable, :responsableAnt, :sku, :marca, :modelo, :color, :almacenamiento, :imei, :ubicacion, :detalles, :extras, :empresa, :estado)");

        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":responsable", $responsable, PDO::PARAM_STR);
        $stmt->bindParam(":responsableAnt", $responsableAnt, PDO::PARAM_STR);
        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
        $stmt->bindParam(":color", $color, PDO::PARAM_STR);
        $stmt->bindParam(":almacenamiento", $almacenamiento, PDO::PARAM_STR);
        $stmt->bindParam(":imei", $imei, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindParam(":extras", $extras, PDO::PARAM_STR);
        $stmt->bindParam(":empresa", $empresa, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "La tablet se registró correctamente";
        } else {
            return "Error al registrar la tablet";
        }

        $stmt = null;
    }

    static public function mdlEliminarTablets ($idtablets){
        $stmt = Conexion::conectar()->prepare("DELETE FROM tablets WHERE idtablets = :idtablets");

        $stmt->bindParam(":idtablets", $idtablets, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "La tablet se elimino correctamente";
        } else {
            return "Error no se pudo eliminar la tablet";
        }

        $stmt = null;
    }

    static public function mdlActualizarTablets ($idtablets, $departamento,  $responsable, $responsableAnt, $sku, $marca, $modelo, $color, $almacenamiento, $imei, $ubicacion, $detalles, $extras, $empresa, $estado){
        $stmt = Conexion::conectar()->prepare("UPDATE tablets 
                                               SET 
                                               departamento = :departamento, 
                                               responsable = :responsable, 
                                               responsableAnt = :responsableAnt, 
                                               sku = :sku, 
                                               marca = :marca, 
                                               modelo = :modelo, 
                                               color = :color, 
                                               almacenamiento = :almacenamiento, 
                                               imei = :imei, 
                                               ubicacion = :ubicacion, 
                                               detalles = :detalles, 
                                               extras = :extras, 
                                               empresa = :empresa, 
                                               estado = :estado
                                               WHERE idtablets = :idtablets");

        $stmt->bindParam(":idtablets", $idtablets, PDO::PARAM_INT);
        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":responsable", $responsable, PDO::PARAM_STR);
        $stmt->bindParam(":responsableAnt", $responsableAnt, PDO::PARAM_STR);
        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
        $stmt->bindParam(":color", $color, PDO::PARAM_STR);
        $stmt->bindParam(":almacenamiento", $almacenamiento, PDO::PARAM_STR);
        $stmt->bindParam(":imei", $imei, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindParam(":extras", $extras, PDO::PARAM_STR);
        $stmt->bindParam(":empresa", $empresa, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "La tablet se actualizo correctamente";
        } else {
            return "Error no se pudo actualizar la tablet";
        }

        $stmt = null;
    }

}

?>
