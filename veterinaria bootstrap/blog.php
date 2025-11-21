<?php include("header.php"); ?>
<?php include("config/db.php"); ?>

<section class="py-6">
  <div class="container center-max">
    <h2 class="section-title text-center">Blog Veterinario</h2>

    <div class="row g-4">
      <?php
      $sql = "SELECT id, titulo, contenido, imagen, fecha FROM blog ORDER BY fecha DESC";
      $result = $conn->query($sql);

      if ($result && $result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $titulo = htmlspecialchars($row['titulo']);
            $excerpt = htmlspecialchars(substr($row['contenido'],0,140)).'...';
            echo '<div class="col-md-4">
                    <div class="card h-100">
                      '.(!empty($row['imagen'])?'<img src="assets/img/'.htmlspecialchars($row['imagen']).'" class="card-img-top" alt="Artículo">':'').'
                      <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-success fw-bold">'.$titulo.'</h5>
                        <p class="card-text text-muted">'.$excerpt.'</p>
                        <a href="ver_articulo.php?id='.$row['id'].'" class="btn btn-success mt-auto">Leer más</a>
                      </div>
                    </div>
                  </div>';
          }
      } else {
          echo "<p class='text-center'>No hay artículos publicados aún.</p>";
      }
      ?>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>
