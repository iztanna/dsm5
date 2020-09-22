<?php

$username=$_POST['username'];//username
$password=$_POST['password'];//password

session_start();

$con=mysqli_connect("localhost","root","","login");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `login_info` WHERE `username`='$username' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	//echo "Login success";
	$_SESSION['log']=$username;
	header("refresh:0;url=welcome.php");

}
else
{
	echo "please fill proper details";
	header("refresh:0;url=loginpage.php");// it takes 2 sec to go index page
}

?>