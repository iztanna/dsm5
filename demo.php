<?php

$conn = mysqli_connect('localhost','root','','login');

$sql = mysqli_query($conn, "SELECT * FROM `question_info` ORDER BY num DESC LIMIT 1");

$print_data = mysqli_fetch_row($sql);

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
	#table2 td, th 
	{
		padding: 12px;
		
	}
	#table2 tr{
		background-color: #f2f3ff;
	}
	#table2 tr:hover {
		background-color:#C5CAE9;
	}
	#t1 th:empty 
	{
		border: 0;
	}
	#th1
	{
		width: 20px;
		text-align: center;
	}
	th
	{
		background-color: #003d7a;
		color: white;
	}
	#table2
	{
		width: 100%;
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
	</style>
	<body>		
		<center>
		<div id="fform"> 
		<h1>Result</h1>
		<section id="userDetail">
				<table id="ud1">
				<tr>
					<td id="td1"><p>Name:</p></td>
					<td id="td2"><p>Amina Sofea Binti Rashid</p></td>
				</tr>
				<tr>
					<td id="td1"><p>Id:</p></td>
					<td id="td2"><p>100913084388</p></td>
				</tr>
				<tr>
					<td id="td1"><p>Assessment taken: </p></td>
					<td id="td2"><p>12/8/2020</p></td>
				</tr>
				</table>
		</section><br><br><br>
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
					<td>
					<?php 
					if ($print_data[12] == 0) 
					  echo "No";
					else 
					  echo "Yes";
					?></td>
				</tr>
				<tr>
					<td id="th1">II</td>
					<td>Sleep problems</td>
					<td>
					<?php 
					if ($print_data[13] == 0) 
					  echo "No";
					else 
					  echo "Yes";
					?></td>
				</tr>
				<tr>
					<td id="th1">III</td>
					<td>Inattention </td>
					<td>
					<?php 
					if ($print_data[14] == 0) 
					  echo "No";
					else 
					  echo "Yes";
					?></td>
				</tr>
				<tr>
					<td id="th1">IV</td>
					<td>Depression</td>
					<td>
					<?php 
					if ($print_data[15] == 0) 
					  echo "No";
					else 
					  echo "Yes";
					?></td>
				</tr>
				<tr>
					<td id="th1">V</td>
					<td>Anger</td>
					<td id="result5"></td>
				</tr>
				<tr>
					<td id="th1">VI</td>
					<td>Irritability</td>
					<td id="result6"></td>
				</tr>
				<tr>
					<td id="th1">VII</td>
					<td>Mania </td>
					<td id="result7"></td>
				</tr>
				<tr>
					<td id="th1">VIII</td>
					<td>Anxiety </td>
					<td id="result8"></td>
				</tr>
				<tr>
					<td id="th1">IX</td>
					<td>Psychosis</td>
					<td id="result9"></td>
				</tr> 
				<tr>
					<td id="th1">X</td>
					<td>Repetitive thoughts and behaviors</td>
					<td id="result10">No</td>
				</tr>
				<tr>
					<td id="th1">XI</td>
					<td>Substance use</td>
					<td>Yes</td>
				</tr>
				<tr>
					<td id="th1">XII</td>
					<td>Suicidal ideation/suicide attempts</td>
					<td>No</td>
				</tr>
			</tbody>
			</table>
			</div>
		</section>
		</div></center>
	</body>
</html>