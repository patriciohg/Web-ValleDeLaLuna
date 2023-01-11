<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <meta name="author" content="">
  <link href="<?php echo base_url()?>/template/css/map.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>template/img/icons/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url(); ?>template/img/icons/favicon.ico" type="image/x-icon">
  <title>Mapa del Valle</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a  class="navbar-brand js-scroll-trigger" href="#page-top">Inicio</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Spanish/Spanish#about') ?>">Informacion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Spanish/Spanish#services') ?>">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Spanish/Spanish#portfolio') ?>">Imagenes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Spanish/Spanish#contact') ?>">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Spanish/Spanish#app') ?>">Nuestra App</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Spanish/Spanish#Preguntas') ?>">Preguntas frecuentes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?php echo site_url("English/Map"); ?>">Ingles</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="img-contenedor">
        <img src="<?php echo base_url();?>template/img/Commons/Mapa_valle.jpg"/>    
    </div>
    
    
    <footer>
      <div class="container">
        <p class="m-0 text-center text-black small">Copyright &copy; Moon Valley 2018</p>
      </div>
    </footer>
    <script src="<?php echo base_url()?>/template/js/mapa.js"></script>    

</body>
</html>