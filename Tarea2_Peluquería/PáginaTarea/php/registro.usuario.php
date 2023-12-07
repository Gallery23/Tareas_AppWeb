<?php

include 'conexion.php';

/*Creación de variables*/   
$nombre_completo =  $_POST['Nombre_completo'];
$correo = $_POST['Correo'];
$usuario =  $_POST['Usuario'];
$contrasena =  $_POST['Contraseña'];
$contrasena = hash('sha512', $contrasena); /*Encriptación*/


/*Creación de Query*/
$query = "INSERT INTO usuarios (Nombre_completo, Correo, Usuario, Contraseña)
VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

/*Ejecución de Query*/

/*Verificar que el correo no se repita en la base de datos*/
$verificarcorreo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo = '$correo' ");
if (mysqli_num_rows($verificarcorreo) > 0) {
echo '
    <script>
    alert ("El correo ya está registrado.");
    window.location = "../index.php";
    </script>
';
    exit();
    mysqli_close($conexion);
}

/*Verificar que el usuario no se repita en la base de datos*/
$verificarusuario= mysqli_query($conexion, "SELECT * FROM usuarios WHERE Usuario= '$usuario' ");
if (mysqli_num_rows($verificarusuario) > 0) {
echo '
    <script>
    alert ("El usuario ya está registrado.");
    window.location = "../index.php";
    </script>
';
    exit();
    mysqli_close($conexion);
}


$ejecutar = mysqli_query($conexion, $query);

/*Verificar que se haya ejecutado el query*/
if ($ejecutar) {
    echo '
    <script>
    alert ("Usuario registrado correctamente");
    window.location = "../index.php";
    </script>
    ';
}else {
    
    echo ' 
    <script>
    alert ("Error al registrar usuario");
    window.location = "../index.php";
    </script>
    ';
}
mysqli_close($conexion);
?>