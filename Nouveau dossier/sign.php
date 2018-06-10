 <?php 
	$bd = new PDO('mysql:host=localhost;dbname=cll', 'root', '');
	$email=$_POST['pseudo'];echo $email;
	$pass=$_POST['pass'];echo $pass;
	/*$name=$_POST['name'];echo $name;
	$country=$_POST['country'];echo $country;
	$add=$_POST['add'];echo $add;
	$zip=$_POST['zip'];echo $zip;
	$gender=$_POST['gender'];echo $gender;
	$preference=$_POST['preference'];echo $preference;
	$phone=$_POST['phone'];echo $phone;*/
	$bd->exec("insert into user (`pseudo`,`pass`) values ('$pseudo','$pass')");
	
/*header("Location:form.php");*/

 ?>
