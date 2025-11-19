<?php include("header.php"); ?>
<?php include("config/db.php"); ?>

<div class="max-w-7xl mx-auto px-4 py-16">

    <h2 class="text-center text-green-600 font-bold text-3xl mb-10">
        Contáctanos
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

        <!-- FORMULARIO -->
        <form action="backend/guardar_contacto.php" method="POST"
              class="bg-white shadow-lg rounded-lg p-8 space-y-5">

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

            <button type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white w-full py-3 rounded font-bold transition">
                Enviar
            </button>

        </form>

        <!-- WHATSAPP + MAPA -->
        <div class="space-y-6">

            <div class="bg-white shadow-lg rounded-lg p-8">
                <h5 class="font-bold text-green-600 mb-2">Contacto Directo</h5>
                <p class="text-gray-700 mb-4">Comunícate por WhatsApp de forma rápida:</p>
                <a href="https://wa.me/57XXXXXXXXXX" target="_blank"
                   class="bg-green-600 hover:bg-green-700 text-white w-full text-center py-3 rounded block font-bold transition">
                    <i class="bi bi-whatsapp"></i> Enviar WhatsApp
                </a>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-8">
                <h5 class="font-bold text-green-600 mb-2">Ubicación</h5>
                <div class="w-full h-72">
                    <iframe src="https://www.google.com/maps/embed?pb=ENLACE_DE_MAPA"
                            class="w-full h-full rounded"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

        </div>

    </div>

</div>

<?php include("footer.php"); ?>
