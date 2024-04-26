<?php
$conexion = new mysqli("localhost", "root", "", "test");
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}
?>

