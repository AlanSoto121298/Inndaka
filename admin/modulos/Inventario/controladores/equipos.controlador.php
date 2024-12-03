<?php

class ControladorEquipos {

    static public function ctrMostrarEquipos() { 
        $respuesta = ModeloEquipos::mdlMostrarEquipos();  
        return $respuesta;
    }  

    static public function ctrRegistrarEquipos($departamento, $responsable, $responsableAnt, $sku, $equipo, $marca, $modelo, $color, $so, $arquitectura, $procesador, $ram, $almacenamiento, $dispositivo, $producto, $ubicacion, $detalles, $aditamentos, $empresa, $estado) { 
        // Llama al método correspondiente del modelo para registrar Equipos
        $respuesta = ModeloEquipos::mdlRegistrarEquipos($departamento, $responsable, $responsableAnt, $sku, $equipo, $marca, $modelo, $color, $so, $arquitectura, $procesador, $ram, $almacenamiento, $dispositivo, $producto, $ubicacion, $detalles, $aditamentos, $empresa, $estado);
        return $respuesta;
    }  

    static public function ctrEliminarEquipos($idequipos) { 
        // Llama al método correspondiente del modelo para registrar Equipos
        $respuesta = ModeloEquipos::mdlEliminarEquipos($idequipos);
        return $respuesta;
    }  

    static public function ctrActualizarEquipos($idequipos, $departamento, $responsable, $responsableAnt, $sku, $equipo, $marca, $modelo, $color, $so, $arquitectura, $procesador, $ram, $almacenamiento, $dispositivo, $producto, $ubicacion, $detalles, $aditamentos, $empresa, $estado) { 
        // Llama al método correspondiente del modelo para registrar Equipos
        $respuesta = ModeloEquipos::mdlActualizarEquipos($idequipos, $departamento, $responsable, $responsableAnt, $sku, $equipo, $marca, $modelo, $color, $so, $arquitectura, $procesador, $ram, $almacenamiento, $dispositivo, $producto, $ubicacion, $detalles, $aditamentos, $empresa, $estado);
        return $respuesta;
    }  
}

