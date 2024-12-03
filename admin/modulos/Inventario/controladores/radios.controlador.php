<?php

class ControladorRadios {

    static public function ctrMostrarRadios() { 
        $respuesta = ModeloRadios::mdlMostrarRadios();  
        return $respuesta;
    }  

    static public function ctrRegistrarRadios($responsable, $sku, $departamento, $marca, $modelo, $ubicacion, $detalles, $estado) { 
        // Llama al método correspondiente del modelo para registrar Radios
        $respuesta = ModeloRadios::mdlRegistrarRadios($responsable, $sku, $departamento, $marca, $modelo, $ubicacion, $detalles, $estado);
        return $respuesta;
    }  

    static public function ctrEliminarRadios($idradios) { 
        // Llama al método correspondiente del modelo para registrar Radios
        $respuesta = ModeloRadios::mdlEliminarRadios($idradios);
        return $respuesta;
    }  

    static public function ctrActualizarRadios($idradios, $responsable, $sku, $departamento, $marca, $modelo, $ubicacion, $detalles, $estado) { 
        // Llama al método correspondiente del modelo para registrar Radios
        $respuesta = ModeloRadios::mdlActualizarRadios($idradios, $responsable, $sku, $departamento, $marca, $modelo, $ubicacion, $detalles, $estado);
        return $respuesta;
    }  
}

