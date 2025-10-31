<?php include("header.php"); ?>
<?php include("config/db.php"); ?>

<div class="container py-5">
<?php
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM blog WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '
        <div class="card shadow p-4">
            '.(!empty($row['imagen']) ? '<img src="assets/img/'.$row['imagen'].'" class="mb-4 img-fluid rounded" alt="Artículo">' : '').'
            <h2 class="fw-bold text-success">'.$row['titulo'].'</h2>
            <p class="text-muted">'.date("d/m/Y", strtotime($row['fecha'])).'</p>
            <p>'.$row['contenido'].'</p>
        </div>';
    } else {
        echo "<p class='text-center'>Artículo no encontrado.</p>";
    }
} else {
    echo "<p class='text-center'>No se seleccionó ningún artículo.</p>";
}
?>
</div>

<?php include("footer.php"); ?>
