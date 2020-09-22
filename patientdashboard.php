<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "login";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
	// Check connection
	if ($conn->connect_error) {
		die('<p style="color:red">'."Database connection failed: " . $conn->connect_error);
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Patient's Dashboard</title>
<link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">

</head>
<style>
body {
	font-family: helvetica;
	background-color: #eafaff;
	margin: 0;
	padding: 0; 
}

/* Patient's Dashboard Assessments */
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
.hero_header {
	color: black;
	text-align: center;
	margin: 0;
	letter-spacing: 4px;
}
.intro{
	
	width: 100%;
	display: inline-block;
	background-color: #eafaff;
	padding-bottom: 5px;
	padding-top: 50px;
	padding-left:20px;
	text-align: left;
}
 
.intro1 {
	display: inline-block;
	background-color: #eafaff;
	padding-bottom: 5px;
	width: 90%;
	padding: 20px;
}

.intro3 {
	width: 100%;
	display: inline-block;
	background-color: #eafaff;
	padding-bottom: 5px;
	padding-top: 20px;
	padding-left:20px;
	text-align: left;
}


/* Section - Patient's Details */
.row1 {
	text-align: center;
}

.profile{
	border-radius: 50%;
	border: 2.5px solid #e5e4e2;
	width: 120px;
	margin-top: 20px;
	text-align: center;
	box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.08);
}

	/* Section - Children's Details */
.row2 {
	border-radius: 3px;
	padding-right:20px;
	line-height: 30px;
	float: left;
	margin-top: 20px;
}
#td1{
	text-align: right;
	width: 180px;
	font-weight: bold;
}
#td2{
	text-align: left;
	color: #00478f;
	width: 400px;
}

	/* Section - Parents's Details */
.row3 {
	text-align: right;
	padding-right:20px;
	line-height: 30px;
	float: left;
	margin-top: 20px;
}

/* Update of Assessments */
.text {
	font-size: 20px;
}

/* Assessments */
	/* MCHAT */
.assessment {
	columns: 100px 4;
	width: 90%;
}
.mchat {
	text-align: center;
	border: 2px solid #ffffff;
	border-radius: 3px;
	width: 230px;
	background-color: #ffffff;
	box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
}

	/* DSM-5 */
.dsm5 {
	text-align: center;
	border: 2px solid #ffffff;
	border-radius: 3px;
	width: 230px;
	background-color: #ffffff;
	box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
}

	/* DENVER */
.denver {
	text-align: center;
	border: 2px solid #ffffff;
	border-radius: 3px;
	width: 230px;
	background-color: #ffffff;
	box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
}

	/* SSP */
.ssp {
	text-align: center;
	border: 2px solid #ffffff;
	border-radius: 3px;
	width: 230px;
	background-color: #ffffff;
	box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
}

/* Button - View Overall Result */
.button1 {
	width: 150px;
	margin-top: 25px;
	margin-right: auto;
	margin-bottom: auto;
	margin-left: auto;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	text-align: center;
	vertical-align: middle;
	border-radius: 0px;
	text-transform: capitalize;
	font-weight: bold;
	letter-spacing: 1px;
	border: 2px solid #03AC13;
	color: white;
	background-color: #03AC13;
	transition: all 0.3s linear;
}
.button1mchat {
	width: 150px;
	margin-top: 25px;
	margin-right: auto;
	margin-bottom: auto;
	margin-left: auto;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	text-align: center;
	vertical-align: middle;
	border-radius: 0px;
	text-transform: capitalize;
	font-weight: bold;
	letter-spacing: 1px;
	border: 2px solid grey;
	color: white;
	background-color: grey;
	transition: all 0.3s linear;
}
.button1:hover {
    color: white;
    cursor: pointer;
}

