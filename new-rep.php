
<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration</title>
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
			<!-- <div id="header"><h2><a href="admin-home.php" style="text-decoration:none; color: white;">Blood Bank Management System</a></div> -->
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
				
				<!-- <h1 style="padding-top: 10px; color: white; font-size: 40px; text-align: center;">Donor Registration<center></center></h1> -->

				
				<center><div id="form">
					<form action="" method="post">
						<h4 style="padding-top: 10px; color: dimgray;"><center>New Receiptent</center></h4>
					<table>
						<tr>
							<td width="200px" height="50px">Enter Name</td>
							<td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name" style="border:1px solid dimgray;"></td>
							<td width="200px" height="50px">Enter Age</td>
							<td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"  style="border:1px solid dimgray;"></td>
							
						</tr>
						<tr>
							
							<td width="200px" height="50px">Enter Sex</td>
							<td width="200px" height="50px">
								<select name="sex"  style="border:1px solid dimgray;">
									<option>M</option>
									<option>F</option>
									<option>other</option>
									
									
								</select>
								<td width="200px" height="50px">Select Blood Group</td>
							<td width="200px" height="50px">
								<select name="bgroup"  style="border:1px solid dimgray;">
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
					
						<tr>
							
							
							<td width="200px" height="50px">Date of Receipt</td>
							<td width="200px" height="50px"><input type="Date" name="date"  style="border:1px solid dimgray;" ></td>
							<td width="200px" height="50px">Select Hospital</td>
						<td width="200px" height="50px">
								<select name="hospital"  style="border:1px solid dimgray;">
									<option>Max</option>
									<option>Fortis</option>
									<option>Apollo</option>
									<option>Hindu Mission</option>
									<option>SIMS</option>
									<option>Global</option>
									<option>Rockland</option>
									
									
								</select>
							</td>
							
						</tr>

						<tr>
							<td width="200px" height="50px">Enter E-Mail</td>
							<td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-Mail"  style="border:1px solid dimgray;"></td>
							<td width="200px" height="50px">Enter Mobile Number</td>
							<td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile no." style="border:1px solid dimgray;"></td>
						</tr>
						
					</table>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
											<button class="login100-form-btn" name="sub" type="submit">
								Submit
							</button>
						</div>
					</div>
				</form>
				<?php

				if(isset($_POST['sub']))
				{
					$name=$_POST['name'];
					$age=$_POST['age'];
					$sex=$_POST['sex'];
					$bgroup=$_POST['bgroup'];
					$date=$_POST['date'];
					$hospital=$_POST['hospital'];
					$email=$_POST['email'];
					$mno=$_POST['mno'];
					
					$q=$db->prepare("INSERT INTO receipent(name,age,sex,bgroup,date,hospital,email,mno) VALUES (:name,:age,:sex,:bgroup,:date,:hospital,:email,:mno)");
					$q->bindValue('name',$name);
					$q->bindValue('age',$age);
					$q->bindValue('sex',$sex);
					$q->bindValue('bgroup',$bgroup);
					$q->bindValue('date',$date);
					$q->bindValue('hospital',$hospital);
					
					$q->bindValue('email',$email);
					$q->bindValue('mno',$mno);
					if($q->execute())
					{
						echo "<script>alert('Updated Successfully')</script>";

					}
					else
					{
						echo "<script>alert('Updation failed')</script>";
					}
				}
				
				?>
				</div></center>
			</div>
			<div id="footer"><h4 align="center">Copyright@myprojecthd</h4>
			<p align="center" style="margin:5px;"><a href="logout.php"><font color="white">Logout</a></p> 

			</div>
		</div>
	</div>
</div></div>
</body>
</html>