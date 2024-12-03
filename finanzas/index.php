<?php

session_start();
error_reporting(0);

$validar = $_SESSION['username'];

if($validar == null || $validar == ''){
    header("Location: ../../../index.php");
    die();
}
?>

<?php
include "Modelo/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="imgs/InndakaLogo.png" type="image/png">
    <title>Mostrar datos</title>

    <!-- Incluir Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/43625fde10.js" crossorigin="anonymous"></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        /* Mostrar el menú cuando se agrega la clase 'show' */
        .dropdown-content {
            display: none;
            position: absolute; /* Necesario para posicionar el menú */
            z-index: 1000; /* Asegura que el menú quede por encima de otros elementos */
        }

        .dropdown-content.show {
            display: block;
        }

        /* Estilo para estado "Activo" */
        .activo {
            color: green;
            font-weight: bold;
        }

        /* Estilo para estado "Inactivo" */
        .inactivo {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    
<!-- AQUI VA EL HEADER  -->
<header class="cre-Header">
    <div class="cre-Header-Left">
        <a href="../../index.php" class="cre-Button-Link">
            <img src="imgs/grupoArsol.png" alt="Logo">
        </a>
    </div>
    <div class="cre-Header-Center">
        <h1>CREDENCIALES</h1>
    </div>
    <div class="cre-Header-Right">
    </div>
</header>

  <!--    Linea que divide -->
 <div class="cre-Linea-Div"></div>

<!-- PARA bloquear TODO  en horizontal -->
<main class='col-App'>voltea tu dispositivo movil</main>
       <div class='col-Mensaje'>
               <img src='https://www.factica.es/arquitectura/dist/app/images/rotate2.gif' alt='rotate image'>
             </div>

<!-- AQUI VA EL PRIMER CONTENEDOR -->
<div class="cre-list">
    <div class="cre-left">
        <div class="cre-left-img">
            <img src="imgs/ICON.png" alt="">
        </div>
        <div class="cre-right-text"><h4>LISTA DE CREDENCIALES</h4></div>
    </div>
    <div class="cre-right">
    <form class="form-buscar" role="search" onsubmit="event.preventDefault(); buscar();">
        <div class="input-group">
            <input class="form-control me-1" type="search" id="buscador" placeholder="Buscar" aria-label="Buscar" oninput="buscar()">
            <span class="input-group-text">
                <i class="fas fa-search"></i>
            </span>
        </div>
        <button class="btn btn-primary" id="btnbuscar" type="submit">Buscar</button>
    </form>
</div>

</div>

 


<!-- AQUI VA EL SEGUNDO CONTENEDOR -->
<div class="cre-list-2">
    <div class="cre-left-list-2">
        <div class="cre-conteo">
            <div id="conteo-wrapper">
                <span id="numero-conteo">0</span> <strong class="numero-conteo-texto">COLABORADORES</strong>
            </div>
        </div>
       <!--  <div class="cre-filtrado">
            <p>FILTRAR POR:</p>
            <select id="cre-filtrado-select" name="tipo_sangre">
                <option value="">Elige</option>
                <option value="ultima_modificacion">Ultima Modificación</option>
                <option value="primera_modificación">Primera Modificación</option>
                <option value="orden_alfabetico">Orden Alfabetico</option>
                <option value="tipo_sangre">Tipo de Sangre</option>
                <option value="ultima_fecha_ingreso">Ultima Fecha de ingreso</option>
                <option value="primera_fecha_ingreso">Primera fecha de ingreso</option>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>
        </div> -->
    </div>
    <div class="cre-right-list-2"> 
        <button type="button" class="btn btn-primary" id="btnagregar" data-bs-toggle="modal" data-bs-target="#modalRegistro">
            AGREGAR
        </button>
    </div>
</div>




<!-- Modal para registrar -->
<div class="modal fade" id="modalRegistro" tabindex="-1" aria-labelledby="modalRegistroLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-imagen">
                    <img src="imgs/carta.png" alt="">
                </div>
                <h2 class="modal-title" id="modalRegistroLabel">GESTIONAR COLABORADOR</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Incluir el formulario de registro_cuenta.php aquí -->
                <?php include 'registro_cuenta.php'; ?>
            </div>
        </div>
    </div>
</div>

<!--Modal Edicion -->

<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <div class="modal-imagen">
                    <img src="imgs/carta.png" alt="">
                </div>
                <h2 class="modal-title" id="modalEditarLabel">Editar Colaborador</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <!--Incluir el formulario de modificar.php -->
                    <?php include 'modificar.php'; ?>
                </div>
        </div>
    </div>
</div>

<!-- Mostrar los registros -->
<div id="cre-tabla"  style="overflow-y: auto; height: 425px;">
    <table id="dataTable" class="table table-bordered">
        <thead>
            <tr>
                <th>ID EMPLEADO</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>TIPO DE SANGRE</th>
                <th>ENFERMEDAD CRÓNICA</th>
                <th>TIPO DE EMPLEADO</th>
                <th>FECHA DE INGRESO</th>
                <th>ESTATUS</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Consultar los datos de la tabla 'persona'
            $query = mysqli_query($conexion, "SELECT * FROM persona");
            $resultado = mysqli_num_rows($query);

            if ($resultado > 0) {
                while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><a href="Controlador/detalle.php?id_persona=<?php echo $data['id_persona']; ?>"><?php echo $data['id_persona']?></a></td>
                <td><a href="Controlador/detalle.php?id_persona=<?php echo $data['id_persona']; ?>"><?php echo $data['nombre']?></a></td>
                <td><a href="Controlador/detalle.php?id_persona=<?php echo $data['id_persona']; ?>"><?php echo $data['apellido']?></a></td>
                <td><a href="Controlador/detalle.php?id_persona=<?php echo $data['id_persona']; ?>"><?php echo $data['tipo_sangre']?></a></td>
                <td><a href="Controlador/detalle.php?id_persona=<?php echo $data['id_persona']; ?>"><?php echo $data['enfermedad']?></a></td>
                <td><a href="Controlador/detalle.php?id_persona=<?php echo $data['id_persona']; ?>"><?php echo $data['tipo_emp']?></a></td>
                <td><a href="Controlador/detalle.php?id_persona=<?php echo $data['id_persona']; ?>"><?php echo $data['fecha_ing']?></a></td>
                <td>
                    <a href="Controlador/detalle.php?id_persona=<?php echo $data['id_persona']; ?>">
                        <?php
                        // Cambiar el color del texto según el estado, ignorando mayúsculas/minúsculas
                        $status = strtolower($data['status']); // Convertimos el estado a minúsculas
                        if ($status == 'activo') {
                            echo '<span class="activo">' . $data['status'] . '</span>';
                        } else if ($status == 'inactivo') {
                            echo '<span class="inactivo">' . $data['status'] . '</span>';
                        } else {
                            echo $data['status']; // Si el status no es "activo" ni "inactivo", mostrarlo normalmente
                        }
                        ?>
                    </a>
                </td>
                <td>
                    <div class="dropdown">
                        <button onclick="toggleDropdown(event, this)" class="dropbtn"><i class="fa-solid fa-ellipsis"></i></button>
                        <div class="dropdown-content">
                            <a href="#" onclick="cargarDatosPersona(<?php echo $data['id_persona']; ?>)" data-bs-toggle="modal" data-bs-target="#modalEditar">
                                <i class="fa-solid fa-pen-to-square"></i> EDITAR
                            </a>
                            <a onclick="return confirmarEliminar()" href="Controlador/eliminar.php?id_persona=<?= $data['id_persona'] ?>"><i class="fa-solid fa-trash"></i> ELIMINAR</a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>
  
<!-- Script para el buscador -->
<script>
    function buscar() {
        const input = document.getElementById('buscador');
        const filter = input.value.toLowerCase();
        const table = document.getElementById('dataTable');
        const rows = table.getElementsByTagName('tr');

        for (let i = 1; i < rows.length; i++) {
            const cells = rows[i].getElementsByTagName('td');
            let found = false;

            for (let j = 0; j < cells.length; j++) {
                if (cells[j].innerText.toLowerCase().includes(filter)) {
                    found = true;
                    break;
                }
            }

            rows[i].style.display = found ? '' : 'none';
        } 
    }

    function confirmarEliminar() {
        var respuesta = confirm("¿Seguro que quiere eliminar este dato?");
        return respuesta;
    }

    // Función para mostrar u ocultar el menú
    function toggleDropdown(event, button) {
        // Primero, cerrar cualquier otro menú desplegable
        const dropdowns = document.querySelectorAll('.dropdown-content');
        dropdowns.forEach(dropdown => {
            if (dropdown !== button.nextElementSibling) {
                dropdown.classList.remove('show');
            }
        });

        // Mostrar/ocultar el menú desplegable correspondiente
        const dropdown = button.nextElementSibling;
        dropdown.classList.toggle('show');
    }
</script>

<script>
function actualizarConteo() {
    const table = document.getElementById('dataTable');
    const rows = table.getElementsByTagName('tr');
    const conteoSpan = document.getElementById('numero-conteo');
    let count = 0;

    // Contamos las filas visibles
    for (let i = 1; i < rows.length; i++) {
        if (rows[i].style.display !== 'none') {
            count++;
        }
    }

    // Actualizamos solo el número dentro del span
    conteoSpan.textContent = count;
}

// Llamar a la función para actualizar el conteo cuando la página cargue
window.onload = function() {
    actualizarConteo();
};

</script>

<script src="funciones.js"></script>

</body>
</html>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

* {
    font-family: "Bebas Neue", sans-serif;
    font-weight: 100;
    font-style: normal;
}

body {
    background: #F1F1F1 !important;
    width: auto;
    height: auto;

}


.cre-Linea-Div{
    width: 100%;
    border: 1px solid;
    margin-bottom: 5px;
}

.cre-Linea2-Div{
    width: 100%;
    border: 1px solid ;
    margin-bottom: 5px;
}

.col-App {
    /*esta declarado aqui para que se oculte en HTML  Esto 
    nos sirve para el modo horizontal en dispositivos moviles*/
    background-color: black;
    color: white;
    font-size: 2rem;
    padding: 40px;
    text-align: center;
    display: none;
}

.col-Mensaje {
    /* El mensaje que ocultamos*/
    display: none;
}


/*AQUI ESTA EL HEADER */
.cre-Header-Left p {
    position: relative;
    top: 40px;
    font-size: 12px;
}

 .cre-Header h1{
        font-size: 40px;
    text-shadow: 0px 0 6px #505050;
    }

.cre-Header-Left img {
    width: 80px;
    margin-right: 20px;
}

.cre-Header {
    display: flex;
    align-items: center;
    margin-bottom: 5px;

}


.cre-Header-Left {
    display: flex;
    flex: 1;
    padding-left: 0;
}


.cre-Header-Center {
    flex: 2;
    text-align: center;
}

.cre-Header-Right {
    display: flex;
    flex: 1;
    padding-right: 10px;
    position: relative;
    width: 300px;
}


.cre-Header-Right input[type="text"] {
    width: 100%;
    height: 35px;
    padding: 10px;
    border-radius: 4px;
}

.cre-Header-Right button[type="submit"] {
    position: absolute;
    right: 23px;
    top: 5px;
    padding: 5px 10px;
    color: #000000;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-size: 10px;
    background: transparent;
}

#cre-Input-Buscar {
    width: 10%;
    border-radius: 15px;
    padding: 2px;
}

#cre-BuscarBtn {
    position: relative;
    height: 3vh;
    right: 2.188rem;
    top: 0.325rem;
    border: none;

}






