<?php

session_start();
error_reporting(0);

$validar = $_SESSION['username'];

if($validar == null || $validar == ''){
    header("Location: ../../../index.php");
    die();
}
?>

<form method="POST" id="formEditar" enctype="multipart/form-data" action="Controlador/modificar.php" onsubmit="return confirm('Formulario enviado');">
    <input type="hidden" name="id_persona" id="id_persona">
    <div class="div-padre2">
        <div class="form-left2">
    <div class="div-nombre-apellidos2">
        <div class="div-nombre2">
        <label>Nombres</label>
        <input type="text" class="form-control" name="nombre" id="nombre" required>
        </div>
        <div class="div-apellidos2">
        <label>Apellidos</label>
        <input type="text" class="form-control" name="apellido" id="apellido" required>
      </div>
    </div>
    <div class="div-sangre-fecha2">
        <div class="div-sangre2">
        <label>Tipo de Sangre</label>
        <input type="text" class="form-control" name="tipo_sangre" id="tipo_sangre" required>
        </div>
        <div class="div-fecha2">
        <label>Fecha de Ingreso</label>
        <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso" required>
    </div>
    </div>
  
    <div class="div-empleado-estatus2">
        <div class="div-empleado2">
        <label>Tipo de Empleado</label>
        <input type="text" class="form-control" name="tipo_empleado" id="tipo_empleado" required>
        </div>

        <div class="div-estatus2">
        <label>Estatus</label>
        <select class="form-select" name="status" id="status" required>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select>
    </div>
    </div>
    <div class="div-enfermedad2">
        <div class="div-enfermedad2">
        <label>Enfermedad Crónica</label>
        <input type="text" class="form-control" name="enfermedad_cronica" id="enfermedad_cronica" required>
        </div>
    </div>

    </div>


    <div class="form-right2">
    <div class="mb-3">
    <div class="mb-3">
    <label>Fotografía Actual</label>
    <div id="vistaPreviaFotografia">
        <img id="imagenPrevia" src="" alt="Fotografía actual" height="200px" style="display: none;" />
    </div>
    <label for="fotografiaNueva">Cambiar fotografía:</label>
    <input type="file" id="fotografiaNueva" name="fotografiaNueva" accept="image/*">
</div>
</div>
    </div>
    </div>


    <div class="div-botones">
        <div class="div-btn-cancelar">
        <button type="button" id="btncancelarmodal" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
        <div class="div-btn-guardar"></div>
        <button type="submit"  id="btnguardarmodal" name="btneditar" value="guardar" class="btn btn-primary">Guardar Cambios</button>
        </div>
    </div>

    </div>
</form>

<style>
     .div-padre2{
    display:flex;
    justify-content: space-around;
    width: 100%;
    height: auto;
    margin-bottom:10px;
  }

  .form-left2{
    margin-right:20px;
}

.form-right2{
    
}
  .form-left2,
  .form-right2{
      width: 50%;
      height:auto;
      
  }
  .div-nombre-apellidos2,
  .div-sangre-enfermedad2,
  .div-empleado-estatus2{
      width: 100%;
      height: auto;
      display:flex;
     
      margin-bottom:20px;
  }
   
  .div-nombre2,
  .div-apellidos2,
  .div-sangre2,
  .div-empleado2,
  .div-fecha2,
  .div-estatus2{
    width: 50%;
    height:auto;
    
    
  }
   
  .div-enfermedad2{
    width: 100%;
  }
  .div-nombre2,
  .div-sangre2,
  .div-empleado2{
    margin-right:10px;
  }
   
   .div-nombre-apellidos2 input{
      width:100%;
      height:4vh;
      border-radius:none;
  }

  

  .div-sangre-fecha2{
      width: 100%;
      height: auto;
      display:flex;
     
      margin-bottom:20px;
  }
   
   .div-sangre-fecha2 input{
      width:100%;
      height:4vh;
      border-radius:none;
  }
   
  
  .div-empleado-estatus2{
      width: 100%;
      height: auto;
      display:flex;
      
      margin-bottom:20px;
  }

  .div-empleado-estatus2 input{
      width:100%;
      height:4vh;
      border-radius:none;
  }

  .div-enfermedad2{
      width: 100%;
      height: auto;
      display:flex;
      flex-direction: column;
     
  }
  .div-enfermedad2 input{
      width:100%;
      height:4vh;
      border-radius:none;
  }

  #imagenPrevia{
    display: none;
    width: 250px;  /* Ajusta el tamaño de la imagen */
    height: 250px;  /* Ajusta el tamaño de la imagen */
    object-fit: cover;  /* Asegura que la imagen cubra todo el espacio sin deformarse */
    margin-top:0px;
    border-radius: 8px;  /* Añade bordes redondeados para un mejor estilo */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);  /* Añadir sombra para darle un toque elegante */
    border: 2px solid #ddd;  /* Añadir un borde sutil */
  }

  #btncancelarmodal {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 114px;
    height: 35px;
    padding: 10px 20px;
    font-weight: bold;
    background: #A3181C;
    border-radius: 10px;

}

#btnguardarmodal{
    width: 114px;
    height: 35px;
    background: #058F66;
    color: white;
    font-weight: bold;
    border-radius: 10px;
}


@media only screen and (max-width: 768px){
    .div-padre2{
        display:flex;
        flex-direction:column;
    }

    .form-left2,
  .form-right2{
    width: 100%;
  }


}
</style>