<?php  

if(isset($_POST['sub']))
{
	include_once '../config.php';
	$name=$_POST['name'];
	$email= $_POST['email'];
	$phone=$_POST['phone'];
	$pass = $_POST['pass'];
	$address=$_POST['address'];
	$country=$_POST['country'];
	$passmd = md5($pass);

	$insert2 = "insert into login values('$email','$passmd','client')";
	$insert = "insert into client values('', '$name','$email','$phone','$passmd','$address','$country')";
	$query2 = mysqli_query($conn, $insert2);
	$query = mysqli_query($conn, $insert);
	echo "<script>
		window.location.href='../login.php'
		</script>

	";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign up </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title">
					<span class="login100-form-title-1">
						Sign Up
					</span>
				</div>

				<form class="login100-form validate-form" action="clientsignup.php" method="POST">
    				
                <div class="wrap-input100 validate-input m-b-26" data-validate="Name is required">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="name" placeholder="Enter Name">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Address name is required">
						<span class="label-input100">Address</span>
						<input class="input100" type="text" name="address" placeholder="Enter Address">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Country is required">
						<span class="label-input100">Country</span>
						<input class="input100" type="text" name="country" placeholder="Enter Country">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter Email">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Mobile is required">
						<span class="label-input100">Mobile Number</span>
						<input class="input100" name="phone" accept="number" maxlength="10" placeholder="Enter Mobile number">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					
					<div class="container-login100-form-btn">
					<input type="submit" class="login100-form-btn" name = "sub" value = "Register" >
					
					
					</div>
					<p style="margin-top:15px;"><a href="../login.php">Already have account?</a></p>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/login.js"></script>

</body>
</html>