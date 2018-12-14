<?php
session_start();
if(isset($_SESSION['pesan'])){
	echo $_SESSION['pesan'];
	unset($_SESSION['pesan']);
}
//pesan login sukses
if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
	header("location:home.php");
	exit;
}else{
//login gagal tampil form
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Login</title>
	<link rel="icon" href="images/mts.png" type="image/png" sizes="16x16">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="login.php" method="POST" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
					MTS n 1 GUNUNG KIDUL
					<br>
					<br>
					<span class="txt4 p-t-20">
					Sistem Informasi Perpustakaan
					</span>
					</span>

					<div class="flex-col-c p-t-0 p-b-20">
					<img src="images/mtsr.png" alt="">
					<br>
						<span class="txt1 p-b-0">
							Silahkan Login!
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							Masuk
						</button>
					</div>

					<div class="flex-col-c p-t-40 p-b-20">
						<span class="txt1 p-b-0">
						© Copyright 2018. TIF UIN SUKA. All Rights Reserved.
						</span>

					</div>
				</form>
				<?php } ?>
			</div>
		</div>
	</div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>