/*--Primer Div con el buscador VIENE EL TITULO LISTA DE CREDENCIALES Y LA IMAGEN DEL LADO DERECHO EL BUSCADOR --*/
  .cre-list {
    width: 100%;
    height: auto;
    background: #F1F1F1;
    display: flex;
    border-bottom: 2px solid #00000020;
     padding:10px;
   

}
.cre-left {
    display: flex;
    width: 50%;
    background: #F1F1F1;
    margin-right: 10px;
    
}

.cre-right {
    width: 50%;
    background: #F1F1F1;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    

}
.form-buscar {
    display: flex;
    justify-content: center;
    align-items:center;
    width: 30%;
   
    
}

#buscador {
    width: 100%;
    height: 32px;
    border-radius: 30px;
    border: solid #00000050;
    outline: none;
    font-size: 12px;
     background: #F1F1F1
}


/*---AQUI EL SEGUNDO CONTENEDOR CON EL CONTEO Y EL BOTON DE AGREGAR---*/





#btnagregar {
    background: #A3181C;
    width: 120px;
    height: auto;
    border: none;
    font-weight: normal;
    font-size: 20px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    
}




.cre-list-2 {
    width: 100%;
    height: auto;
    display: flex;
    justify-content: space-around;
    border-bottom: 2px solid #00000020;
    margin-bottom:20px;
    padding:10px;
   
  

}

