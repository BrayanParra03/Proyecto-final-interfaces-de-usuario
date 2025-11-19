<?php include("header.php"); ?>
<?php include("config/db.php"); ?>

<div class="max-w-4xl mx-auto px-4 py-16">

    <h2 class="text-center text-green-600 font-bold text-3xl mb-4">
        Consultas Virtuales
    </h2>

    <p class="text-center text-gray-700 mb-10">
        Si no puedes desplazarte, recibe atención especializada desde tu finca u hogar mediante consultas en línea.
    </p>

    <div class="flex justify-center">
        <form action="backend/agendar_consulta.php" 
              method="POST" 
              class="bg-white shadow-lg rounded-lg p-8 w-full md:w-1/2 space-y-5">

            <!-- Nombre -->
            <div>
                <label class="font-semibold">Nombre</label>
                <input type="text" name="nombre" required
                       class="w-full mt-1 border rounded p-2 focus:ring-2 focus:ring-green-600 focus:outline-none">
            </div>

            <!-- Correo -->
            <div>
                <label class="font-semibold">Correo</label>
                <input type="email" name="correo" required
                       class="w-full mt-1 border rounded p-2 focus:ring-2 focus:ring-green-600 focus:outline-none">
            </div>

            <!-- Fecha -->
            <div>
                <label class="font-semibold">Fecha</label>
                <input type="date" name="fecha" required
                       class="w-full mt-1 border rounded p-2 focus:ring-2 focus:ring-green-600 focus:outline-none">
            </div>

            <!-- Hora -->
            <div>
                <label class="font-semibold">Hora</label>
                <input type="time" name="hora" required
                       class="w-full mt-1 border rounded p-2 focus:ring-2 focus:ring-green-600 focus:outline-none">
            </div>

            <!-- Mensaje -->
            <div>
                <label class="font-semibold">Mensaje</label>
                <textarea name="mensaje"
                          class="w-full mt-1 border rounded p-2 h-28 resize-none focus:ring-2 focus:ring-green-600 focus:outline-none"></textarea>
            </div>

            <button type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white w-full py-3 rounded font-bold transition">
                Solicitar Consulta Online
            </button>

        </form>
    </div>

</div>

<?php include("footer.php"); ?>
