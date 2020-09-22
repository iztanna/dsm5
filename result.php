<?php

$conn = mysqli_connect('localhost','root','','login');

$sql1 = mysqli_query($conn, "SELECT * FROM `question_info` ORDER BY num DESC LIMIT 1");

$print_data = mysqli_fetch_row($sql1);

if (isset($_GET['first'])) {
	$mykid = $_GET['first'];
	$sql = "SELECT *FROM `patient_info` WHERE mykid='$mykid'";
	}

?>

<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		
	</head>
	<style>
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
	#table2 td, th 
	{
		padding: 12px;
		border: 1px solid #243665;
	}
	tr{
		background-color: white;
	}
	tr:hover {
		background-color:#C5CAE9;
	}
	
	#th1
	{
		width: 20px;
		text-align: center;
	}
	#th3{
		text-align: center;
	}
	th
	{
		background-color: #eafaff;
		color: #243665;
	}
	#table2
	{
		width: 100%;
		border-collapse: collapse;
	}
	#fform
	{
		display: table-cell;
		vertical-align:middle;
		background-color: white;
		width: 1050px;
		padding-left: 20px;
		padding-right: 20px;
		padding-bottom: 20px;
		position: relative;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
	}
	h1
	{
		padding-top: 10px;
		margin-bottom: 30px;
		line-height: 40px;
		font-family: "helvetica";
		background-color: #243665;
		font-size: 40px;
		text-align: center;
		color: #ffffff;
		padding: 2px 0px;
	}
	body{
		background-color: #eafaff;
		font-family: helvetica;
		margin: 0;
		padding: 0;
	}
	#userDetail{
		float: left;
		text-align: left;
		font-size: 15px;
		font-weight: bold;
		margin-bottom: 30px;	
	}
	#ud1{
		border: hidden;
		line-height: 1px;
	}
	#ud1 th, td{
		padding: 3px;
	}
	
	#td1{
		text-align: right;
		font-weight: bold;
		border: hidden;
		background-color: #003d7a;
		color: white;
	}
	#td2{
		text-align: left;
		color: #00478f;
		font-weight: lighter;
		border: hidden;
		background-color: #f2f3ff;
		color: black;
	}
	.resultbox{
		width:100%;
		line-height: 5px;
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
#btnlink{
		background-color: #4F94CD;
		color: white;
		padding: 6px;
		border: 1px solid #4F94CD;
		border-radius: 3px;
		box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.08);
	}
	#btnlink:hover{
		background-color: #0089B9;
	}
	a{
		text-decoration: none;
		color: white;
	}
	</style>
	<body>	
	<div class="header">
		<img src="HospitalPenawar.jpg" width="100%" style="margin-bottom: -90px">
	</div>
	
	<div class="topnav"  style="margin-bottom: 40px">
		<a id="a2" href="welcome.php"><img src="penawar.png" alt="logo" class="logo2" width="260" height="50"></a>
		<a id="a1" href="loginpage.php">Logout</a>
		<a id="a1" href="#">Schedule</a>
		<a id="a1" href="welcome.php">Dashboard</a>
	</div>
	
		<center>

		<?php 
		if (isset($_GET['first'])) {
					$mykid = $_GET['first'];
					$sql = "SELECT mykid, patientName FROM `patient_info` WHERE mykid='$mykid'";
					
					$result = $conn->query($sql);
				
					if ($result->num_rows > 0) {	
						if($row = $result->fetch_assoc()) {							
							echo "<button id=btnlink style=margin-bottom:20px>Go to <a href='patientdashboard.php?first=".$row["mykid"]."'>". $row["patientName"]."</a></button>";			
						}
					}
					else {
						echo "0 results";
					}
				}
		?>
		
		<div id="fform"> 
		<h1>Result</h1>
		<section>
		<div class="resultbox">
			<table id="table2">
			<thead>
				<tr>
					<th id="th1">Domain</th>
					<th id="th2">Domain name</th>
					<th id="th3">Symptoms</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td id="th1">I</td>
					<td>Somatic symptoms</td>
					<td id="th3">
					<?php 
					if ($print_data[27] == 0) 
					  echo "No";
					else 
					  echo "Yes";
					?></td>
				</tr>
				<tr>
					<td id="th1">II</td>
					<td>Sleep problems</td>
					<td id="th3">
					<?php 
					if ($print_data[28] == 0) 
					  echo "No";
					else 
					  echo "Yes";
					?></td>
				</tr>
				<tr>
					<td id="th1">III</td>
					<td>Inattention </td>
					<td id="th3">
					<?php 
					if ($print_data[29] == 0) 
					  echo "No";
					else 
					  echo "Yes";
					?></td>
				</tr>
				<tr>
					<td id="th1">IV</td>
					<td>Depression</td>
					<td id="th3">
					<?php 
					if ($print_data[30] == 0) 
					  echo "No";
					else 
					  echo "Yes";
					?></td>
				</tr>
				<tr>
					<td id="th1">V</td>
					<td>Anger</td>
					<td id="th3">
					<?php 
					if ($print_data[31] == 0) 
					  echo "No";
					else 
					  echo "Yes";
					?></td>
				</tr>
				<tr>
					<td id="th1">VI</td>
					<td>Irritability</td>
					<td id="th3">
					<?php 
					if ($print_data[32] == 0) 
					  echo "No";
					else 
					  echo "Yes";
					?></td>
				</tr>
				<tr>
					<td id="th1">VII</td>
					<td>Mania </td>
					<td id="th3">
					<?php 
					if ($print_data[33] == 0) 
					  echo "No";
					else 
					  echo "Yes";
					?></td>
				</tr>
				<tr>
					<td id="th1">VIII</td>
					<td>Anxiety </td>
					<td id="th3">
					<?php 
					if ($print_data[34] == 0) 
					  echo "No";
					else 
					  echo "Yes";
					?></td>
				</tr>
				<tr>
					<td id="th1">IX</td>
					<td>Psychosis</td>
					<td id="th3">
					<?php 
					if ($print_data[35] == 0) 
					  echo "Yes";
					else 
					  echo "None";
					?></td>
				</tr> 
				<tr>
					<td id="th1">X</td>
					<td>Repetitive thoughts and behaviors</td>
					<td id="th3">
					<?php 
					if ($print_data[36] == 0) 
					  echo "Yes";
					else 
					  echo "None";
					?></td>
				</tr>
				<tr>
					<td id="th1">XI</td>
					<td>Substance use</td>
					<td id="th3">
					<?php 
					if ($print_data[37] == 0) 
					  echo "No";
					else 
					  echo "Yes";
					?></td>
				</tr>
				<tr>
					<td id="th1">XII</td>
					<td>Suicidal ideation/suicide attempts</td>
					<td id="th3"><?php 
					if ($print_data[38] == 0) 
					  echo "Yes";
					else 
					  echo "None";
					?></td>
				</tr>
			</tbody>
			</table>
			</div>
		</section>
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
			</center>
	</body>
</html>