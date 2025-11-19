<?php include("header.php"); ?>
<?php include("config/db.php"); ?>

<div class="max-w-7xl mx-auto px-4 py-16">

    <h2 class="text-center text-green-600 font-bold text-3xl mb-10">
        Blog Veterinario
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

        <?php
        $sql = "SELECT * FROM blog ORDER BY fecha DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

                echo '
                <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col">

                    '.(!empty($row['imagen']) ? '
                        <img src="assets/img/'.$row['imagen'].'" 
                             alt="Artículo"
                             class="w-full h-48 object-cover">
                    ' : '').'

                    <div class="p-5 flex-1 flex flex-col">

                        <h5 class="text-green-600 font-bold text-xl mb-2">
                            '.$row['titulo'].'
                        </h5>

                        <p class="text-gray-700 mb-4">
                            '.substr($row['contenido'], 0, 100).'...
                        </p>

                        <a href="ver_articulo.php?id='.$row['id'].'"
                           class="mt-auto inline-block bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm font-semibold transition">
                            Leer más
                        </a>

                    </div>

                </div>';
            }
        } else {
            echo "
                <p class='text-center text-gray-600 col-span-3'>
                    No hay artículos publicados aún.
                </p>
            ";
        }
        ?>
    </div>

</div>

<?php include("footer.php"); ?>
