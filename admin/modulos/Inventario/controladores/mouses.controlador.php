<?php

class ControladorMouses {

    static public function ctrMostrarMouses() { 
        $respuesta = ModeloMouses::mdlMostrarMouses();  
        return $respuesta;
    }  

    static public function ctrRegistrarMouses($sku, $responsable, $responsableAnt,  $departamento,  $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $funcional, $estado) { 
        // Llama al método correspondiente del modelo para registrar Mouses
        $respuesta = ModeloMouses::mdlRegistrarMouses($sku, $responsable, $responsableAnt,  $departamento,  $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $funcional, $estado);
        return $respuesta;
    }  

    static public function ctrEliminarMouses($idmouses) { 
        // Llama al método correspondiente del modelo para registrar Mouses
        $respuesta = ModeloMouses::mdlEliminarMouses($idmouses);
        return $respuesta;
    }  

    static public function ctrActualizarMouses($idmouses, $sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $funcional, $estado) { 
        // Llama al método correspondiente del modelo para registrar Mouses
        $respuesta = ModeloMouses::mdlActualizarMouses($idmouses, $sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $funcional, $estado);
        return $respuesta;
    }  
}