.cre-left-list-2 {
    width: 50%;
    height: auto;
    background: #F1F1F1;
    display: flex;
    margin-right: 10px;
 


}

.cre-right-list-2 {
    width: 50%;
    height: auto;
    background: #F1F1F1;
    display: flex;
    justify-content: flex-end;
    display:flex;
    align-items:center;
   
}


/*BUSCADOR Y ACOMODAR EL ICONO*/

.input-group {
  position: relative;
}

.input-group input {
  padding-left: 40px;  /* Deja espacio para el ícono */
}

.input-group .input-group-text {
  position: absolute;
  left: 5px;  /* Ajusta la posición del ícono a la izquierda */
  top: 50%;
  transform: translateY(-50%);  /* Centra el ícono verticalmente */
  pointer-events: none;  /* Hace que el ícono no interfiera con la interacción del input */
  background-color: transparent;  
  border: none;  /* Si no deseas bordes alrededor del ícono */
}

.input-group .fas.fa-search {
  font-size: 16px; /* Tamaño más pequeño para el ícono */
  color:#00000050;
}


.input-group input::placeholder{
    color:#00000050;
}





.cre-left-img {
    width: auto;
    height: auto;
    margin-right: 15px;
   
}

.cre-left-img img{
    height: 40px;
}


.cre-right-text {
   
    width: auto;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 4PX;
    
}

