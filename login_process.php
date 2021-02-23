<?php
include 'connect.php';
session_start();
if(isset($_POST['login']))
{
  $username = $_POST['username'];
  $password = $_POST['password']; 

  $query1="select * from login_details where username ='$username' and password = '$password'";
  $query2="select * from signup_details where email ='$username' and password = '$password'";

  $data1=mysqli_query($conn, $query1);
  $data2=mysqli_query($conn, $query2);
  if($data1->num_rows==1)
  {
    $object1 = $data1->fetch_object();
    $_SESSION['username'] = $object1->username;
    echo "<script> alert('Login Successful')</script>";
    header("refresh:0; url=admin.php");
  }
  elseif ($data2->num_rows==1)
   {
        $object = $data2->fetch_object();
        $_SESSION['uid'] = $object->uid;
        echo "<script> alert('Login Successful')</script>";
        header("refresh:0; url=user.php");
  }
  else
  {
    echo "<script> alert('Something went wrong..Incorrect email or password')</script>";
    header("refresh:5; url=index.php");
  }
}
  else
{
  echo "POST is not set!";
}


?>