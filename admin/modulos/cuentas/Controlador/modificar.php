<?php 

if (!empty($_POST["btneditar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["correo"]) and !empty($_POST["contraseña"]) and !empty($_POST["tipo"])) {
        $id_cuenta=$_POST["id_cuenta"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $correo=$_POST["correo"];
        $contraseña=$_POST["contraseña"];
        $tipo=$_POST["tipo"];
        $sql=$conexion->query(" update cuenta set nombre='$nombre', apellido='$apellido', correo='$correo', contraseña='$contraseña', tipo='$tipo' where id_cuenta=$id_cuenta ");
        if ($sql==1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-warning'> La modificacion no ha podido ser posible. </div>";
        }
        
    }else{
        echo "<div class='alert alert-danger'> Se ha dejado un campo o mas en blanco. </div>";
    }
}

?>