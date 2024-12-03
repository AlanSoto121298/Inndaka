<?php
require_once "../controladores/radios.controlador.php";
require_once "../modelos/radios.modelo.php";

class ajaxRadios {

    public $idradios;
    public $responsable;
    public $sku;
    public $departamento;
    public $marca;
    public $modelo;
    public $ubicacion;
    public $detalles;
    public $estado;



    public function MostrarRadios () {
        $respuesta = ControladorRadios::ctrMostrarRadios();
        echo json_encode($respuesta);
    }


public function registrarRadios () {
    $respuesta = ControladorRadios::ctrRegistrarRadios($this->responsable, $this->sku, $this->departamento, $this->marca, $this->modelo, $this->ubicacion, $this->detalles, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function eliminarRadios () {
    $respuesta = ControladorRadios::ctrEliminarRadios($this->idradios);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function actualizarRadios () {
    $respuesta = ControladorRadios::ctrActualizarRadios($this->idradios, $this->responsable, $this->sku, $this->departamento, $this->marca, $this->modelo, $this->ubicacion, $this->detalles, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}
}

if(!isset($_POST["accion"])) { 
    $respuesta = new ajaxRadios();
    $respuesta->MostrarRadios();

} else {
    if($_POST["accion"] == "registrar") { 
    $insertar = new ajaxRadios();
    $insertar->responsable = $_POST["responsable"];
    $insertar->sku = $_POST["sku"];
    $insertar->departamento = $_POST["departamento"];
    $insertar->marca = $_POST["marca"];
    $insertar->modelo = $_POST["modelo"];
    $insertar->ubicacion = $_POST["ubicacion"];
    $insertar->detalles = $_POST["detalles"];
    $insertar->estado = $_POST["estado"];
    $insertar->registrarRadios();
    }
    if($_POST["accion"] == "eliminar"){
            $eliminar = new ajaxRadios();
            $eliminar->idradios = $_POST["idradios"];
            $eliminar->eliminarRadios();
    }
if($_POST["accion"] == "actualizar"){
    $actualizar = new ajaxRadios();
    $actualizar->idradios = $_POST["idradios"];
    $actualizar->responsable = $_POST["responsable"];
    $actualizar->sku = $_POST["sku"];
    $actualizar->departamento = $_POST["departamento"];
    $actualizar->marca = $_POST["marca"];
    $actualizar->modelo = $_POST["modelo"];
    $actualizar->ubicacion = $_POST["ubicacion"];
    $actualizar->detalles = $_POST["detalles"];
    $actualizar->estado = $_POST["estado"];
    $actualizar->actualizarRadios();
}

}
?>
