<?php
	// $hashed_pass = password_hash('987654321', PASSWORD_DEFAULT);
	// echo $hashed_pass;
	ini_set('session.gc_maxlifetime', 600);
	session_start();

	// Check if the user is already logged in
	if(isset($_SESSION['user_id']) && isset($_SESSION['user_email']) && isset($_SESSION['user_type'])){

		// Redirect to the home page
		if ($_SESSION['user_type'] === "student") {
			header("Location: userdashboard/index.php?menu=mainpage");
		} else if ($_SESSION['user_type'] === "admin") {
			header("Location: userdashboard/adminIndex.php?menu=mainpage");
		} else if ($_SESSION['user_type'] === "driver") {
			header("Location: userdashboard/driverIndex.php?menu=mainpage");
		}

		exit; // Make sure to exit the script after the redirect
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>VGU Ticket Booking - Login Site</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="loginstyle/images/icons/vgulogo40px.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginstyle/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginstyle/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginstyle/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginstyle/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginstyle/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginstyle/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginstyle/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginstyle/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginstyle/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginstyle/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="../controller/auth.php" method="POST">
					<span class="login100-form-title p-b-26">
						<img src="loginstyle/images/vgulogo2.png" alt = "VGU Online Bus Ticket Logo" class="logo_responsive">
					</span>
					<span class="login100-form-title p-b-48">
						<!--<i class="zmdi zmdi-font"></i>-->
					</span>

					<?php 
					if (isset($_GET['error'])) { ?>
						<div class="alert alert-danger" role="alert">
							<?=$_GET['error']?>
						</div>
					<?php } ?>


					<div class="wrap-input100 validate-input" data-validate = "Invalid User ID!">
						<input class="input100" type="text" name="user">
						<span class="focus-input100" data-placeholder="User ID"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Invalid Password!">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login">
								Login 
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Forgot your password?
						</span>

						<a class="txt2" href="#">
							Contact Admins
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="loginstyle/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="loginstyle/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="loginstyle/vendor/bootstrap/js/popper.js"></script>
	<script src="loginstyle/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="loginstyle/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="loginstyle/vendor/daterangepicker/moment.min.js"></script>
	<script src="loginstyle/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="loginstyle/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="loginstyle/js/main.js"></script>

</body>
</html>