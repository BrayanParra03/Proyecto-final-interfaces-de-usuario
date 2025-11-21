<?php
include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre   = $conn->real_escape_string($_POST['nombre']);
    $telefono = $conn->real_escape_string($_POST['telefono']);
    $correo   = $conn->real_escape_string($_POST['correo']);
    $servicio = $conn->real_escape_string($_POST['servicio']);
    $especie  = $conn->real_escape_string($_POST['especie']);
    $mensaje  = $conn->real_escape_string($_POST['mensaje']);

    $sql = "INSERT INTO contacto (nombre, telefono, correo, servicio, especie, mensaje) 
            VALUES ('$nombre','$telefono','$correo','$servicio','$especie','$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('✅ Mensaje enviado correctamente'); window.location='../contacto.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
