<?php
require_once "../controladores/monitores.controlador.php";
require_once "../modelos/monitores.modelo.php";

class ajaxMonitores {

    public $idmonitores;
    public $sku;
    public $departamento;
    public $responsable;
    public $responsableAnt;
    public $marca;
    public $modelo;
    public $color;
    public $ubicacion;
    public $detalles;
    public $extras;
    public $empresa;
    public $estado;



    public function MostrarMonitores () {
        $respuesta = ControladorMonitores::ctrMostrarMonitores();
        echo json_encode($respuesta);
    }


public function registrarMonitores () {
    $respuesta = ControladorMonitores::ctrRegistrarMonitores($this->sku, $this->departamento, $this->responsable, $this->responsableAnt, $this->marca, $this->modelo, $this->color, $this->ubicacion, $this->detalles, $this->extras, $this->empresa, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function eliminarMonitores () {
    $respuesta = ControladorMonitores::ctrEliminarMonitores($this->idmonitores);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function actualizarMonitores () {
    $respuesta = ControladorMonitores::ctrActualizarMonitores($this->idmonitores, $this->sku, $this->responsable, $this->responsableAnt, $this->departamento, $this->marca, $this->modelo, $this->color, $this->ubicacion, $this->detalles, $this->extras, $this->empresa, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}
}

if(!isset($_POST["accion"])) { 
    $respuesta = new ajaxMonitores();
    $respuesta->MostrarMonitores();

} else {
    if($_POST["accion"] == "registrar") { 
    $insertar = new ajaxMonitores();
    $insertar->sku = $_POST["sku"];
    $insertar->departamento = $_POST["departamento"];
    $insertar->responsable = $_POST["responsable"];
    $insertar->responsableAnt = $_POST["responsableAnt"];
    $insertar->marca = $_POST["marca"];
    $insertar->modelo = $_POST["modelo"];
    $insertar->color = $_POST["color"];
    $insertar->ubicacion = $_POST["ubicacion"];
    $insertar->detalles = $_POST["detalles"];
    $insertar->extras = $_POST["extras"];
    $insertar->empresa = $_POST["empresa"];
    $insertar->estado = $_POST["estado"];
    $insertar->registrarMonitores();
    }
    if($_POST["accion"] == "eliminar"){
            $eliminar = new ajaxMonitores();
            $eliminar->idmonitores = $_POST["idmonitores"];
            $eliminar->eliminarMonitores();
    }
if($_POST["accion"] == "actualizar"){
    $actualizar = new ajaxMonitores();
    $actualizar->idmonitores = $_POST["idmonitores"];
    $actualizar->sku = $_POST["sku"];
    $actualizar->departamento = $_POST["departamento"];
    $actualizar->responsable = $_POST["responsable"];
    $actualizar->responsableAnt = $_POST["responsableAnt"];
    $actualizar->marca = $_POST["marca"];
    $actualizar->modelo = $_POST["modelo"];
    $actualizar->color = $_POST["color"];
    $actualizar->ubicacion = $_POST["ubicacion"];
    $actualizar->detalles = $_POST["detalles"];
    $actualizar->extras = $_POST["extras"];
    $actualizar->empresa = $_POST["empresa"];
    $actualizar->estado = $_POST["estado"];
    $actualizar->actualizarMonitores();
}

}
?>
