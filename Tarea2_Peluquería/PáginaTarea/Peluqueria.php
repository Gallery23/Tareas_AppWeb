<?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo '
        <script>
        alert("Debes iniciar sesión para acceder a esta página");
        window.location = "index.php";
        </script>
        ';
           // header("Location: index.php");
            session_destroy();
            die();
    }
    session_destroy();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peluqueria Rizos Dorados</title>
</head>
<body>
    <h1>Bienvenido a la peluquería</h1>
    <a href="php/cerrar_session.php">Cerrar Sesion</a>
</body>
</html>