<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Template Main CSS File -->
    <title>King Stock Point</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div id="first">
                    <div class="myform form ">
                        <div class="logo mb-3">
                            <div class="col-md-12 text-center">
                                <h1>Login</h1>
                            </div>
                        </div>
                        <form action="shop_login.php" method="post" >
                            <div class="form-group">
                                <label for="exampleInputEmail1">Stock Point Id</label>
                                <input type="text" name="shop_id" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Stock Point Id">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name="pass" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                            </div>
                           
                            <div class="col-md-12 text-center ">
                                <button type="submit" name="shop_login_submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                            </div>
                            <div class="col-md-12 ">
                                <div class="login-or">
                                    <hr class="hr-or">
                                    <span class="span-or">or</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <p class="text-center">Don't have account? <a href="#" id="signup">Sign up here</a></p>
                            </div>
                        </form>

                    </div>
                </div>
                <div id="second">
                    <div class="myform form ">
                        <div class="logo mb-6">
                            <div class="col-md-12 text-center">
                                <h1> Signup</h1>
                            </div>
                        </div>
                        <form action="shop_signup.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Owner Name</label>
                                <input type="text" name="name" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mobile Number</label>
                                <input type="number" name="mobile" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Mobile">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Adhara No. </label>
                                <input type="number" name="adhara" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Adhara No.">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> PAN Card No.</label>
                                <input type="text" name="pan" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="PAN Card No.">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> UAM No.</label>
                                <input type="text" name="uam" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="UAM No.">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                            </div>
                            <?php
                            $shop_id = rand(1111111111, 9999999999);
                            ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Stock Point Id</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $shop_id; ?>" id="lastname" aria-describedby="emailHelp" placeholder="PAN Card No.">
                                <input type="hidden" name="shop_id" value="<?php echo $shop_id ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Amount</label>
                                <input type="text"  disabled value="<?php echo "5000" . ' .Rs'; ?>" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="PAN Card No.">
                                <input type="hidden" name="amount" value="<?php echo 5000 ?>">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Signnature</label>
                                <input type="file" name="signature" class="form-control" aria-describedby="emailHelp">
                            </div>

                            <div class="form-group" style="margin-top: 2em;">
                                <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                            </div>
                            <div class="col-md-12 text-center mb-3">
                                <button type="submit" name="shop_signup_submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started</button>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <p class="text-center"><a href="#" id="signin">Already have an account?</a></p>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>

            </div>
        </div>
    </div>
    </div>

</body>

</html>


<style>
    body {
        padding-top: 4.2rem;
        padding-bottom: 4.2rem;
        background-color: #ffffff;
        background-image: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%);
    }

    a {
        text-decoration: none !important;
    }

    h1,
    h2,
    h3 {
        font-family: "Open Sans", sans-serif;
        color: #576971;
    }

    .myform {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        padding: 1rem;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .1);
        border-radius: 10px;
        outline: 0;
        max-width: 800px;
    }

    .tx-tfm {
        text-transform: uppercase;
    }

    .mybtn {
        border-radius: 50px;
    }

    .login-or {
        position: relative;
        color: #aaa;
        margin-top: 10px;
        margin-bottom: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .span-or {
        display: block;
        position: absolute;
        left: 50%;
        top: -2px;
        margin-left: -25px;
        background-color: #fff;
        width: 50px;
        text-align: center;
    }

    .hr-or {
        height: 1px;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }

    .google {
        color: #666;
        width: 100%;
        height: 40px;
        text-align: center;
        outline: none;
        border: 1px solid lightgrey;
    }

    form .error {
        color: #ff0000;
    }

    #second {
        display: none;
    }
</style>

<script>
    $("#signup").click(function() {
        $("#first").fadeOut("fast", function() {
            $("#second").fadeIn("fast");
        });
    });

    $("#signin").click(function() {
        $("#second").fadeOut("fast", function() {
            $("#first").fadeIn("fast");
        });
    });



    $(function() {
        $("form[name='login']").validate({
            rules: {

                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,

                }
            },
            messages: {
                email: "Please enter a valid email address",

                password: {
                    required: "Please enter password",

                }

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });



    $(function() {

        $("form[name='registration']").validate({
            rules: {
                firstname: "required",
                lastname: "required",
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                }
            },

            messages: {
                firstname: "Please enter your firstname",
                lastname: "Please enter your lastname",
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                email: "Please enter a valid email address"
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>