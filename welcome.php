<?php
$conn = mysqli_connect("localhost", "root", "", "login");
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}

session_start();
?>

<html">
   
   <head>

      <title>Welcome </title>
   </head>
   <style>
   	body { 
		padding: 0; 
		margin: 0; 
		background-color: #eafaff;
		font-family: helvetica;
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
	/* Header */
	header {
		width: 100%;
		height: 10%;
		background-color: #5D5E5D;
		border-bottom: 1px solid #353635;
	}

	/* Section - Therapist's Dashboard Assessments */
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

	/* Section */
	.intro {
		width: 100%;
		display: inline-block;
		background-color: #eafaff;
		padding-bottom: 5px;
		padding-top: 50px;
	}
	.row {
		text-align: center;
		
		
	}

		/* Section - Search */
	.searchID {
		text-align: center;
		float: center;
		padding: 10px;
		margin-top: 10px;
		margin-left: 50px;
		margin-right: 20px;
		margin-bottom: 10px;
		border: 1px solid black;
		font-size: 17px;
	}

	.btn{
		height: 40px;
		width: 80px;
		color: white;
		font-size: 17px;
		border: 1.5px solid #536DFE;
		background-color: #536DFE;
	}	
	th{
		background-color: #003d7a;
		color: white;
	}

		/* Section - Table */
	.table th, td {
		border: 1px solid #C5CAE9;
		padding: 20px;
	}
	.table {
		width: 70%;
		border-spacing: 10px;
		border-collapse: collapse;
		background-color: white;
		box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.15);
	}
	th, td {
		text-align: center;
		
	}
	/* Footer */
	footer {
		color: black;	
		padding-top: 60px;
		padding-bottom: 60PX;
	}

	/* Copyrights */
	.copyright {
		background-image: url('FooterPenawar.jpg');
		text-align: center;
		color: #FFFFFF;
		text-transform: uppercase;
		font-weight: lighter;
		letter-spacing: 2px;
		border-top-width: 2px;
		
	}
	a{
		text-decoration:none;
		color: white;
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
	#pfoot{
		margin-top: -50px;
	}
	
   </style>
   <body>
	<div class="header">
		<img src="HospitalPenawar.jpg" width="100%" style="margin-bottom: -100px">
	</div>
	
	<div class="topnav">
		<a id="a2" href="welcome.php"><img src="penawar.png" alt="logo" class="logo2" width="260" height="50"></a>
		<a id="a1" href="loginpage.php">Logout</a>
		<a id="a1" href="#">Schedule</a>
		<a id="a1" href="welcome.php">Dashboard</a>
	</div>
	
	<div>
	<!-- Section -->
	<section class="intro">

		
	<!-- Section - Table -->
		<center><table class="table" style "width=100%">
			<br>
			<tr> <!-- Row -->
				<th>PATIENT ID</th> <!-- Header Row -->
				<th>NAME OF PATIENT</th>
				<th>MCHAT</th>
				<th>DSM5 /<br> DENVER</th>
				<th>SSP</th>
			</tr>
			
			<!--<tr>
				<td><a href="dsm5.php"><?php echo $print_data[1]?></a></td>
				<td><?php echo $print_data[0]?></td>
				<td><img src="right.png" alt="logo" class="logo3" width="25" height="20"></td>
				<td><img src="false.png" alt="logo" class="logo3" width="25" height="22"></td>
				<td><img src="false.png" alt="logo" class="logo3" width="25" height="22"></td>
			</tr>-->
			
			<?php
			
			$sql = "SELECT * FROM `patient_info`";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) 
			{
				// output data of each row
				while($row = $result->fetch_assoc()) 
				{ 
				$answer=$row["level2"];
				if($answer != NULL)
					$b1="<img src=right.png alt=logo class=logo3 width=25 height=22>";
				else 
					$b1="<img src=false.png alt=logo class=logo3 width=25 height=22>";
				echo "<tr><td><button id=btnlink ><a href='patientdashboard.php?first=".$row["mykid"]."'>". $row["mykid"]."</a></button></td>
				<td>" . $row["patientName"] . "</td>
				<td><img src=right.png alt=logo class=logo3 width=25 height=22></td>
				<td>".$b1."</td>
				<td><img src=false.png alt=logo class=logo3 width=25 height=22></td></tr>";
				}
			} else { echo "0 results"; }
			
			$conn->close();
			?>
			
		
	  </table></center>
		
	</section>
	<form></form>
	<!-- Footer -->
		<br>
		<footer id="contact">
			<p class="hero_header">GET IN TOUCH WITH US</p>
		</footer>
		
		<!-- Copyrights -->
			<div class="copyright">
			<img src="FooterPenawar.jpg" width="100%" height="15%">
			<p id="pfoot">&copy;<strong>PENAWAR HOSPITAL</strong> IN COLLABORATION WITH <strong>KICT IIUM</strong></p>
			</div>
   </body>
   
</html>