/* Button - Proceed To Assessment */
.button2 {
	width: 150px;
	margin-top: 20px;
	margin-right: auto;
	margin-bottom: auto;
	margin-left: auto;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	text-align: center;
	vertical-align: middle;
	border-radius: 0px;
	text-transform: capitalize;
	font-weight: bold;
	letter-spacing: 0.5px;
	border: 2px solid #FF6600;
	color: white;
	background-color: #FF6600;
	transition: all 0.3s linear;
}
.button2:hover {
    color: white;
    cursor: pointer;
}

	#pfoot{
		margin-top: -50px;
		color: white;
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
	/* Get In Touch */
.hero_header {
	color: black;
	text-align: center;
	margin: 0;
	letter-spacing: 4px;
}
#pfoot {
	margin-top: -50px;
}

.pt1{
	width: 300px;
	height: 400px;
	background-color: #ffffff;
	box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
	border-bottom: 3px solid #003d7a;
	float: left;
	text-align: center;
}
.pt2 table{
	float: center;
	margin: auto;
	text-align:center;
}
.pt2 td{
	border-bottom: 1px solid #e5e4e2;
	width: 240px;
}


* {
  box-sizing: border-box;
}
.wrapper {
  width: 700px; 
  float: right;
}
.tabs {
  position: relative;
  background: #003d7a;
  height: 397px;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
}
.tabs::before,
.tabs::after {
  content: "";
  display: table;
}
.tabs::after {
  clear: both;
}
.tab {
  float: left;
}
.tab-switch {
  display: none;
}
.tab-label {
  position: relative;
  display: block;
  line-height: 2.75em;
  height: 48px;
  padding: 0 1.618em;
  background: #003d7a;
  border-right: 0.125rem solid #003d7a;
  color: #fff;
  cursor: pointer;
  top: 0;
  transition: all 0.25s;
}
.tab-label:hover {
  top: -0.25rem;
  transition: top 0.25s;
}
.tab-content {
	width: 700px;
	height: 353px;
	border-bottom: 3px solid #003d7a;
	position: absolute;
	z-index: 1;
	top: 2.75em;
	left: 0;
	background: #ffffff;
	color: #2c3e50;
	opacity: 0;
	transition: all 0.35s;
}
.tab-switch:checked + .tab-label {
  background: #ffffff;
  color: #2c3e50;
  border-bottom: 0;
  border-right: 0.125rem solid #fff;
  transition: all 0.35s;
  z-index: 1;
  top: -0.0625rem;
}
.tab-switch:checked + label + .tab-content {
  z-index: 2;
  opacity: 1;
  transition: all 0.35s;
}
.patientId, .patientName{
	color: #003d7a;
}

	.a3 {
	text-decoration:none;
	color: #003d7a;
}
.arrow{
	width: 26px;
	height: 15px;
}

	.header{	
		background-color: #eafaff;
	}
	
	/* Style the top navigation bar */
	.topnav {
		overflow: hidden;
		background-color: #243665;
		height: 90px;
		position: relative;
	}

	/* Style the topnav links */
	.topnav a 
	{
		
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 20px 20px;
		text-decoration: none;
		margin-top: 15px;
	}
	#a1{
		float: right;
		
	}
	#a2{
		float: left;
		margin-top: -1px;
	}

	/* Change color on hover */
	.topnav a:hover {
	  background-color: #ddd;
	  color: black;
	}
	.button2 a{
		text-decoration:none;
		color: white;
	}
	.button2mchat {
		background-color: grey;
		width: 150px;
		margin-top: 20px;
		margin-right: auto;
		margin-bottom: auto;
		margin-left: auto;
		padding-top: 10px;
		padding-right: 10px;
		padding-bottom: 10px;
		padding-left: 10px;
		text-align: center;
		vertical-align: middle;
		border-radius: 0px;
		text-transform: capitalize;
		font-weight: bold;
		letter-spacing: 0.5px;
		border: 2px solid grey;
		color: white;
		transition: all 0.3s linear;
	}
	#p1{
		margin-left: 60px;
		font-size: 20px;
		font-weight: bold;
	}
	.ahref {
		text-decoration: none;
		color: white;
	}
