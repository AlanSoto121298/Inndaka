<?php

class ControladorAlexas {

    static public function ctrMostrarAlexas() { 
        $respuesta = ModeloAlexas::mdlMostrarAlexas();  
        return $respuesta;
    }  

    static public function ctrRegistrarAlexas($sku, $departamento, $piso, $detalles,  $redwifi, $ubicacion, $estado) { 
        // Llama al método correspondiente del modelo para registrar Alexas
        $respuesta = ModeloAlexas::mdlRegistrarAlexas($sku, $departamento, $piso, $detalles,  $redwifi, $ubicacion, $estado);
        return $respuesta;
    }  

    static public function ctrEliminarAlexas($idalexas) { 
        // Llama al método correspondiente del modelo para registrar Alexas
        $respuesta = ModeloAlexas::mdlEliminarAlexas($idalexas);
        return $respuesta;
    }  

    static public function ctrActualizarAlexas($idalexas, $sku, $departamento, $piso, $detalles,  $redwifi, $ubicacion, $estado) { 
        // Llama al método correspondiente del modelo para registrar Alexas
        $respuesta = ModeloAlexas::mdlActualizarAlexas($idalexas, $sku, $departamento, $piso, $detalles,  $redwifi, $ubicacion, $estado);
        return $respuesta;
    }  
}

