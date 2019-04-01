<?php
session_start();
$err = @$_SESSION['errMsg'];
$errName = @$_SESSION['errName'];
$errEmail = @$_SESSION['errEmail'];
$errMobile = @$_SESSION['errMobile'];
$errAddress = @$_SESSION['errAddress'];
$errPassLen = @$_SESSION['errPassLen'];
$errPassPattern = @$_SESSION['errPassPattern'];
$errMatch = @$_SESSION['errMatch'];
$errImage = @$_SESSION['errImage'];
$errImageSize = @$_SESSION['errImageSize'];
$errImageType = @$_SESSION['errImageType'];
$errReg = @$_SESSION['errReg'];
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
        <div class="col-md-2"></div>
        <div class="col-md-8 transparent-form mt-5 mb-5">
            <div class="row pt-3">
                <div class="col-12 text-center">
                    <img src="assets/images/favicon1.png" width="70" height="50">
                </div>
                <div class="col-12 text-center pt-5">
                    <p class="h2"> Registration Page </p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <span class="h3 font-weight-bold text-danger "> <?php echo $err; ?> </span>
                    <span class="font-weight-bold text-danger"> <?php echo $errName; ?> </span>
                    <span class="font-weight-bold text-danger"> <?php echo $errEmail; ?> </span>
                    <span class="font-weight-bold text-danger"> <?php echo $errMobile; ?> </span>
                    <span class="font-weight-bold text-danger"> <?php echo $errAddress; ?> </span>
                    <span class="font-weight-bold text-danger"> <?php echo $errPassLen; ?> </span>
                    <span class="font-weight-bold text-danger"> <?php echo $errPassPattern; ?> </span>
                    <span class="font-weight-bold text-danger"> <?php echo $errMatch; ?> </span>
                    <span class="font-weight-bold text-danger"> <?php echo $errImage; ?> </span>
                    <span class="font-weight-bold text-danger"> <?php echo $errImageSize; ?> </span>
                    <span class="font-weight-bold text-danger"> <?php echo $errImageType; ?> </span>
                    <span class="h3 font-weight-bold text-danger "> <?php echo $errReg; ?> </span>

                    <form action="assets/servers/registerServer.php" method="post" class="mt-3" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="firstname" class="col-md-3 col-form-label font-weight-bold">Firstname</label>
                            <div class="col-md-9">
                                <input type="text" name="firstname" id="firstname" class="form-control color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-md-3 col-form-label font-weight-bold">Lastname</label>
                            <div class="col-md-9">
                                <input type="text" name="lastname" id="lastname" class="form-control color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="othername" class="col-md-3 col-form-label font-weight-bold">Other name</label>
                            <div class="col-md-9">
                                <input type="text" name="othername" id="othername" class="form-control color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label font-weight-bold">Email</label>
                            <div class="col-md-9">
                                <input type="text" name="email" id="email" class="form-control color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="faculty" class="col-md-3 col-form-label font-weight-bold">Faculty</label>
                            <div class="col-md-9">
                                <input type="text" name="faculty" id="faculty" class="form-control color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dept" class="col-md-3 col-form-label font-weight-bold">Department</label>
                            <div class="col-md-9">
                                <select class="form-control" name="dept">
                                    <option selected> Choose... </option>
                                    <option> Accounting </option>
                                    <option value="busad"> Business Administration </option>
                                    <option value="fin"> Banking and Finance </option>
                                    <option value="insure"> Insurance </option>
                                    <option value="irpm"> IRPM </option>
                                    <option value="creative"> Creative Arts </option>
                                    <option value="english"> English-language </option>
                                    <option value="theater"> Theater Art </option>
                                    <option value="history"> History </option>
                                    <option value="linguistics"> Linguistics </option>
                                    <option value="econs"> Economics </option>
                                    <option value="socio"> Sociology </option>
                                    <option value="pol"> Political Science </option>
                                    <option value="eduadmin"> Education Administration </option>
                                    <option value="mathsedu"> Mathematics Education </option>
                                    <option value="engedu"> English Education </option>
                                    <option value="econedu"> Economics Education </option>
                                    <option value="chemedu"> Chemistry Education </option>
                                    <option value="botany"> Botany </option>
                                    <option value="bch"> Biochemistry </option>
                                    <option value="chem"> Chemistry </option>
                                    <option value="csc"> Computer Science </option>
                                    <option value="maths"> Mathematics </option>
                                    <option value="chemeng"> Chemical Engineering </option>
                                    <option value="compeng"> Computer Engineering </option>
                                    <option value="civileng"> Civil Engineering </option>
                                    <option value="electeng"> Elect/Elect Engineering </option>
                                    <option value="mecheng"> Mechanical Engineering </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dob" class="col-md-3 col-form-label font-weight-bold">Date of Birth</label>
                            <div class="col-md-9">
                                <input type="text" name="dob" id="dob" class="form-control color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phonenos" class="col-md-3 col-form-label font-weight-bold">Phone nos</label>
                            <div class="col-md-9">
                                <input type="text" name="mobile" id="phonenos" class="form-control color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-3 col-form-label font-weight-bold">Address</label>
                            <div class="col-md-9">
                                <input type="text" name="address" id="address" class="form-control color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nextofkin" class="col-md-3 col-form-label font-weight-bold">Next of kin</label>
                            <div class="col-md-9">
                                <input type="text" name="nextofkin" id="nextofkin" class="form-control color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kincontact" class="col-md-3 col-form-label font-weight-bold">Contact of Next-of-kin</label>
                            <div class="col-md-9">
                                <input type="text" name="kincontact" id="kincontact" class="form-control color">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label font-weight-bold">Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password" id="password" class="form-control color">
                            </div>
                            <span class="font-weight-bold text-secondary">Must contain one @.+$ and not less than 8 characters</span>
                        </div>
                        <div class="form-group row">
                            <label for="confirmPassword" class="col-md-3 col-form-label font-weight-bold">Confirm Password</label>
                            <div class="col-md-9">
                                <input type="password" name="confirmPassword" id="confirmPassword" class="form-control color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-3 col-form-label font-weight-bold">Upload Image</label>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-4">  
                                        <input type="file" name="image" id="image">
                                    </div>
                                    <span class="col-md-9 text-secondary font-weight-bold"> only .jpg .png .jpeg format allowed </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-primary" value="Register" name="btnRegister">
                            </div>
                        </div>
                    </form> 
                </div>
                <div class="col-md-1"></div >    
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


</body>
</html>
<?php unset($_SESSION['errMsg']); ?>
<?php unset($_SESSION['errName']); ?>
<?php unset ($_SESSION['errEmail']); ?>
<?php unset ($_SESSION['errMobile']); ?>
<?php unset ($_SESSION['errAddress']); ?>
<?php unset ($_SESSION['errPassLen']); ?>
<?php unset ($_SESSION['errPassPattern']); ?>
<?php unset ($_SESSION['errMatch']); ?>
<?php unset ($_SESSION['errImage']); ?>
<?php unset ($_SESSION['errImageSize']); ?>
<?php unset ($_SESSION['errImageType']); ?>
<?php unset ($_SESSION['errReg']); ?>
