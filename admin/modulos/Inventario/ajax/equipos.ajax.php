<?php
require_once "../controladores/equipos.controlador.php";
require_once "../modelos/equipos.modelo.php";

class ajaxEquipos {

    public $idequipos;
    public $departamento;
    public $responsable;
    public $responsableAnt;
    public $sku;
    public $equipo;
    public $marca;
    public $modelo;
    public $color;
    public $so;
    public $arquitectura;
    public $procesador;
    public $ram;
    public $almacenamiento;
    public $imei;
    public $dispositivo;
    public $producto;
    public $ubicacion;
    public $detalles;
    public $aditamentos;
    public $empresa;
    public $estado;



    public function MostrarEquipos () {
        $respuesta = ControladorEquipos::ctrMostrarEquipos();
        echo json_encode($respuesta);
    }


public function registrarEquipos () {
    $respuesta = ControladorEquipos::ctrRegistrarEquipos($this->departamento, $this->responsable, $this->responsableAnt, $this->sku, $this->equipo, $this->marca, $this->modelo, $this->color, $this->so, $this->arquitectura, $this->procesador, $this->ram, $this->almacenamiento, $this->dispositivo, $this->producto, $this->ubicacion, $this->detalles, $this->aditamentos, $this->empresa, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function eliminarEquipos () {
    $respuesta = ControladorEquipos::ctrEliminarEquipos($this->idequipos);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}

public function actualizarEquipos () {
    $respuesta = ControladorEquipos::ctrActualizarEquipos($this->idequipos, $this->departamento, $this->responsable, $this->responsableAnt, $this->sku, $this->equipo, $this->marca, $this->modelo, $this->color, $this->so, $this->arquitectura, $this->procesador, $this->ram, $this->almacenamiento, $this->dispositivo, $this->producto, $this->ubicacion, $this->detalles, $this->aditamentos, $this->empresa, $this->estado);
    echo json_encode($respuesta,JSON_UNESCAPED_UNICODE); 
}
}

if(!isset($_POST["accion"])) { 
    $respuesta = new ajaxEquipos();
    $respuesta->MostrarEquipos();

} else {
    if($_POST["accion"] == "registrar") { 
    $insertar = new ajaxEquipos();
    $insertar->departamento = $_POST["departamento"];
    $insertar->responsable = $_POST["responsable"];
    $insertar->responsableAnt = $_POST["responsableAnt"];
    $insertar->sku = $_POST["sku"];
    $insertar->equipo = $_POST["equipo"];
    $insertar->marca = $_POST["marca"];
    $insertar->modelo = $_POST["modelo"];
    $insertar->color = $_POST["color"];
    $insertar->so = $_POST["so"];
    $insertar->arquitectura = $_POST["arquitectura"];
    $insertar->procesador = $_POST["procesador"];
    $insertar->ram = $_POST["ram"];
    $insertar->almacenamiento = $_POST["almacenamiento"];
    $insertar->dispositivo = $_POST["dispositivo"];
    $insertar->producto = $_POST["producto"];
    $insertar->ubicacion = $_POST["ubicacion"];
    $insertar->detalles = $_POST["detalles"];
    $insertar->aditamentos = $_POST["aditamentos"];
    $insertar->empresa = $_POST["empresa"];
    $insertar->estado = $_POST["estado"];
    $insertar->registrarEquipos();
    }
    if($_POST["accion"] == "eliminar"){
            $eliminar = new ajaxEquipos();
            $eliminar->idequipos = $_POST["idequipos"];
            $eliminar->eliminarEquipos();
    }
if($_POST["accion"] == "actualizar"){
    $actualizar = new ajaxEquipos();
    $actualizar->idequipos = $_POST["idequipos"];
    $actualizar->departamento = $_POST["departamento"];
    $actualizar->responsable = $_POST["responsable"];
    $actualizar->responsableAnt = $_POST["responsableAnt"];
    $actualizar->sku = $_POST["sku"];
    $actualizar->equipo = $_POST["equipo"];
    $actualizar->marca = $_POST["marca"];
    $actualizar->modelo = $_POST["modelo"];
    $actualizar->color = $_POST["color"];
    $actualizar->so = $_POST["so"];
    $actualizar->arquitectura = $_POST["arquitectura"];
    $actualizar->procesador = $_POST["procesador"];
    $actualizar->ram = $_POST["ram"];
    $actualizar->almacenamiento = $_POST["almacenamiento"];
    $actualizar->dispositivo = $_POST["dispositivo"];
    $actualizar->producto = $_POST["producto"];
    $actualizar->ubicacion = $_POST["ubicacion"];
    $actualizar->detalles = $_POST["detalles"];
    $actualizar->aditamentos = $_POST["aditamentos"];
    $actualizar->empresa = $_POST["empresa"];
    $actualizar->estado = $_POST["estado"];
    $actualizar->actualizarEquipos();
}

}
?>
