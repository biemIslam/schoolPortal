<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>School Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4/font-awesome-4.7.1/css/font-awesome.min.css">
    <link href="login.css" rel="stylesheet" type="text/css">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrapjs/bootstrap.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

  
</head>
<body>
   <!-- navbar here -->
   <?php include_once('inc/header.php'); ?>

    <div class="container-fluid">
        <!-- carousel header -->
        <div class="row">
            <div class="col-12">
                <div id="carouselControls" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li class="active" data-targert="#carouselControls" data-slide-to="0"></li>
                        <li data-targert="#carouselControls" data-slide-to="1"></li>
                        <li data-targert="#carouselControls" data-slide-to="2"></li>
                    </ul>

                    <!-- inner images section -->
                    <div  class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/newcol.jpg" class="d-block w-100 carouselImage">
                            <div class="carousel-caption bg-primary font-weight-bold" style="opacity:0.7; color: white;">
                                <h3> Your first choice of learning institute</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newclassroom.jpg" class="d-block w-100 carouselImage">
                            <div class="carousel-caption bg-primary font-weight-bold" style="opacity:0.7; color: white;">
                                <h3>We lead, they serve</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/lab1.png" class="d-block w-100 carouselImage">
                            <div class="carousel-caption bg-primary font-weight-bold" style="opacity:0.7; color: white;">
                                <h3>Adequate facilities and conducive environment</h3>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>   
                    </div>
                </div>
            </div>
        </div><br><br><br>
        <!-- end of row carousel -->
      
        <div class="container-fluid">
            <div class="row">
                <div class="h2 col-md-4"> <a href="#" class="link_portal"> Teachers Portal </a>
                    <div class="row">
                        <div class="col-md-12"> <a href="#"> <img src="assets/images/staff-login.png" class="staff_student d-block w-100"> </a> </div>
                        <div class="col-12 mt-4"> <p class="h5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, eaque non. Nulla, nobis illum! 
                            Eum consectetur commodi debitis adipisci? Obcaecati facere, corrupti vero nam fugit eius error quos deleniti rerum!</p> 
                        </div>
                    </div>
                </div>
                <div class="h2 col-md-4"> <a href="#" class="link_portal"> Parent Portal </a>
                    <div class="row">
                        <div class="col-md-12"> <a href="#"> <img src="assets/images/parent_portal.png" class="d-block w-100"> </a> </div>
                        <div class="col-12 mt-3"> <p class="h5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, eaque non. Nulla, nobis illum! 
                            Eum consectetur commodi debitis adipisci? Obcaecati facere, corrupti vero nam fugit eius error quos deleniti rerum!</p> 
                        </div>
                    </div>
                </div>
                <div class="h2 col-md-4" id="portal"> <a href="login.php" class="link_portal"> Student Portal </a>
                    <div class="row">
                        <div class="col-md-12"> <a href="#"> <img src="assets/images/student_portal.png" class="ml-5 staff_student d-block w-100"> </a> </div>
                        <div class="col-12 mt-3"> <p class="h5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, eaque non. Nulla, nobis illum! 
                            Eum consectetur commodi debitis adipisci? Obcaecati facere, corrupti vero nam fugit eius error quos deleniti rerum!</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </body>
</html>  
