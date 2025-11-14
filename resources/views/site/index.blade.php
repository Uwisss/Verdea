<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="theme-color" content="#2f9d63">
  <title>Verdea — Where Fashion Meets Sustainability</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('site-prototype/styles.css') }}">
</head>
<body>
  <header class="site-header" id="main-header">
    <div class="container">
      <div class="brand">
        <img src="{{ asset('img/logo.png') }}" alt="Verdea Logo" class="logo">
        <span>Verdea</span>
      </div>
      <nav class="main-nav">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#vision">Mission</a>
        <a href="#products">Products</a>
        <a href="#impact">Impact</a>
      </nav>
      <a href="#cta" class="header-btn">Get Started</a>
    </div>
  </header>

  <main id="home">
    <section id="hero">
      <div class="hero-bg" style="background-image:url('https://images.unsplash.com/photo-1545471526-7c4f3f6a5e3a?w=1920&q=85')"></div>
      <div class="hero-pattern"></div>
      <div class="hero-overlay"></div>
      <div class="container hero-container">
        <div class="hero-content reveal">
          <h1 class="hero-title">WHERE FASHION<br/>MEETS<br/>SUSTAINABILITY</h1>
          <p class="hero-lead">Smart Solutions, Sustainable World — upcycled tote bags that give new life to old fabrics.</p>
          <div class="hero-buttons">
            <a class="btn btn-primary" href="#products">Shop NuVida</a>
            <a class="btn btn-outline" href="#about">Learn More</a>
          </div>
        </div>
        <div class="hero-product reveal delay-1">
          <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=800&q=80" alt="Sustainable Tote Bag" class="floating-product">
        </div>
      </div>
    </section>

    <section id="about" class="section bg-light">
      <div class="about-bg" style="background-image:url('https://images.unsplash.com/photo-1493397212122-2b85dda8106b?w=1600&q=80'); opacity: 0.03;"></div>
      <div class="container">
        <div class="split">
          <div class="text reveal">
            <h3>About Verdea</h3>
            <p>Verdea is a forward-thinking company founded on the belief that sustainability and innovation must go hand in hand to build a better future. Our products are crafted from old clothes that can still be used, giving another purpose to those garments by transforming them into something new, to help reduce the <strong>92 million tonnes of textile waste</strong> produced every year.</p>
            <p>As our company grows, we strive to innovate and produce more sustainable products that continue to align with our mission. The name <strong>Verdea</strong> comes from the words <em>verde</em> (green) and <em>idea</em>, symbolizing our commitment to bringing fresh, innovative, and eco-conscious solutions to the world's growing environmental challenges.</p>
            <p>At Verdea, we operate between creativity and sustainability, specializing in upcycling textiles to create unique, environmentally friendly products. Our products are meticulously designed to minimize waste and maximize efficiency. By bringing new life into discarded materials, we not only reduce landfill waste but also embrace a culture of reuse and recycling.</p>
            <p class="tagline"><em>"Smart Solutions, Sustainable World"</em></p>
          </div>
          <div class="media reveal delay-1">
            <div class="image-card" style="background-image:url('{{ asset('img/leaf.jpg') }}')">
            </div>
            <div class="image-card secondary" style="background-image:url('https://images.unsplash.com/photo-1558769132-cb1aea1c8f26?w=800&q=80'); margin-top: 24px;">
              <div class="image-overlay" style="background:linear-gradient(180deg, rgba(47,157,99,0.8) 0%, rgba(29,99,64,0.9) 100%);">
                <div class="overlay-text">
                  <h4 style="color:white; font-size:18px; font-weight:700; margin:0 0 8px 0;">Handcrafted with Care</h4>
                  <p style="color:rgba(255,255,255,0.9); font-size:14px; margin:0; line-height:1.6;">Each product is carefully made by skilled artisans in our community workshop</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="about-features reveal delay-2">
          <div class="feature-row">
            <div class="feature-item">
              <div class="feature-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                </svg>
              </div>
              <h4>Sustainable Innovation</h4>
              <p>Transforming textile waste into valuable products through creative upcycling and smart design solutions.</p>
            </div>
            <div class="feature-item">
              <div class="feature-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
              </div>
              <h4>Quality Assured</h4>
              <p>Every product is meticulously crafted with attention to detail, ensuring durability and style in every stitch.</p>
            </div>
            <div class="feature-item">
              <div class="feature-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
              </div>
              <h4>Long-lasting Impact</h4>
              <p>Creating positive change by fostering circular economies and reducing environmental footprints for future generations.</p>
            </div>
          </div>
        </div>
        
        <div class="commitment-section reveal delay-2">
          <div class="commitment-card">
            <h4>Our Commitment to the Planet</h4>
            <p>We recognize that the future of our planet depends on the actions we take today. That is why we are dedicated to creating smart solutions—products and services that are not only efficient and practical but also aligned with the principles of environmental responsibility.</p>
            <p>Guided by our slogan, <strong>"Smart Solutions, Sustainable World,"</strong> we go beyond offering short-term fixes. We aim to create long-lasting change by fostering innovation that reduces carbon footprints, conserves resources, and promotes circular economies. Our projects and partnerships are rooted in collaboration, innovation, and a deep respect for nature—ensuring that every initiative contributes to a healthier, more resilient planet.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="vision" class="section" style="background-image:url('https://images.unsplash.com/photo-1610878180933-123728745d22?w=1600&q=80'); background-size:cover; background-position:center; background-attachment:fixed;">
      <div class="vision-overlay"></div>
      <div class="container" style="position:relative; z-index:2;">
        <div class="vision-mission-grid">
          <div class="vm-card reveal">
            <div class="vm-icon">
              <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M2 12h20"></path>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
              </svg>
            </div>
            <h3>Our Vision</h3>
            <p>To become one of the world's most recognized and trusted brands for innovative, ethically-made, and eco-friendly bags that seamlessly blend style with purpose. We aim to lead the fashion industry toward a future where sustainability is not an option but a standard, crafting products that respect the planet and empower communities.</p>
          </div>
          <div class="vm-card reveal delay-1">
            <div class="vm-icon">
              <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
              </svg>
            </div>
            <h3>Our Mission</h3>
            <p>Our mission is to create, manufacture, and supply high-quality environmentally friendly bags that minimize environmental footprints, encourage sustainable living, and enable communities to make greener choices demonstrating how fashion can be both fashionable and responsible.</p>
          </div>
        </div>
        <div class="principles reveal delay-2">
          <h4>Our Principles</h4>
          <div class="principles-grid">
            <div class="principle">
              <strong>Reduce Textile Waste</strong>
              <p>Cut down the 92 million tonnes of textile waste produced every year</p>
            </div>
            <div class="principle">
              <strong>Repurpose & Transform</strong>
              <p>Give old fabrics a second life as durable, stylish tote bags</p>
            </div>
            <div class="principle">
              <strong>Maximize Efficiency</strong>
              <p>Smart production processes that use almost all fabric</p>
            </div>
            <div class="principle">
              <strong>Empower Communities</strong>
              <p>Support local tailors and production in Taytay, Rizal</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="products" style="background-image:url('https://images.unsplash.com/photo-1463936575829-25148e1db1b8?w=1920&q=85')">
      <div class="content-over container">
        <h3 class="reveal">NuVida Tote Bag</h3>
        <p class="product-tagline reveal delay-1">BY VERDEA</p>
        <p class="muted reveal delay-1">The name <strong>NuVida</strong> comes from 'new' and 'vida' (life) — symbolizing the new life given to old and unused fabrics. An eco-friendly product made from recycled denim and old clothes that would otherwise go to waste.</p>
        
        <div class="product-features reveal delay-1">
          <div class="feature-badge">Durable & High-Quality</div>
          <div class="feature-badge">Fully Customizable</div>
          <div class="feature-badge">Lightweight Design</div>
          <div class="feature-badge">Locally Made</div>
        </div>

        <div class="grid reveal delay-2">
          <div class="card">
            <div class="card-media" style="background-image:url('https://images.unsplash.com/photo-1591561954557-26941169b49e?w=600&q=80')"></div>
            <h4>NuVida Classic</h4>
            <p class="small">Everyday carry made from upcycled denim — strong, stylish, and sustainable.</p>
            <div class="card-badge">Bestseller</div>
          </div>
          <div class="card">
            <div class="card-media" style="background-image:url('https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?w=600&q=80')"></div>
            <h4>Custom Edition</h4>
            <p class="small">Personalize your bag with your choice of fabrics, embroidery, patches, or prints.</p>
            <div class="card-badge">Customizable</div>
          </div>
          <div class="card">
            <div class="card-media" style="background-image:url('https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=600&q=80')"></div>
            <h4>Community Series</h4>
            <p class="small">Crafted by local tailors in Taytay, Rizal — supporting local economies.</p>
            <div class="card-badge">Handmade</div>
          </div>
        </div>
      </div>
    </section>

    <section id="impact" class="section">
      <div class="container">
        <h3 class="reveal text-center" style="margin-bottom: 60px;">Our Impact on the Planet</h3>
        
        <div class="impact-stats-grid reveal delay-1">
          <div class="impact-stat-card">
            <div class="stat-icon" style="background:linear-gradient(135deg, #2f9d63 0%, #1d6340 100%);">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M12 6v6l4 2"></path>
              </svg>
            </div>
            <div class="stat-value">92M</div>
            <div class="stat-label">Tonnes of Textile Waste</div>
            <p class="stat-desc">Produced globally each year that we're helping to reduce</p>
          </div>
          
          <div class="impact-stat-card">
            <div class="stat-icon" style="background:linear-gradient(135deg, #4db87d 0%, #2f9d63 100%);">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
            </div>
            <div class="stat-value">50+</div>
            <div class="stat-label">Local Artisans Supported</div>
            <p class="stat-desc">Community tailors creating sustainable products</p>
          </div>
          
          <div class="impact-stat-card">
            <div class="stat-icon" style="background:linear-gradient(135deg, #5cc68a 0%, #4db87d 100%);">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <div class="stat-value">85%</div>
            <div class="stat-label">Waste Reduction Rate</div>
            <p class="stat-desc">Of materials are repurposed instead of discarded</p>
          </div>
          
          <div class="impact-stat-card">
            <div class="stat-icon" style="background:linear-gradient(135deg, #6dd396 0%, #5cc68a 100%);">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                <line x1="12" y1="22.08" x2="12" y2="12"></line>
              </svg>
            </div>
            <div class="stat-value">1000+</div>
            <div class="stat-label">Products Created</div>
            <p class="stat-desc">Unique sustainable bags giving fabrics new life</p>
          </div>
        </div>

        <div class="impact-content reveal delay-2" style="margin-top: 80px;">
          <div class="impact-grid-new">
            <div class="impact-image-section">
              <div class="image-card" style="background-image:url('https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=800&q=80'); height: 400px;">
                <div class="image-overlay" style="background:linear-gradient(180deg, rgba(29,99,64,0.7) 0%, rgba(18,45,28,0.85) 100%);">
                  <div class="overlay-text" style="text-align:center; padding:40px;">
                    <h4 style="color:white; font-size:32px; font-weight:800; margin:0 0 16px 0; font-family:'Montserrat',sans-serif;">Circular Economy</h4>
                    <p style="color:rgba(255,255,255,0.95); font-size:18px; margin:0; line-height:1.6;">From waste to wonder — transforming discarded textiles into premium sustainable products</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="impact-points-section">
              <h4 style="font-size:24px; font-weight:700; margin-bottom:32px; font-family:'Montserrat',sans-serif; color:#1d6340;">Why It Matters</h4>
              <div class="impact-point">
                <div class="point-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <div class="point-content">
                  <h5>Environmental Protection</h5>
                  <p>Reduce landfill waste, conserve water, and lower carbon emissions by repurposing existing materials</p>
                </div>
              </div>
              
              <div class="impact-point">
                <div class="point-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <div class="point-content">
                  <h5>Community Empowerment</h5>
                  <p>Support local tailors and artisans in Taytay, Rizal, creating sustainable livelihoods</p>
                </div>
              </div>
              
              <div class="impact-point">
                <div class="point-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <div class="point-content">
                  <h5>Innovation in Action</h5>
                  <p>Smart production processes that maximize material use and minimize new waste generation</p>
                </div>
              </div>
              
              <div class="impact-point">
                <div class="point-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <div class="point-content">
                  <h5>Circular Economy Leadership</h5>
                  <p>Transform waste into valuable products, proving sustainability can be both beautiful and profitable</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="cta" class="cta-section">
      <div class="cta-background" style="background-image:url('{{ asset('img/leaf.png') }}')"></div>
      <div class="cta-overlay"></div>
      <div class="container">
        <div class="cta-content reveal">
          <div class="cta-badge">Join the Movement</div>
          <h2 class="cta-title">Make a Conscious Choice for Tomorrow</h2>
          <p class="cta-subtitle">Every purchase supports sustainable practices and empowers local communities</p>
          <div class="cta-buttons">
            <a class="btn-cta-primary" href="#products">
              <span>Shop NuVida Collection</span>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
            <a class="btn-cta-secondary" href="#about">
              <span>Our Story</span>
            </a>
          </div>
          <div class="cta-stats">
            <div class="cta-stat-item">
              <div class="cta-stat-number">1000+</div>
              <div class="cta-stat-label">Happy Customers</div>
            </div>
            <div class="cta-stat-divider"></div>
            <div class="cta-stat-item">
              <div class="cta-stat-number">85%</div>
              <div class="cta-stat-label">Waste Reduced</div>
            </div>
            <div class="cta-stat-divider"></div>
            <div class="cta-stat-item">
              <div class="cta-stat-number">100%</div>
              <div class="cta-stat-label">Sustainable</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="site-footer">
      <div class="container">
        <div class="footer-content">
          <div class="footer-brand-section">
            <div class="brand footer-brand">
              <img src="{{ asset('img/logo.png') }}" alt="Verdea Logo" class="logo">
              <span>Verdea</span>
            </div>
            <p class="footer-tagline">Smart Solutions, Sustainable World</p>
            <p class="footer-description">Transforming textile waste into stylish, eco-friendly tote bags for a more sustainable future.</p>
            <div class="social-icons">
              <a href="#" class="social-link" aria-label="Facebook">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
              </a>
              <a href="#" class="social-link" aria-label="Instagram">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
              </a>
              <a href="#" class="social-link" aria-label="Twitter">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                </svg>
              </a>
              <a href="#" class="social-link" aria-label="LinkedIn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
              </a>
            </div>
          </div>
          
          <div class="footer-links-section">
            <div class="footer-column">
              <h4>Company</h4>
              <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="#vision">Our Mission</a></li>
                <li><a href="#impact">Our Impact</a></li>
                <li><a href="{{ url('/verdea/magazine') }}">Magazine</a></li>
              </ul>
            </div>
            
            <div class="footer-column">
              <h4>Products</h4>
              <ul>
                <li><a href="#products">NuVida Classic</a></li>
                <li><a href="#products">Custom Edition</a></li>
                <li><a href="#products">Community Series</a></li>
                <li><a href="#products">Wholesale</a></li>
              </ul>
            </div>
            
            <div class="footer-column">
              <h4>Contact</h4>
              <ul class="contact-list">
                <li>Taytay, Rizal, Philippines</li>
                <li>info@verdea.com</li>
                <li>+63 123 456 7890</li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="footer-bottom">
          <p>&copy; 2025 Verdea. All rights reserved.</p>
          <div class="footer-legal">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
          </div>
        </div>
      </div>
    </footer>
  </main>

  <script src="{{ asset('site-prototype/app.js') }}"></script>
</body>
</html>
