<?php include("header.php"); ?>

<!-- CARRUSEL -->
<div id="homeCarousel" class="carousel slide" data-bs-ride="carousel" aria-label="Carrusel de imágenes">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/hero-slide1.jpg" class="d-block w-100" alt="Atención en campo">
      <div class="carousel-caption d-none d-md-block text-start" style="left:8%; right:auto">
        <h3 class="fw-bold">Atención en campo y consultorio</h3>
        <p class="small">Ecografías y diagnósticos con equipos portátiles.</p>
        <a href="contacto.php" class="btn btn-hero-primary">Contactar</a>
      </div>
    </div>

    <div class="carousel-item">
      <img src="assets/img/hero-slide2.jpg" class="d-block w-100" alt="Biotecnología">
      <div class="carousel-caption d-none d-md-block text-start" style="left:8%; right:auto">
        <h3 class="fw-bold">Biotecnología de la Reproducción</h3>
        <p class="small">Protocolos IATF, embriones y asesoría técnica.</p>
        <a href="servicios.php" class="btn btn-hero-primary">Ver Servicios</a>
      </div>
    </div>

    <div class="carousel-item">
      <img src="assets/img/hero-slide3.jpg" class="d-block w-100" alt="Capacitación">
      <div class="carousel-caption d-none d-md-block text-start" style="left:8%; right:auto">
        <h3 class="fw-bold">Capacitación y asesorías</h3>
        <p class="small">Planes estratégicos para mejorar productividad.</p>
        <a href="sobre.php" class="btn btn-hero-primary">Conócenos</a>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

<!-- HERO (secondary) -->
<section class="hero" style="background-image:url('assets/img/hero.jpg');">
  <div class="hero-inner">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <h1>Dr. Jorge Luis Serna Guevara</h1>
        <p class="lead">Médico Veterinario – Especialista en reproducción animal. Soluciones científicas y acompañamiento técnico para optimizar la productividad de su hato.</p>
        <div class="mt-4">
          <a href="agendar.php" class="btn btn-hero-primary me-2">Agendar Consulta</a>
          <a href="contacto.php" class="btn btn-hero-secondary">Contáctanos</a>
        </div>
      </div>
      <div class="col-lg-5 d-none d-lg-block text-end">
        <img src="assets/img/doctor.jpg" alt="Doctor" class="img-fluid rounded shadow" style="max-width:420px;">
      </div>
    </div>
  </div>
</section>

<!-- Misión -->
<section class="py-6">
  <div class="container center-max text-center">
    <h2 class="section-title">Nuestra misión</h2>
    <p class="text-muted-custom mx-auto" style="max-width:800px;">Brindar servicios de biotecnología reproductiva, ecografías y asesoría técnica con el objetivo de mejorar la productividad ganadera, priorizando el bienestar y la salud de los animales.</p>
  </div>
</section>

<!-- Servicios -->
<section class="py-6 bg-white">
  <div class="container center-max">
    <h2 class="section-title">Servicios</h2>
    <div class="services-grid">
      <article class="service-card">
        <img src="assets/img/servicio1.jpg" alt="Biotecnología">
        <div class="service-body">
          <h5 class="fw-bold">Biotecnología de la reproducción</h5>
          <p class="text-muted-custom small">Inseminación artificial, transferencia de embriones y protocolos para mejorar la tasa de preñez.</p>
        </div>
      </article>

      <article class="service-card">
        <img src="assets/img/servicio2.jpg" alt="Ecografías">
        <div class="service-body">
          <h5 class="fw-bold">Ecografías</h5>
          <p class="text-muted-custom small">Diagnóstico avanzado en consultorio y campo con equipos portátiles.</p>
        </div>
      </article>

      <article class="service-card">
        <img src="assets/img/servicio3.jpg" alt="Asesorías">
        <div class="service-body">
          <h5 class="fw-bold">Asesorías y capacitación</h5>
          <p class="text-muted-custom small">Planos de mejoramiento genético y capacitación técnica para su equipo.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- Testimonios -->
<section class="py-6 bg-light">
  <div class="container center-max">
    <h2 class="section-title">Testimonios</h2>
    <div class="testimonials-grid">
      <div class="testimonial">
        <p>“Aumentamos la tasa de preñez en nuestro hato gracias a su acompañamiento.”</p>
        <h6 class="fw-bold">Carlos Ramírez</h6>
      </div>
      <div class="testimonial">
        <p>“Servicio de ecografías en campo muy profesional y eficiente.”</p>
        <h6 class="fw-bold">Finca El Progreso</h6>
      </div>
      <div class="testimonial">
        <p>“Excelente asesoría genética. Resultados visibles en producción.”</p>
        <h6 class="fw-bold">María López</h6>
      </div>
    </div>
  </div>
</section>

<!-- Casos -->
<section class="py-6">
  <div class="container center-max text-center">
    <h2 class="section-title">Casos de Éxito</h2>
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

<!-- Contacto rápido -->
<section class="py-6 bg-white">
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
            <label class="form-label">Mensaje</label>
            <textarea name="mensaje" class="form-control" rows="4"></textarea>
          </div>
          <button class="btn btn-success w-100">Enviar</button>
        </form>
      </div>

      <div class="col-md-6">
        <div class="card p-4 contact-card mb-4">
          <h5 class="fw-bold text-success">Contacto Directo</h5>
          <p class="text-muted-custom">Comunícate por WhatsApp de forma rápida:</p>
          <a href="https://wa.me/57XXXXXXXXXX" class="btn btn-success w-100"><i class="bi bi-whatsapp"></i> Enviar WhatsApp</a>
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
