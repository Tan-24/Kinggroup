<?php
include 'connect.php';
if (isset($_POST['shop_signup_submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $adhara = mysqli_real_escape_string($conn, $_POST['adhara']);
    $pan = mysqli_real_escape_string($conn, $_POST['pan']);
    $uam = mysqli_real_escape_string($conn, $_POST['uam']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $shop_id = mysqli_real_escape_string($conn, $_POST['shop_id']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);

    if (empty($mobile) || empty($adhara) || empty($pan) || empty($uam)  || empty($amount)|| empty($password)|| empty($shop_id)) {
        header("Location:shop_join.php");
        exit();
    } else {
        if(empty($email)){
            $email="";
        }
        if(empty($name)){
            $name=$shop_id;
        }
        //img
        if (isset($_FILES['signature'])) {
            $errors = array();
            $file_name = $_FILES['signature']['name'];
            $file_size = $_FILES['signature']['size'];
            $file_tmp = $_FILES['signature']['tmp_name'];
            $file_type = $_FILES['signature']['type'];
            $expl = explode('.', $file_name);
            $file_ext = strtolower(end($expl));

            $extensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $extensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }

            if ($file_size > 2097152) {
                $errors[] = 'File size must be excately 2 MB';
            }

            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "img/" . $file_name);
                echo "Success";
            } else {
                print_r($errors);
            }
        }

        // =============================================
        $sql = "SELECT * FROM shops WHERE shop_id='$shop_id';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            echo "no1";

            // header("Location:shop_jion.php?error=Item Already exsist in Menu");
            exit();
        } else {

            //INSERT USER INTO DATABASE
            $sql = "INSERT INTO shops(shop_id, name, mobile, adhara,pan,uam,email,pass,balance,signnature)VALUES('$shop_id','$name','$mobile','$adhara','$pan','$uam','$email','$password','$amount','$file_name');";
            if(mysqli_query($conn, $sql)){
                header("Location:shop_join.php?title=Add To Menu &msg=Item Added To Menu");
            }else{
                header("Location:shop_join.php?eroor=smothing wrong");
            }


            exit();
        }


    }
}
