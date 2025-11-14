// Enhanced JS for parallax, reveal-on-scroll, and header scroll effects
(function () {
  'use strict';

  var header = document.getElementById('main-header');

  // Enhanced header scroll effect with smooth transition
  var lastScroll = 0;
  function checkScroll() {
    var currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    
    if (currentScroll > 100) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
    
    lastScroll = currentScroll;
  }
  
  window.addEventListener('scroll', checkScroll, { passive: true });
  checkScroll();

  // Smooth scroll for nav links
  document.querySelectorAll('nav a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      e.preventDefault();
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        var offset = 80; // header height
        var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    });
  });

  // Parallax effect: move background layers on scroll
  var hero = document.querySelector('#hero');
  var heroBg = document.querySelector('.hero-bg');
  var products = document.querySelector('#products');
  
  function parallaxScroll() {
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;
    
    if (heroBg) {
      var heroY = scrolled * 0.5;
      heroBg.style.transform = 'translateY(' + (heroY * 0.4) + 'px) scale(1.1)';
    }
    
    if (products) {
      var productsTop = products.offsetTop;
      var productsY = (scrolled - productsTop) * 0.3;
      if (scrolled > productsTop - window.innerHeight) {
        products.style.backgroundPosition = 'center ' + (productsY / 2) + 'px';
      }
    }
  }
  
  window.addEventListener('scroll', parallaxScroll, { passive: true });
  parallaxScroll();

  // Reveal-on-scroll with IntersectionObserver - elements appear and disappear based on viewport
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      } else {
        // Remove visible class when scrolling away - creates reappear effect
        entry.target.classList.remove('visible');
      }
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -80px 0px' });

  document.querySelectorAll('.reveal').forEach(function (el) {
    io.observe(el);
  });

  // Resize handler
  window.addEventListener('resize', function () { parallaxScroll(); });
})();
