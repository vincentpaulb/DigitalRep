<?php
	if(isset($_POST['Username']) && isset($_POST['Password']) && isset($_POST['Login']))
	{

	$con = mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "digitalrepository");
	
	$query = mysqli_query($con, 'SELECT id FROM user WHERE username = "'.$_POST['Username'].'" OR email = "'.$_POST['Username'].'" AND password = "'.$_POST['Password'].'"');
	
	if(mysqli_num_rows($query) > 0){
		header("Location:user.php");
	}
	else
	{
		echo "<script type='text/javascript'>alert('ERROR! Username or Password is incorrect.')</script>";
		header("Location:login.php");
	}
	
	}
?>