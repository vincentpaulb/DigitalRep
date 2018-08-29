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
  <link rel="stylesheet" type="text/css" href="forgetpass.css">
  <script src="forgetpass.js"></script>
</head>
<body>

<br>
<div class="container"> <!-- USC LOGO  -->
	<div class="row">
		<div class="col-sm-8"><p><a href="http://usc.edu.ph/"><img src="header.png" alt="USC Logo" id="usclogo"></a></p></div>
	</div>
</div>

<hr>

<div class="container">
	<div class="row"> <!-- BANNER -->
		
		<div class="col-sm-4">
			 
			<form id="form2" method="POST" onsubmit="return false">
			<p style="font-family: Century; font-size: 25px"">FORGOT PASSWORD?</p>
			
				<label style="font-family: Century" for="email">Email Address</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-envelope"></i>
					</div>
					<input class="text" name="email" required type="email" placeholder="Enter Email" />
				</div>
			
				<label style="font-family: Century" for="username">New Password</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-key"></i>
					</div>
					<input class="text" name="password" id="password" required onkeyup='check();' type="password" placeholder="Enter Password"/>
				</div>
	
				<label style="font-family: Century" for="username">Repeat Password</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-key"></i>
					</div>
					<input class="text" name="reppassword" id="reppassword" required onkeyup='check();' type="password" placeholder="Repeat Password"/>
				</div>
				
				<span id="message" style="font-family: Century; color: #660000; "></span>
				<br>
				<input style="font-family: Century; font-size: 15px" class="btn" type="submit" value="SUBMIT" onclick="submit1()"/>

			</form>
			
			<br>
			
			<button id="button1"> <a href="login.php" id="a1" ><i class="fa fa-reply"> LOGIN PAGE</i></a></button>
		</div>
	</div>
</div>

<hr size="20">


<br>

<br>

<div class="container">
	<div class="row">
		<div class="col-sm-9"><footer style="font-family: Century">&copy; Copyright 2018. All Rights Reserved. </footer></div>
	</div>
</div>

<br>


</body>
</html>