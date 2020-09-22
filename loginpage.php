<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	</head>
	<style>
body {
		background-color: #eafaff;
		font-family: verdana;
		margin: 0;
		padding: 0;
	}
		
/* Header */
header {
	width: 100%;
	height: 10%;
	background-color: #5D5E5D;
	border-bottom: 1px solid #353635;
}
.header{	
	background-color: #eafaff;
}
 .headerimage {
	 width: 100%;
	 height: 10%;
	 margin-bottom: -80px;
 }

/* Style the top navigation bar */
.topnav {
	overflow: hidden;
	background-color: #243665;
	height: 90px;
	position: relative;
}

/* Style the topnav links */
.topnav a {
	display: block;
	color: #f2f2f2;
	text-align: center;
	padding: 20px 20px;
	text-decoration: none;
	margin-top: 15px;
}
#a1 {
	float: right;
}
#a2 {
	float: left;
	margin-top: -1px;
}

	/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
	 
/* Hospital Penawar Icon */
.logo {
	color: #fff;
	font-weight: bold;
	margin-left: auto;
	letter-spacing: 4px;
	margin-right: auto;
	text-align: center;
	padding-top: 15px;
	line-height: 2em;
	font-size: 22px;
}
	
/* Get In Touch */
.hero_header {
	color: black;
	text-align: center;
	margin: 0;
	letter-spacing: 4px;
}

/* Content */
h1 {
	margin-top: 100px;
	letter-spacing: 2px;
	font-size: 35px;
}
input {
	background-color: white;
	border: none;
	width: 330px;
	height: 50px;
	margin-top: 10px;
	font-family: verdana;
	font-size: 15px;
	letter-spacing: 1px;
	padding-left: 15px;
	border-radius: 8px;
	text-decoration: none;
	display: inline-block;
	box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3);
}
::placeholder {
	color: #1d2951;
	opacity: 0.5;
	font-size: 17px;
	
}
button {
	background-color: #22276e;
	color: white;
	border: none;
	font-size: 16px;
	margin-top: 20px;
	width: 344px;
	height: 55px;
	font-family: verdana;
	letter-spacing: 1px;
	cursor: pointer;
	border-radius: 8px;
	text-decoration: none;
	display: inline-block;
	box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.3);
}
button:hover {
	opacity: 0.8;
}
a {
	color: #1d2951;
	font-family: verdana;
	font-size: 15px;
	letter-spacing: 1px;
	padding-left: 180px;
}

/* Footer */
footer {
	color: black;	
	padding-top: 60px;
	padding-bottom: 60px;
}
 .footerimage {
	 width: 100%;
	 height: 80px;
 }
	 
 /* Copyrights */
.copyright {
	background-image: url('Footer Penawar.jpg');
	text-align: center;
	color: #FFFFFF;
	text-transform: uppercase;
	font-weight: lighter;
	letter-spacing: 2px;
	border-top-width: 2px;
}
a {
	text-decoration:none;
	color: black;
}
#btnlink {
	background-color: #4F94CD;
	color: white;
	padding: 6px;
	border: 1px solid #4F94CD;
	border-radius: 3px;
	box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.08);
}
#btnlink:hover {
	background-color: #0089B9;
}
#pfoot {
	margin-top: -50px;
}
	</style>
	
	<body>
	
	<!-- Header -->
	<div class="header">
		<img src="Header Penawar.jpg" alt="" class="headerimage">
	</div>
	   
		<!-- Navigation Bar -->
	   <div class="topnav">
		   <a id="a2" href="welcome.php"><img src="Hospital Penawar Icon.png" alt="logo" class="logo2" width="260" height="50"></a>
		   
		</div>
	
	
	<div>
	<center>
		<h1>Log in</h1>
	
		<form method="POST" action="linktodashboard.php">	
			<div>
				<br>
				<input type="text" placeholder="Username" name="username" required><br>
				<input type="password" placeholder="Password" name="password" required><br><br>
				
				<!--<a href="#">Forgot password ? </a> <br>-->
				<button class="login" type="submit">LOGIN</button>
			</div>
		</form>
	</center>
	</div>
	
	<!-- Footer -->
	<br>
	<footer id="contact">
		<p class="hero_header">GET IN TOUCH WITH US</p>
	</footer>
		
		<!-- Copyrights -->
			<div class="copyright">
			<img src="Footer Penawar.jpg" alt="" class="footerimage">
			<p id="pfoot">&copy;<strong>PENAWAR HOSPITAL</strong> IN COLLABORATION WITH <strong>KICT IIUM</strong></p>
			</div>
	
	</body>	
</html>
<?php
session_destroy();
?>