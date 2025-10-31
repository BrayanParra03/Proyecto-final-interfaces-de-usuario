<?php include("header.php"); ?>

<!-- Hero -->
<div class="container-fluid bg-success text-white text-center py-5">
    <h1 class="display-4 fw-bold">Dr. Jorge Luis Serna Guevara</h1>
    <p class="lead">Médico Veterinario – Especialista en reproducción animal</p>
    <a href="agendar.php" class="btn btn-light btn-lg text-success fw-bold border border-dark">
        Agendar Consulta
    </a>
</div>

<!-- Servicios destacados -->
<div class="container py-5">
    <h2 class="text-center text-success fw-bold mb-4">Servicios</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow">
                <div class="card-body text-center">
                    <i class="bi bi-heart-pulse fs-1 text-success"></i>
                    <h5 class="mt-3">Biotecnología de la reproducción</h5>
                    <p>Inseminación artificial, transferencia de embriones, diagnóstico reproductivo.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow">
                <div class="card-body text-center">
                    <i class="bi bi-cpu fs-1 text-success"></i>
                    <h5 class="mt-3">Ecografías</h5>
                    <p>Diagnóstico avanzado con equipos de consultorio y portátiles de campo.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow">
                <div class="card-body text-center">
                    <i class="bi bi-people fs-1 text-success"></i>
                    <h5 class="mt-3">Asesorías y Capacitación</h5>
                    <p>Planes personalizados para mejorar la productividad de tu finca.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonios -->
<div class="container py-5">
    <h2 class="text-center text-success fw-bold mb-4">Testimonios</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <p class="fst-italic">“Gracias al acompañamiento del Dr. Jorge Luis, logramos aumentar la tasa de preñez en nuestro hato en un 30%.”</p>
                    <h6 class="fw-bold mt-3">Carlos Ramírez – Ganadero</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <p class="fst-italic">“Las ecografías portátiles nos han ahorrado tiempo y mejorado la detección temprana en nuestras vacas.”</p>
                    <h6 class="fw-bold mt-3">Finca El Progreso</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <p class="fst-italic">“Excelente atención y asesoría genética, hemos visto grandes mejoras en la producción.”</p>
                    <h6 class="fw-bold mt-3">María López – Criadora</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Resultados -->
<div class="container py-5">
    <h2 class="text-center text-success fw-bold mb-5">Casos de Éxito</h2>
    <div class="row g-4 text-center">
        <div class="col-md-4">
            <div class="card shadow h-100 bg-light">
                <div class="card-body">
                    <i class="bi bi-check-circle fs-1 text-success"></i>
                    <h3 class="fw-bold">+100</h3>
                    <p>Diagnósticos reproductivos exitosos</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow h-100 bg-light">
                <div class="card-body">
                    <i class="bi bi-graph-up-arrow fs-1 text-success"></i>
                    <h3 class="fw-bold">95%</h3>
                    <p>Efectividad en protocolos de sincronización de celo</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow h-100 bg-light">
                <div class="card-body">
                    <i class="bi bi-award fs-1 text-success"></i>
                    <h3 class="fw-bold">+10 años</h3>
                    <p>Experiencia en reproducción animal</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contacto Rápido -->
<div class="container py-5">
    <h2 class="text-center text-success fw-bold mb-4">Contáctanos</h2>
    <div class="row g-4">
        <!-- Formulario -->
        <div class="col-md-6">
            <form action="backend/guardar_contacto.php" method="POST" class="card shadow p-4">
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
                <button type="submit" class="btn btn-success w-100">Enviar</button>
            </form>
        </div>

        <!-- WhatsApp y Mapa -->
        <div class="col-md-6">
            <div class="card shadow p-4 mb-4">
                <h5 class="fw-bold text-success">Contacto Directo</h5>
                <p>Comunícate por WhatsApp de forma rápida:</p>
                <a href="https://wa.me/57XXXXXXXXXX" target="_blank" class="btn btn-success w-100">
                    <i class="bi bi-whatsapp"></i> Enviar WhatsApp
                </a>
            </div>
            <div class="card shadow p-4">
                <h5 class="fw-bold text-success">Ubicación</h5>
                <div style="height:300px;">
                    <iframe src="https://www.google.com/maps/embed?pb=ENLACE_DE_MAPA" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ -->
<div class="container py-5">
    <h2 class="text-center text-success fw-bold mb-4">Preguntas Frecuentes</h2>
    <div class="accordion" id="faqAccordion">

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    ¿Qué es la inseminación artificial a tiempo fijo (IATF)?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Es una técnica reproductiva que permite inseminar hembras bovinas en un momento programado, 
                    aumentando la eficiencia y la tasa de preñez del hato.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    ¿Ofrecen capacitación online?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Sí, brindamos capacitaciones tanto online como presenciales, con soporte ecográfico y asesorías personalizadas.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    ¿Cuál es el costo y tiempo de un diagnóstico reproductivo?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    El costo y el tiempo varían según la especie y el tipo de servicio. 
                    Contáctanos directamente para recibir una cotización personalizada.
                </div>
            </div>
        </div>

    </div>
</div>

<?php include("footer.php"); ?>