</style>

<body>

<!-- Main Container -->
		

<!-- Header -->
	<div class="header">
		<img src="HospitalPenawar.jpg" width="100%" style="margin-bottom: -100px">
	</div>
	
	<div class="topnav">
		<a id="a2" href="welcome.php"><img src="penawar.png" alt="logo" class="logo2" width="260" height="50"></a>
		<a id="a1" href="loginpage.php">Logout</a>
		<a id="a1" href="#">Schedule</a>
		<a id="a1" href="welcome.php">Dashboard</a>
	</div>
	


	<center>
	<section class="intro">
		<strong><p id="p1">Patient Details</p></strong>		
	</section>
	<section class="intro1">
		<div class="pt1">
			<img src="kids.png" alt="" class="profile">
			<div class="pt2">
				<table class="row1">
				<?php
				if (isset($_GET['first'])) {
					$mykid = $_GET['first'];
					$sql = "SELECT mykid, patientName FROM `patient_info` WHERE mykid='$mykid'";
					
					$result = $conn->query($sql);
				
					if ($result->num_rows > 0) {	
						if($row = $result->fetch_assoc()) {
							echo '<tr><td><h2 class=patientId>'.$row["mykid"].'</h2></td></tr>';
							echo '<tr><td><h4 class=patientName>'.$row["patientName"].'</h4></td></tr>';
						}
					}
					else {
						echo "0 results";
					}
				}
				?>
					<tr>	
						<td><h4 class="aStatus"><a class="a3" href="#linkAssessment">Assessment Status&nbsp;<img src="dicon.png" alt="" class="arrow"></a></h4></td>
					</tr>
				</table>	
			</div>
		</div>
	
		<div class="wrapper">
		<div class="tabs">
		<div class="tab">
			<input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
			<label for="tab-1" class="tab-label">Patient Information</label>
			<div class="tab-content">
				<table class="row2">
						<?php
						if (isset($_GET['first'])) {
						$mykid = $_GET['first'];
						$sql = "SELECT *FROM `patient_info` WHERE mykid='$mykid'";
						
						$result = $conn->query($sql);
					
						if ($result->num_rows > 0) {	
							if($row = $result->fetch_assoc()) {
								echo '<tr><td id=td1>Name :</td><td id=td2>'.$row["patientName"].'</td></tr>';
								echo '<tr><td id=td1>Mykid :</td><td id=td2>'.$row["mykid"].'</td></tr>';
								echo '<tr><td id=td1>Age :</td><td id=td2>'.$row["age"].'</td></tr>';
								echo '<tr><td id=td1>Date of Birth :</td><td id=td2>'.$row["dob"].'</td></tr>';
								echo '<tr><td id=td1>Gender :</td><td id=td2>'.$row["gender"].'</td></tr>';
								echo '<tr><td id=td1>OKU Number :</td><td id=td2>'.$row["oku"].'</td></tr>';
								echo '<tr><td id=td1>School :</td><td id=td2>'.$row["school"].'</td></tr>';
							}
						}
						else {
							echo "0 results";
						}
						}
						?>
					</table>
			</div>
		</div>
		<div class="tab">
			<input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
			<label for="tab-2" class="tab-label">Guardian Information</label>
			<div class="tab-content">
				<table class="row3">
					<?php
						if (isset($_GET['first'])) {
						$mykid = $_GET['first'];
						$sql = 
						"SELECT 
						pt.mykid,
						pt.parentID,
						pa.parentID,
						pa.parentName, 
						pa.homeAddress,
						pa.phoneNumber,
						pa.occupation,
						pa.workingAddress,
						pa.email
						FROM `patient_info` pt
						RIGHT JOIN `parent_info` pa 
						ON pt.parentID = pa.parentID
						WHERE pt.mykid='$mykid'";
						
						$result = $conn->query($sql);
					
						if (!empty($result) && $result->num_rows > 0) {	
							if($row = $result->fetch_assoc()) {
								echo '<tr><td id=td1>Name :</td><td id=td2>'.$row["parentName"].'</td></tr>';
								echo '<tr><td id=td1>MyKad / IC Number :</td><td id=td2>'.$row["parentID"].'</td></tr>';
								echo '<tr><td id=td1>Home Address :</td><td id=td2>'.$row["homeAddress"].'</td></tr>';
								echo '<tr><td id=td1>Phone Number :</td><td id=td2>'.$row["phoneNumber"].'</td></tr>';
								echo '<tr><td id=td1>Occupation :</td><td id=td2>'.$row["occupation"].'</td></tr>';
								echo '<tr><td id=td1>Working Address :</td><td id=td2>'.$row["workingAddress"].'</td></tr>';
								echo '<tr><td id=td1>Email :</td><td id=td2>'.$row["email"].'</td></tr>';
							}
						}
						else {
							echo "0 results";
						}
						}
						?>
					</table>
			</div>
		</div>
		</div>
		</div>
	</section>
  
