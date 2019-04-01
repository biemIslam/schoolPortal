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
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap4/font-awesome-4.7.1/css/font-awesome.min.css">
        <link href="login.css" rel="stylesheet" type="text/css">
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/bootstrapjs/bootstrap.min.js"></script>
    </head>
    <body>

        <script>
            $(document).ready(function(){
                $('.disabledElem').prop('disabled', true); 
                $('#faculty_edit').click(function () {
                    $('#faculty').prop('disabled', false); 
                });
                $('#dept_edit').click(function () {
                    $('select').prop('disabled', false); 
                });
                $('#phonenos_edit').click(function () {
                    $('#phonenos').prop('disabled', false); 
                });
                $('#address_edit').click(function () {
                    $('#address').prop('disabled', false); 
                });
                $('#kin_edit').click(function () {
                    $('#nextofkin').prop('disabled', false); 
                });
                $('#kincontact_edit').click(function () {
                    $('#kincontact').prop('disabled', false); 
                });


            });
        </script>

        <div class="col-md-12">
            <div class="row">
                <div class='col-12'> <?php echo  "<img src='assets/uploads/".$user['Image']."' width='200' height='200'>"; ?> </div>
                

                <div class='col-12 mt-5'>
                <form action="assets/servers/updateServer.php" method="post" class="mt-3" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="firstname" class="col-md-3 col-form-label font-weight-bold">Firstname</label>
                            <div class="col-md-8">
                                <input type="text" name="firstname" id="firstname" value=" <?php echo $user['Firstname']; ?>" class="form-control color disabledElem">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-md-3 col-form-label font-weight-bold">Lastname</label>
                            <div class="col-md-8">
                                <input type="text" name="lastname" value=" <?php echo $user['Lastname']; ?>" class="form-control color disabledElem">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="othername" class="col-md-3 col-form-label font-weight-bold">Other name</label>
                            <div class="col-md-8">
                                <input type="text" name="othername" value=" <?php echo $user['Othername']; ?>" class="form-control color disabledElem">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label font-weight-bold">Email</label>
                            <div class="col-md-8">
                                <input type="text" name="email" value=" <?php echo $user['Email']; ?>" class="form-control color disabledElem">
                            </div>
                        </div>
                        <div class="form-group row" id="facultydiv">
                            <label for="faculty" class="col-md-3 col-form-label font-weight-bold">Faculty</label>
                            <div class="col-md-8">
                                <input type="text" name="newfaculty" id="faculty" value=" <?php echo $user['Faculty']; ?>" class="form-control color disabledElem">
                            </div><span> <a href="#facultydiv" class="text-primary" id="faculty_edit" name="edit"> Edit</a></span>
                        </div>
                        <div class="form-group row" id="deptdiv">
                            <label for="dept" class="col-md-3 col-form-label font-weight-bold">Department</label>
                            <div class="col-md-8">
                                <select class="form-control color disabledElem" name="dept" id="dept" value=" <?php echo $user['Department']; ?>">
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
                            </div> <span> <a href="deptdiv" class="text-primary" id="dept_edit" name="edit"> Edit</a></span>
                        </div>
                        <div class="form-group row">
                            <label for="dob" class="col-md-3 col-form-label font-weight-bold">Date of Birth</label>
                            <div class="col-md-8">
                                <input type="text" name="dob" id="dob" value=" <?php echo $user['Date_of_birth']; ?>" class="form-control color disabledElem">
                            </div>
                        </div>
                        <div class="form-group row" id="phonediv">
                            <label for="phonenos" class="col-md-3 col-form-label font-weight-bold">Phone nos</label>
                            <div class="col-md-8">
                                <input type="text" name="mobile" id="phonenos" value=" <?php echo $user['Mobile']; ?>" class="form-control color disabledElem">
                            </div><span> <a href="#phonediv" class="text-primary" id="phonenos_edit" name="edit">Edit</a></span>
                        </div>
                        <div class="form-group row" id="addressdiv">
                            <label for="address" class="col-md-3 col-form-label font-weight-bold">Address</label>
                            <div class="col-md-8">
                                <input type="text" name="address" value=" <?php echo $user['Address']; ?>" id="address" class="form-control color disabledElem">
                            </div><span> <a href="#addressdiv" class="text-primary" id="address_edit" name="edit">Edit</a></span>
                        </div>
                        <div class="form-group row" id="nextkindiv">
                            <label for="nextofkin" class="col-md-3 col-form-label font-weight-bold">Next of kin</label>
                            <div class="col-md-8">
                                <input type="text" value=" <?php echo $user['Next_of_kin']; ?>" name="nextofkin" id="nextofkin" class="form-control color disabledElem">
                            </div><span> <a href="#nextkindiv" class="text-primary" id="kin_edit" name="edit">Edit</a></span>
                        </div>
                        <div class="form-group row" id="kincontactdiv">
                            <label for="kincontact" class="col-md-3 col-form-label font-weight-bold">Contact of Next-of-kin</label>
                            <div class="col-md-8">
                                <input type="text" name="kincontact" id="kincontact" value=" <?php echo $user['kinContact']; ?>" class="form-control color disabledElem">
                            </div><span> <a href="#kincontactdiv" class="text-primary" id="kincontact_edit" name="edit">Edit</a></span>
                        </div>
                        
                        
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-primary" value="Update" name="btnUpdate">
                            </div>
                        </div>
                    </form> 
                </div>
            </div> 
        </div>

        <script src="assets/js/student_portal.js"> </script>
    </body>
</html>