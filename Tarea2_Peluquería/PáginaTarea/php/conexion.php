<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$conexion = mysqli_connect("localhost", "root", "root", "tarea2", "3308");

if ($conexion) {
    echo "Conectado a la Base de Datos";
} else {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
?>
