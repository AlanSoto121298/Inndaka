<?php
require_once "../controladores/alexas.controlador.php";
require_once "../modelos/alexas.modelo.php";

class ajaxAlexas {

    public $idalexas;
    public $sku;
    public $departamento;
    public $piso;
    public $detalles;
    public $redwifi;
    public $ubicacion;
    public $empresa;
    public $estado;



    public function MostrarAlexas () {
        $respuesta = ControladorAlexas::ctrMostrarAlexas();
        echo json_encode($respuesta);
    }


public function registrarAlexas () {
    $respuesta = ControladorAlexas::ctrRegistrarAlexas($this->sku, $this->departamento, $this->piso, $this->detalles, $this->redwifi, $this->ubicacion, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function eliminarAlexas () {
    $respuesta = ControladorAlexas::ctrEliminarAlexas($this->idalexas);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function actualizarAlexas () {
    $respuesta = ControladorAlexas::ctrActualizarAlexas($this->idalexas, $this->sku, $this->departamento, $this->piso, $this->detalles, $this->redwifi, $this->ubicacion, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}
}

if(!isset($_POST["accion"])) { 
    $respuesta = new ajaxAlexas();
    $respuesta->MostrarAlexas();

} else {
    if($_POST["accion"] == "registrar") { 
    $insertar = new ajaxAlexas();
    $insertar->sku = $_POST["sku"];
    $insertar->departamento = $_POST["departamento"];
    $insertar->piso = $_POST["piso"];
    $insertar->detalles = $_POST["detalles"];
    $insertar->redwifi = $_POST["redwifi"];
    $insertar->ubicacion = $_POST["ubicacion"];
    $insertar->estado = $_POST["estado"];
    $insertar->registrarAlexas();
    }
    if($_POST["accion"] == "eliminar"){
            $eliminar = new ajaxAlexas();
            $eliminar->idalexas = $_POST["idalexas"];
            $eliminar->eliminarAlexas();
    }
if($_POST["accion"] == "actualizar"){
    $actualizar = new ajaxAlexas();
    $actualizar->idalexas = $_POST["idalexas"];
    $actualizar->sku = $_POST["sku"];
    $actualizar->departamento = $_POST["departamento"];
    $actualizar->piso = $_POST["piso"];
    $actualizar->detalles = $_POST["detalles"];
    $actualizar->redwifi = $_POST["redwifi"];
    $actualizar->ubicacion = $_POST["ubicacion"];
    $actualizar->estado = $_POST["estado"];
    $actualizar->actualizarAlexas();
}

}
?>
