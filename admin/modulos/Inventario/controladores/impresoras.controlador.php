<?php

class ControladorImpresoras {

    static public function ctrMostrarImpresoras() { 
        $respuesta = ModeloImpresoras::mdlMostrarImpresoras();  
        return $respuesta;
    }  

    static public function ctrRegistrarImpresoras($sku, $departamento, $marca, $modelo, $color, $cable_wifi, $ip, $tipo, $ubicacion, $estado) { 
        // Llama al método correspondiente del modelo para registrar impresoras
        $respuesta = ModeloImpresoras::mdlRegistrarImpresoras($sku, $departamento, $marca, $modelo, $color, $cable_wifi, $ip, $tipo, $ubicacion, $estado);
        return $respuesta;
    }  

    static public function ctrEliminarImpresoras($idimpresora) { 
        // Llama al método correspondiente del modelo para registrar impresoras
        $respuesta = ModeloImpresoras::mdlEliminarImpresoras($idimpresora);
        return $respuesta;
    }  

    static public function ctrActualizarImpresoras($idimpresora,$sku, $departamento, $marca, $modelo, $color, $cable_wifi, $ip, $tipo, $ubicacion, $estado) { 
        // Llama al método correspondiente del modelo para registrar impresoras
        $respuesta = ModeloImpresoras::mdlActualizarImpresoras($idimpresora,$sku, $departamento, $marca, $modelo, $color, $cable_wifi, $ip, $tipo, $ubicacion, $estado);
        return $respuesta;
    }  
}

