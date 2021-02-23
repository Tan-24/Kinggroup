<?php
session_start();
$uid = $_SESSION['uid'];
include 'connect.php';


if(isset($_POST['back']))
{

  $manager="MANAGER";
  $agm="AGM";
  $dgm="DGM";
  $gm="GM";
  $cgm="CGM";
  $ed="ED";
  $dir="DIRECTOR";
  $md="MD";
  $cc="cc";

  $stat1="GREEN";
  $stat2="RED";
  $inc='1';
  $add='50';
  $uid=$_SESSION['uid'];
  $query="SELECT * from payout WHERE uid='$uid'";
  $result=mysqli_query($conn,$query);
  if($result)
    {
      while ($object = $result->fetch_object()) 
      {
      $amount=$object->amount;
      $purchase=$object->purchase;
      $status=$object->stat;
      }
    }
    if($purchase>=500  && $status!=$stat1)
    {
    $query1="select * from payout";
    $status=mysqli_query($conn,$query1);
    if($status)
    {
    $query3="update payout set stat='$stat1' where uid='$uid'";
    $status2=mysqli_query($conn,$query3); 
    if($status2)
    {
 
    do
    {
      // $count='0';
    $ref="select * from signup_details where uid='$uid'";
    $data=mysqli_query($conn,$ref);
    // if($data)
    // {
      while($object=$data->fetch_object())
      {
      $refid=$object->asid;
      if($refid!=0)
      {
      $c="select count from signup_details where uid=$refid";
      $q=mysqli_query($conn,$c);
      while ($object = $q->fetch_object()) 
      {
      $count=$object->count;
      }
      $q1="select balance from payout where uid='$refid'";
      $b=mysqli_query($conn,$q1);
      while ($object = $b->fetch_object()) 
      {
      $balance=$object->balance;
      }
      // echo "\n".$uid.$count;

      // if($refid !=0)
      // {
        ++$count;
        $balance=$balance+50;
        $count1="update signup_details set count='$count' where uid='$refid'";
        $update=mysqli_query($conn,$count1);
        $count2="update payout set balance='$balance' where uid='$refid'";
        $update2=mysqli_query($conn,$count2);

        if($count==1)
        {
        $desig="update signup_details set designation='$manager' where uid='$refid'";
        $d=mysqli_query($conn,$desig);
        }
        else if($count==100)
        {
        $desig="update signup_details set designation='$agm' where uid='$refid'";
        $d=mysqli_query($conn,$desig);
        }
        else if($count==200)
        {
        $desig="update signup_details set designation='$dgm' where uid='$refid'";
        $d=mysqli_query($conn,$desig);
        }
        else if($count==300)
        {
        $desig="update signup_details set designation='$gm' where uid='$refid'";
        $d=mysqli_query($conn,$desig);
        }
        else if($count==400)
        {
        $desig="update signup_details set designation='$cgm' where uid='$refid'";
        $d=mysqli_query($conn,$desig);
        }
        else if($count==500)
        {
        $desig="update signup_details set designation='$ed' where uid='$refid'";
        $d=mysqli_query($conn,$desig);
        }
        else if($count==1000)
        {
        $desig="update signup_details set designation='$dir' where uid='$refid'";
        $d=mysqli_query($conn,$desig);
        }
        else if($count==2000)
        {
        $desig="update signup_details set designation='$md' where uid='$refid'";
        $d=mysqli_query($conn,$desig);
        }
        else if($count==5000)
        {
        $desig="update signup_details set designation='$cc' where uid='$refid'";
        $d=mysqli_query($conn,$desig);
        }
        else
        {
        }
        $uid=$refid;

        // echo $count;
        // echo "refid: ".$refid;
        // echo "count: ".$count;
        // echo "query: ".$count1;
        // echo "uid: ".$uid;
      // }}
}      }}while($refid!=0);
    }

    echo "<script> alert('status updated')</script>";
    header("refresh:0; url=purchase.php?screen=buytoken");
    }

    else
    {
    echo "<script> alert('status not updated')</script>";
    header("refresh:2; url=purchase.php?screen=buytoken");
    }
    }
    else
    {
    header("refresh:0; url=purchase.php?screen=buytoken");
    }
}
