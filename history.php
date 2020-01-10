
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
				
					
<div class="wrap-login100 p-t-30 p-b-50" >
	<span style="color: white; font-size: 45px; text-align: center; margin-right: 30px; margin-top: 40px;"><center>History Log</center></span>
				<center><jumbotron><div style=" background-color: white; width:100%; height:100%;border-radius:10px;">
					<center><b><font color="black">Donor Registration</b></center>
						<table align="center" border="1">
					
					<tr>
						<th><center><b><font color="#800000">id</b></center></th>
						<th><center><b><font color="#800000">timestamp</b></center></th>
							<th><center><b><font color="#800000">action</b></center></th>
					</tr>

					<?php
					$q=$db->query("SELECT * FROM data_log");
					while($r1=$q->fetch(PDO::FETCH_OBJ))
						{
							?>

							<tr>
								<td><font color="#808000"><center><?= $r1->id;?></center></td>
								<td><font color="#808000"><center><?= $r1->timestamp;?></center></td>
									<td><font color="#808000"><center><?= $r1->action;?></center></td>
								
								
							</tr>
							<?php
						}
					
					?>
					
				</table>
					<center><b><font color="black">Receiptent Registration</b></center>
						<table align="center" border="1">
					
					<tr>
						<th><center><b><font color="#800000">id</b></center></th>
						<th><center><b><font color="#800000">timestamp</b></center></th>
							<th><center><b><font color="#800000">action</b></center></th>
					</tr>
					<?php
					$q=$db->query("SELECT * FROM data_log2");
					while($r1=$q->fetch(PDO::FETCH_OBJ))
						{
							?>

							<tr>
								<td><font color="#808000"><center><?= $r1->id;?></center></td>
								<td><font color="#808000"><center><?= $r1->timestamp;?></center></td>
									<td><font color="#808000"><center><?= $r1->action;?></center></td>
								
								
							</tr>
							<?php
						}
					
					?>
					
				</table>

				</div></jumbotron></center>
				
			</div>
			
		</div></div>
	

</body>
</html>