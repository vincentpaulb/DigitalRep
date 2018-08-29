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
  <link rel="stylesheet" type="text/css" href="signup.css">
  <script src="signup.js"></script>
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
		<form method="POST" id="form1" onsubmit="return false">
			<p style="font-family: Century; font-size: 25px">CREATE ACCOUNT</p>
	
				<label style="font-family: Century" for="username">Username</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-user"></i>
					</div>
					<input class="text" name="username" required type="text" placeholder="Enter Username"/>
				</div>
	
				<label style="font-family: Century" for="email">Email Address</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-envelope"></i>
					</div>
					<input class="text" name="email" required type="email" placeholder="Enter Email" />
				</div>

				<label style="font-family: Century" for="password">Password</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-key"></i>
					</div>
					<input class="text" name="password" id="password" required type="password" onkeyup='check();' placeholder="Enter Password"/>
				</div>
				
				<label style="font-family: Century" for="reppassword">Confirm Password</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-key"></i>
					</div>
					<input class="text" name="reppassword" id="reppassword" required type="password" onkeyup='check();' placeholder="Repeat Password"/>
				
				</div>
				<span id="message" style="font-family: Century; color: #660000; "></span>
				<br>
				<input style="font-family: Century; font-size: 15px" class="btn" type="submit" value="SIGN UP" onclick="signup()" />
	
			</form>
			
			<br>
			<button id="button1"> <a href="login.php" id="a1"><i class="fa fa-reply"> LOGIN PAGE</i></a></button>
		</div>
	</div>
</div>

<br>
<br>

<div class="footer" style="background: url('background.jpg');">

	<div class="container">
		<div class="row">
		
			<div class="col-sm-3">
				<h4 style="font-family: Century; color: black;">Links</h4>
				<a href="http://usc.edu.ph" style="font-family: Century; color: black; text-decoration-line: none;" target="_blank"><i class="fa fa-chain"></i> USC Website</a>
				<br>
				<a href="https://ismis.usc.edu.ph" style="font-family: Century; color: black; text-decoration-line: none;" target="_blank"><i class="fa fa-chain"></i> ISMIS 2.0</a>
				<br>
				<a href="http://library.usc.edu.ph" style="font-family: Century; color: black; text-decoration-line: none;" target="_blank"><i class="fa fa-chain"></i> USC Library</a>
				<br>
				<a href="http://www.usc.edu.ph/category/section/15/academic" style="font-family: Century; color: black; text-decoration-line: none;" target="_blank"><i class="fa fa-chain"></i> Academic Calendar</a>
				<br>
				<a href="http://qao.usc.edu.ph" style="font-family: Century; color: black; text-decoration-line: none;" target="_blank"><i class="fa fa-chain"></i> Management of University Manual</a>
			</div>
			
		</div>
	</div>

	<br>

	<div class="container">
		<div class="row">
			<br>
			<div class="col-sm-9"><footer style="font-family: Century;">&copy; Copyright 2018. All Rights Reserved. </footer></div>
			<br>
			<br>
		</div>
	</div>

</div>


</body>
</html>