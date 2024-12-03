<?php

require_once "conexion.php";

class ModeloRadios {

   static public function mdlMostrarRadios() {
        
        $stmt = Conexion::conectar()->prepare("SELECT idradios, responsable, sku, departamento, marca, modelo, ubicacion, detalles, estado, 'X' AS acciones FROM radios");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt = null;
    }

    static public function mdlRegistrarRadios ($responsable, $sku, $departamento, $marca, $modelo, $ubicacion, $detalles, $estado){
        $stmt = Conexion::conectar()->prepare("INSERT INTO radios (responsable, sku, departamento, marca, modelo, ubicacion, detalles, estado) VALUES (:responsable, :sku, :departamento, :marca, :modelo, :ubicacion, :detalles, :estado)");

        $stmt->bindParam(":responsable", $responsable, PDO::PARAM_STR);
        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "El radio se registró correctamente";
        } else {
            return "Error al registrar el radio";
        }

        $stmt = null;
    }

    static public function mdlEliminarRadios ($idradios){
        $stmt = Conexion::conectar()->prepare("DELETE FROM radios WHERE idradios = :idradios");

        $stmt->bindParam(":idradios", $idradios, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "El radio se elimino correctamente";
        } else {
            return "Error no se pudo eliminar el radio";
        }

        $stmt = null;
    }

    static public function mdlActualizarRadios ($idradios, $responsable, $sku,  $departamento, $marca, $modelo, $ubicacion, $detalles, $estado){
        $stmt = Conexion::conectar()->prepare("UPDATE Radios 
                                               SET 
                                               responsable = :responsable, 
                                               sku = :sku, 
                                               departamento = :departamento, 
                                               marca = :marca, 
                                               modelo = :modelo, 
                                               ubicacion = :ubicacion, 
                                               detalles = :detalles, 
                                               estado = :estado
                                               WHERE idradios = :idradios");

        $stmt->bindParam(":idradios", $idradios, PDO::PARAM_INT);
        $stmt->bindParam(":responsable", $responsable, PDO::PARAM_STR);
        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "El radio se actualizo correctamente";
        } else {
            return "Error no se pudo actualizar el radio";
        }

        $stmt = null;
    }

}

?>
