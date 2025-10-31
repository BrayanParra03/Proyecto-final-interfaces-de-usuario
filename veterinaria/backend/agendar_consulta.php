<?php
include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre  = $conn->real_escape_string($_POST['nombre']);
    $correo  = $conn->real_escape_string($_POST['correo']);
    $fecha   = $conn->real_escape_string($_POST['fecha']);
    $hora    = $conn->real_escape_string($_POST['hora']);
    $mensaje = $conn->real_escape_string($_POST['mensaje']);

    $sql = "INSERT INTO consultas (nombre, correo, fecha, hora, mensaje) 
            VALUES ('$nombre', '$correo', '$fecha', '$hora', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Consulta registrada correctamente'); window.location='../consultas.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
