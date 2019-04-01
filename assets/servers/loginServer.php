<?php
session_start();
require_once('connect.php');

$email = mysqli_real_escape_string($db_connect,checkInput($_POST['email'])); 
$password = mysqli_real_escape_string($db_connect,checkInput($_POST['password']));

function checkInput($input){
    // to remove extra spaces, use trim
    $trim = trim($input);
    // to remove slashes use stripslashes
    $strip = stripslashes($trim);
    $specialChar = htmlspecialchars($strip);
    return $specialChar;
}

if (empty($email) || empty($password)) {
    $_SESSION['errInput'] = 'Please enter your Username and Password';
    header("Location: ../../login.php");
}
else{
    // $new_pass = crypt($password, "door");
    $select_query = mysqli_query($db_connect, "SELECT * FROM tbl_register WHERE Email = '$email'");
    $rows = mysqli_fetch_assoc($select_query);

    if($rows)
    {
        if ($rows['Password'] == $password) {
           
            $_SESSION['userDetails'] = $rows;
            header("Location: ../../dashboard.php");
            // header("Location: ../../student_details.php");
            // echo "hurray";
        }
        else{
            $_SESSION['errLogin'] = 'Invalid Password';
            header("Location: ../../login.php");
        }
    }else{
        $_SESSION['errEmail'] = 'Email does not exist';
        header("Location: ../../login.php");
    }

}


?>