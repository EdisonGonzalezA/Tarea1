<?php


//importar archivo de conexión
//require('../Conexion/conexion.php');

//insertar($conexion);

class Clase_contactos {
    public function insertar($conexion, $nombre, $telefono, $correo, $mensaje) {
        // Usar consultas preparadas para evitar la inyección de SQL
        $consulta = $conexion->prepare("INSERT INTO contactos (nombre, telefono, correo, mensaje) VALUES (?, ?, ?, ?)");
        $consulta->bind_param("ssss", $nombre, $telefono, $correo, $mensaje);
        
        // Ejecutar la consulta
        $consulta->execute();

        // Cerrar la consulta
        $consulta->close();
    }
}
?>