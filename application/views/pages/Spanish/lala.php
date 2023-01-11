<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>Formulario Contacto</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/template/css/formulario.css">
	<link type="text/css" href="<?php echo base_url()?>/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/util_form.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/css/main_form.css">
<!--===============================================================================================-->
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a  class="navbar-brand js-scroll-trigger" href="<?php echo site_url("Spanish/Spanish"); ?>">Inicio</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url("Spanish/Spanish#about"); ?>">Informacion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url("Spanish/Spanish#services"); ?>">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url("Spanish/Spanish#portfolio"); ?>">Imagenes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url("Spanish/Spanish#contact"); ?>">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url("Spanish/Spanish#app"); ?>">Nuestra App</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url("Spanish/Spanish#Preguntas"); ?>">Preguntas frecuentes</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Idioma</a>
              <div class="dropdown-menu" >
                <a class="nav-link js-scroll-trigger" href="<?php echo site_url("English/Formulary"); ?>">Ingles</a>
                <a class="nav-link js-scroll-trigger" href="#">Otro idioma</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                    Send Us A Message
                </span>


                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <label class="label-input100" for="name">Full name</label>
                    <input id="name" class="input100" type="text" name="name" placeholder="Enter your name...">
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <label class="label-input100" for="email">Email Address</label>
                    <input id="email" class="input100" type="text" name="email" placeholder="Enter your email...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">What do you need?</div>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Please chooses</option>
                            <option>UI/UX Design</option>
                            <option>eCommerce Bussiness</option>
                            <option>Online Services</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <label class="label-input100" for="message">Message</label>
                    <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        Send
                    </button>
                </div>

                <div class="contact100-form-social flex-c-m">
                    <a href="#" class="contact100-form-social-item flex-c-m bg1 m-r-5">
                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="contact100-form-social-item flex-c-m bg2 m-r-5">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>

                    <a href="#" class="contact100-form-social-item flex-c-m bg3">
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                    </a>
                </div>
            </form>

            <div class="contact100-more flex-col-c-m" style="background-image: url('<?php base_url();?>template/img/Commons/Header.jpg');">
            </div>
        </div>
    </div>
<!--
    <div class="main-content">

        <form class="form-labels-on-top" method="post" action="<?php echo site_url('Mail/sendMail'); ?>">

            <div class="form-title-row">
                <h1>Ayudanos a mejorar, o dejanos tus dudas aqui!</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Nombre</span>
                    <input type="text" name="name">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Correo Electronico</span>
                    <input type="email" name="mail">
                </label>
            </div>


            <div class="form-row">
                <label>
                    <span>Razon</span>
                    <select name="reason">
                        <option value="Sugerencia">Sugerencia</option>
                        <option value="Comentario">Comentario</option>
                        <option value="Reclamo">Reclamo</option>
                        <option value="Otro">Otro</option>
                    </select>
                </label>
            </div>
    	    <div>
		        <label for="msg" name="msg">
		            <span>Comentario:</span>
		            <textarea id="msg"></textarea>
		        </label>
			</div>
            <div class="form-row">
                <button Class="btn" type="submit">Enviar!</button>
            </div>
        </form>
    </div>    
-->

	<script src="<?php echo base_url();?>/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>template/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>template/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>template/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>template/js/main_form.js"></script>
</body>
</html>