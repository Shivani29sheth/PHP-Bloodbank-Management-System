
<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
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
	<div id="full">
		<div id="inner_full">
			

			<div id="body">

				<div class="limiter">

		<div class="container-login100" style="background-image: url('images/bl.jpg');">
			
				<br>
				<?php
				$un=$_SESSION['un'];
				if(!$un)
				{
					header("Location:index.php");
				}
				?>
				
				<span style="color: white; font-size: 50px; text-align: center; margin-top:12px margin-left:600px;">Welcome Admin</span>
			<table><tr>
				<td><a href="history.php"><button type="button" class="btn btn-info" style="margin-left:70px;">History</button></a>
			
			<a href="logout.php"><button type="button" class="btn btn-danger" style="margin-left:30px;">Logout</button></a></td>
				
				</tr></table>
			
				<div class="wrap-login100 p-t-30 p-b-50" id="ff" >
				<ul>
					<li><a href="donor-red.php">Donor Registration</a></li>
					<li><a href="donor-list.php">Donor List</a></li>
					<li ><a href="new-rep.php">New Receiptent</a></li>
					
				</ul>
				<br><br><br><br>
				<ul>
					<li><a href="stock-blood-list.php"> Blood Stock List</a></li>
					<li><a href="out-stock-blood-list.php">Blood Out Stock  List</a></li>
					<li><a href="hospital-list.php">Hospital List</a></li>
				</ul>
				<br><br><br><br>
				
				<ul>
					
					<li><a href="find-donor.php">Emergency Donor</a></li>
				</ul>
				</div>
			
		</div>
	</div>
</div>
</div>


</body>
</html>