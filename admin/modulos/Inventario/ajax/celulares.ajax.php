<?php
require_once "../controladores/celulares.controlador.php";
require_once "../modelos/celulares.modelo.php";

class ajaxCelulares {

    public $idcelulares;
    public $sku;
    public $responsable;
    public $responsableAnt;
    public $departamento;
    public $marca;
    public $modelo;
    public $color;
    public $ram;
    public $almacenamiento;
    public $imei;
    public $ubicacion;
    public $detalles;
    public $extras;
    public $empresa;
    public $estado;



    public function MostrarCelulares () {
        $respuesta = ControladorCelulares::ctrMostrarCelulares();
        echo json_encode($respuesta);
    }


public function registrarCelulares () {
    $respuesta = ControladorCelulares::ctrRegistrarCelulares($this->sku, $this->responsable, $this->responsableAnt, $this->departamento, $this->marca, $this->modelo, $this->color, $this->ram, $this->almacenamiento, $this->imei, $this->ubicacion, $this->detalles, $this->extras, $this->empresa, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function eliminarCelulares () {
    $respuesta = ControladorCelulares::ctrEliminarCelulares($this->idcelulares);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function actualizarCelulares () {
    $respuesta = ControladorCelulares::ctrActualizarCelulares($this->idcelulares, $this->sku, $this->responsable, $this->responsableAnt, $this->departamento, $this->marca, $this->modelo, $this->color, $this->ram, $this->almacenamiento, $this->imei, $this->ubicacion, $this->detalles, $this->extras, $this->empresa, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}
}

if(!isset($_POST["accion"])) { 
    $respuesta = new ajaxCelulares();
    $respuesta->MostrarCelulares();

} else {
    if($_POST["accion"] == "registrar") { 
    $insertar = new ajaxCelulares();
    $insertar->sku = $_POST["sku"];
    $insertar->responsable = $_POST["responsable"];
    $insertar->responsableAnt = $_POST["responsableAnt"];
    $insertar->departamento = $_POST["departamento"];
    $insertar->marca = $_POST["marca"];
    $insertar->modelo = $_POST["modelo"];
    $insertar->color = $_POST["color"];
    $insertar->ram = $_POST["ram"];
    $insertar->almacenamiento = $_POST["almacenamiento"];
    $insertar->imei = $_POST["imei"];
    $insertar->ubicacion = $_POST["ubicacion"];
    $insertar->detalles = $_POST["detalles"];
    $insertar->extras = $_POST["extras"];
    $insertar->empresa = $_POST["empresa"];
    $insertar->estado = $_POST["estado"];
    $insertar->registrarCelulares();
    }
    if($_POST["accion"] == "eliminar"){
            $eliminar = new ajaxCelulares();
            $eliminar->idcelulares = $_POST["idcelulares"];
            $eliminar->eliminarCelulares();
    }
if($_POST["accion"] == "actualizar"){
    $actualizar = new ajaxCelulares();
    $actualizar->idcelulares = $_POST["idcelulares"];
    $actualizar->sku = $_POST["sku"];
    $actualizar->responsable = $_POST["responsable"];
    $actualizar->responsableAnt = $_POST["responsableAnt"];
    $actualizar->departamento = $_POST["departamento"];
    $actualizar->marca = $_POST["marca"];
    $actualizar->modelo = $_POST["modelo"];
    $actualizar->color = $_POST["color"];
    $actualizar->ram = $_POST["ram"];
    $actualizar->almacenamiento = $_POST["almacenamiento"];
    $actualizar->imei = $_POST["imei"];
    $actualizar->ubicacion = $_POST["ubicacion"];
    $actualizar->detalles = $_POST["detalles"];
    $actualizar->extras = $_POST["extras"];
    $actualizar->empresa = $_POST["empresa"];
    $actualizar->estado = $_POST["estado"];
    $actualizar->actualizarCelulares();
}

}
?>
