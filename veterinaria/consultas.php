<?php include("header.php"); ?>
<?php include("config/db.php"); ?>

<div class="container py-5">
  <h2 class="text-center text-success fw-bold mb-4">Consultas Virtuales</h2>
  <p class="text-center mb-4">Si no puedes desplazarte, recibe atención especializada desde tu finca u hogar mediante consultas en línea.</p>

  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="backend/agendar_consulta.php" method="POST" class="card shadow p-4">
        <div class="mb-3">
          <label class="form-label">Nombre</label>
          <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Correo</label>
          <input type="email" name="correo" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Fecha</label>
          <input type="date" name="fecha" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Hora</label>
          <input type="time" name="hora" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Mensaje</label>
          <textarea name="mensaje" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success w-100">Solicitar Consulta Online</button>
      </form>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>
