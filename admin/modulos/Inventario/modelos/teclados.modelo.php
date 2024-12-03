<?php

require_once "conexion.php";

class ModeloTeclados {

   static public function mdlMostrarTeclados() {
        
        $stmt = Conexion::conectar()->prepare("SELECT idteclados, sku, responsable, responsableAnt, departamento, marca, modelo, color, ubicacion, detalles, extras, empresa, funcional, estado, 'X' AS acciones FROM teclados");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt = null;
    }

    static public function mdlRegistrarTeclados ($sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $funcional, $estado){
        $stmt = Conexion::conectar()->prepare("INSERT INTO teclados (sku, responsable, responsableAnt, departamento, marca, modelo, color, ubicacion, detalles, extras, empresa, funcional, estado) VALUES (:sku, :responsable, :responsableAnt, :departamento, :marca, :modelo, :color, :ubicacion, :detalles, :extras, :empresa, :funcional, :estado)");

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
            return "El teclado se registró correctamente";
        } else {
            return "Error al registrar el teclado";
        }

        $stmt = null;
    }

    static public function mdlEliminarTeclados ($idteclados){
        $stmt = Conexion::conectar()->prepare("DELETE FROM teclados WHERE idteclados = :idteclados");

        $stmt->bindParam(":idteclados", $idteclados, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "El teclado se elimino correctamente";
        } else {
            return "Error no se pudo eliminar el teclado";
        }

        $stmt = null;
    }

    static public function mdlActualizarTeclados ($idteclados, $sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $funcional, $estado){
        $stmt = Conexion::conectar()->prepare("UPDATE teclados 
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
                                               WHERE idteclados = :idteclados");

        $stmt->bindParam(":idteclados", $idteclados, PDO::PARAM_INT);
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
            return "El teclado se actualizo correctamente";
        } else {
            return "Error no se pudo actualizar el teclado";
        }

        $stmt = null;
    }

}

?>
