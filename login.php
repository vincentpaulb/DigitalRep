<!DOCTYPE html>
<html lang="en">
<head>
  <title>Digital Repository</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>


<div class="container">  <!-- USC LOGO  -->
	<div class="row">
		<br>
		<div class="col-sm-8"><p><a href="http://usc.edu.ph/"><img src="header.png" alt="USC Logo" id="usclogo"></a></p></div>
		<div class="col-sm-4"></div>
	</div>
</div>

<div class="header" style="background: url('background.jpg');">

<br>

<div class="container">
	<div class="row">  <!-- BANNER -->
		<div class="col-sm-8">
			<img src="logo.jpg" alt="Logo" id="digitrepo">
		</div>
		
		<div class="col-sm-4">
		<form action="login1.php" method="POST" id="form1">

				<p style="font-family: Century; font-size: 25px">LOG IN</p>
	
				<label style="font-family: Century" >Username or Email</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-user"></i>
					</div>
					<input class="text" name="Username" required type="text" placeholder="Enter Username or Email"/>
				</div>
				
				<label style="font-family: Century" >Password</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-key"></i>
					</div>
					<input class="text" name="Password" required type="password" placeholder="Enter Password"/>
				</div>
				<br>
				<p><a href="forgetpass.php" style="color: black">Forgot Password?</a></p>
				<input style="font-family: Century; font-size: 15px" class="btn" type="submit" value="LOGIN" name="Login" />


				<p style="text-align: right"><a href="signup.php" style="color: black">Create an Account?</a></p>

			</form>
			
			<br>
			
		</div>
	</div>
</div>

<br>

</div>


<br>
<br>

<div class="container">
	<div class="row">
		<div class="col-sm-9"><footer style="font-family: Century">&copy; Copyright 2018. All Rights Reserved. </footer></div>
	</div>
</div>



</body>
</html>