<?php include("header.php"); ?>
<?php include("config/db.php"); ?>

<div class="max-w-4xl mx-auto px-4 py-16">

<?php
if (isset($_GET['id'])) {

    $id = intval($_GET['id']);
    $sql = "SELECT * FROM blog WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();

        echo '
        <div class="bg-white shadow-lg rounded-lg p-8">

            '.(!empty($row['imagen']) ? '
            <img src="assets/img/'.$row['imagen'].'"
                 alt="Artículo"
                 class="w-full mb-6 rounded-lg shadow-md object-cover">
            ' : '').'

            <h2 class="text-green-600 font-bold text-3xl mb-2">
                '.$row['titulo'].'
            </h2>

            <p class="text-gray-500 mb-6">
                '.date("d/m/Y", strtotime($row['fecha'])).'
            </p>

            <p class="text-gray-700 leading-relaxed whitespace-pre-line">
                '.$row['contenido'].'
            </p>

        </div>';
    } 
    else {
        echo "
        <p class='text-center text-gray-600'>
            Artículo no encontrado.
        </p>";
    }

} 
else {
    echo "
    <p class='text-center text-gray-600'>
        No se seleccionó ningún artículo.
    </p>";
}
?>

</div>

<?php include("footer.php"); ?>
