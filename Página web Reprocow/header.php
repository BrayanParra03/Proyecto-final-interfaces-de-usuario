<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Veterinaria - Dr. Jorge Luis Serna Guevara</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.5/font/bootstrap-icons.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/style.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      padding-top: 80px; 
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    nav.navbar {
      background: linear-gradient(135deg, #0f5132 0%, #0b3d2c 100%) !important;
      padding-top: 15px;
      padding-bottom: 15px;
      box-shadow: 0 2px 20px rgba(0,0,0,0.15);
      transition: all 0.3s ease;
    }

    nav.navbar.scrolled {
      padding-top: 10px;
      padding-bottom: 10px;
      box-shadow: 0 2px 15px rgba(0,0,0,0.2);
    }

    .navbar-brand {
      font-weight: 700;
      color: white !important;
      font-size: 1.4rem;
      letter-spacing: -0.5px;
      padding: 0;
    }

    .navbar-brand img {
      height: 45px;
      width: auto;
      transition: all 0.3s ease;
    }

    .navbar-brand:hover img {
      transform: scale(1.05);
    }

    .nav-link {
      color: white !important;
      font-weight: 500;
      margin-left: 10px;
      transition: 0.3s ease;
      padding: 0.5rem 1rem;
      border-radius: 0.3rem;
    }

    .nav-link:hover {
      color: #d4edda !important;
      background: rgba(255,255,255,0.1);
      transform: translateY(-1px);
    }

    .btn-agendar {
      color: #fff;
      background-color: #198754;
      padding: 8px 18px;
      border-radius: 6px;
      font-weight: 600;
      transition: 0.3s ease;
      border: none;
    }

    .btn-agendar:hover {
      background-color: #157347;
      transform: translateY(-1px);
      box-shadow: 0 4px 12px rgba(25, 135, 84, 0.3);
    }

    .theme-toggle {
      position: fixed;
      top: 100px;
      right: 25px;
      z-index: 1000;
    }

    .theme-toggle-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      background-color: #0f5132;
      color: white;
      border: none;
      border-radius: 50%;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      transition: all 0.3s ease;
      cursor: pointer;
      padding: 0;
    }

    .theme-toggle-btn:hover {
      background-color: #198754;
      transform: scale(1.1);
      box-shadow: 0 6px 20px rgba(0,0,0,0.3);
    }

    .theme-icon {
      width: 24px;
      height: 24px;
      transition: all 0.3s ease;
    }

    .theme-icon svg {
      width: 100%;
      height: 100%;
      fill: currentColor;
      stroke: currentColor;
    }

    body.dark-mode {
      background-color: #121212 !important;
      color: #e0e0e0 !important;
    }

    body.dark-mode .bg-white {
      background-color: #1e1e1e !important;
    }

    body.dark-mode .bg-light {
      background-color: #2d2d2d !important;
    }

    body.dark-mode .service-card,
    body.dark-mode .testimonial,
    body.dark-mode .case-card {
      background-color: #2d2d2d !important;
      border-color: #444 !important;
      color: #e0e0e0 !important;
    }

    body.dark-mode .section-title {
      color: #4CAF50 !important;
    }

    body.dark-mode .text-muted-custom {
      color: #aaa !important;
    }

    body.dark-mode .hero-content h1,
    body.dark-mode .hero-content .lead {
      color: white !important;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.8) !important;
    }

    body.dark-mode .carousel-item::after {
      background: linear-gradient(
        135deg, 
        rgba(15, 81, 50, 0.5) 0%, 
        rgba(0, 0, 0, 0.7) 50%,
        rgba(25, 135, 84, 0.4) 100%
      ) !important;
    }

    @media (max-width: 768px) {
      .theme-toggle {
        top: 90px;
        right: 15px;
      }
      
      .theme-toggle-btn {
        width: 45px;
        height: 45px;
      }
      
      .theme-icon {
        width: 20px;
        height: 20px;
      }
    }
  </style>

</head>
<body>


<div class="theme-toggle">
  <button id="themeToggle" class="theme-toggle-btn" aria-label="Cambiar modo de contraste">
    <div class="theme-icon">
      <svg id="moonIcon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
      </svg>
      <svg id="sunIcon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="display: none;">
        <circle cx="12" cy="12" r="5"/>
        <line x1="12" y1="1" x2="12" y2="3"/>
        <line x1="12" y1="21" x2="12" y2="23"/>
        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
        <line x1="1" y1="12" x2="3" y2="12"/>
        <line x1="21" y1="12" x2="23" y2="12"/>
        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
      </svg>
    </div>
  </button>
</div>

<nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
  <div class="container">

    <a class="navbar-brand" href="index.php">
      <img src="assets/img/logo.png" alt="Reprocow Logo" class="logo-img">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#mainNav" aria-controls="mainNav"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre mí</a></li>
        
        
      </ul>
      <a href="agendar.php" class="btn btn-agendar ms-3">Agendar</a>
    </div>
  </div>
</nav>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    
    // Efecto scroll navbar
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    const themeToggle = document.getElementById('themeToggle');
    const moonIcon = document.getElementById('moonIcon');
    const sunIcon = document.getElementById('sunIcon');
    const body = document.body;

    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
      enableDarkMode();
    }

    themeToggle.addEventListener('click', function() {
      if (body.classList.contains('dark-mode')) {
        disableDarkMode();
      } else {
        enableDarkMode();
      }
    });

    function enableDarkMode() {
      body.classList.add('dark-mode');
      localStorage.setItem('theme', 'dark');
      moonIcon.style.display = 'none';
      sunIcon.style.display = 'block';
    }

    function disableDarkMode() {
      body.classList.remove('dark-mode');
      localStorage.setItem('theme', 'light');
      moonIcon.style.display = 'block';
      sunIcon.style.display = 'none';
    }
  });
</script>