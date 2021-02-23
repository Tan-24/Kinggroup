<?php
session_start();
$uid = $_SESSION['uid'];
include 'connect.php';
$conn = new mysqli($servername, $username, $password, $dbname);


if (isset($_POST['buy'])) {
  $_SESSION['amount2'] = $_POST['buy'];
  $shop_id = $_POST['shop_id'];
  $amount = $_SESSION['amount2'];
  $stat1 = "GREEN";
  $stat2 = "RED";
  $uid = $_SESSION['uid'];
  $query1 = "SELECT * from payout WHERE uid='$uid'";
  $result1 = mysqli_query($conn, $query1);
  $query2 = "SELECT amount,purchase from payout WHERE uid='$uid'";
  $result2 = mysqli_query($conn, $query2);
  if ($result1) {
    while ($object1 = $result1->fetch_object()) {
      $balance = $object1->balance;
      $purchase = $object1->purchase;
    }
  }
  if ($balance >= $amount) {
    $query = "select * from payout";
    $status = mysqli_query($conn, $query);
    if ($status) {
      $per = (20 / 100) * $_SESSION['amount2'];
      $minus_bal = $_SESSION['amount2'] - $per;
      $balance = $balance - $minus_bal;
      $purchase = $purchase + $_SESSION['amount2'];

      $query1 = "select * from shops where shop_id='$shop_id' ";
      $status1 = mysqli_query($conn, $query1);
      if ($status1) {
        $object_1 = $status1->fetch_object();
        $shop_bal = $object_1->balance;
        $sales = $object_1->sales;

        $per2 = (10 / 100) * $_SESSION['amount2'];
        // $minus_bal2 = $_SESSION['amount2'] - $per2;
        $shop_bal = $shop_bal + $per2;
        $sales = $sales + $_SESSION['amount2'];

        $query2 = "update shops set balance='$shop_bal',sales='$sales' where shop_id='$shop_id'";
        mysqli_query($conn, $query2);
      }


      $query2 = "update payout set balance='$balance',purchase='$purchase' where uid='$uid'";
      $status2 = mysqli_query($conn, $query2);
      if ($status2) {
        echo "<script> alert('buy successful')</script>";
        $q = "insert into purchase_details(pamount,uid,shop_id) values('$amount','$uid','$shop_id')";
        $update = mysqli_query($conn, $q);
        if ($update) {
          $last_id = $conn->insert_id;

          header("refresh:0; url=buyreceipt.php?ld=$last_id");
        } else {
          echo "<script> alert('payment history stored')</script>";
          header("refresh:0; url=buyreceipt.php");
        }
      } else {
        echo "<script> alert('balance not updated')</script>";
        header("refresh:5; url=purchase.php");
      }
    }
  } else {
    echo "<script> alert('Please recharge your account')</script>";
    header("refresh:0; url=purchase.php");
  }
}
