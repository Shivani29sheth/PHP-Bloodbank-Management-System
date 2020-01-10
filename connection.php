<?php 
$db = new PDO('mysql:host=localhost;dbname=mypro_bbms', 'root', 'anurag123'); 
if($db)
{
	echo " ";
}
else
{
	echo "Not Connect";
}
?>