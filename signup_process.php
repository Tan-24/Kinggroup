<?php
session_start();
include 'connect.php';
$conn=new mysqli($servername,$username,$password,$dbname);
$im='1000';
$email=$password=$conpassword=$phoneno=$adhaarno=$adhaarname=$address=$image=$bankname=$accno=$ifsccode=$image1=$asid=$amount="";

if(isset($_POST['login']))
{ 
  $email = $_POST['email'];
  $password = $_POST['password'];
  $conpassword = $_POST['conpassword'];
  $phoneno = $_POST['phoneno'];
  $adhaarno = $_POST['adhaarno'];
  $adhaarname = $_POST['adhaarname'];
  $address = $_POST['address']; 
  $image =$_POST['image'];
  $bankname =$_POST['bankname'];
  $accno =$_POST['accno'];
  $ifsccode =$_POST['ifsccode'];
  $image1 =$_POST['image1'];
  $asid =$_POST['asid'];
  $amount =$_POST['amount'];
  $dob=$_SESSION['dob'];

  $query="INSERT INTO signup_details(email,password,phoneno,adhaarno,adhaarname,address,adhaarpic,bankname,accno,ifsccode,passbookpic,asid,amount,dob) values('$email','$password','$phoneno','$adhaarno','$adhaarname','$address','$image','$bankname','$accno','$ifsccode','$image1','$asid','$amount','$dob')";
  
  $query1="select username from login_details where username ='$username'";
  $query2="select * from signup_details where email ='$email' && password='$password'";

  $search=mysqli_query($conn,$query1);
  
  if($password == $conpassword)
  {
  if($search->num_rows==0)
  {
    $data=mysqli_query($conn, $query);
    if($data)
    {
    echo "<script> alert('Account created successfully')</script>";
    // $query2="select uid from login_details where username ='$username' && password='$password'";
    $q2=mysqli_query($conn,$query2);
    $object = $q2->fetch_object();
    $_SESSION['uid'] = $object->uid;
    $uid=$_SESSION['uid'];
    $query3="insert into payout(amount,balance,uid) values ('$amount','$amount','$uid')";
    $q3=mysqli_query($conn,$query3);
    if($q3)
    {
    echo "<script> alert('Rs.1000/- are deducted')</script>";
    header("refresh:0; url=user.php");
    }
    else
    {
    echo "<script> alert('Rs.1000/- are not deducted')</script>";
    header("refresh:5; url=user.php"); 
    }
    // header("refresh:0; url=user.php");
    }
    else 
    {
     echo "<script> alert('Something Went Wrong...')</script>";
     header("refresh:5; url=signup.php");
    }
  }
   else
    {
     echo "<script> alert('Username is already taken...')</script>";
     header("refresh:5; url=signup.php");
    }
  }
  else
    {
     echo "<script> alert('Password does not match')</script>";
     header("refresh:0; url=signup.php");
    }
  }

  else
{
  echo "POST is not set!";
}

?>