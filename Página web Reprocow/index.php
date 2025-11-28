<?php include("header.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<head>
  <link rel="icon" type="png" href="assets/img/ico.png">
</head>


<section class="hero-carousel-container">

  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/hero.jpg" class="d-block w-100" alt="Ganadería 1">
      </div>
      <div class="carousel-item">
        <img src="assets/img/hero2.jpg" class="d-block w-100" alt="Ganadería 2">
      </div>
      <div class="carousel-item">
        <img src="assets/img/hero3.jpg" class="d-block w-100" alt="Ganadería 3">
      </div>
    </div>
  </div>


  <div class="hero-content">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h1>Dr. Jorge Luis Serna Guevara</h1>
          <p class="lead">Médico Veterinario – Especialista en reproducción animal. Soluciones científicas y acompañamiento técnico para optimizar la productividad de su hato, siempre con bienestar animal.</p>
          <div class="mt-4">
            <a href="agendar.php" class="btn btn-hero-primary me-2">Agendar Consulta</a>
          </div>
        </div>
        <div class="col-lg-5 d-none d-lg-block text-end">
          <img src="assets/img/doctor.jpg" alt="Doctor" class="img-fluid rounded shadow" style="max-width:420px;">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="py-6">
  <div class="container center-max">
    <div class="text-center mx-auto" style="max-width:900px;">
      <h2 class="section-title">Nuestra misión</h2>
      <p class="text-muted-custom">Brindar servicios de biotecnología reproductiva, ecografías y asesoría técnica con el objetivo de mejorar la productividad ganadera, priorizando el bienestar y la salud de los animales.</p>
    </div>
  </div>
</section>

<section class="py-6 bg-white">
  <div class="container center-max">
    <h2 class="section-title">Servicios</h2>

    <div class="services-grid">
      <article class="service-card" data-bs-toggle="modal" data-bs-target="#biotecnologiaModal" style="cursor: pointer;">
        <img src="assets/img/servicio.jpg" alt="Biotecnología">
        <div class="service-body">
          <h5 class="fw-bold">Biotecnología de la reproducción</h5>
          <p class="text-muted-custom small">Inseminación artificial, transferencia de embriones y protocolos de sincronización para mejorar la tasa de preñez.</p>
          <div class="text-primary small fw-semibold mt-2">Haz clic para más información →</div>
        </div>
      </article>

      <article class="service-card" data-bs-toggle="modal" data-bs-target="#ecografiasModal" style="cursor: pointer;">
        <img src="assets/img/servicio2.jpg" alt="Ecografías">
        <div class="service-body">
          <h5 class="fw-bold">Ecografías</h5>
          <p class="text-muted-custom small">Diagnóstico por imágenes en consultorio y en campo con equipos portátiles de alta resolución.</p>
          <div class="text-primary small fw-semibold mt-2">Haz clic para más información →</div>
        </div>
      </article>

      <article class="service-card" data-bs-toggle="modal" data-bs-target="#asesoriasModal" style="cursor: pointer;">
        <img src="assets/img/servicio3.jpg" alt="Asesorías">
        <div class="service-body">
          <h5 class="fw-bold">Asesorías y capacitación</h5>
          <p class="text-muted-custom small">Planes de mejoramiento genético, manejo reproductivo y capacitación práctica para su equipo.</p>
          <div class="text-primary small fw-semibold mt-2">Haz clic para más información →</div>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="py-6 bg-light">
  <div class="container center-max">
    <h2 class="section-title">Testimonios</h2>
    <div class="testimonials-grid">
      <div class="testimonial">
        <p>"Gracias al acompañamiento del Dr. Jorge Luis, aumentamos la tasa de preñez en nuestro hato."</p>
        <div class="stars mb-2">
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
        </div>
        <h6 class="fw-bold">Carlos Ramírez</h6>
      </div>
      <div class="testimonial">
        <p>"Servicio de ecografías en campo muy profesional y rápido."</p>
        <div class="stars mb-2">
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star-half-alt text-warning"></i>
        </div>
        <h6 class="fw-bold">Finca El Progreso</h6>
      </div>
      <div class="testimonial">
        <p>"Asesoría genética con resultados visibles en producción."</p>
        <div class="stars mb-2">
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
        </div>
        <h6 class="fw-bold">María López</h6>
      </div>
    </div>
  </div>
</section>

<section class="py-6">
  <div class="container center-max text-center">
    <h2 class="section-title">Casos de éxito</h2>
    <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
      <div class="case-card">
        <i class="bi bi-check-circle fs-3 text-success"></i>
        <h3 class="mb-0 mt-2">+100</h3>
        <p class="small text-muted-custom">Diagnósticos reproductivos</p>
      </div>
      <div class="case-card">
        <i class="bi bi-graph-up-arrow fs-3 text-success"></i>
        <h3 class="mb-0 mt-2">95%</h3>
        <p class="small text-muted-custom">Efectividad en protocolos</p>
      </div>
      <div class="case-card">
        <i class="bi bi-award fs-3 text-success"></i>
        <h3 class="mb-0 mt-2">+10 años</h3>
        <p class="small text-muted-custom">Experiencia</p>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="biotecnologiaModal" tabindex="-1" aria-labelledby="biotecnologiaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title fw-bold text-success" id="biotecnologiaModalLabel">Biotecnología de la Reproducción</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/img/servicio-detalle1.jpg" alt="Biotecnología Detalle" class="img-fluid rounded mb-4">
          </div>
          <div class="col-md-6">
            <h5 class="fw-bold mb-3">Servicios Especializados</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Inseminación Artificial a Tiempo Fijo</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Transferencia de Embriones</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Protocolos de Sincronización</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Fertilización In Vitro</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Criopreservación de Semen</li>
            </ul>
            
            <h5 class="fw-bold mt-4 mb-3">Beneficios</h5>
            <div class="bg-light p-3 rounded">
              <p class="mb-2">Mejora genética acelerada</p>
              <p class="mb-2">Aumento en tasa de preñez</p>
              <p class="mb-2">Optimización de recursos</p>
              <p class="mb-0">Mayor rentabilidad del hato</p>
            </div>
          </div>
        </div>
        
        <div class="row mt-4">
          <div class="col-12">
            <h5 class="fw-bold mb-3">Proceso de Trabajo</h5>
            <div class="d-flex flex-wrap gap-3">
              <div class="text-center">
                <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">1</div>
                <p class="small mt-2">Evaluación inicial</p>
              </div>
              <div class="text-center">
                <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">2</div>
                <p class="small mt-2">Diseño de protocolo</p>
              </div>
              <div class="text-center">
                <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">3</div>
                <p class="small mt-2">Implementación</p>
              </div>
              <div class="text-center">
                <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">4</div>
                <p class="small mt-2">Seguimiento</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a href="agendar.php" class="btn btn-success">Agendar Servicio</a>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="ecografiasModal" tabindex="-1" aria-labelledby="ecografiasModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fw-bold text-success" id="ecografiasModalLabel">Servicio de Ecografías</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/img/servicio-detalle2.jpg" alt="Ecografías Detalle" class="img-fluid rounded mb-4">
            <div class="text-center">
              <img src="assets/img/servicio-extra2.jpg" alt="Equipo Ecografía" class="img-fluid rounded" style="max-height: 200px;">
            </div>
          </div>
          <div class="col-md-6">
            <h5 class="fw-bold mb-3">Tipos de Ecografía</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Ecografía Reproductiva</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Diagnóstico de Gestación</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Evaluación Ovárica</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Monitoreo Folicular</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Diagnóstico de Patologías</li>
            </ul>
            
            <h5 class="fw-bold mt-4 mb-3">Equipamiento</h5>
            <div class="bg-light p-3 rounded">
              <p class="mb-2">Ecógrafos portátiles de alta resolución</p>
              <p class="mb-2">Tecnología Doppler color</p>
              <p class="mb-2">Transductores sectoriales y lineales</p>
              <p class="mb-0">Sistema de almacenamiento digital</p>
            </div>
          </div>
        </div>
        
        <div class="row mt-4">
          <div class="col-12">
            <h5 class="fw-bold mb-3">Servicio a Campo</h5>
            <div class="alert alert-info">
              <i class="bi bi-info-circle-fill me-2"></i>
              Ofrecemos servicio de ecografía móvil para diagnóstico in situ en su finca o establecimiento.
            </div>
            <div class="row text-center">
              <div class="col-md-4">
                <i class="bi bi-geo-alt fs-2 text-success"></i>
                <p class="small mt-2">Cobertura regional</p>
              </div>
              <div class="col-md-4">
                <i class="bi bi-clock fs-2 text-success"></i>
                <p class="small mt-2">Resultados inmediatos</p>
              </div>
              <div class="col-md-4">
                <i class="bi bi-phone fs-2 text-success"></i>
                <p class="small mt-2">Informe digital</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a href="agendar.php" class="btn btn-success">Solicitar Ecografía</a>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="asesoriasModal" tabindex="-1" aria-labelledby="asesoriasModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fw-bold text-success" id="asesoriasModalLabel">Asesorías y Capacitación</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/img/servicio-detalle3.jpg" alt="Asesorías Detalle" class="img-fluid rounded mb-4">
          </div>
          <div class="col-md-6">
            <h5 class="fw-bold mb-3">Servicios de Asesoría</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Planes de Mejoramiento Genético</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Manejo Reproductivo del Hato</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Optimización de Instalaciones</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Programas de Salud Animal</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Análisis de Rentabilidad</li>
            </ul>
            
            <h5 class="fw-bold mt-4 mb-3">Programas de Capacitación</h5>
            <div class="bg-light p-3 rounded">
              <p class="mb-2">Técnicas de inseminación artificial</p>
              <p class="mb-2">Manejo de registros reproductivos</p>
              <p class="mb-2">Detección de celo y manejo reproductivo</p>
              <p class="mb-0">Primeros auxilios en ganadería</p>
            </div>
          </div>
        </div>
        
        <div class="row mt-4">
          <div class="col-12">
            <h5 class="fw-bold mb-3">Modalidades</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="card h-100">
                  <div class="card-body text-center">
                    <i class="bi bi-person-video fs-1 text-success"></i>
                    <h6 class="fw-bold mt-2">Asesoría Virtual</h6>
                    <p class="small text-muted">Consultas online con seguimiento continuo</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card h-100">
                  <div class="card-body text-center">
                    <i class="bi bi-geo-alt fs-1 text-success"></i>
                    <h6 class="fw-bold mt-2">Asesoría en Campo</h6>
                    <p class="small text-muted">Visitas técnicas a su establecimiento</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a href="agendar.php" class="btn btn-success">Solicitar Asesoría</a>
      </div>
    </div>
  </div>
</div>


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="whatsapp-float">
  <a href="https://wa.me/573177330876" target="_blank" class="whatsapp-btn">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?php include("footer.php"); ?>