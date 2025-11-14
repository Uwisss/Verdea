<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="theme-color" content="#2f9d63">
  <title>Products — Verdea</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('site-prototype/styles.css') }}">
</head>
<body>
  <header class="site-header">
    <div class="container">
      <h1 class="brand">Verdea</h1>
      <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/products') }}">Products</a>
      </nav>
    </div>
  </header>

  <main class="container">
    <h2>Our Products</h2>
    <p>Featured: NuVida Tote — upcycled denim and fabrics made into sturdy and stylish tote bags. Customize your own.</p>

    <div class="grid">
      <div class="card">
        <img src="{{ url('/verdea/images/page5_img1.png') }}" alt="NuVida Tote">
        <h4>NuVida Tote</h4>
        <p>Durable, sustainable, and customizable.</p>
      </div>
      <div class="card">
        <img src="{{ url('/verdea/images/page6_img2.png') }}" alt="NuVida Tote variantes">
        <h4>Custom Orders</h4>
        <p>Choose materials and design options for a unique bag.</p>
      </div>
    </div>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>&copy; Verdea</p>
    </div>
  </footer>
</body>
</html>
