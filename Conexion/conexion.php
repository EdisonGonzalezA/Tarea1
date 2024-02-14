<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "freelancer";

    $conexion = new mysqli($host, $user, $pass, $db);

    if($conexion->connect_errno){
        die("Error de conexion" . $conexion->connect_errno);
    }else{
        echo "Conexion exitosa";
    }
    
    insertar($conexion);

    function insertar($conexion){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        $datos = array();
        echo json_encode($datos);

        $consulta = "INSERT INTO contactos (nombre, telefono, correo, mensaje) VALUES ('$nombre', '$telefono', '$correo', '$mensaje')";
        mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
    }

    