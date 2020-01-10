
<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration</title>
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
	<div id="full">
		<div id="inner_full">
			
			<div id="body">
				<div class="container-login100" style="background-image: url('images/bl.jpg');">
				<br>
				<?php
				$un=$_SESSION['un'];
				if(!$un)
				{
					header("Location:index.php");
				}
				?>
				<h1 style="padding-top: 10px; color: white;"><center>List of Hospitals and Receiptents</center></h1>
				<jumbotron><div style=" background-color: white; width:100%; height:100%;border-radius:10px;">
				<table align="center" border="1">
					<tr>
						<td><center><b><font color="#641E16">Hospital</b></center>
						<td><center><b><font color="#641E16">Receipent</b></center>
							<td><center><b><font color="#641E16">Blood</b></center>
								<td><center><b><font color="#641E16">Date</b></center>
					</tr>
					<?php
					$q=$db->query("SELECT * FROM receipent ORDER BY date ");
					$q->execute();
					while($r1=$q->fetch(PDO::FETCH_OBJ))
						{
							?>
							<tr>
								<td><center><font color="#808000"><center><?= $r1->hospital;?></center></td>
								<td><center><font color="#808000"><center><?= $r1->name;?></center></td>
								<td><center><font color="#808000"><center><?= $r1->bgroup;?></center></td>
								<td><center><font color="#808000"><center><?= $r1->date;?></center></td>
								
							</tr>
							<?php
						}
					
					?>
					
				</table>
				</div></jumbotron>
				
			</div>
			<div id="footer"><h4 align="center">Copyright@myprojecthd</h4>
			<p align="center" style="margin:5px;"><a href="logout.php"><font color="white">Logout</a></p> 

			</div>
		</div>
	</div>
</div>
</body>
</html>