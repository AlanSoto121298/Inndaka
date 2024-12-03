<?php
require_once "../controladores/mouses.controlador.php";
require_once "../modelos/mouses.modelo.php";

class ajaxMouses {

    public $idmouses;
    public $sku;
    public $responsable;
    public $responsableAnt;
    public $departamento;
    public $marca;
    public $modelo;
    public $color;
    public $ubicacion;
    public $detalles;
    public $extras;
    public $empresa;
    public $funcional;
    public $estado;



    public function MostrarMouses () {
        $respuesta = ControladorMouses::ctrMostrarMouses();
        echo json_encode($respuesta);
    }


public function registrarMouses () {
    $respuesta = ControladorMouses::ctrRegistrarMouses($this->sku, $this->responsable, $this->responsableAnt, $this->departamento, $this->marca, $this->modelo, $this->color, $this->ubicacion, $this->detalles, $this->extras, $this->empresa, $this->funcional, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function eliminarMouses () {
    $respuesta = ControladorMouses::ctrEliminarMouses($this->idmouses);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function actualizarMouses () {
    $respuesta = ControladorMouses::ctrActualizarMouses($this->idmouses, $this->sku, $this->responsable, $this->responsableAnt, $this->departamento, $this->marca, $this->modelo, $this->color, $this->ubicacion, $this->detalles, $this->extras, $this->empresa, $this->funcional, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}
}

if(!isset($_POST["accion"])) { 
    $respuesta = new ajaxMouses();
    $respuesta->MostrarMouses();

} else {
    if($_POST["accion"] == "registrar") { 
    $insertar = new ajaxMouses();
    $insertar->sku = $_POST["sku"];
    $insertar->responsable = $_POST["responsable"];
    $insertar->responsableAnt = $_POST["responsableAnt"];
    $insertar->departamento = $_POST["departamento"];
    $insertar->marca = $_POST["marca"];
    $insertar->modelo = $_POST["modelo"];
    $insertar->color = $_POST["color"];
    $insertar->ubicacion = $_POST["ubicacion"];
    $insertar->detalles = $_POST["detalles"];
    $insertar->extras = $_POST["extras"];
    $insertar->empresa = $_POST["empresa"];
    $insertar->funcional = $_POST["funcional"];
    $insertar->estado = $_POST["estado"];
    $insertar->registrarMouses();
    }
    if($_POST["accion"] == "eliminar"){
            $eliminar = new ajaxMouses();
            $eliminar->idmouses = $_POST["idmouses"];
            $eliminar->eliminarMouses();
    }
if($_POST["accion"] == "actualizar"){
    $actualizar = new ajaxMouses();
    $actualizar->idmouses = $_POST["idmouses"];
    $actualizar->sku = $_POST["sku"];
    $actualizar->responsable = $_POST["responsable"];
    $actualizar->responsableAnt = $_POST["responsableAnt"];
    $actualizar->departamento = $_POST["departamento"];
    $actualizar->marca = $_POST["marca"];
    $actualizar->modelo = $_POST["modelo"];
    $actualizar->color = $_POST["color"];
    $actualizar->ubicacion = $_POST["ubicacion"];
    $actualizar->detalles = $_POST["detalles"];
    $actualizar->extras = $_POST["extras"];
    $actualizar->empresa = $_POST["empresa"];
    $actualizar->funcional = $_POST["funcional"];
    $actualizar->estado = $_POST["estado"];
    $actualizar->actualizarMouses();
}

}
?>
