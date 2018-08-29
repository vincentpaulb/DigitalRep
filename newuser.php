<?php
if(isset ($_POST['username']) && isset ($_POST['password']) && isset ($_POST['email']))
{
	$con = mysqli_connect("localhost","root","") or die("cannot be");
	mysqli_select_db($con,"digitalrepository") or die("can't");
	$query = "INSERT INTO user(username,password,email) VALUES('".$_POST['username']."', '".$_POST['password']."', '".$_POST['email']."')";
	mysqli_query($con,$query);

	echo "<script type='text/javascript'>alert('SUCCESSFULLY REGISTERED.')</script>}";
	
	header("Location:signup.php");
}


?>