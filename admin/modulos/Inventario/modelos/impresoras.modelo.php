<?php

require_once "conexion.php";

class ModeloImpresoras {

   static public function mdlMostrarImpresoras() {
        
        $stmt = Conexion::conectar()->prepare("SELECT idimpresora, Sku, Departamento, Marca, Modelo, Color, Cable_Wifi, Ip, Tipo, Ubicacion, estado, 'X' AS acciones FROM impresora");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt = null;
    }

    static public function mdlRegistrarImpresoras ($sku, $departamento, $marca, $modelo, $color, $cable_wifi, $ip, $tipo, $ubicacion, $estado){
        $stmt = Conexion::conectar()->prepare("INSERT INTO impresora (sku, departamento, marca, modelo, color, cable_wifi, ip, tipo, ubicacion, estado) VALUES (:sku, :departamento, :marca, :modelo, :color, :cable_wifi, :ip, :tipo, :ubicacion, :estado)");

        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
        $stmt->bindParam(":color", $color, PDO::PARAM_STR);
        $stmt->bindParam(":cable_wifi", $cable_wifi, PDO::PARAM_STR);
        $stmt->bindParam(":ip", $ip, PDO::PARAM_STR);
        $stmt->bindParam(":tipo", $tipo, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "La impresora se registró correctamente";
        } else {
            return "Error al registrar la impresora";
        }

        $stmt = null;
    }

    static public function mdlEliminarImpresoras ($idimpresora){
        $stmt = Conexion::conectar()->prepare("DELETE FROM impresora WHERE idimpresora = :idimpresora");

        $stmt->bindParam(":idimpresora", $idimpresora, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "La impresora se ELIMINO correctamente";
        } else {
            return "Error no se pudo eliminar la impresora";
        }

        $stmt = null;
    }

    static public function mdlActualizarImpresoras ($idimpresora,$sku, $departamento, $marca, $modelo, $color, $cable_wifi, $ip, $tipo, $ubicacion, $estado){
        $stmt = Conexion::conectar()->prepare("UPDATE impresora 
                                               SET sku = :sku, 
                                               departamento = :departamento, 
                                               marca = :marca, 
                                               modelo = :modelo, 
                                               color = :color, 
                                               cable_wifi = :cable_wifi, 
                                               ip = :ip, 
                                               tipo = :tipo, 
                                               ubicacion = :ubicacion, 
                                               estado = :estado
                                               WHERE idimpresora = :idimpresora");

        $stmt->bindParam(":idimpresora", $idimpresora, PDO::PARAM_INT);
        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
        $stmt->bindParam(":color", $color, PDO::PARAM_STR);
        $stmt->bindParam(":cable_wifi", $cable_wifi, PDO::PARAM_STR);
        $stmt->bindParam(":ip", $ip, PDO::PARAM_STR);
        $stmt->bindParam(":tipo", $tipo, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "La impresora se actualizo correctamente";
        } else {
            return "Error no se pudo actualizar la impresora";
        }

        $stmt = null;
    }

}

?>
