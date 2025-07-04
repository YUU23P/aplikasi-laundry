<!DOCTYPE html>
<html lang="en">

<head>
	<title>Wanoz Laundry</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets/login/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets/login/images/bgg.jpg);">
					<span class="login100-form-title-1">
					Selamat Datang di Wanoz Laundry
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="ceklogin.php">

					<?php if (isset($_GET['msg'])) : ?>
						<div class="alert alert-danger w-100 text-center" role="alert">
							<small class="text-danger"><?= $_GET['msg'];  ?></small>
						</div>
					<?php endif ?>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<input class="input100" type="text" name="username" placeholder="Username" autocomplete="off">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" autocomplete="off">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							<b>Login</b>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/animsition/js/animsition.min.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/bootstrap/js/popper.js"></script>  -->
	<!-- <script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/select2/select2.min.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/daterangepicker/moment.min.js"></script>  -->
	<!-- <script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/countdowntime/countdowntime.js"></script>  -->
	<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->

</body>

</html>