<?php include("header.php"); ?>
<?php include("config/db.php"); ?>

<section class="py-6">
  <div class="container center-max">
    <h2 class="section-title text-center">Contáctanos</h2>
    <div class="row g-4">
      <div class="col-md-6">
        <form action="backend/guardar_contacto.php" method="POST" class="card p-4 contact-card">
          <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text" name="telefono" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="email" name="correo" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Tipo de servicio</label>
            <input type="text" name="servicio" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Especie</label>
            <input type="text" name="especie" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Mensaje</label>
            <textarea name="mensaje" class="form-control"></textarea>
          </div>
          <button class="btn btn-success w-100">Enviar</button>
        </form>
      </div>

      <div class="col-md-6">
        <div class="card p-4 mb-4 contact-card">
          <h5 class="fw-bold text-success">Contacto Directo</h5>
          <p class="text-muted-custom">Comunícate por WhatsApp de forma rápida:</p>
          <a href="https://wa.me/57XXXXXXXXXX" target="_blank" class="btn btn-success w-100"><i class="bi bi-whatsapp"></i> Enviar WhatsApp</a>
        </div>

        <div class="card p-4 contact-card">
          <h5 class="fw-bold text-success">Ubicación</h5>
          <div style="height:300px;">
            <iframe src="https://www.google.com/maps/embed?pb=ENLACE_DE_MAPA" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>
