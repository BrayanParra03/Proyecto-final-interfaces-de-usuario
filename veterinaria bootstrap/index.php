<?php include("header.php"); ?>


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
            <a href="contacto.php" class="btn btn-hero-secondary">Contáctanos</a>
          </div>
        </div>
        <div class="col-lg-5 d-none d-lg-block text-end">
          <img src="assets/img/doctor.jpg" alt="Doctor" class="img-fluid rounded shadow" style="max-width:420px;">
        </div>
      </div>
    </div>
  </div>
</section>


<!-- MISIÓN -->
<section class="py-6">
  <div class="container center-max">
    <div class="text-center mx-auto" style="max-width:900px;">
      <h2 class="section-title">Nuestra misión</h2>
      <p class="text-muted-custom">Brindar servicios de biotecnología reproductiva, ecografías y asesoría técnica con el objetivo de mejorar la productividad ganadera, priorizando el bienestar y la salud de los animales.</p>
    </div>
  </div>
</section>

<!-- SERVICIOS (con imágenes grandes) -->
<section class="py-6 bg-white">
  <div class="container center-max">
    <h2 class="section-title">Servicios</h2>

    <div class="services-grid">
      <!-- Card 1 -->
      <article class="service-card">
        <img src="assets/img/servicio1.jpg" alt="Biotecnología">
        <div class="service-body">
          <h5 class="fw-bold">Biotecnología de la reproducción</h5>
          <p class="text-muted-custom small">Inseminación artificial, transferencia de embriones y protocolos de sincronización para mejorar la tasa de preñez.</p>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="service-card">
        <img src="assets/img/servicio2.jpg" alt="Ecografías">
        <div class="service-body">
          <h5 class="fw-bold">Ecografías</h5>
          <p class="text-muted-custom small">Diagnóstico por imágenes en consultorio y en campo con equipos portátiles de alta resolución.</p>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="service-card">
        <img src="assets/img/servicio3.jpg" alt="Asesorías">
        <div class="service-body">
          <h5 class="fw-bold">Asesorías y capacitación</h5>
          <p class="text-muted-custom small">Planes de mejoramiento genético, manejo reproductivo y capacitación práctica para su equipo.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- TESTIMONIOS -->
<section class="py-6 bg-light">
  <div class="container center-max">
    <h2 class="section-title">Testimonios</h2>
    <div class="testimonials-grid">
      <div class="testimonial">
        <p>“Gracias al acompañamiento del Dr. Jorge Luis, aumentamos la tasa de preñez en nuestro hato.”</p>
        <h6 class="fw-bold">Carlos Ramírez</h6>
      </div>
      <div class="testimonial">
        <p>“Servicio de ecografías en campo muy profesional y rápido.”</p>
        <h6 class="fw-bold">Finca El Progreso</h6>
      </div>
      <div class="testimonial">
        <p>“Asesoría genética con resultados visibles en producción.”</p>
        <h6 class="fw-bold">María López</h6>
      </div>
    </div>
  </div>
</section>

<!-- CASOS / ESTADÍSTICAS -->
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

<!-- CONTACTO RÁPIDO -->
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
          <p class="text-muted-custom">Comunícate por WhatsApp:</p>
          <a href="https://wa.me/573177330876" class="btn btn-success w-100"><i class="bi bi-whatsapp"></i> Enviar WhatsApp</a>
        </div>

        <div class="card p-4 contact-card">
          <h5 class="fw-bold text-success">Ubicación</h5>
          <div style="height:300px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3345.271033588648!2d-76.25769075530205!3d4.369801743964916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38310026882687%3A0x5f554e9dc9d36a5a!2sFinca%20-%20El%20Jazm%C3%ADn!5e0!3m2!1ses!2sco!4v1763684636784!5m2!1ses!2sco" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>
