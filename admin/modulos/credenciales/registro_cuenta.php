<?php

session_start();
error_reporting(0);

$validar = $_SESSION['username'];

if($validar == null || $validar == ''){
    header("Location: ../../../index.php");
    die();
}
?>

<form method="POST" id="form-modal" enctype="multipart/form-data" action="Controlador/registro_cuenta.php">
    <div class="div-padre">
        <div class="form-left">
            <div class="div-nombre-apellidos">
                <div class="div-nombre">
                    <label>NOMBRES: </label>
                    <input type="text" name="nombres" placeholder="INGRESE SUS NOMBRES"><br><br>
                </div>
                <div class="div-apellidos">
                    <label>APELLIDOS: </label>
                    <input type="text" name="apellidos" placeholder="INGRESE SUS APELLIDOS"><br><br>
                </div>
            </div>
            <div class="div-sangre-fecha">
                <div class="div-sangre">
                <label>TIPO DE SANGRE: </label>
                <input type="text" name="tipo_sangre" placeholder="INGRESE SU TIPO DE SANGRE"><br><br>
            </div>
            <div class="div-fecha">
            <label>FECHA DE INGRESO: </label>
            <input type="date" name="fecha_ingreso" placeholder="INGRESE LA FECHA DE INGRESO"><br><br>
            </div>
            </div>
            <div class="div-empleado-estatus">
                <div class="div-empleado">
                <label>TIPO DE EMPLEADO: </label>
                <input type="text" name="tipo_empleado" placeholder="INGRESE EL TIPO DE EMPLEADO"><br><br>
            </div>
            <div class="div-estatus">
            <label>ESTATUS: </label>
            <input type="text" name="status" placeholder="INGRESE EL ESTATUS"><br><br>
            </div>
            </div>
            <div class="div-enfermedad">
                <div class="div-enfermedad1">
                <label>ENFERMEDA CRONICA: </label>
                <input type="text" name="enfermedad_cronica" placeholder="INGRESE SU ENFERMEDAD SI HAY"><br><br>
            </div>
            </div>
        </div>
        <div class="form-right">
    <label>FOTOGRAFIA: </label>
    <input type="file" name="fotografia" accept="image/*"><br><br>
    
    <!-- Imagen previa de la foto -->
    <img id="imgPreview" style="display: none; width: 260px; height: 260px; object-fit: cover;" alt="Vista previa de la imagen">
</div>

    </div>

        <div class="div-botones">
        <div class="div-btn-cancelar">
         <button type="button" id="btncancelarmodal"  class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
         </div>
        <div class="div-btn-guardar">
        <input type="submit" name="btnguardar" id="btnguardarmodal" value="GUARDAR">
        </div>
         
         
        </div>
   
</form>

<style>
    .div-padre{
    display:flex;
    justify-content: space-around;
    width: 100%;
    height: auto;
    margin-bottom:10px;
  }
.form-left{
    margin-right:20px;
}

.form-right{
    
}
  .form-left,
  .form-right{
      width: 50%;
      height:auto;
      
  }
  .div-nombre-apellidos,
  .div-sangre-enfermedad,
  .div-empleado-estatus{
      width: 100%;
      height: auto;
      display:flex;
     
      margin-bottom:20px;
  }
   
  .div-nombre,
  .div-apellidos,
  .div-sangre,
  .div-empleado,
  .div-fecha,
  .div-estatus{
    width: 50%;
    height:auto;
    
    
  }
   
  .div-enfermedad1{
    width: 100%;
  }
  .div-nombre,
  .div-sangre,
  .div-empleado{
    margin-right:10px;
  }
   
   .div-nombre-apellidos input{
      width:100%;
      height:4vh;
      border-radius:none;
  }

  

  .div-sangre-fecha{
      width: 100%;
      height: auto;
      display:flex;
     
      margin-bottom:20px;
  }
   
   .div-sangre-fecha input{
      width:100%;
      height:4vh;
      border-radius:none;
  }
   
  
  .div-empleado-estatus{
      width: 100%;
      height: auto;
      display:flex;
      
      margin-bottom:20px;
  }

  .div-empleado-estatus input{
      width:100%;
      height:4vh;
      border-radius:none;
  }

  .div-enfermedad{
      width: 100%;
      height: auto;
      display:flex;
      flex-direction: column;
     
  }
  .div-enfermedad input{
      width:100%;
      height:4vh;
      border-radius:none;
  }


#imgPreview {
    display: none;
    width: 250px;  /* Ajusta el tamaño de la imagen */
    height: 250px;  /* Ajusta el tamaño de la imagen */
    object-fit: cover;  /* Asegura que la imagen cubra todo el espacio sin deformarse */
    margin-top:0px;
    border-radius: 8px;  /* Añade bordes redondeados para un mejor estilo */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);  /* Añadir sombra para darle un toque elegante */
    border: 2px solid #ddd;  /* Añadir un borde sutil */
}

label{
    font-weight: bold;
}

@media only screen and (max-width: 768px){
    .div-padre{
        display:flex;
        flex-direction:column;
    }

    .form-left,
  .form-right{
    width: 100%;
  }
}

</style>

<script>
    // Función para mostrar la imagen seleccionada en el input
    document.querySelector('input[name="fotografia"]').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            const imgPreview = document.getElementById('imgPreview');
            imgPreview.src = e.target.result;
            imgPreview.style.display = 'block';  // Hacer visible la imagen
        };

        if (file) {
            reader.readAsDataURL(file);  // Leer la imagen como URL base64
        }
    });
</script>
