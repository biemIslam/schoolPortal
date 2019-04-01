<?php
session_start();
require_once('connect.php');

$firstname = checkInput($_POST['firstname']);
$lastname = checkInput($_POST['lastname']);
$othername = checkInput($_POST['othername']);
$email = checkInput($_POST['email']);
$faculty = checkInput($_POST['faculty']);
$dept = checkInput($_POST['dept']);
$dob = checkInput($_POST['dob']);
$mobile = checkInput($_POST['mobile']);
$address = checkInput($_POST['address']);
$nextofkin = checkInput($_POST['nextofkin']);
$kincontact = checkInput($_POST['kincontact']);
$password = checkInput($_POST['password']);
$confirmPassword = checkInput( $_POST['confirmPassword']);

function checkInput($input){
    // to remove extra spaces, use trim
    $trim = trim($input);
    // to remove slashes use stripslashes
    $strip = stripslashes($trim);
    $specialChar = htmlspecialchars($strip);
    return $specialChar;
}

// to upload the image file into the database
//$image_dir:specifies directory where file is to be placed
//$image_file:specifies the path of the file to be placed
//$image_type:returns filetype extension in lowercase
$image_name = $_FILES['image']['name'];
$image_size = $_FILES['image']['size'];
$image_tmpname = $_FILES['image']['tmp_name'];
$image_dir = "../uploads/";
$image_base = basename($_FILES['image']['name']);
$image_file = $image_dir.$image_base;
$image_filetype = strtolower(pathinfo($image_file, PATHINFO_EXTENSION));




if (empty($firstname) || empty($lastname) || empty($email) || empty($othername) || 
    empty($mobile) ||empty($address)  || empty($faculty)  || empty($dept)  || empty($dob) || empty($nextofkin)
    || empty($kincontact) || empty($password) || empty($confirmPassword)) 
{
  $_SESSION['errMsg'] = "All fields are required";
  header("Location: ../../register.php");
}
else {

    // form details validation
    $namePattern = "/^([A-Za-z]+)$/";
    $emailPattern = "/^([A-Za-z_\.\-0-9]+)\@([A-Za-z]+)\.([A-Za-z]{2,3})$/";
    $mobileNumPattern = "/^([\+0-9]+)$/";
    $addressPattern = "/^([A-Za-z0-9,\s]+)$/";
    $passwordPattern1 = "/^([\@\.\+\$][0-9A-Za-z]+)$/";
    $passwordPattern2 = "/^([0-9A-Za-z]+)([\@\.\+\$])$/";
    $passwordPattern3 = "/^([0-9A-Za-z]+)([\@\.\+\$])([0-9A-Za-z]+)$/";
    if (!preg_match($namePattern, $firstname) || !preg_match($namePattern, $lastname) ||
        !preg_match($namePattern, $othername)) 
    {
        $_SESSION['errName'] = "Invalid Firstname or Lastname or Othername";
        header("Location: ../../register.php");
    }
    elseif (!preg_match($emailPattern, $email)) {
        $_SESSION['errEmail'] = "Invalid Email";
        header("Location: ../../register.php"); 
    }
    elseif (!preg_match($mobileNumPattern, $mobile) || !preg_match($mobileNumPattern, $kincontact)) {
        $_SESSION['errMobile'] = "Invalid phone number";
        header("Location: ../../register.php"); 
    }
    elseif (!preg_match($addressPattern, $address)) {
        $_SESSION['errAddress'] = "Enter valid address";
        header("Location: ../../register.php"); 
    }
    // elseif (strlen($password) < 8) {
    //     $_SESSION['errPassLen'] = "Password must not be less than 8 characters";
    //     header("Location: ../../register.php"); 
    // }
    // elseif (!(preg_match($passwordPattern1, $password) || preg_match($passwordPattern2, $password) || preg_match($passwordPattern3, $password))) {
    //     $_SESSION['errPassPattern'] = "Password must contain one special character e.g @ . + $";
    //     header("Location: ../../register.php"); 
    // }
    elseif (!($password == $confirmPassword)) {
        $_SESSION['errMatch'] = "Password mismatch";
        header("Location: ../../register.php"); 
    }
    elseif(empty($image_name)) {
        $_SESSION['errImage'] = "Please upload an image";
        header("Location: ../../register.php"); 
    }
    // end of details validation

    // insert details into database
    else 
    {
        $userID = "P_" . str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
        // $new_pass = crypt($password, "door");
        $maxImagesize = 5 * 1024 * 1024;
        if (!(empty($image_name)))
        {
            if ($image_size > $maxImagesize) {
                // echo 'something';
                $_SESSION['errImageSize'] = "File size must not be greater than 5MB";
                header("Location: ../../register.php"); 
            }
            elseif ($image_filetype != 'jpg' && $image_filetype != 'jpeg' && $image_filetype != 'png') {
                $_SESSION['errImageType'] = "Image file must be in JPG, JPEG or PNG format";
                header("Location: ../../register.php"); 
            }
            else
            {
                if (move_uploaded_file($image_tmpname, $image_file))    
                {
                    $query = mysqli_query($db_connect, "INSERT INTO tbl_register (UserID, Firstname, Lastname, Othername, Email, Password, Faculty, Department, Date_of_birth, Mobile, Address, Next_of_kin, kinContact, Image) 
                    VALUES ('$userID', '$firstname', '$lastname','$othername', '$email', '$password', '$faculty', '$dept', '$dob', '$mobile', '$address', '$nextofkin', '$kincontact', '".$image_base."')");
                    if ($query) {
                        $_SESSION['successMsg'] = "Registration was successful";
                        header("Location: ../../success.php");
                    } else {
                        $_SESSION['errReg'] = "Registration was not successful";
                        header("Location: ../../register.php");
                    }
                }
            }
           
        }
        // else {
        //     $_SESSION['errReg'] = "not working";
        //     header("Location: ../../success.php");
        // }
         
    }
    // end of data insertion
    
   
}



?>