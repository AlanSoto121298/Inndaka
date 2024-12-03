<?php
include "../Modelo/conexion.php";

if (isset($_GET['id_persona'])) {
    $id_persona = $_GET['id_persona'];

    // Consulta para obtener los detalles de la persona
    $query = mysqli_query($conexion, "SELECT * FROM persona WHERE id_persona = '$id_persona'");

    // Verifica si se encontraron datos
    if ($data = mysqli_fetch_array($query)) {
        // Contenedor principal que agrupa todo
        echo "<div class='container'>";

       // Agregamos el mensaje para dispositivos móviles en horizontal
       echo "<main class='col-App'>voltea tu dispositivo movil</main>";
       echo "<div class='col-Mensaje'>
               <img src='https://www.factica.es/arquitectura/dist/app/images/rotate2.gif' alt='rotate image'>
             </div>";


        // Detalles dentro de un div con clase "details"
        echo "<div class='details'>";
        
        // Contenedor de la imagen y estado
        echo "<div class='left'>";
        echo "<div class='image-container'>";
        echo "<div class='imagen-container'>";
        echo '<img src="data:image/jpg;base64,' . base64_encode($data['fotografia']) . '" height="200px" /></div>';
        echo "</div>";
        
        // Mostrar el estado con un círculo de color
        $status = strtoupper($data['status']); // Convierte el status a mayúsculas

// Determina la clase según el status
$statusClass = ($status == 'ACTIVO') ? 'activo' : 'inactivo';

echo "<div class='detail-item'>
        <strong>EMPLEADO:</strong> <span class='status-text'>$status</span>
        <div class='status-circle $statusClass'></div>
        <img class='status-image' src='imgs/logopeque.png' alt='status image'>
        <img class='status-image2' src='imgs/samain.png' alt='status image'>
      </div>";


        echo "</div>"; // Cierra el contenedor de la izquierda

        // Contenedor de los detalles de texto
        echo "<div class='right'>";
      
        // DIV DE NOMBRE COMPLETO  Y CONCATENACIÓN 
        $nombreCompleto = strtoupper($data['nombre'] . " " . $data['apellido']);
        echo "<div class='nombre-apellido'>" . $nombreCompleto . "</div>";


        //DIV PARA TIPO DE SANGRE
        echo "<div class='detail-item-tipo-sangre'>
        <div class='tipo-sangre-label'>
            <strong>TIPO DE SANGRE:</strong>
        </div>
        <div class='tipo-sangre-resultado'>
            " . $data['tipo_sangre'] . "
        </div>
    </div>";

        // DIV PARA ENFERMEDAD CRONICA
        echo "<div class='detail-item-enfermedad-cronica'>
            <div class='enfermedad-cronica-label'>
                <strong>ENFERMEDAD CRÓNICA:</strong>
            </div>
            <div class='enfermedad-cronica-resultado'>
                " . $data['enfermedad'] . "
            </div>
        </div>";

        //DIV PARA TIPO DE EMPLEADO
        echo "<div class='detail-item-tipo-empleado'>
        <div class='tipo-empleado-label'>
          <strong>TIPO DE EMPLEADO:</strong>
        </div>
        <div class='tipo-empleado-resultado'>
            " . $data['tipo_emp'] . "
        </div>
    </div>";

       
       //DIV PARA FECHA DE INGRESO
        echo "<div class='detail-item-fecha-ingreso'>
        <div class='fecha-ingreso-label'>
          <strong>FECHA DE INGRESO:</strong>
        </div>
        <div class='fecha-ingreso-resultado'>
            " . $data['fecha_ing'] . "
        </div>
    </div>";


    echo "<div class='detail-item-pagina-numero'>
      <div class='pagina-p'>
           WWW.ARSOLSOLUCIONES.COM
        </div>
         <div class='numero-p'>
           123456
        </div>
    </div>";

        
        echo "</div>";  // Cierra el contenedor de la derecha

        // Nuevo contenedor dentro de .details, pero debajo de .left y .right
        echo "<div class='detail-inferior'>
               
            </div>";

        echo "</div>";  // Cierra el contenedor .details

        // Cierra el contenedor principal
        echo "</div>";
    } else {
        // Si no encontró datos de la persona seleccionada
        echo "<div class='container'><p>No se encontraron detalles para esta persona.</p></div>";
    }
} else {
    // Si no se especificó el ID de la persona
    echo "<div class='container'><p>ID de persona no especificado.</p></div>";
}
?>



<style>

