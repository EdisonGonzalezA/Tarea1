<?php
error_reporting(0);
//require_once('../Models/contactos.models.php');

$contactos = new Clase_contactos;

switch ($_GET['op']) {
    case 'insertar':
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
        $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
        $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';

        // Llama a la función insertar del objeto $contactos
        $contactos->insertar($conexion, $nombre, $telefono, $correo, $mensaje);
        break;
}
?>