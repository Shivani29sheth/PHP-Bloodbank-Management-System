
<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bl.jpg');">
			<span style="color: white; font-size: 40px; text-align: center; margin-right: 90px;">
				Welcome to Blood Bank<br> Management System
				</span>
			<div class="wrap-login100 p-t-30 p-b-50">
				
				<form action="" method="POST" class="login100-form validate-form p-b-33 p-t-5">

					<h4 style="padding-top: 10px; color: dimgray;"><center>ADMIN LOGIN</center></h4>

					<div class="wrap-input100 validate-input" data-validate = "Enter ID">
						
						<input class="input100" type="text" name="un" placeholder="Username" id="username" >
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="ps" placeholder="Password"  onmousedown="this.type='text'" onmouseup="this.type='password'" onmousemove="this.type='password'" id="password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

						<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
											<button class="login100-form-btn" name="sub" type="submit">
								Login
							</button>
						</div>
					</div>



				</form>
				<?php
			if(isset($_POST['sub']))
			{
				$un=$_POST['un'];
				$ps=$_POST['ps'];
				$q=$db->prepare("SELECT * FROM admin WHERE uname='$un' && pass='$ps'");
				$q->execute();
				$res=$q->fetchAll(PDO::FETCH_OBJ);
				if($res)
				{
					$_SESSION['un']=$un;
					header("Location:admin-home.php");
				}
				else
				{
					echo "<script>alert('Wrong User')</script>";
				}
			}
			?>


			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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
	<script src="js/main.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.4.0/firebase.js"></script>

</body>
</html>