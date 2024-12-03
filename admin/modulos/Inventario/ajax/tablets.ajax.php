<?php
require_once "../controladores/tablets.controlador.php";
require_once "../modelos/tablets.modelo.php";

class ajaxTablets {

    public $idtablets;
    public $departamento;
    public $responsable;
    public $responsableAnt;
    public $sku;
    public $marca;
    public $modelo;
    public $color;
    public $almacenamiento;
    public $imei;
    public $ubicacion;
    public $detalles;
    public $extras;
    public $empresa;
    public $estado;



    public function MostrarTablets () {
        $respuesta = ControladorTablets::ctrMostrarTablets();
        echo json_encode($respuesta);
    }


public function registrarTablets () {
    $respuesta = ControladorTablets::ctrRegistrarTablets($this->sku, $this->responsable, $this->responsableAnt, $this->departamento, $this->marca, $this->modelo, $this->color, $this->almacenamiento, $this->imei, $this->ubicacion, $this->detalles, $this->extras, $this->empresa, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function eliminarTablets () {
    $respuesta = ControladorTablets::ctrEliminarTablets($this->idtablets);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function actualizarTablets () {
    $respuesta = ControladorTablets::ctrActualizarTablets($this->idtablets, $this->sku, $this->responsable, $this->responsableAnt, $this->departamento, $this->marca, $this->modelo, $this->color, $this->almacenamiento, $this->imei, $this->ubicacion, $this->detalles, $this->extras, $this->empresa, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}
}

if(!isset($_POST["accion"])) { 
    $respuesta = new ajaxTablets();
    $respuesta->MostrarTablets();

} else {
    if($_POST["accion"] == "registrar") { 
    $insertar = new ajaxTablets();
    $insertar->departamento = $_POST["departamento"];
    $insertar->responsable = $_POST["responsable"];
    $insertar->responsableAnt = $_POST["responsableAnt"];
    $insertar->sku = $_POST["sku"];
    $insertar->marca = $_POST["marca"];
    $insertar->modelo = $_POST["modelo"];
    $insertar->color = $_POST["color"];
    $insertar->almacenamiento = $_POST["almacenamiento"];
    $insertar->imei = $_POST["imei"];
    $insertar->ubicacion = $_POST["ubicacion"];
    $insertar->detalles = $_POST["detalles"];
    $insertar->extras = $_POST["extras"];
    $insertar->empresa = $_POST["empresa"];
    $insertar->estado = $_POST["estado"];
    $insertar->registrarTablets();
    }
    if($_POST["accion"] == "eliminar"){
            $eliminar = new ajaxTablets();
            $eliminar->idtablets = $_POST["idtablets"];
            $eliminar->eliminarTablets();
    }
if($_POST["accion"] == "actualizar"){
    $actualizar = new ajaxTablets();
    $actualizar->idtablets = $_POST["idtablets"];
    $actualizar->departamento = $_POST["departamento"];
    $actualizar->responsable = $_POST["responsable"];
    $actualizar->responsableAnt = $_POST["responsableAnt"];
    $actualizar->sku = $_POST["sku"];
    $actualizar->marca = $_POST["marca"];
    $actualizar->modelo = $_POST["modelo"];
    $actualizar->color = $_POST["color"];
    $actualizar->almacenamiento = $_POST["almacenamiento"];
    $actualizar->imei = $_POST["imei"];
    $actualizar->ubicacion = $_POST["ubicacion"];
    $actualizar->detalles = $_POST["detalles"];
    $actualizar->extras = $_POST["extras"];
    $actualizar->empresa = $_POST["empresa"];
    $actualizar->estado = $_POST["estado"];
    $actualizar->actualizarTablets();
}

}
?>
