<?php
session_start();
require_once('connect.php'); 

$user = @$_SESSION['userDetails'];
$email = $user['Email'];
// $oldfaculty = $user['Faculty'];

$usernewfaculty = isset($_POST['newfaculty']);
// $newdept = isset($_POST['dept']);
echo "tin";
// $newmobile = checkInput($_POST['mobile']);
// $address = checkInput($_POST['address']);
// $nextofkin = checkInput($_POST['nextofkin']);
// $kincontact = checkInput($_POST['kincontact']);

function checkInput($input){
    // to remove extra spaces, use trim
    $trim = trim($input);
    // to remove slashes use stripslashes
    $strip = stripslashes($trim);
    $specialChar = htmlspecialchars($strip);
    return $specialChar;
}

// OR Department = '$dept' OR Mobile = '$mobile'
// , Department = '$dept',Mobile = '$mobile' 

    // if (isset($_POST['btnUpdate'])) {
    //     if (isset($_POST['newfaculty'])) {
    //         $editedField = "SELECT * FROM tbl_register WHERE Email = '$email'";
    //         $query = mysqli_query($db_connect, $editedField);
    //         $data = mysqli_num_rows($query);
    //         if($data > 0) {
    //             // $_SESSION['exist'] 
    //             echo "Data Already Exists";
    //         }
    //         else {
    //             // $insertNew = "INSERT INTO tbl_register (Faculty)"
    //             $updateData = "UPDATE tbl_register SET Faculty = '$usernewfaculty' WHERE Email = '$email'";
    //              $updateTable = mysqli_query($db_connect, $updateData);
    //              if ($updateTable) {
    //                  echo 'Updated successfully';
    //              }
    //              else {
    //                  echo "not successful, something went wrong";
    //              }

    //         }

    //     }
    //     else {
    //         echo "no update";
    //     }
        
    // }


?>