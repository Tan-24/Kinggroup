<?php
session_start();
$uid = $_SESSION['uid'];
include 'connect.php';
$conn=new mysqli($servername,$username,$password,$dbname);


if(isset($_POST['buy']))
{
  $amount2=5000;
  $stat1="GREEN";
  $uid=$_SESSION['uid'];
  $query1="SELECT * from payout WHERE uid='$uid'";
  $result1=mysqli_query($conn,$query1);
  $query2="SELECT amount,purchase from payout WHERE uid='$uid'";
  $result2=mysqli_query($conn,$query2);
  if ($result1) 
  {
    while ($object1 = $result1->fetch_object()) 
    {
      $balance=$object1->balance;
      $purchase=$object1->purchase;
    }
  }
    if($balance>=5000)
    {
    $query="select * from payout";
    $status=mysqli_query($conn,$query);
    if($status)
    {
    $balance=$balance-$amount2;
    $purchase=$purchase+$amount2;
    $query2="update payout set balance='$balance',purchase='$purchase' where uid='$uid'";
    $status2=mysqli_query($conn,$query2); 
    if($status2)
    {
    echo "<script> alert(' buy successful')</script>";

    header("refresh:0; url=buyreceipt3.php?screen=buytoken");
    }
    else
    {
    echo "<script> alert('balance not updated')</script>";
    header("refresh:5; url=index.php?screen=buytoken");
    }
    }
    }
    else
    {
    echo "<script> alert('Please recharge your account')</script>";
    header("refresh:0; url=add_money.php?screen=buytoken");
    }

    
}
?>