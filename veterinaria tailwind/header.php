<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Veterinaria - Dr. Jorge Luis Serna</title>

  <!-- Tailwind CSS -->
  <link href="assets/css/tailwind.css" rel="stylesheet">

  <!-- Íconos (Heroicons o Bootstrap Icons si deseas mantenerlos) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body class="bg-white text-black">

  <!-- NAVBAR -->
  <nav class="bg-black text-white shadow">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex items-center justify-between h-16">

        <!-- Logo -->
        <a href="index.php" class="text-green-600 font-bold text-xl">
          Veterinaria
        </a>

        <!-- Botón móvil -->
        <button id="menu-btn" class="text-white lg:hidden focus:outline-none text-2xl">
          ☰
        </button>

        <!-- Menú principal -->
        <div id="menu" class="hidden lg:flex lg:items-center lg:gap-6">
          <a href="index.php" class="hover:text-green-500 transition">Inicio</a>
          <a href="servicios.php" class="hover:text-green-500 transition">Servicios</a>
          <a href="sobre.php" class="hover:text-green-500 transition">Sobre mí</a>
          <a href="consultas.php" class="hover:text-green-500 transition">Consultas Virtuales</a>
          <a href="blog.php" class="hover:text-green-500 transition">Blog</a>
          <a href="contacto.php" class="hover:text-green-500 transition">Contacto</a>

          <a href="agendar.php" class="ml-4 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md border border-yellow-400">
            Agendar
          </a>
        </div>
      </div>
    </div>

    <!-- Menú móvil -->
    <div id="mobile-menu" class="lg:hidden hidden bg-black text-white px-4 pb-4">
      <a href="index.php" class="block py-2 hover:text-green-500">Inicio</a>
      <a href="servicios.php" class="block py-2 hover:text-green-500">Servicios</a>
      <a href="sobre.php" class="block py-2 hover:text-green-500">Sobre mí</a>
      <a href="consultas.php" class="block py-2 hover:text-green-500">Consultas Virtuales</a>
      <a href="blog.php" class="block py-2 hover:text-green-500">Blog</a>
      <a href="contacto.php" class="block py-2 hover:text-green-500">Contacto</a>

      <a href="agendar.php" class="block mt-2 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md border border-yellow-400 text-center">
        Agendar
      </a>
    </div>
  </nav>

  <!-- Script menú móvil -->
  <script>
    const btn = document.getElementById("menu-btn");
    const menu = document.getElementById("menu");
    const mobileMenu = document.getElementById("mobile-menu");

    btn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  </script>
