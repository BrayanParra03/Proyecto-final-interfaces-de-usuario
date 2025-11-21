<?php
$host = "localhost";
$user = "Parra";
$pass = 'Colombia2024*';

/* 
   ⚠️ IMPORTANTE ⚠️
   - Si tu Laragon NO tiene contraseña para root → deja $pass vacío ("").
   - Si tu Laragon tiene contraseña → ponla aquí, normalmente "root".
*/

$db   = "veterinaria";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
?>
