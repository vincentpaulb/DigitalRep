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
  <link rel="stylesheet" type="text/css" href="index.css">
  <script src="index.js"></script>
</head>
<body>



<div class="container">  <!-- USC LOGO  -->
	<div class="row">
		<br>
		<div class="col-sm-8"><p><a href="http://usc.edu.ph/" target="_blank"><img src="header.png" alt="USC Logo" id="usclogo"></a></p></div>
		<div class="col-sm-4"><h5 style="text-align: right;"><a href="login.php" style="font-family: Century"> Login </a></h5></div>
	</div>
</div>

<div class="header" style="background: url('background.jpg');">

<br>

	<div class="container">
		<div class="row"> <!-- BANNER -->
			<div class="col-sm-8">
				<img src="logo.jpg" alt="Logo" id="digitrepo">
			</div>

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
					<input style="font-family: Century; font-size: 15px" class="btn" type="submit" value="SIGN UP" onclick="signup()"/>
	
				</form>
			</div>
		</div>
	</div>

<br>

</div>

<br>

<!-- BODY -->
<div class="container" style="border-style: solid; border-width: 0px 1px 0px 0px;">
  <div class="row"> 
    <div class="col-sm-9" style="border-style: solid; border-width: 0px 1px 0px 1px;">
		<h1 style="font-family: Century" >DIGITAL REPOSITORY</h1><br> 
		<p  style="font-family: Century">Digital Repository is a digital service that collects, preserves, and distributes digital material. Repositories are important tools for preserving an organization's legacy, they facilitate digital preservation and scholarly communication.</p>

		<h3 style="font-family: Century">COMMUNITIES</h3>
		<p style="font-family: Century">Select a community to browse its collections.</p>
		<ul style="list-style-type:none">
  			<li><i class="fa fa-book"></i><a href="###" style="font-family: Century; color: #0071b2; text-decoration-line: none;" target="_blank"> Audio Visual Center</a></li>
  			<li><i class="fa fa-book"></i><a href="###" style="font-family: Century; color: #0071b2; text-decoration-line: none;" target="_blank"> Basic Education</a></li>
  			<li><i class="fa fa-book"></i><a href="###" style="font-family: Century; color: #0071b2; text-decoration-line: none;" target="_blank"> Cebuano Study Center</a></li>
  			<li><i class="fa fa-book"></i><a href="###" style="font-family: Century; color: #0071b2; text-decoration-line: none;" target="_blank"> E-books Collection</a></li>
  			<li><i class="fa fa-book"></i><a href="###" style="font-family: Century; color: #0071b2; text-decoration-line: none;" target="_blank"> Electronic Theses & Dissertations</a></li>
  			<li><i class="fa fa-book"></i><a href="###" style="font-family: Century; color: #0071b2; text-decoration-line: none;" target="_blank"> Publications</a></li>
  			<li><i class="fa fa-book"></i><a href="###" style="font-family: Century; color: #0071b2; text-decoration-line: none;" target="_blank"> Serials Collection</a></li>
		</ul>

    </div>
    <div class="col-sm-3">
	 	<fieldset>
  			<legend style="font-family: Century;">Search Digital Repository</legend>
  			<input style="font-family: Century" type="text search" placeholder="Search...">
	 		<button href="###"><i class="fa fa-search"></i></button>
 	  	</fieldset>
 	  	<hr>
 	  	<fieldset>
 	  		<legend style="font-family: Century;">Browse</legend>
 	  		<ul>
 	  			<li><a href="###" style="font-family: Century; color: #0071b2; text-decoration-line: none;" target="_blank">Communities and Collections</a></li>
  				<li><a href="###" style="font-family: Century; color: #0071b2; text-decoration-line: none;" target="_blank">By Issue Date</a></li>
  				<li><a href="###" style="font-family: Century; color: #0071b2; text-decoration-line: none;" target="_blank">Authors</a></li>
  				<li><a href="###" style="font-family: Century; color: #0071b2; text-decoration-line: none;" target="_blank">Titles</a></li>
  				<li><a href="###" style="font-family: Century; color: #0071b2; text-decoration-line: none;" target="_blank">Subjects</a></li>
  			</ul>
 	  	</fieldset>
    </div>
  </div>
</div>

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