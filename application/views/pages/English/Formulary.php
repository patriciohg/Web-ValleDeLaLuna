<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
	<title>Contact Form</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>/template/img/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/css/form_util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/template/css/form.css">

</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="<?php echo site_url('Mail/sendMail'); ?>" >
				<span class="contact100-form-title">
					Send Us A Message
				</span>


				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<label class="label-input100" for="name">Name</label>
					<input id="name" class="input100" type="text" name="name" placeholder="Enter your name...">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Valid email is required : example@Valledelaluna.cl">
					<label class="label-input100" for="email">Email Address</label>
					<input id="email" class="input100" type="text" name="mail" placeholder="Enter your email...">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100">
					<div class="label-input100">Reason</div>
					<div>
						<select class="js-select2" name="reason">
							<option>Commentary</option>
							<option>Suggestion</option>
							<option>Claim</option>
							<option>Other reason</option>
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
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('<?php echo base_url(); ?>/template/img/Commons/Header.jpg');">
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/template/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/template/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/template/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>/template/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>template/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
		$(".js-select2").each(function(){
			$(this).on('select2:open', function (e){
				$(this).parent().next().addClass('eff-focus-selection');
			});
		});
		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				$(this).parent().next().removeClass('eff-focus-selection');
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/template/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>/template/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/template/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/template/js/form.js"></script>
</body>
</html>