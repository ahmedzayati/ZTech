<?php

	$bdd = new PDO('mysql:host=localhost;dbname=projet_daw;charset=utf8', 'root', '');



$name=$_POST['name'];
$price=$_POST['price'];
$categorie=$_POST['categorie'];
$imagename=$_FILES["myimage"]["name"]; 
$description=$_POST['description'];
$marque=$_POST['marque'];
$quantite=$_POST['quantite'];

$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));


$insert_image="INSERT INTO produit (`imagename`, `imagetmp`,`price`,`categorie`,`nom`,`description`,`marque`,`quantite`) VALUES('$imagetmp','$imagename','$price','$categorie','$name','$description','$marque','$quantite')";

$rep=$bdd->query($insert_image);
$req="select * from produit";
$repp=$bdd->query($req);
header("location:accueil.php")
?>
