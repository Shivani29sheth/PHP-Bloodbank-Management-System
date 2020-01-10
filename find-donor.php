
<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
	td{
		width:200px;
		height:40px;
		color:white;
	}
	</style>
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
			<span style="color: white; font-size: 45px; text-align: center; margin-right: 70px;">
				Find Emergency Donor</span>
			<div class="wrap-login100 p-t-30 p-b-50" style="width:60%; height:100%;">
				
				<form action="" method="POST" class="login100-form validate-form p-b-33 p-t-5">

					<form action="" method="post">
				<table >
					
					<tr>
							<td></td>
							<td width="200px" height="50px" style="color:black; font-size:20px; padding-left:20px;">Select Blood Group</td>
							<td width="200px" height="50px" style="padding-left:20px;">
								<select name="bgroup">
									<option>None</option>
									<option>O+</option>
									<option>O-</option>
									<option>AB+</option>
									<option>AB-</option>
									<option>A+</option>
									<option>A-</option>
									<option>B+</option>
									<option>B-</option>
									
								</select>
							</td>
					</tr>
				</table>
				
										<center>	<button class="login100-form-btn" name="sub" type="submit">
								Find
							</button>
						</center>
					</div>
			
			<h3 width="200px" height="50px" style="color:white; font-size:30px; padding-left:20px;"><center>Contact information of Donor Having selected Blood Group:<center></h3>
					
			<?php
			if(isset($_POST['sub']))
			{
				$bg=$_POST['bgroup'];
				$q=$db->prepare("SELECT name,address,email,mno FROM donor_registration WHERE bgroup='$bg'");
				$q->execute();


				while($res=$q->fetch(PDO::FETCH_OBJ))
					{ 
						
				?> <center><table>
							<tr>
								<td><center><?= $res->name;?></center></td>
								<td><center><?= $res->address;?></center></td>
								<td><center><?= $res->email;?></center></td>
								
								<td><center><?= $res->mno;?></center></td>
								
							</tr></table></center>
							<?php
						
			}}
			?>
			</div>



				</form></form>
				


			</div>
		</div>
	
	

</body>
</html>