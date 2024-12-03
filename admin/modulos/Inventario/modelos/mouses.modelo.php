<?php

require_once "conexion.php";

class ModeloMouses {

   static public function mdlMostrarMouses() {
        
        $stmt = Conexion::conectar()->prepare("SELECT idmouses, sku, responsable, responsableAnt, departamento, marca, modelo, color, ubicacion, detalles, extras, empresa, funcional, estado, 'X' AS acciones FROM mouses");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt = null;
    }

    static public function mdlRegistrarMouses ($sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $funcional, $estado){
        $stmt = Conexion::conectar()->prepare("INSERT INTO mouses (sku, responsable, responsableAnt, departamento, marca, modelo, color, ubicacion, detalles, extras, empresa, funcional, estado) VALUES (:sku, :responsable, :responsableAnt, :departamento, :marca, :modelo, :color, :ubicacion, :detalles, :extras, :empresa, :funcional, :estado)");

        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":responsable", $responsable, PDO::PARAM_STR);
        $stmt->bindParam(":responsableAnt", $responsableAnt, PDO::PARAM_STR);
        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
        $stmt->bindParam(":color", $color, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindParam(":extras", $extras, PDO::PARAM_STR);
        $stmt->bindParam(":empresa", $empresa, PDO::PARAM_STR);
        $stmt->bindParam(":funcional", $funcional, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "El mouse se registró correctamente";
        } else {
            return "Error al registrar el mouse";
        }

        $stmt = null;
    }

    static public function mdlEliminarMouses ($idmouses){
        $stmt = Conexion::conectar()->prepare("DELETE FROM mouses WHERE idmouses = :idmouses");

        $stmt->bindParam(":idmouses", $idmouses, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "El mouse se elimino correctamente";
        } else {
            return "Error no se pudo eliminar el mouse";
        }

        $stmt = null;
    }

    static public function mdlActualizarMouses ($idmouses, $sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $funcional, $estado){
        $stmt = Conexion::conectar()->prepare("UPDATE mouses 
                                               SET 
                                               sku = :sku, 
                                               responsable = :responsable, 
                                               responsableAnt = :responsableAnt, 
                                               departamento = :departamento, 
                                               marca = :marca, 
                                               modelo = :modelo, 
                                               color = :color, 
                                               ubicacion = :ubicacion, 
                                               detalles = :detalles, 
                                               extras = :extras, 
                                               empresa = :empresa, 
                                               funcional = :funcional, 
                                               estado = :estado
                                               WHERE idmouses = :idmouses");

        $stmt->bindParam(":idmouses", $idmouses, PDO::PARAM_INT);
        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":responsable", $responsable, PDO::PARAM_STR);
        $stmt->bindParam(":responsableAnt", $responsableAnt, PDO::PARAM_STR);
        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
        $stmt->bindParam(":color", $color, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindParam(":extras", $extras, PDO::PARAM_STR);
        $stmt->bindParam(":empresa", $empresa, PDO::PARAM_STR);
        $stmt->bindParam(":funcional", $funcional, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "El mouse se actualizo correctamente";
        } else {
            return "Error no se pudo actualizar el mouse";
        }

        $stmt = null;
    }

}

?>
