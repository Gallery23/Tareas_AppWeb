<?php

if (!empty($_Post["btningresar"])){
if (!empty($_POST["Correo"]) and !empty($_POST["Contrasenia"])) {
    echo '<div class = "alert alert-danger">LOS CAMPOS ESTAN VACÍOS</div';
}else{
   $usuario = $_POST["Correo"];
   $clave = $_POST["Contrasenia"];
    $SQL=$conexion->query ("SELECT * FROM usuarios WHERE Correo = '$correo' and Contrasenia = '$contraseña'");
if ($datos = $SQL->fetch_object()){
    header("location: inicio.php");
}else {
    '<div class = "alert alert-danger">ACCESO DENEGADO</div';
}


}
}


?>