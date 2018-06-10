<?php 
if(isset($_POST['pass'])){
	$pass_tmp=$_POST['pass'];
	$pseudo_tmp=$_POST['pseudo'];
	$bdd = new PDO('mysql:host=localhost;dbname=projet_daw;charset=utf8', 'root', '');
	$query = "SELECT pseudo,pass FROM user ";
    $result = $bdd->query($query); 
    $row=$result->fetch();
    if ($row['pass']!=$pass_tmp  || $row['pseudo']!=$pseudo_tmp) {
    	echo "<script>alert('erreur');window.location.replace('accueil.php');</script>";
    }
    else
    {
    	session_start(); 
        $_SESSION['nom']=$pseudo_tmp;
        header("location:../admin_panel/admin_page.php");

    }
}
 ?>