.cre-right-text h4 {
    font-weight: normal;
    font-size: 30px;
   

}


.cre-conteo {
    width: auto;
    height: auto;
    background: #F1F1F1;
    margin-right: 10px;
}

#numero-conteo {
    color: #A3181C;
    font-weight: bold;
    font-size: 45px;
    margin-right:10px;
}

.numero-conteo-texto{
    font-size: 25px;
}


.cre-filtrado {
    height: auto;
    width: auto;
    background: #F1F1F1;
    display: flex;
    font-weight: bold;
}

.cre-filtrado p {
    margin-right: 10px;
}

#cre-filtrado-select {
    height: 4vh;
}




/**--AQUI ESTAN LOS BOTONES DE AGREGAR Y BUSCAR --**/




#btnbuscar {
    display: none;
}

#btnbuscar:hover {
    background: #FF5555;
}

#btnbuscar:active #btnagregar:active {
    background: #FF2323;
}



/* Eliminar el borde azul al seleccionar el input */

.form-buscar{
    width: 30%;
    outline: none;
    
}



/* Eliminar el borde azul al seleccionar el input */


/**--AQUI EMPIEZA LA EDICIÓN DE LA TABLA**/
  #cre-tabla{
    padding-left: 30px;
     padding-right: 30px;
}


thead {
    background: #F1F1F1;
}

tr {
     font-size: 20px;
      color: rgba(0, 0, 0, 0.7);
    box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
}

thead th {
    border: none;
    font-size: 20px;
    text-align: center;
    vertical-align: middle;
}

tbody {
    background: white;
}

tbody a {
    text-decoration: none;
    text-align: center;
    color: black;
}

tbody td {
    border: none;
}

th,
td {
    text-align: center;
    vertical-align: middle;
}


/* Estilo para hacer que el encabezado de la tabla se quede fijo en la parte superior */
#dataTable thead {
    position: sticky;
    /* Hace que el thead sea pegajoso */
    top: 0;
    /* Lo mantiene en la parte superior cuando se desplaza */
    background-color: #F1F1F1;
    /* Esto es importante para que el fondo del encabezado sea blanco (o el color que elijas) */
    z-index: 10;
    /* Asegura que el encabezado esté por encima del contenido */
    border-top: #F1F1F1;
    border-bottom: #F1F1F1;
}

.dropdown-content {
    display: none;
    position: absolute;
    /* Necesario para posicionar el menú */
    z-index: 1000;
    /* Asegura que el menú quede por encima de otros elementos */
}

.dropdown-content.show {
    display: block;
}

.table-container {
    overflow-y: auto;
    height: 400px;
    /* Ajusta la altura según lo que necesites */
}

/**-AQUI PARA EDITAR LOS INPUTS--*/


.cre-Linea-Div {
    width: 100%;
    border: 1px solid;
    margin-bottom: 5px;
}

.cre2-Linea-Div,
.cre3-Linea-Div {
    width: 100%;
    border: 1px solid #dcdcdc;
    margin-bottom: 5px;


}



/*--AQUI VA EL MODAL PARA REGISTRAR--*/

/* Estilo para el modal */
#modalRegistro .modal-dialog,
#modalEditar .modal-dialog {
    max-width: 50%;
    /* Puedes ajustar el 90% a lo que necesites */
}

/* Estilo para el contenido del modal */
#modalRegistro .modal-content,
#modalEditar .modal-content{
    width: 100%;
    /* Se asegura de que el contenido ocupe el 100% del contenedor */
    height: auto;
    background: #FFFFFF;
    /* Esto solo es para pruebas, puedes quitarlo o cambiar el color */
}

.modal-imagen {
    width: auto;
    height: auto;
    margin-right: 10px;
}

/* Para el título del modal */
#modalRegistro .modal-header h2,
#modalEditar .modal-header h2{
    font-weight: bold;
    width: 100%;
    height: auto;
}

/* Para el cuerpo del modal */
#modalRegistro .modal-body,
#modalEditar .modal-body {
    width: 100%;
    padding: 20px;
    /* Si deseas más espacio en el cuerpo */
}



