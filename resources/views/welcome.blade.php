<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>sitio wed</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href=" IMG/favicon.png " rel="icon">
    <link href=" IMG/apple-touch-icon.png" rel="apple-touch-icon">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="vendor1/aos.aos.css">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css " rel="stylesheet">


    <link href="CSS/style.css" rel="stylesheet">


  </head>


<body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <div id="logo">
        <h1><a href="index.html"><span>e</span>StartApp</a></h1>
      </div>
    </div>
    <nav id="navbar" class="navbar">
      <ul>
        @auth
            <li><a class="nav-link active" aria-current="page"  href="/" >Inicio</a></li>
            <li><a class="nav-item" class="nav-link" href="{{ route('personas.store') }}">Administracion</a></li>
            
            <li class="nav-item">
              <form id="logout-form" method="POST" action="{{ route('logout') }}">
                @csrf
              </form>
                <a class="nav-link" href="#"
                  onclick="document.getElementById('logout-form').submit()">Salir</a>
            </li>
        @else
            <li><a class="nav-link scrollto active" href="#hero">INICIO</a></li>
            <li><a class="nav-link scrollto"  href="{{ route('login') }}"> INICIA SESION</a></li>
            <li><a class="nav-link scrollto"  href="{{ route('register') }}">REGISTRATE</a></li>
            <li><a class="nav-link scrollto" href="#contact">CONTACTANOS</a></li>
            <li><a class="nav-link scrollto" href="#about-us">ACERCA DE </a></li>
        @endauth
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
  </header>
  <div class="container">
    <div class="row d-flex justify-content-center mt-3">
      <div class="col-md-12">
        <h1 class="text-center text-success">
          @yield('titulo')
        </h1>
      </div>
    </div>
    <div class="row mt-3 mb-3">
      <div class="col-md-10 d-flex justify-content-start">
        @yield('botonera')
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        @if (session('mensaje') && session('tipo'))
        <div class="alert alert-{{ session('tipo') }} alert-dismissible fade show" role="alert">
          {{ session('mensaje') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
      </div>
    </div>
    <div class="row d-flex justify-content-center mt-3">
      @yield('contenido')
    </div>
  </div>

  <section id="hero">
    <div class="hero-container" data-aos="fade-in">

      <h1>Bienvenidos a palmas oleaginosas </h1>
      <h2>Ven unete a esta gran aventura</h2>
      <img src="IMG/vista-img.png" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
      <a href="#get-started" class="btn-get-started scrollto">Comencemos</a>
      <div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i>Tienda de aplicaciones</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
      </div>
    </div>
  </section>
  <main id="main">

    <section id="get-started" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Sistema simple para descuento</h2>
        </div>
      </div>

      <div class="container">
        <div class="row">

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-block">

              <img src="IMG/svg/cloud.svg" alt="img">
              <h4>PRESENTAMOS WHATSAPP</h4>
              <p>
                Lorem Ipsum es simplemente texto ficticio de la industria de la impresión y la composición tipográfica.
              </p>
              <a href="#">Leer más</a>

            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-block">

              <img src="IMG/svg/planet.svg" alt="img">
              <h4>INTERFAZ FÁCIL DE USAR</h4>
              <p>Lorem Ipsum es simplemente texto ficticio de la industria de la impresión y la composición tipográfica.</p>
              <a href="#">Leer mas</a>

            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-block">

              <img src="IMG/svg/asteroid.svg" alt="img">
              <h4>INTERFAZ FÁCIL DE USAR</h4>
              <p>Lorem Ipsum es simplemente texto ficticio de la industria de la impresión y la composición tipográfica.</p>
              <a href="#">Leer mas</a>

            </div>
          </div>

        </div>
      </div>

    </section><!-- End Get Started Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us padd-section">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">

          <div class="col-md-5 col-lg-3">
            <img src="IMG/about-img.png" alt="About" data-aos="zoom-in" data-aos-delay="100">
          </div>

          <div class="col-md-7 col-lg-5">
            <div class="about-content" data-aos="fade-left" data-aos-delay="100">

              <h2><span>eStartApp</span>Diseño Movil </h2>
              <ul class="list-unstyled">
                <li><i class="vi bi-chevron-right"></i>Diseño creativo</li>
                <li><i class="vi bi-chevron-right"></i>Retina Ready</li>
                <li><i class="vi bi-chevron-right"></i>Fácil de usar</li>
                <li><i class="vi bi-chevron-right"></i>Funciones ilimitadas</li>
                <li><i class="vi bi-chevron-right"></i>Funciones ilimitadas</li>
              </ul>

            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="features" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Características sorprendentes.</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="IMG/svg/paint-palette.svg" alt="img">
              <h4>Diseño creativo</h4>

            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="IMG/svg/vector.svg" alt="img">
              <h4>Retina Ready</h4>

            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="IMG/svg/design-tool.svg" alt="img">
              <h4>Fácil de usar</h4>

            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="IMG/svg/asteroid.svg" alt="img">
              <h4>Actualizaciones gratuitas</h4>

            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="IMG/svg/asteroid.svg" alt="img">
              <h4>Actualizaciones gratuitas</h4>

            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="IMG/svg/cloud-computing.svg" alt="img">
              <h4>Soporte de la tienda de aplicaciones</h4>

            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="IMG/svg/pixel.svg" alt="img">
              <h4>Pixel perfecto</h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="IMG/svg/code.svg" alt="img">
              <h4>Códigos limpios</h4>

            </div>
          </div>

        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Screenshots Section ======= -->
    <section id="screenshots" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Galería de aplicaciones</h2>
        </div>

        <div class="screens-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="IMG/screen/1.jpg" class="img-fluid" alt="..."></div>
            <div class="swiper-slide"><img src=" IMG/screen/2.jpg" class="img-fluid" alt="..."></div>
            <div class="swiper-slide"><img src=" IMG/screen/3.jpg" class="img-fluid" alt="..."></div>
            <div class="swiper-slide"><img src="IMG/screen/4.jpg" class="img-fluid" alt="..."></div>
            <div class="swiper-slide"><img src=" IMG/screen/5.jpg" class="img-fluid" alt="..."></div>
            <div class="swiper-slide"><img src=" IMG/screen/6.jpg" class="img-fluid" alt="..."></div>
            <div class="swiper-slide"><img src=" IMG/screen/7.jpg" class="img-fluid" alt="..."></div>
            <div class="swiper-slide"><img src="IMG/screen/8.jpg" class="img-fluid" alt="..."></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Screenshots Section -->

    <!-- ======= Video Section ======= -->
    <section id="video" class="text-center">
      <div class="overlay">
        <div class="container-fluid container-full" data-aos="zoom-in">

          <div class="row">
            <a href="https://www.youtube.com/watch?v=EOkCOYrPEsU&list=RDEOkCOYrPEsU&start_radio=1" class="glightbox play-btn"></a>
          </div>

        </div>
      </div>
    </section><!-- End Video Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>Miembros del equipo</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="team-block bottom">
              <img src="IMG/team/benito.jpg" class="img-responsive" alt="...">
              <div class="team-content">
                <ul class="list-unstyled">
                  <li><a href="https://www.facebook.com/cristianrivas.benito"><i class="bi bi-facebook"></i></a></li>
                  <li><a href=""><i class="bi bi-twitter"></i></a></li>
                  <li><a href="https://www.linkedin.com/comm/feed/update/share:7062814969276338176?lipi=urn%3Ali%3Apage%3Aemail_email_notification_digest_01%3BfoQxf5aLSxiObZerfV%2BX4A%3D%3D&midToken=AQHcXACuJwbouw&midSig=1vhEYXZPzV-aM1&trk=eml-email_notification_digest_01-hero_notification_cta-0-SHARED_BY_YOUR_PAGE&trkEmail=eml-email_notification_digest_01-hero_notification_cta-0-SHARED_BY_YOUR_PAGE-null-h8gtyi~liwegqxy~s3-null-null&eid=h8gtyi-liwegqxy-s3"><i class="bi bi-linkedin"></i></a></li>
                </ul>
                <span>manager</span>
                <h4>Benito</h4>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="team-block bottom">
              <img src="IMG/team/jhonatan.jpg" class="img-responsive" alt="...">
              <div class="team-content">
                <ul class="list-unstyled">
                  <li><a href="https://www.facebook.com/jhonatan.alfonso.338"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                  <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                </ul>
                <span>manager</span>
                <h4>Alfonso</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="padd-section text-center">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">

          <div class="col-md-8">

            <div class="testimonials-content">
              <div id="carousel-example-generic" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner" role="listbox">

                  <div class="carousel-item  active">
                    <div class="top-top">

                      <h2>Nuestros usuarios nos dicen mucho</h2>
                      <p></p>
                      <h4>Benito<span>manager</span></h4>

                    </div>
                  </div>

                  <div class="carousel-item ">
                    <div class="top-top">

                      <h2>Nuestros usuarios nos dicen mucho</h2>
                      <p></p>
                      <h4>Alfonso<span>manager</span></h4>

                    </div>
                  </div>

                  <div class="carousel-item ">
                    <div class="top-top">

                      <h2>Nuestros usuarios nos dicen mucho</h2>
                      <p></p>
                      <h4>David Spark<span>manager</span></h4>

                    </div>
                  </div>

                </div>

                <div class="btm-btm">

                  <ul class="list-unstyled carousel-indicators">
                    <li data-bs-target="#carousel-example-generic" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel-example-generic" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel-example-generic" data-bs-slide-to="2"></li>
                  </ul>

                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="padd-section text-cente">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>Cumplir con el precio</h2>
          <p class="separator"></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                <h4>basico</h4>
                <h2>$29</h2>
                <ul class="list-unstyled">
                  <li><b>4 GB</b> Ram</li>
                  <li><b>7/24</b> Soporte técnico</li>
                  <li><b>40 GB</b> Almacenamiento en la nube SSD</li>
                  <li>Copias de seguridad mensuales</li>
                  <li>Protección de Palo</li>
                </ul>
                <div class="table_btn">
                  <a href="#" class="btn"><i class="bi bi-cart"></i> Comprar ahora</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                <h4>PERSONAL</h4>
                <h2>$29</h2>
                <ul class="list-unstyled">
                  <li><b>4 GB</b> Ram</li>
                  <li><b>7/24</b>Soporte técnico </li>
                  <li><b>40 GB</b> Almacenamiento en la nube SSD </li>
                  <li>Copias de seguridad mensuales</li>
                  <li>Protección de Palo</li>
                </ul>
                <div class="table_btn">
                  <a href="#" class="btn"><i class="bi bi-cart"></i> Comprar ahora</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                <h4>NEGOCIO</h4>
                <h2>$29</h2>
                <ul class="list-unstyled">
                  <li><b>4 GB</b> Ram</li>
                  <li><b>7/24</b> Tech Support</li>
                  <li><b>40 GB</b> SSD Cloud Storage</li>
                  <li>Monthly Backups</li>
                  <li>Palo Protection</li>
                </ul>
                <div class="table_btn">
                  <a href="#" class="btn"><i class="bi bi-cart"></i> Comprar ahora</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="pricing-table">
                <h4>profeesional</h4>
                <h2>$29</h2>
                <ul class="list-unstyled">
                  <li><b>4 GB</b> Ram</li>
                  <li><b>7/24</b> Tech Support</li>
                  <li><b>40 GB</b> SSD Cloud Storage</li>
                  <li>Monthly Backups</li>
                  <li>Palo Protection</li>
                </ul>
                <div class="table_btn">
                  <a href="#" class="btn"><i class="bi bi-cart"></i> Comprar ahora</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="padd-sectio">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>Últimas entradas</h2>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"><img src="IMG/blog/blog-image-1.jpg" alt="..."></a>
              <div class="content-blog">
                <h4><a href="#">¿Cuál es la diferencia entre la tipografía Good y Bat?</a></h4>
                <span>05, juin 2017</span>
                <a class="float-end readmore" href="#">Leer mas</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"><img src="IMG/blog/blog-image-2.jpg" class="IMG-responsive" alt="IMG"></a>
              <div class="content-blog">
                <h4><a href="#">¿Cuál es la diferencia entre la tipografía Good y Bat?</a></h4>
                <span>05, juin 2017</span>
                <a class="float-end readmore" href="#">Leer mas</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"><img src="IMG/blog/blog-image-3.jpg" class="IMG-responsive" alt="IMG"></a>
              <div class="content-blog">
                <h4><a href="#">¿Cuál es la diferencia entre la tipografía Good y Bat?</a></h4>
                <span>05, juin 2017</span>
                <a class="float-end readmore" href="#">Leer mas</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Newsletter Section ======= -->
    <section id="newsletter" class="newsletter text-center">
      <div class="overlay padd-section">
        <div class="container" data-aos="zoom-in">

          <div class="row justify-content-center">
            <div class="col-md-9 col-lg-6">
              <form class="d-flex" method="POST" action="#">
                <input type="email" class="form-control " placeholder="Email Adress" name="email">
                <button type="submit" class="btn btn-default"><i class="bi bi-location-arrow"></i>Subscribir</button>
              </form>
            </div>
          </div>

          <ul class="list-unstyled">
            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
            <li><a href="#"><i class="bi bi-twitter"></i></a></li>
            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
          </ul>

        </div>
      </div>
    </section><!-- End Newsletter Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="padd-section">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Contactanos</h2>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Cargar</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Su mensaje ha sido enviado. ¡Gracias!</div>
                </div>
                <div class="text-center"><button type="submit">Enviar mensaje</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>


  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">eStartApp</a>


          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Sobre nosotros</h4>

            <ul class="list-unstyled">
              <li><a href="#">Sobre nosotros</a></li>
              <li><a href="#">Elemento Características</a></li>
              <li><a href="#">Transmisión en vivo</a></li>
              <li><a href="#">Política de privacidad</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Sobre nosotros</h4>

            <ul class="list-unstyled">
              <li><a href="#">Sobre nosotros</a></li>
              <li><a href="#">Elemento Características</a></li>
              <li><a href="#">Transmisión en vivo</a></li>
              <li><a href="#">Política de privacidad</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Apoyo</h4>

            <ul class="list-unstyled">
              <li><a href="#">Preguntas más frecuentes</a></li>
              <li><a href="#">Ayuda del editor</a></li>
              <li><a href="#">Contáctenos</a></li>
              <li><a href="#">Política de privacidad</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Sobre nosotros</h4>

            <ul class="list-unstyled">
              <li><a href="#">Sobre nosotros</a></li>
              <li><a href="#">Elemento Características</a></li>
              <li><a href="#">Transmisión en vivo</a></li>
              <li><a href="#">Política de privacidad</a></li>
            </ul>

          </div>
        </div>

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Derechos de autor eStartApp. Todos los derechos reservados.</p>
        <div class="credits">


          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>


  <script src="JS/main.js"></script>

</body>

</html>