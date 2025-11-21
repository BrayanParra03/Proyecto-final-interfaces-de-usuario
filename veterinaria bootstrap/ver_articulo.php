<?php include("header.php"); ?>
<?php include("config/db.php"); ?>

<section class="py-6">
  <div class="container center-max">
    <?php
    if (isset($_GET['id'])) {
      $id = intval($_GET['id']);
      $sql = "SELECT titulo, contenido, imagen, fecha FROM blog WHERE id = $id LIMIT 1";
      $result = $conn->query($sql);

      if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $titulo = htmlspecialchars($row['titulo']);
        $contenido = nl2br(htmlspecialchars($row['contenido']));
        echo '<div class="card p-4">
                '.(!empty($row['imagen'])?'<img src="assets/img/'.htmlspecialchars($row['imagen']).'" class="img-fluid rounded mb-4" alt="Artículo">':'').'
                <h2 class="text-success fw-bold">'.$titulo.'</h2>
                <p class="text-muted mb-3">'.date("d/m/Y", strtotime($row['fecha'])).'</p>
                <div class="text-muted-custom">'.$contenido.'</div>
              </div>';
      } else {
        echo "<p class='text-center'>Artículo no encontrado.</p>";
      }
    } else {
      echo "<p class='text-center'>No se seleccionó ningún artículo.</p>";
    }
    ?>
  </div>
</section>

<?php include("footer.php"); ?>
