<?php
session_start();
include_once 'connect.php';
if(isset($_POST['shop_login_submit'])){
    $shop_id=mysqli_real_escape_string($conn,$_POST['shop_id']);
    $pass=mysqli_real_escape_string($conn,$_POST['pass']);
    if(empty($shop_id) || empty($pass)){
        header("Location:shop_join.php");
        exit();
    }else{
        
        $sql = "SELECT * FROM shops WHERE shop_id='$shop_id' AND pass='$pass';";
        $result = mysqli_query($conn, $sql);
        $resultch = mysqli_num_rows($result);
        if($resultch > 0){
           $row=mysqli_fetch_assoc($result);
           $_SESSION['shop_id']=$row['shop_id'];
           echo "<script> alert('Login Successful')</script>";
           header("refresh:0; url=shop_dash.php");
        }else{
            header("Location:shop_join.php");
            exit();
        }

    }

}

?>