<!-- Update of Assessments -->
	
	
<!-- Assessments -->
	
	
		<div class="intro3" id="linkAssessment"><br><br><p id="p1">Assessments Status</p><br><br><br></div>
			
		<section class="assessment">
			
		<!-- MCHAT - try tukar jadi column -->
			<div class="mchat">
				<br>
				<p><strong>LEVEL 1</strong></p>
				<p>MCHAT</p>
				<?php
				if (isset($_GET['first'])) {
						$mykid = $_GET['first'];
						$sql2 = "SELECT *FROM `patient_info` WHERE mykid='$mykid'";

					$result2 = $conn->query($sql2);
					if ($result2->num_rows > 0) 
					{
						// output data of each row
						while($row2 = $result2->fetch_assoc()) 
						{ 
						$answer=$row2["level1"];
						if($answer != NULL)
						{
							echo "<div class=button1>View Result</div>";
							echo "<div class=button2mchat>Proceed</div>";
						}
						else{ 
							echo "<div class=button1mchat>View Result</div>";
							echo "<div class=button2>Proceed</div>";
						}
						}
					} else { echo "0 results"; }
			}
			?>
				
				
				<br>
			</div>
			&nbsp;
		<!-- DSM-5 -->
			<div class="dsm5">
				<br>
				<p><strong>LEVEL 2</strong></p>
				<p>DSM-5</p>
				<?php 
				if (isset($_GET['first'])) {
						$mykid = $_GET['first'];
						$sql2 = "SELECT *FROM `patient_info` WHERE mykid='$mykid'";

					$result2 = $conn->query($sql2);
					if ($result2->num_rows > 0) 
					{
						// output data of each row
						while($row2 = $result2->fetch_assoc()) 
						{ 
						$answer=$row2["level2"];
						if($answer != NULL)
						{
							echo "<div class=button1><a class=ahref href='resultdisplay.php?first=".$row["mykid"]."'>View Result</a></div>";
							echo "<div class=button2mchat>Proceed</div>";
						}
						else{ 
							echo "<div class=button1mchat>View Result</div>";
							echo "<div class=button2><a href='dsm5.php?first=".$row["mykid"]."'>Proceed</a></div>";
						}
						}
					} else { echo "0 results"; }
				}
				?>
				<br>
			</div>
			&nbsp;
		<!-- Denver -->
			<div class="denver">
				<p><strong><br>LEVEL 2</strong></p>
				<p>DENVER</p>
				<div class="button1">View Result</div>
				<div class="button2">Proceed</div>
				<br>
			</div>
			&nbsp;
		<!-- SSP -->
			<div class="ssp">
				<p><strong><br>LEVEL 3</strong></p>
				<p>SHORT SENSORY PROFILE</p>
				<div class="button1">View Result</div>
				<div class="button2">Proceed</div>
				<br>
			</div>
		</section>
		</center>
	
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
