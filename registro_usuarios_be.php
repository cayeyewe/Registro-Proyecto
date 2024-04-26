<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if (
        !empty($_POST['nombre_completo']) &&
        !empty($_POST['apellidos']) &&
        !empty($_POST['correo']) &&
        !empty($_POST['numero']) &&
        !empty($_POST['contrasena']) &&
        !empty($_POST['hogar_empresa'])
    ) {
        $nombre_completo = $_POST['nombre_completo'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $numero = $_POST['numero'];
        $contrasena = $_POST['contrasena'];
        $hogar_empresa = $_POST['hogar_empresa'];

        $query = "INSERT INTO usuarios (nombre_completo, apellidos, correo, numero, contrasena, hogar_empresa)
                  VALUES ('$nombre_completo', '$apellidos', '$correo', '$numero', '$contrasena', '$hogar_empresa')";

        $ejecutarInsertar = mysqli_query($conexion, $query);

        if ($ejecutarInsertar) {
            echo "<div style='background-color: orange; color: white; text-align: center; padding: 20px; margin: auto; width: 50%;'><h3>Tu registro ha sido completado</h3></div>";
        } else {
            echo "<h3 class='error'>Ha ocurrido un error al registrar tus datos</h3>";
        }
    } else {
        echo "<h3 class='error'>Por favor, completa todos los campos</h3>";
    }
}
?>
