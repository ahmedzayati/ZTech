<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=projet_daw;charset=utf8', 'root', '');
	$req="DELETE FROM produit";
	$r=$bdd->query($req);
	header("location:accueil.php")
	?>