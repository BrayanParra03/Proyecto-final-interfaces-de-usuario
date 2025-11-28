<?php include("header.php"); ?>

<section class="py-6">
  <div class="container center-max">
    <h2 class="section-title text-center">Agendar Consulta</h2>
    <p class="text-center text-muted-custom mb-5">Complete el formulario para agendar su consulta. Recibirá una confirmación en su correo electrónico.</p>

    <?php if (isset($_GET['error'])): ?>
    <div class="row justify-content-center mb-4">
      <div class="col-lg-8">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?php
          $errores = [
              'campos_requeridos' => 'Por favor, complete todos los campos requeridos.',
              'email_invalido' => 'El correo electrónico no es válido.',
              'fecha_pasada' => 'No puede agendar citas en fechas pasadas.',
              'bd_error' => 'Error al guardar la cita. Por favor, intente nuevamente.',
              'general' => 'Ha ocurrido un error. Por favor, intente nuevamente.',
              'metodo_no_permitido' => 'Método no permitido.'
          ];
          echo $errores[$_GET['error']] ?? 'Error desconocido.';
          
          if (isset($_GET['mensaje'])) {
              echo '<br><small>Detalle: ' . htmlspecialchars($_GET['mensaje']) . '</small>';
          }
          ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card contact-card">
          <div class="card-body p-4">
            <form id="agendarForm" action="backend/procesar_agenda.php" method="POST">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold">Nombre completo *</label>
                  <input type="text" name="nombre" class="form-control" required 
                         value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>"
                         placeholder="Ingrese su nombre completo">
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold">Correo electrónico *</label>
                  <input type="email" name="email" class="form-control" required 
                         value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
                         placeholder="ejemplo@correo.com">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold">Teléfono *</label>
                  <input type="tel" name="telefono" class="form-control" required 
                         value="<?php echo isset($_POST['telefono']) ? htmlspecialchars($_POST['telefono']) : ''; ?>"
                         placeholder="+57 300 123 4567">
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold">Tipo de servicio *</label>
                  <select name="servicio" class="form-select" required>
                    <option value="">Seleccione un servicio</option>
                    <option value="biotecnologia" <?php echo (isset($_POST['servicio']) && $_POST['servicio'] == 'biotecnologia') ? 'selected' : ''; ?>>Biotecnología de la reproducción</option>
                    <option value="ecografias" <?php echo (isset($_POST['servicio']) && $_POST['servicio'] == 'ecografias') ? 'selected' : ''; ?>>Ecografías</option>
                    <option value="asesorias" <?php echo (isset($_POST['servicio']) && $_POST['servicio'] == 'asesorias') ? 'selected' : ''; ?>>Asesorías y capacitación</option>
                    <option value="consulta_general" <?php echo (isset($_POST['servicio']) && $_POST['servicio'] == 'consulta_general') ? 'selected' : ''; ?>>Consulta general</option>
                    <option value="emergencia" <?php echo (isset($_POST['servicio']) && $_POST['servicio'] == 'emergencia') ? 'selected' : ''; ?>>Emergencia veterinaria</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold">Fecha preferida *</label>
                  <input type="date" name="fecha" class="form-control" 
                         min="<?php echo date('Y-m-d'); ?>" required
                         value="<?php echo isset($_POST['fecha']) ? htmlspecialchars($_POST['fecha']) : ''; ?>">
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold">Hora preferida *</label>
                  <select name="hora" class="form-select" required>
                    <option value="">Seleccione una hora</option>
                    <option value="08:00" <?php echo (isset($_POST['hora']) && $_POST['hora'] == '08:00') ? 'selected' : ''; ?>>8:00 AM</option>
                    <option value="09:00" <?php echo (isset($_POST['hora']) && $_POST['hora'] == '09:00') ? 'selected' : ''; ?>>9:00 AM</option>
                    <option value="10:00" <?php echo (isset($_POST['hora']) && $_POST['hora'] == '10:00') ? 'selected' : ''; ?>>10:00 AM</option>
                    <option value="11:00" <?php echo (isset($_POST['hora']) && $_POST['hora'] == '11:00') ? 'selected' : ''; ?>>11:00 AM</option>
                    <option value="14:00" <?php echo (isset($_POST['hora']) && $_POST['hora'] == '14:00') ? 'selected' : ''; ?>>2:00 PM</option>
                    <option value="15:00" <?php echo (isset($_POST['hora']) && $_POST['hora'] == '15:00') ? 'selected' : ''; ?>>3:00 PM</option>
                    <option value="16:00" <?php echo (isset($_POST['hora']) && $_POST['hora'] == '16:00') ? 'selected' : ''; ?>>4:00 PM</option>
                    <option value="17:00" <?php echo (isset($_POST['hora']) && $_POST['hora'] == '17:00') ? 'selected' : ''; ?>>5:00 PM</option>
                  </select>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label fw-semibold">Tipo de consulta *</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tipo_consulta" value="presencial" id="presencial" 
                         <?php echo (!isset($_POST['tipo_consulta']) || $_POST['tipo_consulta'] == 'presencial') ? 'checked' : ''; ?>>
                  <label class="form-check-label" for="presencial">Consulta presencial</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tipo_consulta" value="virtual" id="virtual"
                         <?php echo (isset($_POST['tipo_consulta']) && $_POST['tipo_consulta'] == 'virtual') ? 'checked' : ''; ?>>
                  <label class="form-check-label" for="virtual">Consulta virtual</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tipo_consulta" value="domicilio" id="domicilio"
                         <?php echo (isset($_POST['tipo_consulta']) && $_POST['tipo_consulta'] == 'domicilio') ? 'checked' : ''; ?>>
                  <label class="form-check-label" for="domicilio">Visita a domicilio/finca</label>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label fw-semibold">Ubicación o enlace para consulta virtual</label>
                <input type="text" name="ubicacion" class="form-control" 
                       value="<?php echo isset($_POST['ubicacion']) ? htmlspecialchars($_POST['ubicacion']) : ''; ?>"
                       placeholder="Dirección o enlace de Meet/Zoom" id="ubicacionInput">
              </div>

              <div class="mb-4">
                <label class="form-label fw-semibold">Mensaje adicional</label>
                <textarea name="mensaje" class="form-control" rows="4" 
                          placeholder="Describa brevemente el motivo de su consulta..."><?php echo isset($_POST['mensaje']) ? htmlspecialchars($_POST['mensaje']) : ''; ?></textarea>
              </div>

              <div class="alert alert-info">
                <i class="bi bi-info-circle me-2"></i>
                <strong>Información importante:</strong> Una vez enviado el formulario, recibirá un correo de confirmación con los detalles de su cita.
              </div>

              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success btn-lg" id="submitBtn">
                  <i class="bi bi-calendar-check me-2"></i>
                  Agendar Consulta
                </button>
                <a href="index.php" class="btn btn-outline-secondary">Cancelar</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-12">
        <div class="text-center">
          <h4 class="mb-3">¿Necesita ayuda inmediata?</h4>
          <div class="d-flex justify-content-center gap-4 flex-wrap">
            <div class="d-flex align-items-center">
              <i class="bi bi-whatsapp text-success fs-4 me-2"></i>
              <div>
                <p class="mb-0 fw-semibold">WhatsApp</p>
                <p class="mb-0 text-muted">+57 317 733 0876</p>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <i class="bi bi-telephone text-success fs-4 me-2"></i>
              <div>
                <p class="mb-0 fw-semibold">Llamada</p>
                <p class="mb-0 text-muted">+57 317 733 0876</p>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <i class="bi bi-envelope text-success fs-4 me-2"></i>
              <div>
                <p class="mb-0 fw-semibold">Email</p>
                <p class="mb-0 text-muted">jlserna28@misena.edu.co</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('agendarForm');
  const submitBtn = document.getElementById('submitBtn');
  const ubicacionInput = document.getElementById('ubicacionInput');
  const tipoConsultaRadios = document.querySelectorAll('input[name="tipo_consulta"]');
  
  tipoConsultaRadios.forEach(radio => {
    radio.addEventListener('change', function() {
      if (this.value === 'virtual') {
        ubicacionInput.placeholder = "Enlace de Meet, Zoom o plataforma virtual...";
      } else if (this.value === 'domicilio') {
        ubicacionInput.placeholder = "Dirección completa de la finca o domicilio...";
      } else {
        ubicacionInput.placeholder = "Dirección o enlace de Meet/Zoom";
      }
    });
  });
  
  const fechaInput = document.querySelector('input[name="fecha"]');
  fechaInput.min = new Date().toISOString().split('T')[0];
});
</script>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="whatsapp-float">
  <a href="https://wa.me/573177330876" target="_blank" class="whatsapp-btn">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?php include("footer.php"); ?>