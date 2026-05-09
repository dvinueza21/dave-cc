<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dave Crystal Clean</title>

  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;300;400;500;600;700;800;900&family=Raleway:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
      <h1 class="sitename">Dave Crystal Clean</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#portfolio">Servicios</a></li>
        <li><a href="#contact">Contacto</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="cta-btn" 
      href="https://wa.me/+34691700689"
      target="_blank">Presupuesto</a>

  </div>
</header>

<main class="main">

  <section id="home" class="hero section dark-background">
    <img src="{{ asset('assets/img/hero-bg2.jpeg') }}" alt="" data-aos="fade-in">

    <div class="container d-flex flex-column align-items-center text-center">
      <h2 data-aos="fade-up" data-aos-delay="100">Limpieza Profesional de cristales</h2>
      <p data-aos="fade-up" data-aos-delay="200">Negocios a pie de calle y domicilios privados</p>
    </div>
  </section>

  <section id="about" class="about section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Mi trayectoria</h2>
      <h3><p>Larga experiencia en trabajos de limpieza de ventanas y superficies acristaladas</p></h3>
    </div>

    <div class="container">
      <div class="row gy-4">

        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
          <p>Limpieza en:</p>
          <ul>
            <li><i class="bi bi-check2-circle"></i> <span>Hoteles de lujo</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Oficinas</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Negocios a pie de calle</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Comunidades de vecinos</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Domicilios privados</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Fábricas</span></li>
          </ul>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <p>Descarga más información detallada</p>
          <a href="{{ asset('assets/cv/curriculum.pdf') }}" class="read-more" download>
  <span>Curriculum</span><i class="bi bi-arrow-right"></i>
</a>
        </div>

      </div>
    </div>
  </section>

  <section id="call-to-action" class="call-to-action section dark-background">
    <img src="{{ asset('assets/img/cta-bg2.jpeg') }}" alt="">

    <div class="container">
      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-9 text-center text-xl-start">
          <h3>Pide tu presupuesto sin compromiso</h3>
          <p>Te responderé lo antes posible</p>
        </div>
        <div class="col-xl-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#contact">Contactar</a>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio" class="portfolio section">
    <div class="container section-title" data-aos="fade-up">
      <h2><p>Experiencia demostrable en diferentes negocios</p></h2>
    </div>

    <div class="container">
      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Galeria</li>
         
        </ul>

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

         

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <img src="{{ asset('assets/img/masonry-portfolio/portfolio-2.jpeg') }}" class="img-fluid" alt="">
          </div>

         

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <img src="{{ asset('assets/img/masonry-portfolio/portfolio-5.jpeg') }}" class="img-fluid" alt="">
          </div>

           <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <img src="{{ asset('assets/img/masonry-portfolio/portfolio-6.jpeg') }}" class="img-fluid" alt="">
          </div>
         

        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact section light-background">
    <div class="container section-title" data-aos="fade-up">
      <h2>Contacto</h2>
      <p>¿Necesitas más información?</p>
    </div>

    <div class="container" data-aos="fade" data-aos-delay="100">
      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Dirección</h3>
              <p>Badalona - Barcelona</p>
            </div>
          </div>

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Móvil</h3>
              <p>+34 691700689</p>
            </div>
          </div>
        </div>

        <div class="col-lg-8">

          @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif

          @if ($errors->any())
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('contact.store') }}" method="POST" data-aos="fade-up" data-aos-delay="200">
            @csrf

            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Tu Nombre" value="{{ old('name') }}" required>
              </div>

              <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
              </div>

              <div class="col-md-12">
                <input type="text" name="subject" class="form-control" placeholder="Asunto" value="{{ old('subject') }}" required>
              </div>

              <div class="col-md-12">
                <textarea name="message" class="form-control" rows="6" placeholder="Mensaje" required>{{ old('message') }}</textarea>
              </div>

              <div class="col-md-12 text-center">
                <button type="submit" >Enviar</button>
              </div>

            </div>
          </form>

        </div>

      </div>
    </div>
  </section>

</main>

<footer id="footer" class="footer dark-background">
  <div class="container">
    <h3 class="sitename">Dave Crystal Clean</h3>
    <p>2026</p>
    <div class="social-links d-flex justify-content-center">
      <a href="#"><i class="bi bi-instagram"></i></a>
    </div>
  </div>
</footer>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<div id="preloader"></div>

<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>