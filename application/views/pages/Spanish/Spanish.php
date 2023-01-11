<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Valle de la Luna</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/template/img/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>/template/img/icons/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url()?>/template/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="<?php echo base_url()?>/template/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>/template/css/creative.css" rel="stylesheet">
  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a  class="navbar-brand js-scroll-trigger" href="#page-top">Inicio</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Informacion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Imagenes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#app">Nuestra App</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Preguntas">Preguntas frecuentes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?php echo site_url("English/English"); ?>">Ingles</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Valle de La Luna</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Este valle es famoso por su conformación parecida a la superficie lunar, debido a las distintas estratificaciones y afloramientos salinos ocacionados por agentes naturales.</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="<?php echo site_url('Spanish/Historia')?>">Saber más</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Necesitas un mapa?</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Conoce las rutas para explorar el Valle de la Luna</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="<?php echo site_url("Spanish/Mapa");?>">Ver el mapa</a>
            <!--<a class="btn btn-light btn-xl js-scroll-trigger" href="<?php echo site_url("Descargas/Mapa.jpg");?>">Descargar Mapa</a>-->
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Servicios</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center" id="servicio_div">
            <div class="service-box mt-5 mx-auto" id="icono-servicios">
              <i class="fa fa-4x fa-institution text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Museo</h3>
              <p class="text-muted mb-0">Visita nuestro museo para conocer más a fondo la historia del valle</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center" id="servicio_div">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-coffee text-primary mb-3 sr-icons" id="icono-servicios"></i>
              <h3 class="mb-3">Cafetería</h3>
              <p class="text-muted mb-0">¡Ven y sírvete algún aperitivo antes de aventurarte al valle!</p>
            </div>
          </div>
            <div class="col-lg-3 col-md-6 text-center" id="servicio_div">
                <div class="service-box mt-5 mx-auto">
                  <i class="fa fa-4x fa-camera text-primary mb-3 sr-icons" id="icono-servicios"></i>
                  <h3 class="mb-3">Recuerdos</h3>
                  <p class="text-muted mb-0">¡Ven y llevate un hermoso recuerdo dentro del Valle!.</p>
                </div>
             </div>
        </div>
      </div>
    </section>

        <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url()?>/template/img/portfolio/fullsize/Anfiteatro.jpg">
              <img class="img-fluid" src="<?php echo base_url()?>/template/img/portfolio/thumbnails/Anfiteatro.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category">
                    Anfiteatro
                  </div>
                  <div class="project-name text-faded">
                    Conjunto de rocas sedimentarias que poseen forma de anfiteatro.
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url()?>/template/img/portfolio/fullsize/Duna_mayor.jpg">
              <img class="img-fluid" src="<?php echo base_url()?>/template/img/portfolio/thumbnails/Duna_mayor.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category">
                    Duna Mayor.
                  </div>
                  <div class="project-name text-faded">
                    Debebido a los fuertes vientos se ha dado origen a grandes campos de dunas actualmente muy activas.
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url()?>/template/img/portfolio/fullsize/Tres_marias.jpg">
              <img class="img-fluid" src="<?php echo base_url()?>/template/img/portfolio/thumbnails/Tres_marias.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category ">
                    Tres marías.
                  </div>
                  <div class="project-name text-faded">
                    Rocas evaporitas que están plegadas por fuerzas de presión recibiendo el nombre de domos salinos.
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url()?>/template/img/portfolio/fullsize/Ckari.jpg">
              <img class="img-fluid" src="<?php echo base_url()?>/template/img/portfolio/thumbnails/Ckari.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category ">
                    Mirador Ckari
                  </div>
                  <div class="project-name text-faded">
                    Mirador desde el cual se puede apreciar la cuenca del Salar de Atacama.
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url()?>/template/img/portfolio/fullsize/Mina_sal.jpg">
              <img class="img-fluid" src="<?php echo base_url()?>/template/img/portfolio/thumbnails/Mina_sal.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category">
                    Minas de Sal
                  </div>
                  <div class="project-name text-faded">
                    Minas conformadas por cristales de sal gema, generados por la cristalización a altas presión y ambientes sin humedad.
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url()?>/template/img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="<?php echo base_url()?>/template/img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category">
                    Lugar
                  </div>
                  <div class="project-name text-faded">
                    Imagen6
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>      
    </section>
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Contacto</h2>
            <hr class="my-4">
            <p class="mb-5">Informaciones de contacto</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>00-56-55-851574</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="<?php echo site_url('Spanish/Formulario')?>">Contacto@ValledelaLunaSPA.cl</a>
            </p>
          </div>
        </div>
        <div class="text-center">
          <a class="btn btn-primary btn-xl" id="activarFormulario" href="<?php echo site_url('Spanish/Formulario')?>">Contactar</a>  
        </div>   
        
      </div>
    </section>
    <section id="app">
      <div class ="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading">Prueba nuestra App</h2>
          <hr class="my-4">
          <p class="mb-5">Aplicación Valle de la Luna, incluye información de utilidad para todo aquel que desee o este visitando el Valle.</p>
        </div>
      </div>
      <div class="row">
          <a href='https://play.google.com/store/apps/details?id=com.moonvalley.mobile&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Get it on Google Play' src='<?php echo base_url()?>/template/img/Commons/Google.png' height="120" width="330" /></a>
        </div>
      </div>
    </section>
    <section id="Preguntas">
      <div class ="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading">Preguntas frecuentes.</h2>
          <hr class="my-4">
          <center><strong class="mb-5">¿Esta es una pregunta?</strong></center>
          <p class= "mb-5">Esta es una repuesta a esa pregunta</p>
        </div>
      </div>
        </div>
      </div>
    </section>
        <!-- Footer -->
    <footer>
      <div class="container">
          <div class="row">
        <a href="<?php echo site_url('Spanish/Formulario')?>">Reclamos o sugerencias</a>
          </div>        
          <p class="m-0 text-center text-black small">Copyright &copy; Moon Valley 2018</p>  
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>/template/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url()?>/template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>/template/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url()?>/template/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url()?>/template/js/creative.min.js"></script> 
  </body>
</html>
