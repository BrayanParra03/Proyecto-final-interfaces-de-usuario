<?php
include("../config/db.php");

$titulo = "Beneficios de la IATF en bovinos";
$contenido = "La Inseminación Artificial a Tiempo Fijo (IATF) permite mejorar la eficiencia reproductiva del hato...";
$imagen = "iatf.jpg"; // guarda la imagen en assets/img/

$sql = "INSERT INTO blog (titulo, contenido, imagen) VALUES ('$titulo', '$contenido', '$imagen')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Artículo agregado correctamente";
} else {
    echo "Error: " . $conn->error;
}
?>