@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
*{
    font-family: "Bebas Neue", sans-serif;
    font-weight: 100;
    font-style: normal;
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

body {
    margin: 0;  /* Elimina el margen por defecto del body */
    height: 100vh;  /* Hace que el body ocupe toda la altura de la ventana */
    display: flex;  /* Usamos Flexbox para el centrado */
    justify-content: center;  /* Centra horizontalmente el contenido */
    align-items: center;  /* Centra verticalmente el contenido */
    background-image: url('imgs/fondo.png'); /* Imagen de fondo */
    background-size: cover;
    background-position: center;
}

.container {
    display: flex;               
    justify-content: center;     
    align-items: center;   
    width: 100%;
    min-height: auto;  /* Altura mínima */
    padding: 20px;
    box-sizing: border-box;
}

.details {
    display: flex;
    flex-wrap:wrap;
    width: 80%;
    height:auto;
    border-radius:10px;
    border: 2px solid;
    box-sizing: border-box;
}

.left {
    height:auto;
    width: 25%;
    margin-right: 20px;
    box-sizing: border-box;
    text-align: center;
    margin-top: 25px;
}

.imagen-container {
    width: 100%; /* Asegúrate de que el contenedor ocupe el ancho completo de .image-container */
    height:auto;
    display: flex;
    justify-content: flex-end; /* Alinea la imagen a la derecha */
    align-items: center; /* Centra la imagen verticalmente si el contenedor es más alto */
}

.imagen-container img {
    width: 150px; 
    height: 150px; 
    border-radius: 50%; 
    object-fit: cover; 
    border: 5px solid #81191C; 
}

.image-container {
    width: 100%; /* Asegúrate de que ocupe todo el espacio disponible */
    height: auto;  /* Asegura que la altura se ajuste según el contenido */
    background: #9A1D21;
    text-align: center;
    margin-bottom: 100px;
    border-top-right-radius: 70px;
    border-bottom-right-radius: 70px;
    overflow: hidden; /* Esto asegura que nada se desborde */
}

.right {
    width: 70%;
    box-sizing: border-box;
    display: flex;
    flex-direction: column; /* Asegura que los elementos se apilen en una columna */

  
}

.detail-item {
    margin-bottom: 10px;
    font-size: 18px;
    color: #333;
    word-wrap: break-word; /* Ajusta las palabras largas para que no se desborden */
}

.detail-item strong {
    color: black; /* Color de los labels */
    white-space: nowrap; /* Evita que el texto del label se divida en varias líneas */
    font-size:30px;
}

.status-image,
.status-image2{
    display:none;
}


.status-text {
    font-size: 30px; /* Establece el tamaño de la fuente a 30px */
}


/* Estilo para los mensajes de error */
p {
    color: black;
    text-align: center;
    font-size: 18px;
}

/* Estilo para el círculo de estado */
.status-circle {
    width: 40px;
    height: 40px;
    border-radius: 50%; /* Hacemos que sea circular */
    display: inline-block;
    margin-left: 10px; /* Espaciado entre el texto y el círculo */
    vertical-align: middle; /* Alinea el círculo verticalmente */
    
}

/* Color verde para "Activo" */
.activo {
    background-color: #28a745; /* Verde */
}

/* Color rojo para "Inactivo" */
.inactivo {
    background-color: #dc3545; /* Rojo */
}

.detail-item-tipo-sangre,
.detail-item-enfermedad-cronica,
.detail-item-tipo-empleado,
.detail-item-fecha-ingreso {
    display:flex;
    justify-content:space-around;  /* Asegura que el texto y el valor se distribuyan adecuadamente */
    align-items:center;
    width:100%;
    height:auto;
    margin-bottom:30px;
   
}

.tipo-sangre-label,
.enfermedad-cronica-label,
.tipo-empleado-label,
.fecha-ingreso-label{
    text-align:LEFT;
    width: 30%;
    white-space: nowrap; /* Evita que el texto del label se divida */
    overflow: hidden; /* Oculta cualquier desbordamiento */
    text-overflow: ellipsis; /* Añade "..." si el texto es muy largo */
    font-size:30px;
  
    
    
} 

.tipo-sangre-resultado,
.enfermedad-cronica-resultado,
.tipo-empleado-resultado,
.fecha-ingreso-resultado{
    font-size: 30px;
    padding:5px;
    width: 30%;
    height:4vh;
    border:2px solid;
    text-align:left;
    word-wrap: break-word; /* Ajusta las palabras largas para que no se desborden */
    overflow-wrap: break-word; /* Asegura que el contenido largo se ajuste a la línea */
}

/* Estilos para el contenedor de nombre y apellido */
.nombre-apellido {
    font-size: 35px;
    color: #333;
    font-weight: bold;
    text-align: center;
    margin-top:10px;
    margin-bottom:30px;
    word-wrap: break-word; /* Asegura que el nombre completo se ajuste */
    
}


/* Ajustes para colocar "detail-item-pagina-numero" debajo de los otros */

.detail-item-pagina-numero{
    width:100%;
    height:auto;
  
}


.numero-p,
.pagina-p{
    width:100%;
   
    height:auto;
    text-align:center;
    font-size:12px;
    font-weight: 12px;
}

.detail-inferior{
    width: 100%;
    height:4vh;
    margin-top:12px;
    background:#9A1D21;
}



/*PARA TABLET*/



@media only screen and (min-width: 768px) and (max-width: 1024px) and (orientation: landscape),
only screen and (min-width: 768px) and (max-width: 1024px) and (orientation: portrait) {

body{
     display: block;  /* Desactivar el flex en dispositivos móviles */
     margin: 0;       /* Asegúrate de que no haya margen adicional */
     height: auto;
     background:white;
     min-height: 100vh;
     overflow: hidden; 
    
}


.container {
    
    width: 100%;
   
   display: flex;
    flex-direction: column; /* Asegúrate de que el flujo sea vertical */
    justify-content: flex-start;
    align-items: flex-start;
   
      
    
}

.details {
    width: 100%;
    height:auto;
    display: flex;
    flex-direction: column;
    border-radius:10px;
    border: 2px solid #4D4D4D;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.45);
    background-image: url('imgs/fondo.png'); /* Imagen de fondo */
    background-size: cover;
    background-position: center;
}

.left {
    width: 100%;
    display: flex; /* Usamos flexbox para controlar el orden */
    flex-direction: column; /* Aseguramos que los elementos se apilen verticalmente */
    margin-bottom:30px;
}

.right {
    width: 100%;
    padding:20px;
}
.nombre-apellido{
    font-size:70px;
     margin-bottom:30px;
     color: rgba(0, 0, 0, 0.7);
} 
 
.tipo-sangre-label,
.enfermedad-cronica-label,
.tipo-empleado-label,
.fecha-ingreso-label{
width: auto;
height:AUTO;
font-size:35px;
text-align:left;
color: rgba(0, 0, 0, 0.7);



} 


.tipo-sangre-resultado,
.enfermedad-cronica-resultado,
.tipo-empleado-resultado,
.fecha-ingreso-resultado{
    height:3vh;
    width: 45%;
    text-align: left;  /* Alinea el texto a la izquierda */
    display: flex;
    justify-content: flex-start;  /* Asegura que el contenido esté a la izquierda */
    align-items: center;  /* Centra el contenido verticalmente */
    padding-left:20px;
    color: rgba(0, 0, 0, 0.7);
}
.detail-item-tipo-sangre,
.detail-item-enfermedad-cronica,
.detail-item-tipo-empleado,
.detail-item-fecha-ingreso
{
    Display:flex;
    justify-content:space-between;

font-size:35px;
text-align:center;
margin-bottom:40px;
}
.detail-item-pagina-numero{
    width: 100%;
    
}
/* Reorganizamos los elementos dentro de .left */


.detail-item {
    order: -1; /* Hace que "detail-item" esté por encima de "image-container" */
    margin: auto;
    margin-bottom:30px;
    font-size:50px;
    width:100%;
   
    
}

.detail-item strong{
    font-size:80px;
   text-align:center;
   position:relative;
   top:50px;
   color: rgba(0, 0, 0, 0.7);
    
}

.status-text {
    font-size: 80px; /* Asegura que coincida con .detail-item strong */
    color: inherit; /* Usa el color del texto actual para heredar consistencia */
    font-weight: normal; /* Ajusta el peso del texto si es necesario */
     position:relative;
     top:50px;
     color: rgba(0, 0, 0, 0.7);
}

.status-circle{
    width: 85px;
    height: 85px; 
    position:relative;
    top:40px;
}

.status-image2{
    display: inline-block;
    text-align: left; /* Alinea el contenido al lado izquierdo */
    float: left; /* Hace que el contenedor se alinee a la izquierda */
    margin-right: 60px; 
     width: 250px;  /* Tamaño más pequeño */
    height: 250px; /* Tamaño más pequeño */
     position:relative;
    bottom:25px;
    
    
}

.pagina-p,
.numero-p{
  font-size:30px;
  font-weight:normal;
  color: rgba(0, 0, 0, 0.7);

}


.image-container {
    border-top-right-radius: 190px;
    border-bottom-right-radius: 190px;
    margin-bottom: 30px;
    width: 70%;
    margin-left: auto; /* Esto empuja el contenedor a la derecha */
    margin-right: 0; /* Asegura que no haya margen extra en el lado derecho */
    transform: scaleX(-1); /* Invertir el contenedor horizontalmente */
}

.imagen-container img{
    width: 350px; 
    height: 350px; 
}

/* Si deseas que la imagen también se invierta horizontalmente */
.image-container img {
    transform: scaleX(-1); /* Invierte solo la imagen */
}

.detail-inferior{
    border-radius:15px;
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


