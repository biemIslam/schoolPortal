<?php 
session_start();
$successMsg = @$_SESSION['successMsg'];
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
        <div class="row my-mt">
            <div class="col-md-3"></div>
            <div class="col-md-6 msg-container px-4 py-4">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="form-header text-success"> <?php echo $successMsg; ?> </h2>
                    </div>
                </div>
                    <p class="text-center h4">
                        <a href="login.php">Back to login</a>
                    </p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>
<?php unset ($_SESSION['successMsg']); ?>