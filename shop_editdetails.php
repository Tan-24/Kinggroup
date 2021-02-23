<?php
include 'connect.php';
session_start();
if(isset($_POST['edit']))
{
	$shop_id = $_SESSION['shop_id'];
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];


	$query="UPDATE `shops` SET name='$name',mobile='$mobile',pass='$pass',email='$email'  WHERE shop_id='$shop_id'";
	$data=mysqli_query($conn,$query);

	if($data)
	{
		echo "<script> alert('Details updated successfully')</script>";
		header("refresh:0; url=edit_shop_form.php");
	}
	else
	{
		echo "<script> alert('Something went wrong')</script>";
		header("refresh:0; url=edit_shop_form.php");
	}

}
?>