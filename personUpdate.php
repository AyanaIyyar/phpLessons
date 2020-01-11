<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Success</title>
    <link rel="icon" href="images/logoEight.jpeg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<hr>
<div class="logo">
    <img src="images/logoEight.jpeg" alt="logoEight" width="150" height="150">
</div>
<hr>
<div class="heading">
    <h3 class="text-center"><u>Update Success</u></h3>
</div>
<hr>
<div class="container">
    <?php
    $conn=mysqli_connect("localhost", "root", "", "phpEleven");
    if (!$conn){
        die("Connection error : " . mysqli_connect_error());
    }
    //Remove SQL iNJECTION
    $idPass=mysqli_real_escape_string($conn,$_POST['idPassNo']);
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName=mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName=mysqli_real_escape_string($conn,$_POST['lName']);
    $age=mysqli_real_escape_string($conn,$_POST['age']);
    $emailAdd=mysqli_real_escape_string($conn,$_POST['email']);
    $telNo=mysqli_real_escape_string($conn,$_POST['telNumber']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $dob=mysqli_real_escape_string($conn,$_POST['dob']);
    $nok=mysqli_real_escape_string($conn,$_POST['nok']);
    $nokTel=mysqli_real_escape_string($conn,$_POST['nokTelNumber']);
    $nokRship=mysqli_real_escape_string($conn,$_POST['nokRship']);
    $sql="UPDATE `persons` SET `first_name`='$firstName',`middle_name`='$middleName',`last_name`='$lastName',`age`='$age',`email`='$emailAdd',`tel_number`='$telNo',`gender`='$gender',`dob`='$dob',`nok`='$nok',`nok_telephone`='$nokTel',`nok_relationship`='$nokRship' WHERE `idPass_number`='$idPass'";
    //Execute the query in $sql
    if ($conn->query($sql)==true){
        print "<p class='text-justify'>Personal Details updated successfully.</p>";
        print "<a href='persons.php' class='btn btn-primary'>New Person</a>";
    }
    else{
        print "<p class='text-justify'>Personal Details not updated.</p>";
        print "<a href='persons.php' class='btn btn-danger'>Try Again.</a>";
    }
    //Closing the database connection
    mysqli_close($conn);
    ?>
</div>
</body>
</html>