<?php 
session_start();
$user = $_SESSION['userDetails'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Student Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4/font-awesome-4.7.1/css/font-awesome.min.css">
        <link href="login.css" rel="stylesheet" type="text/css">
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/bootstrapjs/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-7  px-5 py-5 border border-primary">
                    <div class="row">
                        <div class='col-sm-6'> <img src="assets/images/student1.jpg" class="student_img d-block w-100"> </div>
                        <div class='col-sm-6'> 
                            <div class="row">
                                <div class="col-12 h4">Matric no.: <?php echo "<span class='h5'>" . $user['UserID']. "</span>"; ?> </div>
                                <div class="col-12 h4">Firstname: <?php echo "<span class='h5'>" . $user['Firstname'] . "</span>"; ?> </div>
                                <div class="col-12 h4"> Lastname: <?php echo "<span class='h5'>" . $user['Lastname'] . "</span>"; ?></div>
                                <!-- <div class="col-12 h4">Middlename: <?php echo "<span class='h5'>" . $user['Middlename'] . "</span>"; ?></div> -->
                                <div class="col-12 h4">Email: <?php echo "<span class='h5'>" . $user['Email'] . "</span>"; ?></div>
                                <div class="col-12 h4">Address: <?php echo "<span class='h5'>" . $user['Address'] . "</span>"; ?></div>
                                <!-- <div class="col-12 h4">Department: <?php echo "<span class='h5'>" . $user['Department'] . "</span>"; ?></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ml-5 px-5 py-5 border border-success">
                    <div class="col-md-12"> <p class="h2 text-center">Results</p>
                        <div class="col mt-4"> First Semester</div>
                        <div class="col mt-4"> Second Semester</div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>