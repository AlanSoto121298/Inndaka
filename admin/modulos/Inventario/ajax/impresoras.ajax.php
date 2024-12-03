<?php
require_once "../controladores/impresoras.controlador.php";
require_once "../modelos/impresoras.modelo.php";

class ajaxImpresoras {

    public $idimpresora;
    public $sku;
    public $departamento;
    public $marca;
    public $modelo;
    public $color;
    public $cable_wifi;
    public $ip;
    public $tipo;
    public $ubicacion;
    public $estado;


    public function MostrarImpresoras () {
        $respuesta = ControladorImpresoras::ctrMostrarImpresoras();
        echo json_encode($respuesta);
    }


public function registrarImpresoras () {
    $respuesta = ControladorImpresoras::ctrRegistrarImpresoras($this->sku, $this->departamento, $this->marca, $this->modelo, $this->color, $this->cable_wifi, $this->ip, $this->tipo, $this->ubicacion, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function eliminarImpresoras () {
    $respuesta = ControladorImpresoras::ctrEliminarImpresoras($this->idimpresora);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function actualizarImpresoras () {
    $respuesta = ControladorImpresoras::ctrActualizarImpresoras($this->idimpresora, $this->sku, $this->departamento, $this->marca, $this->modelo, $this->color, $this->cable_wifi, $this->ip, $this->tipo, $this->ubicacion, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}
}

if(!isset($_POST["accion"])) { 
    $respuesta = new ajaxImpresoras();
    $respuesta->MostrarImpresoras();

} else {
    if($_POST["accion"] == "registrar") { 
    $insertar = new ajaxImpresoras();
    $insertar->sku = $_POST["sku"];
    $insertar->departamento = $_POST["departamento"];
    $insertar->marca = $_POST["marca"];
    $insertar->modelo = $_POST["modelo"];
    $insertar->color = $_POST["color"];
    $insertar->cable_wifi = $_POST["cable_wifi"];
    $insertar->ip = $_POST["ip"];
    $insertar->tipo = $_POST["tipo"];
    $insertar->ubicacion = $_POST["ubicacion"];
    $insertar->estado = $_POST["estado"];
    $insertar->registrarImpresoras();
    }
    if($_POST["accion"] == "eliminar"){
            $eliminar = new ajaxImpresoras();
            $eliminar->idimpresora = $_POST["idimpresora"];
            $eliminar->eliminarImpresoras();
    }
    if($_POST["accion"] == "actualizar"){
        $actualizar = new ajaxImpresoras();
        $actualizar->idimpresora = $_POST["idimpresora"];
        $actualizar->sku = $_POST["sku"];
        $actualizar->departamento = $_POST["departamento"];
        $actualizar->marca = $_POST["marca"];
        $actualizar->modelo = $_POST["modelo"];
        $actualizar->color = $_POST["color"];
        $actualizar->cable_wifi = $_POST["cable_wifi"];
        $actualizar->ip = $_POST["ip"];
        $actualizar->tipo = $_POST["tipo"];
        $actualizar->ubicacion = $_POST["ubicacion"];
        $actualizar->estado = $_POST["estado"];
        $actualizar->actualizarImpresoras();
}
}
?>
