<?php
include 'conexion.php';


$correo = $_POST['Correo'];
$contrasena = $_POST['Contraseña'];
$contrasena = hash('sha512', $contrasena);

$Validarlogin = mysqli_query($conexion, "SELECT * FROM usuarios 
WHERE Correo = '$correo' AND Contraseña = '$contrasena'"); /*Validar el usuario*/

if (mysqli_num_rows($Validarlogin) > 0) {
    header("location:../Peluqueria.php");
    exit;
}else{
echo '
<script>
    alert("Usuario no existe, por favor verifique sus datos");
    window.location = "../index.php";
    </script>

';
exit;
}



?>

