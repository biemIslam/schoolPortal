<?php
session_start();
$errInput = @$_SESSION['errInput'];
$errLogin = @$_SESSION['errLogin'];
$errEmail = @$_SESSION['errEmail'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4/font-awesome-4.7.1/css/font-awesome.min.css">
    <!-- <link href="assets/css/login.css" rel="stylesheet" type="text/css"> -->
    <link href="login.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 transparent-form mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row pt-3">
                            <div class="col text-center">
                                <img src="assets/images/favicon1.png" width="70" height="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <p class="h3">Login Page</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end header section i.e 1st row -->

                <!-- form section in second row-->
                <div class="row text-center">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <span class="font-weight-bold text-danger"> <?php echo $errEmail; ?> </span>
                        <span class="font-weight-bold text-danger"> <?php echo $errInput; ?> </span>
                        <span class="font-weight-bold text-danger"> <?php echo $errLogin; ?> </span>
                        <form action="assets/servers/loginServer.php" method="post" id="frmLogin">
                            <div class="row input">
                                <span id="demo" style="color:red"></span>
                                <div class="col-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-user"></i></span>
                                        </div> 
                                        <input type="text" class="form-control color" name="email" id="email" placeholder="you@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row input">
                                <div class="col-12">
                                    <div class="input-group" mb-6>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-lock"></i></span>
                                        </div> 
                                        <input type="password" class="form-control color" name="password" id="password" placeholder="password">
                                    </div>
                                </div>
                            </div>
                            <!-- endof first row for user input -->

                            <!-- checkbox section -->
                            <div class="row check-section">
                                <div class="form-group col-12">
                                     <input type="submit" name="login" value="Sign in" class="mr-1 btn btn-primary">   
                                    <input type="checkbox" id="defaultCheck" name="">
                                    <label for="defaultCheck"> Remember me</label>
                                </div>
                                <div class="col-12">
                                    <p class="h5"><a href="reset.php">Forgot Password?</a></p>
                                </div>
                            </div> <br>
                            
                            <!-- signup section -->
                            <div class="row signup">
                                <div class="col-12">
                                    <p class="h5" style="color:aqua"> Don't have an account? 
                                        <a href="register.php"> 
                                            <button type="button" name="submitSignup" id="submitSignup" class="btn btn-dark">
                                                Sign up </button> 
                                        </a> 
                                    </p>
                                </div>
                            </div>        
                        </form>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    
    <script src="js/login.js"></script>
</body>
</html>
<?php unset($_SESSION['errEmail']); ?>
<?php unset($_SESSION['errInput']); ?>
<?php unset($_SESSION['errLogin']); ?>