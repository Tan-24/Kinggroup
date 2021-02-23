<?php
include 'connect.php';
session_start();
if(isset($_POST['edit']))
{
	$uid = $_SESSION['uid'];
	$address=$_POST['address'];
	$phoneno=$_POST['phoneno'];
	$password=$_POST['password'];
	$profilepic=$_POST['profilepic'];


	$query="UPDATE `signup_details` SET address='$address',phoneno='$phoneno',password='$password',profilepic='$profilepic'  WHERE uid='$uid'";
	$data=mysqli_query($conn,$query);

	if($data)
	{
		echo "<script> alert('Details updated successfully')</script>";
		header("refresh:0; url=user.php");
	}
	else
	{
		echo "<script> alert('Something went wrong')</script>";
		header("refresh:0; url=edit.php");
	}

}
?>