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
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		
	</head>
	<style>
	body
	{
		background-color: #eafaff;
		font-family: helvetica;
	}
	/* Header */
header {
	width: 100%;
	height: 10%;
	background-color: #5D5E5D;
	border-bottom: 1px solid #353635;
}
.header {	
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
	margin-bottom: 20px;
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
	.progress-bar bg-info
	{
		color: turquois;
		border: 10px;
	}
	form
	{
		display: table-cell;
		vertical-align:middle;
		background-color: white;
		width: 1150px;
		padding: 20px;
		padding-top: 20px;
		position: relative;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
	}
	#t1{
		background-color: white;
		width: 1150px;
		padding: 20px;
		padding-top: 20px;
		position: relative;
	}
	td, th{
		border: 1px solid #243665;
		padding: 10px;
		text-align: center;
	}
	th{
		background-color: #eafaff;
	}
	
	#th1, #t2, div{
		text-align: left;
	}
	
	th:empty {
		border: 0;
	}
	h1
	{
		padding-top: 30px;
		margin-bottom: 30px;
		line-height: 40px;
		font-family: helvetica;
		background-color: #243665;
		font-size: 40px;
		text-align: center;
		color: #ffffff;
		padding: 2px 0px;
	}
	#next , #sbmt
	{
		
		font-size: 15px;
		background-color: #FF6600;
		color: white;
		padding: 8px;
		margin-top: 15px;
		margin-bottom: 20px;
		border: 10px;
		width: 100px;
		letter-spacing: 0.5;
	}
	#next:hover , #sbmt:hover{
		background-color: #FF4f00;
		color: white;
	}
	#prev
	{
		
		font-size: 15px;
		background-color: white;
		color: #FF6600;
		padding: 6px;
		margin: 6px;
		border: 2px solid;
		border-color: #FF6600;
		width: 100px;
		letter-spacing: 0.5;
	}
	#prev:hover{
		background-color: #FF6600;
		color: white;
	}
	
	input{
		cursor: pointer;
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
		   <a id="a1" href="loginpage.php">Logout</a>
		   <a id="a1" href="#">Schedule</a>
			<a id="a1" href="welcome.php">Dashboard</a>
		</div>
	<!--	
Your patient is
		<?php 
	if (isset($_GET['first'])) {
						$mykid = $_GET['first'];
						$sql = "SELECT *FROM `patient_info` WHERE mykid='$mykid'";
						
						$result = $conn->query($sql);
					
						if ($result->num_rows > 0) {	
							if($row = $result->fetch_assoc()) {
								echo $row["patientName"].' '.$row["mykid"];
								$kidid=$row["mykid"];
							}
						}
						else {
							echo "0 results";
						}
	}
	?>-->
		<center><form id="msform" method="POST" action="linkresult.php?first=<?php echo $kidid ?>"><!--abc.php tukar kejap ke html-->
		
		<h1>Diagnostic & Statistical Manual of Mental Disorders</h1> 
		
		   <!-- fieldsets -->
		   <fieldset>
			  <div class="row">
				 <div class="col-md-6 my-2">
					<div class='btns'>
					<table id="t1">
					<tr>
						<th id="th1" style="width: 750px">During the past TWO (2) WEEKS, how much (or how often)
							have you been bothered by the following problems?</th>
						<th id="th2">None (0)</th>
						<th id="th3">Slightly (1)</th>
						<th id="th4">Mild (2)</th>
						<th id="th5">Moderate (3)</th>
						<th id="th6">Severe (4)</th>
					</tr>
					<tr>
						<td id="t2">1. Complained of stomaches, headaches, or other aches and pains ?</td>
						<td><input type="radio" name="q1" data-col="1" value="0"></td>
						<td><input type="radio" name="q1" data-col="2" value="0"></td>
						<td><input type="radio" name="q1" data-col="3" value="1"></td>
						<td><input type="radio" name="q1" data-col="4" value="1"></span></td>
						<td><input type="radio" name="q1" data-col="5" value="1"></td>
					</tr>
					<tr>
						<td id="t2">2. Said he, or she was worried about his, her health or about getting sick ?</td>
						<td><input type="radio" name="q2" data-col="1" value="0"></td>
						<td><input type="radio" name="q2" data-col="2" value="0"></td>
						<td><input type="radio" name="q2" data-col="3" value="1"></td>
						<td><input type="radio" name="q2" data-col="4" value="1"></td>
						<td><input type="radio" name="q2" data-col="5" value="1"></td>
					</tr>
					<tr>
						<td id="t2">3. Had problems sleeping-that is, trouble falling asleep, staying asleep, 
						or waking up too early ?</td>
						<td><input type="radio" name="q3" data-col="1" value="0"></td>
						<td><input type="radio" name="q3" data-col="2" value="0"></td>
						<td><input type="radio" name="q3" data-col="3" value="1"></td>
						<td><input type="radio" name="q3" data-col="4" value="1"></td>
						<td><input type="radio" name="q3" data-col="5" value="1"></td>
					</tr>
					<tr>
						<td id="t2">4. Had problems paying attention when he/she was in class or doing his/her 
						homework or reading a book or playing a game ?</td>
						<td><input type="radio" name="q4" data-col="1" value="0"></td>
						<td><input type="radio" name="q4" data-col="2" value="1"></td>
						<td><input type="radio" name="q4" data-col="3" value="1"></td>
						<td><input type="radio" name="q4" data-col="4" value="1"></td>
						<td><input type="radio" name="q4" data-col="5" value="1"></td>
					</tr>
					<tr>
						<td id="t2">5. Had less fun doing things he/she used to ?</td>
						<td><input type="radio" name="q5" data-col="1" value="0"></td>
						<td><input type="radio" name="q5" data-col="2" value="0"></td>
						<td><input type="radio" name="q5" data-col="3" value="1"></td>
						<td><input type="radio" name="q5" data-col="4" value="1"></td>
						<td><input type="radio" name="q5" data-col="5" value="1"></td>
					</tr>
					</table>
					</div>
				 </div>
			  </div>
			  <input type="button" id="next" name="next" class="next action-button" value="NEXT" />
		   </fieldset>
		   
		   <fieldset>
			  <div class="row">
				<div class="col-md-6 my-2">
					<div class='btns'>
					<table id="t1">
					<tr>
						<th id="th1" style="width: 750px">During the past TWO (2) WEEKS, how much (or how often)
							have you been bothered by the following problems?</th>
						<th>None<br>(0)</th>
						<th>Slightly<br>(1)</th>
						<th>Mild<br>(2)</th>
						<th>Moderate<br>(3)</th>
						<th>Severe<br>(4)</th>
					</tr>
					<tr>
						<td id="t2">6. Seemed sad or depressed for several hours ?</td>
						<td><input type="radio" name="q6" data-col="1" value="0"></td>
						<td><input type="radio" name="q6" data-col="2" value="0"></td>
						<td><input type="radio" name="q6" data-col="3" value="1"></td>
						<td><input type="radio" name="q6" data-col="4" value="1"></td>
						<td><input type="radio" name="q6" data-col="5" value="1"></td>
					</tr>
					<tr>
						<td id="t2">7. Seemed more irritated or easily annoyed than usual ?</td>
						<td><input type="radio" name="q7" data-col="1" value="0"></span></td>
						<td><input type="radio" name="q7" data-col="2" value="0"></span></td>
						<td><input type="radio" name="q7" data-col="3" value="1"></td>
						<td><input type="radio" name="q7" data-col="4" value="1"></td>
						<td><input type="radio" name="q7" data-col="5" value="1"></td>
					</tr>
					<tr>
						<td id="t2">8. Seemed angry or lost his/her temper ?</td>
						<td><input type="radio" name="q8" data-col="1" value="0"></td>
						<td><input type="radio" name="q8" data-col="2" value="0"></td>
						<td><input type="radio" name="q8" data-col="3" value="1"></td>
						<td><input type="radio" name="q8" data-col="4" value="1"></td>
						<td><input type="radio" name="q8" data-col="5" value="1"></td>
					</tr>
					<tr>
						<td id="t2">9. Starting lots more projects than usual or doing more risky things than usual ?</td>
						<td><input type="radio" name="q9" data-col="1" value="0"></td>
						<td><input type="radio" name="q9" data-col="2" value="0"></td>
						<td><input type="radio" name="q9" data-col="3" value="1"></td>
						<td><input type="radio" name="q9" data-col="4" value="1"></td>
						<td><input type="radio" name="q9" data-col="5" value="1"></td>
					</tr>
					<tr>
						<td id="t2">10. Sleeping less than usual for him/her but still has lots of energy ?</td>
						<td><input type="radio" name="q10" data-col="1" value="0"></td>
						<td><input type="radio" name="q10" data-col="2" value="0"></td>
						<td><input type="radio" name="q10" data-col="3" value="1"></td>
						<td><input type="radio" name="q10" data-col="4" value="1"></td>
						<td><input type="radio" name="q10" data-col="5" value="1"></td>
					</tr>
					</table>
					</div>
				</div> 
			 </div>	   
			  <input type="button" id="prev" name="previous" class="previous action-button" value="BACK" />
			   <input type="button" id="next" name="next" class="next action-button" value="NEXT" />
		   </fieldset>
		   
		   <fieldset>
			  <div class="row">
				 <div class="col-md-6 my-2">
					<div class='btns'>
					<table id="t1">
					<tr>
						<th id="th1" style="width: 750px">During the past TWO (2) WEEKS, how much (or how often)
							have you been bothered by the following problems?</th>
						<th>None<br>(0)</th>
						<th>Slightly<br>(1)</th>
						<th>Mild<br>(2)</th>
						<th>Moderate<br>(3)</th>
						<th>Severe<br>(4)</th>
					</tr>
					<tr>
						<td id="t2">11. Said he/she felt nervous, anxious, or scared ?</td>
						<td><input type="radio" name="q11" data-col="1" value="0"></td>
						<td><input type="radio" name="q11" data-col="2" value="0"></td>
						<td><input type="radio" name="q11" data-col="3" value="1"></td>
						<td><input type="radio" name="q11" data-col="4" value="1"></td>
						<td><input type="radio" name="q11" data-col="5" value="1"></td>
					</tr>
					<tr>
						<td id="t2">12. Not been able to stop worrying ?</td>
						<td><input type="radio" name="q12" data-col="1" value="0"></td>
						<td><input type="radio" name="q12" data-col="2" value="0"></td>
						<td><input type="radio" name="q12" data-col="3" value="1"></td>
						<td><input type="radio" name="q12" data-col="4" value="1"></td>
						<td><input type="radio" name="q12" data-col="5" value="1"></td
					</tr>
					<tr>
						<td id="t2">13. Said he/she couldn’t do things he/she wanted to or should  have 
						done because they made him/her feel nervous ?</td>
						<td><input type="radio" name="q13" data-col="1" value="0"></td>
						<td><input type="radio" name="q13" data-col="2" value="0"></td>
						<td><input type="radio" name="q13" data-col="3" value="1"></td>
						<td><input type="radio" name="q13" data-col="4" value="1"></td>
						<td><input type="radio" name="q13" data-col="5" value="1"></td>
					</tr>
					<tr>
						<td id="t2">14. Said that he/she heard voices—when there was no one there—speaking 
						about him/her or telling him/her what to do or saying bad things to him/her ?</td>
						<td><input type="radio" name="q14" data-col="1" value="0"></td>
						<td><input type="radio" name="q14" data-col="2" value="1"></td>
						<td><input type="radio" name="q14" data-col="3" value="1"></td>
						<td><input type="radio" name="q14" data-col="4" value="1"></td>
						<td><input type="radio" name="q14" data-col="5" value="1"></td>
					</tr>
					<tr>
						<td id="t2">15. Said that he/she had a vision when he/she was completely awake—that is, 
						saw something or someone that no one else could see ?</td>
						<td><input type="radio" name="q15" data-col="1" value="0"></td>
						<td><input type="radio" name="q15" data-col="2" value="1"></td>
						<td><input type="radio" name="q15" data-col="3" value="1"></td>
						<td><input type="radio" name="q15" data-col="4" value="1"></td>
						<td><input type="radio" name="q15" data-col="5" value="1"></td>
					</tr>
					</table>
					</div>
				 </div>
			  </div>
			  <input type="button" id="prev" name="previous" class="previous action-button" value="BACK" />
			  <input type="button" id="next" name="next" class="next action-button" value="NEXT" />
			  
		   </fieldset>
		   
		   <fieldset>
			  <div class="row">
				<div class="col-md-6 my-2">
					<div class='btns'>
					<table id="t1">
					<tr>
						<th id="th1" style="width: 750px">During the past TWO (2) WEEKS, how much (or how often)
							have you been bothered by the following problems ?</th>
						<th>None<br>(0)</th>
						<th>Slightly<br>(1)</th>
						<th>Mild<br>(2)</th>
						<th>Moderate<br>(3)</th>
						<th>Severe<br>(4)</th>
					</tr>
					<tr>
						<td id="t2">16. Said that he/she had thoughts that kept coming into his/her mind that he/she 
						would do something bad or that something bad would happen to him/her or to someone else?</td>
						<td><input type="radio" name="q16" data-col="1" value="0"></td>
						<td><input type="radio" name="q16" data-col="2" value="0"></td>
						<td><input type="radio" name="q16" data-col="3" value="1"></td>
						<td><input type="radio" name="q16" data-col="4" value="1"></td>
						<td><input type="radio" name="q16" data-col="5" value="1"></td>
					</tr>
					<tr>
						<td id="t2">17. Said he/she felt the need to check on certain things over and over again, like whether
						a door was locked or whether the stove was turned off ?</td>
						<td><input type="radio" name="q17" data-col="1" value="0"></td>
						<td><input type="radio" name="q17" data-col="2" value="0"></td>
						<td><input type="radio" name="q17" data-col="3" value="1"></td>
						<td><input type="radio" name="q17" data-col="4" value="1"></td>
						<td><input type="radio" name="q17" data-col="5" value="1"></td>
					</tr>
					<tr>
						<td id="t2">18. Seemed to worry a lot about things he/she touched being dirty or having germs or being poisoned?</td>
						<td><input type="radio" name="q18" data-col="1" value="0"></td>
						<td><input type="radio" name="q18" data-col="2" value="0"></td>
						<td><input type="radio" name="q18" data-col="3" value="1"></td>
						<td><input type="radio" name="q18" data-col="4" value="1"></td>
						<td><input type="radio" name="q18" data-col="5" value="1"></td>
					</tr>
					<tr>
						<td id="t2">19. Said that he/she had to do things in a certain way, like counting or saying special things out loud,
						in order to keep something bad from happening?</td>
						<td><input type="radio" name="q19" data-col="1" value="0"></td>
						<td><input type="radio" name="q19" data-col="2" value="0"></td>
						<td><input type="radio" name="q19" data-col="3" value="1"></td>
						<td><input type="radio" name="q19" data-col="4" value="1"></td>
						<td><input type="radio" name="q19" data-col="5" value="1"></td>
					</tr>
					</table>
					</div>
				</div> 
			 </div>
			  <input type="button" id="prev" name="previous" class="previous action-button" value="BACK" />
			  <input type="button" id="next" name="next" class="next action-button" value="NEXT" />
		   </fieldset>
		   
		   <fieldset>
			  <div class="row">
				 <div class="col-md-6 my-2">
					<div class='btns'>
					<table id="t1">
					<tr>
						<th id="th1" style="width: 750px">In the past TWO (2) WEEKS, has your child…</th>
						<th>Yes<br>(0)</th>
						<th>No<br>(1)</th>
						<th>Don't Know<br>(2)</th>
					</tr>
					<tr>
						<td id="t2">20. Had an alcoholic beverage (beer, wine, liquor, etc.)?</td>
						<td><input type="radio" name="q20" data-col="1" value="1"></td>
						<td><input type="radio" name="q20" data-col="2" value="0"></td>
						<td><input type="radio" name="q20" data-col="3" value="1"></td>
					</tr>
					<tr>
						<td id="t2">21. Smoked a cigarette, a cigar, or pipe, or used snuff or chewing tobacco?</td>
						<td><input type="radio" name="q21" data-col="1" value="1"></td>
						<td><input type="radio" name="q21" data-col="2" value="0"></td>
						<td><input type="radio" name="q21" data-col="3" value="1"></td>
					</tr>
					<tr>
						<td id="t2">22. Used drugs like marijuana, cocaine or crack, club drugs (like
							ecstasy), hallucinogens (like LSD), heroin, inhalants or solvents
							(like glue), or methamphetamine (like speed)?</td>
						<td><input type="radio" name="q22" data-col="1" value="1"></td>
						<td><input type="radio" name="q22" data-col="2" value="0"></td>
						<td><input type="radio" name="q22" data-col="3" value="1"></td>
					</tr>
					<tr>
						<td id="t2">23. Used any medicine without a doctor’s prescription (e.g., painkillers
							[like Vicodin], stimulants [like Ritalin or Adderall], sedatives or
							tranquilizers [like sleeping pills or Valium], or steroids)?</td>
						<td><input type="radio" name="q23" data-col="1" value="1"></td>
						<td><input type="radio" name="q23" data-col="2" value="0"></td>
						<td><input type="radio" name="q23" data-col="3" value="1"></td>
					</tr>
					</table>
					</div>
				 </div>
			  </div>
			  <input type="button" id="prev" name="previous" class="previous action-button" value="BACK" />
			  <input type="button" id="next" name="next" class="next action-button" value="NEXT" />
			  
		   </fieldset>
		   
		   <fieldset>
			  <div class="row">
				 <div class="col-md-6 my-2">
					<div class='btns'>
					<table id="t1">
					<tr>
						<th id="th1" style="width: 750px">In the past TWO (2) WEEKS, has your child…</th>
						<th>Yes<br>(0)</th>
						<th>No<br>(1)</th>
						<th>Don't Know<br>(2)</th>
					</tr>
					<tr>
						<td id="t2">24. In the past TWO (2) WEEKS, has he/she talked about wanting to 
						kill himself/herself or about wanting to commit suicide ?</td>
						<td><input type="radio" name="q24" data-col="1" value="0"></td>
						<td><input type="radio" name="q24" data-col="2" value="1"></td>
						<td><input type="radio" name="q24" data-col="3" value="0"></td>
					</tr>
					<tr>
						<td id="t2">25. Has he/she EVER tried to kill himself/herself ?</td>
						<td><input type="radio" name="q25" data-col="1" value="0"></td>
						<td><input type="radio" name="q25" data-col="2" value="1"></td>
						<td><input type="radio" name="q25" data-col="3" value="0"></td>
					</tr>
					</table>
					</div>
				 </div>
			  </div>
			  <input type="button" id="prev" name="previous" class="previous action-button" value="BACK" />
			  <input type="submit" id="sbmt" name="submit" value="SUBMIT"/>
			  
		   </fieldset>
		   
		  
		   <!-- progressbar -->
		   <div id="progressbar">
			  <div class="progress-bar bg-info" style="width:20%">Page 1 out of 6</div>
			  <div class="progress-bar bg-info" style="width:35%">Page 2 out of 6</div>
			  <div class="progress-bar bg-info" style="width:50%">Page 3 out of 6</div>
			  <div class="progress-bar bg-info" style="width:70%">Page 4 out of 6</div>
			  <div class="progress-bar bg-info" style="width:85%">Page 5 out of 6</div>
			  <div class="progress-bar bg-info" style="width:100%">Page 6 out of 6</div>
		   </div>
		   
		</form>
		
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
	<script>
		$(document).ready(function() 
		{
			$(".next").click(function(event) 
			{
				var current_index = $(this).parent().index("fieldset");
			
				if(validateStep(current_index))
				{
					makeStepActive(current_index+1);
				}
				else
				{
				
					event.preventDefault();
				}
			});

			$(".previous").click(function() 
			{
				var current_index = $(this).parent().index("fieldset");
				makeStepActive(current_index - 1);
			});

			makeStepActive(0);	
			//this is for calculation
		 
		});
	
		function makeStepActive(index)
		{
			var step = $("#progressbar div:eq("+index+")");
			var feildset = $("fieldset:eq("+index+")");
			if(step.length)
			{
				$("#progressbar div").hide();
				$("fieldset").hide();
				step.show();
				feildset.slideDown(0); <!--ni untuk transition kat slide tu-->
			}
		}
	
		function validateStep(step)
		{
			switch(step)
			{
				case 0:
					if(($("input[name='q1']:checked").length === 0))
					{
						alert('select any question 1!');
						return false;
					}
					else if(($("input[name='q2']:checked").length === 0))
					{
						alert('select any question 2!');
						return false;
					}
					else if(($("input[name='q3']:checked").length === 0))
					{
						alert('select any question 3!');
						return false;
					}
					else if(($("input[name='q4']:checked").length === 0))
					{
						alert('select any question 4!');
						return false;
					}
					else if(($("input[name='q5']:checked").length === 0))
					{
						alert('select any question 5!');
						return false;
					}
					return true;
					
				break;
				case 1:
					if(($("input[name='q6']:checked").length === 0))
					{
						alert('select any question 6!');
						return false;
					}
					else if (($("input[name='q7']:checked").length === 0))
					{
						alert('select any question 7!');
						return false;
					}
					else if(($("input[name='q8']:checked").length === 0))
					{
						alert('select any question 8!');
						return false;
					}
					else if(($("input[name='q9']:checked").length === 0))
					{
						alert('select any question 9!');
						return false;
					}
					else if(($("input[name='q10']:checked").length === 0))
					{
						alert('select any question 10!');
						return false;
					}
					return true;
				break;
				case 2:
					if(($("input[name='q11']:checked").length === 0))
					{
						alert('select any question 11!');
						return false;
					}
					else if(($("input[name='q12']:checked").length === 0))
					{
						alert('select any question 12!');
						return false;
					}
					else if(($("input[name='q13']:checked").length === 0))
					{
						alert('select any question 13!');
						return false;
					}
					else if(($("input[name='q14']:checked").length === 0))
					{
						alert('select any question 14!');
						return false;
					}
					else if(($("input[name='q15']:checked").length === 0))
					{
						alert('select any question 15!');
						return false;
					}
					return true;
					
				break;
				case 3:
					if(($("input[name='q16']:checked").length === 0))
					{
						alert('select any question 16!');
						return false;
					}
					else if (($("input[name='q17']:checked").length === 0))
					{
						alert('select any question 17!');
						return false;
					}
					else if(($("input[name='q18']:checked").length === 0))
					{
						alert('select any question 18!');
						return false;
					}
					else if(($("input[name='q19']:checked").length === 0))
					{
						alert('select any question 19!');
						return false;
					}
					return true;
				break;
				
				case 4:
					if(($("input[name='q20']:checked").length === 0))
					{
						alert('select any question 20!');
						return false;
					}
					else if (($("input[name='q21']:checked").length === 0))
					{
						alert('select any question 21!');
						return false;
					}
					else if(($("input[name='q22']:checked").length === 0))
					{
						alert('select any question 22!');
						return false;
					}
					else if(($("input[name='q23']:checked").length === 0))
					{
						alert('select any question 23!');
						return false;
					}
					return true;
				break;
				
				case 5:
					if(($("input[name='q24']:checked").length === 0))
					{
						alert('select any question 24!');
						return false;
					}
					else if (($("input[name='q25']:checked").length === 0))
					{
						alert('select any question 25!');
						return false;
					}
					return true;
				break;
				
			}
		}
	</script>
</html>