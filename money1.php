<?php
session_start();
$uid = $_SESSION['uid'];
include 'connect.php';
$conn=new mysqli($servername,$username,$password,$dbname);


if(isset($_POST['addmoney']))
{
  $amount1=$_POST['amount1'];
  $query="select * from payout WHERE uid='$uid'";
  $data=mysqli_query($conn,$query);

  if($data->num_rows>0)
  {
    $object = $data->fetch_object();
    $balance=$amount1+$object->balance;
    $query="update payout set balance='$balance' where uid='$uid'";
    $update=mysqli_query($conn,$query);
    if($update){
    echo "<script> alert('Details updated successfully')</script>";
    header("refresh:0; url=purchase.php");
    }
    else
    {
    echo "<script> alert('Something went wrong')</script>";
    header("refresh:10; url=index.php");
    
    }
    }
    
  }
?>