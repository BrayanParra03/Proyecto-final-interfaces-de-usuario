<?php include("header.php"); ?>

<!-- HERO -->
<div class="w-full bg-green-600 text-white text-center py-16 px-4">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Dr. Jorge Luis Serna Guevara</h1>
    <p class="text-xl mb-6">Médico Veterinario – Especialista en reproducción animal</p>
    <a href="agendar.php" class="bg-white text-green-600 font-bold px-6 py-3 rounded shadow border border-black hover:bg-gray-100 transition">
        Agendar Consulta
    </a>
</div>


<!-- SERVICIOS DESTACADOS -->
<div class="max-w-7xl mx-auto px-4 py-16">
    <h2 class="text-center text-green-600 font-bold text-3xl mb-10">Servicios</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <div class="bg-white shadow rounded-lg p-6 text-center">
            <i class="bi bi-heart-pulse text-green-600 text-5xl"></i>
            <h5 class="mt-4 font-bold text-xl">Biotecnología de la reproducción</h5>
            <p class="mt-2 text-gray-700">Inseminación artificial, transferencia de embriones, diagnóstico reproductivo.</p>
        </div>

        <div class="bg-white shadow rounded-lg p-6 text-center">
            <i class="bi bi-cpu text-green-600 text-5xl"></i>
            <h5 class="mt-4 font-bold text-xl">Ecografías</h5>
            <p class="mt-2 text-gray-700">Diagnóstico avanzado con equipos de consultorio y portátiles de campo.</p>
        </div>

        <div class="bg-white shadow rounded-lg p-6 text-center">
            <i class="bi bi-people text-green-600 text-5xl"></i>
            <h5 class="mt-4 font-bold text-xl">Asesorías y Capacitación</h5>
            <p class="mt-2 text-gray-700">Planes personalizados para mejorar la productividad de tu finca.</p>
        </div>

    </div>
</div>


<!-- TESTIMONIOS -->
<div class="max-w-7xl mx-auto px-4 py-16">
    <h2 class="text-center text-green-600 font-bold text-3xl mb-10">Testimonios</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <div class="bg-white shadow rounded-lg p-6 text-center">
            <p class="italic text-gray-700">“Gracias al acompañamiento del Dr. Jorge Luis, logramos aumentar la tasa de preñez en un 30%.”</p>
            <h6 class="font-bold mt-4">Carlos Ramírez – Ganadero</h6>
        </div>

        <div class="bg-white shadow rounded-lg p-6 text-center">
            <p class="italic text-gray-700">“Las ecografías portátiles nos han ahorrado tiempo y mejorado la detección temprana.”</p>
            <h6 class="font-bold mt-4">Finca El Progreso</h6>
        </div>

        <div class="bg-white shadow rounded-lg p-6 text-center">
            <p class="italic text-gray-700">“Excelente atención y asesoría genética, hemos visto grandes mejoras.”</p>
            <h6 class="font-bold mt-4">María López – Criadora</h6>
        </div>

    </div>
</div>


<!-- CASOS DE ÉXITO -->
<div class="max-w-7xl mx-auto px-4 py-16">
    <h2 class="text-center text-green-600 font-bold text-3xl mb-12">Casos de Éxito</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

        <div class="bg-gray-100 shadow rounded-lg p-6">
            <i class="bi bi-check-circle text-green-600 text-5xl"></i>
            <h3 class="font-bold text-3xl mt-3">+100</h3>
            <p class="text-gray-700 mt-2">Diagnósticos reproductivos exitosos</p>
        </div>

        <div class="bg-gray-100 shadow rounded-lg p-6">
            <i class="bi bi-graph-up-arrow text-green-600 text-5xl"></i>
            <h3 class="font-bold text-3xl mt-3">95%</h3>
            <p class="text-gray-700 mt-2">Efectividad en protocolos de sincronización de celo</p>
        </div>

        <div class="bg-gray-100 shadow rounded-lg p-6">
            <i class="bi bi-award text-green-600 text-5xl"></i>
            <h3 class="font-bold text-3xl mt-3">+10 años</h3>
            <p class="text-gray-700 mt-2">Experiencia en reproducción animal</p>
        </div>

    </div>
</div>


