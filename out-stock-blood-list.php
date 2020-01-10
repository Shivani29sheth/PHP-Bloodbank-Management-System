
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
	<style type="text/css">
	td{
		width:200px;
		height:40px;
		color:white;
	}
	</style>
</head>
<body>
	
		
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
				
					<span style="color: white; font-size: 45px; text-align: center; margin-right: 30px; margin-top: 40px;">List of Blood Groups not in-stock</span>
<div class="wrap-login100 p-t-30 p-b-50" id="ff" >
				<center><jumbotron><div style=" background-color: white; width:48%; height:100%;border-radius:10px;">
				<table align="center" border="1">
					<tr>
						<th><center><b><font color="#800000">Blood Group</b></center></th>
						<th><center><b><font color="#800000">Quantity</b></center></th>
					</tr>
					<?php
					$q=$db->query("SELECT * FROM outstock_blood_list");
					while($r1=$q->fetch(PDO::FETCH_OBJ))
						{
							?>
							<tr>
								<td><font color="#808000"><center><?= $r1->bgroup;?></center></td>
								<td><font color="#808000"><center>0</center></td>
								
							</tr>
							<?php
						}
					
					?>
					
				</jumbotron></table>
				</div></center>
				
			</div>
			
		</div>
	

</body>
</html>