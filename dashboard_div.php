<?php 
session_start();
$user = @$_SESSION['userDetails'] ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Student Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4/font-awesome-4.5.1/css/font-awesome.min.css">
        <link href="login.css" rel="stylesheet" type="text/css">
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/bootstrapjs/bootstrap.min.js"></script>
    </head>
    <body>
            <div class="row">
                <div class='col-lg-4'> <?php echo  "<img src='assets/uploads/".$user['Image']."' width='200' height='200'>"; ?> </div>
                <div class='col-lg-8 mt-3'> 
                        <div class="row">
                            <div class="col-5 col-md-4 h4">  Matric no: </div>
                            <div class="col-5 col-md-8">  <?php echo "<span class='h5'>" . $user['UserID']. "</span>"; ?> </div>
                        </div> 
                        <div class="row">
                            <div class="col-5 col-md-4 h4">  Firstname: </div>
                            <div class="col-5 col-md-8">  <?php echo "<span class='h5'>" . $user['Firstname']. "</span>"; ?> </div>
                        </div>
                        <div class="row">
                            <div class="col-5 col-md-4 h4">  Lastname: </div>
                            <div class="col-5 col-md-8">  <?php echo "<span class='h5'>" . $user['Lastname']. "</span>"; ?> </div>
                        </div> 
                        <div class="row">
                            <div class="col-5 col-md-4 h4">  Othername: </div>
                            <div class="col-5 col-md-8">  <?php echo "<span class='h5'>" . $user['Othername']. "</span>"; ?> </div>
                        </div> 
                        <div class="row">
                            <div class="col-5 col-md-4 h4">  Email: </div>
                            <div class="col-5 col-md-8">  <?php echo "<span class='h5'>" . $user['Email']. "</span>"; ?> </div>
                        </div>
                        <div class="row">
                            <div class="col-5 col-md-4 h4">  Faculty: </div>
                            <div class="col-5 col-md-8">  <?php echo "<span class='h5'>" . $user['Faculty']. "</span>"; ?> </div>
                        </div>
                        <div class="row">
                            <div class="col-5 col-md-4 h4">  Department: </div>
                            <div class="col-5 col-md-8">  <?php echo "<span class='h5'>" . $user['Department']. "</span>"; ?> </div>
                        </div>
                        <div class="row">
                            <div class="col-5 col-md-4 h4">  D.o.B: </div>
                            <div class="col-5 col-md-8">  <?php echo "<span class='h5'>" . $user['Date_of_birth']. "</span>"; ?> </div>
                        </div>
                        <div class="row">
                            <div class="col-5 col-md-4 h4">  Mobile: </div>
                            <div class="col-5 col-md-8">  <?php echo "<span class='h5'>" . $user['Mobile']. "</span>"; ?> </div>
                        </div>
                        <div class="row">
                            <div class="col-5 col-md-4 h4">  Address: </div>
                            <div class="col-5 col-md-8">  <?php echo "<span class='h5'>" . $user['Address']. "</span>"; ?> </div>
                        </div>
                        <div class="row">
                            <div class="col-5 col-md-4 h4">  Next of kin: </div>
                            <div class="col-5 col-md-8">  <?php echo "<span class='h5'>" . $user['Next_of_kin']. "</span>"; ?> </div>
                        </div>
                        <div class="row">
                            <div class="col-5 col-md-4 h4">  Contact of Next of kin: </div>
                            <div class="col-5 col-md-8">  <?php echo "<span class='h5'>" . $user['kinContact']. "</span>"; ?> </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- end of first row -->

        <!-- second row here -->
        <div class="row">
            <div class="col-md-8 px-5 py-5">
                <div class="col-md-12"> <p class="h2 text-center">Results</p>
                    <div class="col mt-4"> First Semester</div>
                    <div class="col mt-4"> Second Semester</div>
                </div>
            </div>

    </body>
</html>