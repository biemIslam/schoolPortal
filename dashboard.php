<?php 
session_start();
$user = @$_SESSION['userDetails'];
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
            <div class="col-md-12"> <h1 class="text-center text-uppercase font-weight-bold pt-5">Student Portal</h1></div>
            <div class="col-md-12 mt-4"> <p class="h4 text-center"> Welcome <?php echo "<span class='h5 text-success'>" . $user['Firstname'] . "</span>"; ?> <span>| &nbsp;&nbsp;<a href="login.php" class="logout">Log out</a> </span></p></div>
            <div class="col-md-12 mt-3"> <p class="h5 text-right text-uppercase text-success"> Faculty: <?php echo "<span class='h5 text-primary'>" . $user['Faculty']. "</span>"; ?> | Department: <?php echo "<span class='h5 text-primary'>" . $user['Department']. "</span>";?> </p> </div>
        </div>
        <div class="row mt-4">
            <div class="content_column col-md-3 mb-4 border border-secondary rounded"> 
                <div class="row ml-3">
                    <div class="col-md-12 pt-3 pb-3"> <img src="assets/images/school_logo.jpg" width="50" height="50" alt="school logo here" id="logo"> <span class="text-primary">Zeedlabs College</span> </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-4"> <h5 class="text-center font-weight-bold"> <a href="#" class="contents text-secondary" id="dashboard"> Dashboard </a> </h5> </div>
                    <div class="col-md-12 mt-4"> <h5 class="text-center font-weight-bold"> <a href="#" class="contents text-secondary" id="profile"> Profile </a> </h5> </div>
                    <div class="col-md-12 mt-4"> <h5 class="text-center font-weight-bold"> <a href="#" class="contents text-secondary" id="course"> Course registration </a> </h5> </div>
                    <div class="col-md-12 mt-4"> <h5 class="text-center font-weight-bold"> <a href="#" class="contents text-secondary" id="results"> View Results </a> </h5> </div>                    
                    <div class="col-md-12 mt-4"> <h5 class="text-center font-weight-bold"> <a href="#" class="contents text-secondary" id="fees"> Fee History </a> </h5> </div>
                    <div class="col-md-12 mt-4"> <h5 class="text-center font-weight-bold"> <a href="#" class="contents text-secondary" id="receipt"> Generate Receipt </a> </h5> </div>
                    <div class="col-md-12 mt-4"> <h5 class="text-center font-weight-bold"> <a href="#" class="contents text-secondary" id="calendar"> Academic Calendar </a> </h5> </div>
                    <div class="col-md-12 mt-4"> <h5 class="text-center font-weight-bold"> <a href="#" class="contents text-secondary" id="events"> Events </a> </h5> </div>
                </div>
            </div>
            <div class="col-md-9 hide-div show-div" id="divContent">
                <!-- first row here -->
                
            </div>
        </div>
    </div>
    
    <script src="assets/js/student_portal.js"> </script>
</body>
</html>