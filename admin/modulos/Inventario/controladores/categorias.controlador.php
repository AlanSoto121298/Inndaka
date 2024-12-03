<?php

class ControladorCategorias
{

    static public function ctrMostrarCategorias()
    {
        $respuesta = ModeloCategorias::mdlMostrarCategorias();
        return $respuesta;
    }

    static public function ctrRegistrarCategoria($categoria, $ruta, $estado, $fecha){

        // Llamada correcta al método mdlRegistrarCategorias, pasando los parámetros
        $respuesta = ModeloCategorias::mdlRegistrarCategorias($categoria, $ruta, $estado, $fecha);

        return $respuesta;
    }

    static public function ctreliminarCategoria($id){

        // Llamada correcta al método mdlRegistrarCategorias, pasando los parámetros
        $respuesta = ModeloCategorias::mdlEliminarCategoria($id);

        return $respuesta;
    }

    static public function ctrActualizarCategoria($id,$categoria, $ruta, $estado, $fecha){

        // Llamada correcta al método mdlRegistrarCategorias, pasando los parámetros
        $respuesta = ModeloCategorias::mdlActualizarCategoria($id,$categoria, $ruta, $estado, $fecha);

        return $respuesta;
    }

    
}

