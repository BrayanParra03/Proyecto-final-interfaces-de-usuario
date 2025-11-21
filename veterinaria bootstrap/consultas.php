<?php include("header.php"); ?>
<?php include("config/db.php"); ?>

<section class="py-6">
  <div class="container center-max">
    <h2 class="section-title text-center">Consultas Virtuales</h2>
    <p class="text-center text-muted-custom mb-4">Si no puedes desplazarte, recibe atención especializada desde tu finca u hogar mediante consultas en línea.</p>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="backend/agendar_consulta.php" method="POST" class="card p-4 contact-card">
          <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="email" name="correo" class="form-control" required>
          </div>
          <div class="row g-2 mb-3">
            <div class="col">
              <label class="form-label">Fecha</label>
              <input type="date" name="fecha" class="form-control" required>
            </div>
            <div class="col">
              <label class="form-label">Hora</label>
              <input type="time" name="hora" class="form-control" required>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Mensaje</label>
            <textarea name="mensaje" class="form-control" rows="4"></textarea>
          </div>
          <button class="btn btn-success w-100">Solicitar Consulta Online</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>
