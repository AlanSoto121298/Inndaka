<?php

class ControladorTeclados {

    static public function ctrMostrarTeclados() { 
        $respuesta = ModeloTeclados::mdlMostrarTeclados();  
        return $respuesta;
    }  

    static public function ctrRegistrarTeclados($sku, $responsable, $responsableAnt,  $departamento,  $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $funcional, $estado) { 
        // Llama al método correspondiente del modelo para registrar Teclados
        $respuesta = ModeloTeclados::mdlRegistrarTeclados($sku, $responsable, $responsableAnt,  $departamento,  $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $funcional, $estado);
        return $respuesta;
    }  

    static public function ctrEliminarTeclados($idteclados) { 
        // Llama al método correspondiente del modelo para registrar Teclados
        $respuesta = ModeloTeclados::mdlEliminarTeclados($idteclados);
        return $respuesta;
    }  

    static public function ctrActualizarTeclados($idteclados, $sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $funcional, $estado) { 
        // Llama al método correspondiente del modelo para registrar Teclados
        $respuesta = ModeloTeclados::mdlActualizarTeclados($idteclados, $sku, $responsable, $responsableAnt, $departamento, $marca, $modelo, $color, $ubicacion, $detalles, $extras, $empresa, $funcional, $estado);
        return $respuesta;
    }  
}

