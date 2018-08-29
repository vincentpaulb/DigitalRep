<?php
if(isset ($_POST['password']) && isset ($_POST['email']))
{
	$con = mysqli_connect("localhost","root","") or die("cannot be");
	mysqli_select_db($con,"digitalrepository") or die("can't");
	
	$pass = $_POST['password'];
    $em = $_POST['email'];
		
	$query = "UPDATE user SET password = $pass WHERE email = $em";
	
	mysqli_query($con,$query);
	
	echo "<script type='text/javascript'>alert('SUCCESSFULLY UPDATED.')</script>}";
	header("Location:forgetpass.php");
}


?>