<?php

require_once "conexion.php";

class ModeloEquipos {

   static public function mdlMostrarEquipos() {
        
        $stmt = Conexion::conectar()->prepare("SELECT idequipos, departamento, responsable, responsableAnt, sku, equipo, marca, modelo, color, so, arquitectura, procesador, ram, almacenamiento, dispositivo, producto, ubicacion, detalles, aditamentos, empresa, estado, 'X' AS acciones FROM equipos");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt = null;
    }

    static public function mdlRegistrarEquipos ($departamento, $responsable, $responsableAnt, $sku, $equipo, $marca, $modelo, $color, $so, $arquitectura, $procesador, $ram, $almacenamiento, $dispositivo, $producto, $ubicacion, $detalles, $aditamentos, $empresa, $estado){
        $stmt = Conexion::conectar()->prepare("INSERT INTO equipos (departamento, responsable, responsableAnt, sku, equipo, marca, modelo, color, so, arquitectura, procesador, ram, almacenamiento, dispositivo, producto, ubicacion, detalles, aditamentos, empresa, estado) VALUES (:departamento, :responsable, :responsableAnt, :sku, :equipo, :marca, :modelo, :color, :so, :arquitectura, :procesador, :ram, :almacenamiento, :dispositivo, :producto, :ubicacion, :detalles, :aditamentos, :empresa, :estado)");

        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":responsable", $responsable, PDO::PARAM_STR);
        $stmt->bindParam(":responsableAnt", $responsableAnt, PDO::PARAM_STR);
        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":equipo", $equipo, PDO::PARAM_STR);
        $stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
        $stmt->bindParam(":color", $color, PDO::PARAM_STR);
        $stmt->bindParam(":so", $so, PDO::PARAM_STR);
        $stmt->bindParam(":arquitectura", $arquitectura, PDO::PARAM_STR);
        $stmt->bindParam(":procesador", $procesador, PDO::PARAM_STR);
        $stmt->bindParam(":ram", $ram, PDO::PARAM_STR);
        $stmt->bindParam(":almacenamiento", $almacenamiento, PDO::PARAM_STR);
        $stmt->bindParam(":dispositivo", $dispositivo, PDO::PARAM_STR);
        $stmt->bindParam(":producto", $producto, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindParam(":aditamentos", $aditamentos, PDO::PARAM_STR);
        $stmt->bindParam(":empresa", $empresa, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "La equipo se registró correctamente";
        } else {
            return "Error al registrar la equipo";
        }

        $stmt = null;
    }

    static public function mdlEliminarEquipos ($idequipos){
        $stmt = Conexion::conectar()->prepare("DELETE FROM equipos WHERE idequipos = :idequipos");

        $stmt->bindParam(":idequipos", $idequipos, PDO::PARAM_INT);

        if($stmt->execute()) {
            return "La equipo se elimino correctamente";
        } else {
            return "Error no se pudo eliminar la equipo";
        }

        $stmt = null;
    }

    static public function mdlActualizarEquipos ($idequipos, $departamento, $responsable, $responsableAnt, $sku, $equipo, $marca, $modelo, $color, $so, $arquitectura, $procesador, $ram, $almacenamiento, $dispositivo, $producto, $ubicacion, $detalles, $aditamentos, $empresa, $estado){
        $stmt = Conexion::conectar()->prepare("UPDATE equipos 
                                               SET 
                                               departamento = :departamento, 
                                               responsable = :responsable, 
                                               responsableAnt = :responsableAnt, 
                                               sku = :sku, 
                                               equipo = :equipo, 
                                               marca = :marca, 
                                               modelo = :modelo, 
                                               color = :color, 
                                               so = :so, 
                                               arquitectura = :arquitectura, 
                                               procesador = :procesador, 
                                               ram = :ram, 
                                               almacenamiento = :almacenamiento, 
                                               dispositivo = :dispositivo, 
                                               producto = :producto, 
                                               ubicacion = :ubicacion, 
                                               detalles = :detalles, 
                                               aditamentos = :aditamentos, 
                                               empresa = :empresa, 
                                               estado = :estado
                                               WHERE idequipos = :idequipos");

        $stmt->bindParam(":idequipos", $idequipos, PDO::PARAM_INT);
        $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
        $stmt->bindParam(":responsable", $responsable, PDO::PARAM_STR);
        $stmt->bindParam(":responsableAnt", $responsableAnt, PDO::PARAM_STR);
        $stmt->bindParam(":sku", $sku, PDO::PARAM_STR);
        $stmt->bindParam(":equipo", $equipo, PDO::PARAM_STR);
        $stmt->bindParam(":marca", $marca, PDO::PARAM_STR);
        $stmt->bindParam(":modelo", $modelo, PDO::PARAM_STR);
        $stmt->bindParam(":color", $color, PDO::PARAM_STR);
        $stmt->bindParam(":so", $so, PDO::PARAM_STR);
        $stmt->bindParam(":arquitectura", $arquitectura, PDO::PARAM_STR);
        $stmt->bindParam(":procesador", $procesador, PDO::PARAM_STR);
        $stmt->bindParam(":ram", $ram, PDO::PARAM_STR);
        $stmt->bindParam(":almacenamiento", $almacenamiento, PDO::PARAM_STR);
        $stmt->bindParam(":dispositivo", $dispositivo, PDO::PARAM_STR);
        $stmt->bindParam(":producto", $producto, PDO::PARAM_STR);
        $stmt->bindParam(":ubicacion", $ubicacion, PDO::PARAM_STR);
        $stmt->bindParam(":detalles", $detalles, PDO::PARAM_STR);
        $stmt->bindParam(":aditamentos", $aditamentos, PDO::PARAM_STR);
        $stmt->bindParam(":empresa", $empresa, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, PDO::PARAM_STR);

        if($stmt->execute()) {
            return "La equipo se actualizo correctamente";
        } else {
            return "Error no se pudo actualizar la equipo";
        }

        $stmt = null;
    }

    static public function mdlContarEquipos() {
        $stmt = Conexion::conectar()->prepare("SELECT COUNT(*) AS totalEquipos FROM equipos");
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado['totalEquipos'];
    }
    

}

?>
