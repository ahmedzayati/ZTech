<?php

	$bdd = new PDO('mysql:host=localhost;dbname=projet_daw;charset=utf8', 'root', '');
	$email=$_POST['email1'];
	$country=$_POST['country'];
	$message=$_POST['message'];
	$date=date("Y-m-d h:i:sa");
	$req="INSERT INTO message (`email`,`country`,`message`,`date`) values ('$email','$country','$message','$date')";
	$rep=$bdd->query($req);
	header("Location:../user_panel/home_page.php");
	?>