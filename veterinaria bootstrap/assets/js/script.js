// assets/js/script.js
document.addEventListener('DOMContentLoaded', function() {

  // Initialize carousel if present
  const carEl = document.querySelector('#homeCarousel');
  if (carEl) {
    new bootstrap.Carousel(carEl, {
      interval: 5000,
      pause: 'hover',
      ride: 'carousel',
      touch: true,
      wrap: true
    });
  }

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor=>{
    anchor.addEventListener('click', function(e){
      const href = this.getAttribute('href');
      if (href && href !== '#') {
        const el = document.querySelector(href);
        if (el) { e.preventDefault(); el.scrollIntoView({behavior:'smooth', block:'start'}); }
      }
    });
  });

});
