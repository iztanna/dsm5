<?php

if (isset($_POST['submit']))
{
	$mykid = $_GET['first']; //kena add smtg
	$q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];
	$q4 = $_POST['q4'];
	$q5 = $_POST['q5'];
	$q6 = $_POST['q6'];
	$q7 = $_POST['q7'];
	$q8 = $_POST['q8'];
	$q9 = $_POST['q9'];
	$q10 = $_POST['q10'];
	$q11 = $_POST['q11'];
	$q12 = $_POST['q12'];
	$q13 = $_POST['q13'];
	$q14 = $_POST['q14'];
	$q15 = $_POST['q15'];
	$q16 = $_POST['q16'];
	$q17 = $_POST['q17'];
	$q18 = $_POST['q18'];
	$q19 = $_POST['q19'];
	$q20 = $_POST['q20'];
	$q21 = $_POST['q21'];
	$q22 = $_POST['q22'];
	$q23 = $_POST['q23'];
	$q24 = $_POST['q24'];
	$q25 = $_POST['q25'];
	
	
	$dbconnect = mysqli_connect('localhost','root','','login');
	$sql = mysqli_query($dbconnect, "INSERT INTO `question_info`(mykid, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15,
	q16, q17, q18, q19, q20, q21, q22, q23, q24, q25) 
	values ('$mykid','$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$Sq11', '$q12', '$q13', '$q14', '$q15',
	'$q16', '$q17', '$q18', '$q19', '$q20', '$q21', '$q22', '$q23', '$q24', '$q25')");
	$sql2 = mysqli_query($dbconnect, "UPDATE `patient_info` SET level2=$q25 WHERE mykid='$mykid'");

	if($sql && $sql2)
	{
		header("refresh:0;url=result.php?first=$mykid");
		echo"Succesful";
	}
	else
	{
		echo"Failed";
	}
}
?>