/*-BOTONES DE CANCELAR  Y GUARDAR-*/

.div-botones {
    width: 100%;
    height: auto;
    display: flex;
    justify-content: flex-end;

}

.div-btn-guardar {
    margin-left: 20px;
    width: auto;
    height: auto;

}

.div-btn-cancelar {
    width: auto;
    height: auto;


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

#btnguardarmodal {
    width: 114px;
    height: 35px;
    background: #058F66;
    color: white;
    font-weight: bold;
    border-radius: 10px;
}


/*PARA EL BOTON DE ACCIONES */
/* Contenedor del menú desplegable (inicialmente oculto) */
.dropdown {
    position: relative;
    display: inline-block;
    border-radius: 10px;

}

/* Estilo del botón que abre el menú desplegable */
.dropbtn {
    background-color: white;
    color: black;
    font-size: 18px;
    border: none;
    cursor: pointer;
}

/* Estilo del menú desplegable */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    border-radius: 10px;
    right: 0;
}

/* Estilo de las opciones dentro del menú */
.dropdown-content a {
    display: inline-flex;
    align-items: center;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    width: 100%;
    box-sizing: border-box;
    font-size: 12px;
    /* Tamaño de fuente más pequeño para el texto */
    font-weight: bold;
}

/* Asegurar que los iconos no cambien el tamaño de la letra */
.dropdown-content a i {
    margin-right: 8px;
    /* Espacio entre el icono y el texto */
    font-size: 20px;
    /* Puedes ajustar el tamaño de los iconos si es necesario */
    font-weight: bold;
}

/* Estilo cuando el mouse pasa sobre las opciones */
.dropdown-content a:hover {
    background-color: #f1f1f1;
}

/* Mostrar el menú desplegable al hacer clic */
.show {
    display: block;
}



@media only screen and (max-width: 768px) {

    .cre-list,
    .cre-list-2 {
        width: 100%;
        display: flex;
        flex-direction: column;
        
    }

    .cre-left {
        width: 100%;
        display: flex;
        justify-content: center;
       
    }

    .cre-left-img {
        width: auto;
    }

    #buscador {
        width: 100%;
       
    }

    .cre-right {
        width: 100%;
        
        display: flex;
        justify-content: center;
    }

    .form-buscar {
        width: 100%;
       
    }

    .form-buscar input {
        width: 100%;

    }

    .cre-left-list-2 {
        width: 100%;
        height:auto;
    

    }


 #conteo-wrapper{
      display:flex;
      width:auto;
     
      font-size:20px;
     
 }
 

    .cre-conteo {
        width: 100%;
        height: auto;
    
        display:flex;
        justify-content:center;
        align-items:center;

    }
    
    .numero-conteo-texto{
        position:relative;
        top:20px;
    }

    .cre-filtrado {
        width: 70%;

    }

    .cre-right-list-2 {
        width: 100%;
    }

    .cre-right-text {
        width: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    
    #btnagregar {
        width: 100%;
        height: auto;
        font-size: 25px;
        text-align: center;
    }

    #modalRegistro .modal-dialog {
        max-width: 100%;
      
    }

    #modalRegistro .modal-content {
        width: 100%;
        height: auto;
       
      
        /* Esto solo es para pruebas, puedes quitarlo o cambiar el color */
    }

    #modalRegistro .modal-body {
       
        width: 100%;
        padding: 20px;
      
        /* Si deseas más espacio en el cuerpo */
    }
    
    .div-botones{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #modalEditar .modal-dialog {
        max-width: 100%;
      
    }

    #modalEditar .modal-content {
        width: 100%;
        height: auto;
       
      
        /* Esto solo es para pruebas, puedes quitarlo o cambiar el color */
    }

    #modalEditar .modal-body {
       
        width: 100%;
        padding: 20px;
      
        /* Si deseas más espacio en el cuerpo */
    }
    
    .div-botones{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
     
     
    

}

/* Esta es la parte para que los dispositivos moviles esten en horizontal */
@media (max-width:995px) and (orientation: landscape) {

    /* Cubre toda la pantalla del dispositivo */
    .col-Mensaje {
        position: fixed;
        margin: auto;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        /* Con esto ajustamos la posición del texto */
        display: flex;
        align-items: center;
        justify-content: center;

        /* Un color de fondo */

        background-color: rgb(241, 241, 241);
        /* Debemos superponerlo */
        z-index: 1000;
    }

    /* El texto que vamos a mostrar */
    .col-Mensaje::before {
        content: "";
        font-size: 2rem;
    }

    .col-App {
        display: none;
    }
}
</style>
