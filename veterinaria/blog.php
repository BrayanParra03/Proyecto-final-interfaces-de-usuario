<?php include("header.php"); ?>
<?php include("config/db.php"); ?>

<div class="container py-5">
  <h2 class="text-center text-success fw-bold mb-4">Blog Veterinario</h2>

  <div class="row g-4">
    <?php
    $sql = "SELECT * FROM blog ORDER BY fecha DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '
            <div class="col-md-4">
              <div class="card h-100 shadow">
                '.(!empty($row['imagen']) ? '<img src="assets/img/'.$row['imagen'].'" class="card-img-top" alt="Artículo">' : '').'
                <div class="card-body">
                  <h5 class="fw-bold text-success">'.$row['titulo'].'</h5>
                  <p>'.substr($row['contenido'],0,100).'...</p>
                  <a href="ver_articulo.php?id='.$row['id'].'" class="btn btn-success btn-sm">Leer más</a>
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

<?php include("footer.php"); ?>
