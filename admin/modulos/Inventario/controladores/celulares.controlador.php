<?php

class ControladorCelulares {

    static public function ctrMostrarCelulares() { 
        $respuesta = ModeloCelulares::mdlMostrarCelulares();  
        return $respuesta;
    }  

    static public function ctrRegistrarCelulares($sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ram, $almacenamiento, $imei, $ubicacion, $detalles, $extras, $empresa, $estado) { 
        // Llama al método correspondiente del modelo para registrar Celulares
        $respuesta = ModeloCelulares::mdlRegistrarCelulares($sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ram, $almacenamiento, $imei, $ubicacion, $detalles, $extras, $empresa, $estado);
        return $respuesta;
    }  

    static public function ctrEliminarCelulares($idcelulares) { 
        // Llama al método correspondiente del modelo para registrar Celulares
        $respuesta = ModeloCelulares::mdlEliminarCelulares($idcelulares);
        return $respuesta;
    }  

    static public function ctrActualizarCelulares($idcelulares,$sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ram, $almacenamiento, $imei, $ubicacion, $detalles, $extras, $empresa, $estado) { 
        // Llama al método correspondiente del modelo para registrar Celulares
        $respuesta = ModeloCelulares::mdlActualizarCelulares($idcelulares,$sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ram, $almacenamiento, $imei, $ubicacion, $detalles, $extras, $empresa, $estado);
        return $respuesta;
    }  
}

