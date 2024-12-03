<?php

class ControladorMonitores {

    static public function ctrMostrarMonitores() { 
        $respuesta = ModeloMonitores::mdlMostrarMonitores();  
        return $respuesta;
    }  

    static public function ctrRegistrarMonitores($sku, $departamento, $responsable, $responsableAnt,  $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $estado) { 
        // Llama al método correspondiente del modelo para registrar Monitores
        $respuesta = ModeloMonitores::mdlRegistrarMonitores($sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $estado);
        return $respuesta;
    }  

    static public function ctrEliminarMonitores($idmonitores) { 
        // Llama al método correspondiente del modelo para registrar Monitores
        $respuesta = ModeloMonitores::mdlEliminarMonitores($idmonitores);
        return $respuesta;
    }  

    static public function ctrActualizarMonitores($idmonitores,$sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $estado) { 
        // Llama al método correspondiente del modelo para registrar Monitores
        $respuesta = ModeloMonitores::mdlActualizarMonitores($idmonitores, $sku, $departamento, $responsable, $responsableAnt, $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $estado);
        return $respuesta;
    }  
}

