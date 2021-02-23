<?php 
include "connect.php";
session_start();

	$_SESSION['dob']=$_POST['dob'];
	if(isset($_POST['submit']))
	{
		echo "<script>alert('Age is validated')</script>";
		header("refresh:0; url=signup.php");
	}
	else
	{
		echo "<script>alert('Enter valid age')</script>";	
		header("refresh:10; url=date.php");
	}



?>