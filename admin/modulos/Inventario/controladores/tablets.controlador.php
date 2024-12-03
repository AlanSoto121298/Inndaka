<?php

class ControladorTablets {

    static public function ctrMostrarTablets() { 
        $respuesta = ModeloTablets::mdlMostrarTablets();  
        return $respuesta;
    }  

    static public function ctrRegistrarTablets($departamento, $responsable, $responsableAnt, $sku, $marca, $modelo, $color, $almacenamiento, $imei, $ubicacion, $detalles, $extras, $empresa, $estado) { 
        // Llama al método correspondiente del modelo para registrar Tablets
        $respuesta = ModeloTablets::mdlRegistrarTablets($departamento, $responsable, $responsableAnt, $sku, $marca, $modelo, $color, $almacenamiento, $imei, $ubicacion, $detalles, $extras, $empresa, $estado);
        return $respuesta;
    }  

    static public function ctrEliminarTablets($idtablets) { 
        // Llama al método correspondiente del modelo para registrar Tablets
        $respuesta = ModeloTablets::mdlEliminarTablets($idtablets);
        return $respuesta;
    }  

    static public function ctrActualizarTablets($idtablets, $departamento, $responsable, $responsableAnt, $sku, $marca, $modelo, $color, $almacenamiento, $imei, $ubicacion, $detalles, $extras, $empresa, $estado) { 
        // Llama al método correspondiente del modelo para registrar Tablets
        $respuesta = ModeloTablets::mdlActualizarTablets($idtablets, $departamento, $responsable, $responsableAnt, $sku, $marca, $modelo, $color, $almacenamiento, $imei, $ubicacion, $detalles, $extras, $empresa, $estado);
        return $respuesta;
    }  
}