<!-- CONTACTO RÁPIDO -->
<div class="max-w-7xl mx-auto px-4 py-16">
    <h2 class="text-center text-green-600 font-bold text-3xl mb-10">Contáctanos</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

        <!-- Formulario -->
        <form action="backend/guardar_contacto.php" method="POST" class="bg-white shadow rounded-lg p-6 space-y-4">

            <div>
                <label class="font-semibold">Nombre</label>
                <input type="text" name="nombre" required
                class="w-full mt-1 border rounded p-2 focus:ring-2 focus:ring-green-600 focus:outline-none">
            </div>

            <div>
                <label class="font-semibold">Teléfono</label>
                <input type="text" name="telefono"
                class="w-full mt-1 border rounded p-2 focus:ring-2 focus:ring-green-600 focus:outline-none">
            </div>

            <div>
                <label class="font-semibold">Correo</label>
                <input type="email" name="correo" required
                class="w-full mt-1 border rounded p-2 focus:ring-2 focus:ring-green-600 focus:outline-none">
            </div>

            <div>
                <label class="font-semibold">Tipo de servicio</label>
                <input type="text" name="servicio"
                class="w-full mt-1 border rounded p-2 focus:ring-2 focus:ring-green-600 focus:outline-none">
            </div>

            <div>
                <label class="font-semibold">Especie</label>
                <input type="text" name="especie"
                class="w-full mt-1 border rounded p-2 focus:ring-2 focus:ring-green-600 focus:outline-none">
            </div>

            <div>
                <label class="font-semibold">Mensaje</label>
                <textarea name="mensaje"
                class="w-full mt-1 border rounded p-2 h-28 resize-none focus:ring-2 focus:ring-green-600 focus:outline-none"></textarea>
            </div>

            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white w-full py-3 rounded font-bold transition">
                Enviar
            </button>

        </form>

        <!-- WhatsApp + Mapa -->
        <div class="space-y-6">

            <div class="bg-white shadow rounded-lg p-6">
                <h5 class="font-bold text-green-600 mb-2">Contacto Directo</h5>
                <p class="mb-3">Comunícate por WhatsApp de forma rápida:</p>
                <a href="https://wa.me/57XXXXXXXXXX" target="_blank"
                class="bg-green-600 hover:bg-green-700 text-white w-full text-center py-3 rounded block font-bold transition">
                    <i class="bi bi-whatsapp"></i> Enviar WhatsApp
                </a>
            </div>

            <div class="bg-white shadow rounded-lg p-6">
                <h5 class="font-bold text-green-600 mb-2">Ubicación</h5>
                <div class="w-full h-72">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=ENLACE_DE_MAPA"
                        class="w-full h-full rounded"
                        style="border:0;" loading="lazy" allowfullscreen></iframe>
                </div>
            </div>

        </div>

    </div>
</div>


<!-- FAQ -->
<div class="max-w-7xl mx-auto px-4 py-16">
    <h2 class="text-center text-green-600 font-bold text-3xl mb-10">Preguntas Frecuentes</h2>

    <!-- FAQ item -->
    <div class="space-y-4">

        <!-- ITEM 1 -->
        <div class="border rounded-lg">
            <button onclick="toggleFAQ('faq1')" class="w-full text-left px-4 py-3 font-semibold flex justify-between">
                ¿Qué es la inseminación artificial a tiempo fijo (IATF)?
                <span id="icon-faq1">+</span>
            </button>
            <div id="faq1" class="hidden px-4 pb-4">
                Es una técnica reproductiva que permite inseminar hembras bovinas en un momento programado.
            </div>
        </div>

        <!-- ITEM 2 -->
        <div class="border rounded-lg">
            <button onclick="toggleFAQ('faq2')" class="w-full text-left px-4 py-3 font-semibold flex justify-between">
                ¿Ofrecen capacitación online?
                <span id="icon-faq2">+</span>
            </button>
            <div id="faq2" class="hidden px-4 pb-4">
                Sí, brindamos capacitaciones online y presenciales con soporte ecográfico.
            </div>
        </div>

        <!-- ITEM 3 -->
        <div class="border rounded-lg">
            <button onclick="toggleFAQ('faq3')" class="w-full text-left px-4 py-3 font-semibold flex justify-between">
                ¿Cuál es el costo de un diagnóstico reproductivo?
                <span id="icon-faq3">+</span>
            </button>
            <div id="faq3" class="hidden px-4 pb-4">
                El costo varía según la especie y el tipo de servicio. Contáctanos para una cotización personalizada.
            </div>
        </div>

    </div>
</div>

<script>
function toggleFAQ(id) {
    const content = document.getElementById(id);
    const icon = document.getElementById("icon-" + id);

    content.classList.toggle("hidden");
    icon.textContent = content.classList.contains("hidden") ? "+" : "-";
}
</script>

<?php include("footer.php"); ?>
