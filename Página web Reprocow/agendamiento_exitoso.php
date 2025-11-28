<?php 
include("header.php"); 

$cita_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

include_once 'config/db.php';
$detalles_cita = null;

if ($cita_id > 0) {
    try {
        $database = new Database();
        $db = $database->getConnection();
        
        $sql = "SELECT * FROM citas WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $cita_id);
        $stmt->execute();
        
        $detalles_cita = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error al obtener detalles: " . $e->getMessage());
    }
}
?>

<section class="py-6">
  <div class="container center-max">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="card contact-card">
          <div class="card-body p-5">
            <i class="bi bi-check-circle-fill text-success display-1 mb-4"></i>
            <h2 class="text-success mb-3">¡Cita Agendada Exitosamente!</h2>
            <p class="lead mb-4">Su consulta ha sido programada. Recibirá un correo de confirmación con todos los detalles y metodos de pago. Feliz día</p>
            
            <?php if ($detalles_cita): ?>
            <div class="alert alert-success text-start">
              <h5 class="mb-3">Detalles de su cita:</h5>
              <div class="row">
                <div class="col-md-6">
                  <p><strong>Nombre:</strong><br><?php echo htmlspecialchars($detalles_cita['nombre']); ?></p>
                  <p><strong>Servicio:</strong><br><?php echo htmlspecialchars(ucfirst($detalles_cita['servicio'])); ?></p>
                  <p><strong>Fecha:</strong><br><?php echo date('d/m/Y', strtotime($detalles_cita['fecha'])); ?></p>
                </div>
                <div class="col-md-6">
                  <p><strong>Hora:</strong><br><?php echo date('h:i A', strtotime($detalles_cita['hora'])); ?></p>
                  <p><strong>Tipo:</strong><br><?php echo htmlspecialchars(ucfirst($detalles_cita['tipo_consulta'])); ?></p>
                  <p><strong>Estado:</strong><br><span class="badge bg-warning"><?php echo htmlspecialchars(ucfirst($detalles_cita['estado'])); ?></span></p>
                </div>
              </div>
              
              <?php if ($detalles_cita['ubicacion']): ?>
              <p><strong>Ubicación/Enlace:</strong><br><?php echo htmlspecialchars($detalles_cita['ubicacion']); ?></p>
              <?php endif; ?>
              
              <?php if ($detalles_cita['mensaje']): ?>
              <p><strong>Mensaje:</strong><br><?php echo htmlspecialchars($detalles_cita['mensaje']); ?></p>
              <?php endif; ?>
            </div>
            
            <div class="alert alert-info">
              <h6 class="mb-2">Agregar a Google Calendar</h6>
              <p class="mb-3">Haga clic en el siguiente enlace para agregar esta cita a su calendario:</p>
              <?php
              $googleCalendarLink = generarEnlaceGoogleCalendar(
                  $detalles_cita['nombre'],
                  $detalles_cita['fecha'],
                  date('H:i', strtotime($detalles_cita['hora'])),
                  $detalles_cita['servicio'],
                  $detalles_cita['mensaje']
              );
              ?>
              <a href="<?php echo $googleCalendarLink; ?>" target="_blank" class="btn btn-primary">
                <i class="bi bi-calendar-plus me-2"></i>
                Agregar a Google Calendar
              </a>
            </div>
            <?php endif; ?>
            
            <div class="alert alert-warning">
              <i class="bi bi-info-circle me-2"></i>
              <strong>Recordatorio:</strong> Llegar 15 minutos antes de la cita programada. Para cambios o cancelaciones, contáctenos.
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
              <a href="index.php" class="btn btn-success me-md-2">
                <i class="bi bi-house me-2"></i>Volver al Inicio
              </a>
              <a href="agendar.php" class="btn btn-outline-success">
                <i class="bi bi-plus-circle me-2"></i>Agendar Otra Cita
              </a>
            </div>
            
            <div class="mt-4 pt-4 border-top">
              <h5 class="mb-3">¿Necesita ayuda?</h5>
              <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://wa.me/573177330876" class="btn btn-outline-success btn-sm">
                  <i class="bi bi-whatsapp me-1"></i>WhatsApp
                </a>
                <a href="tel:+573177330876" class="btn btn-outline-success btn-sm">
                  <i class="bi bi-telephone me-1"></i>Llamar
                </a>
                <a href="consultas.php" class="btn btn-outline-success btn-sm">
                  <i class="bi bi-camera-video me-1"></i>Consultas Virtuales
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
function generarEnlaceGoogleCalendar($nombre, $fecha, $hora, $servicio, $mensaje) {
    $start_datetime = $fecha . "T" . $hora;
    $end_hora = intval(substr($hora, 0, 2)) + 1;
    $end_hora = str_pad($end_hora, 2, '0', STR_PAD_LEFT) . substr($hora, 2);
    $end_datetime = $fecha . "T" . $end_hora;
    
    $start_time = str_replace(['-', ':'], '', $start_datetime);
    $end_time = str_replace(['-', ':'], '', $end_datetime);
    
    $titulo = "Consulta Veterinaria - " . ucfirst($servicio);
    $detalles = "Paciente: " . $nombre . "\\n";
    $detalles .= "Servicio: " . $servicio . "\\n";
    $detalles .= "Mensaje: " . $mensaje . "\\n\\n";
    $detalles .= "Agendado desde Reprocow";
    
    $params = [
        'action' => 'TEMPLATE',
        'text' => $titulo,
        'dates' => $start_time . '/' . $end_time,
        'details' => $detalles,
        'location' => 'Consulta Veterinaria Reprocow',
        'sf' => 'true',
        'output' => 'xml'
    ];
    
    return 'https://calendar.google.com/calendar/render?' . http_build_query($params);
}
?>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="whatsapp-float">
  <a href="https://wa.me/573177330876" target="_blank" class="whatsapp-btn">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?php include("footer.php"); ?>