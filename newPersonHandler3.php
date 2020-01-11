<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Person Success</title>
    <link rel="icon" href="images/picFourty.jpeg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<hr>
<div class="logo">
    <img src="images/picFourty.jpeg" alt="picFourty" width="150" height="150">
</div>
<div class="heading">
    <h3><b>Success</b></h3>
</div>
<hr>
<div class="container">
    <?php
    //establishing a connection
    $conn=mysqli_connect("localhost","root","","dbmakeup");
    if (!$conn){
    die("Connection Error ". mysqli_connect_error());
    }
    $idPass=mysqli_real_escape_string($conn,$_POST['idPassNumber']);
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName=mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName=mysqli_real_escape_string($conn,$_POST['lName']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $maritalstatus=mysqli_real_escape_string($conn,$_POST['mStatus']);
    $telephone=mysqli_real_escape_string($conn,$_POST['telNumber']);
    $emailAdd=mysqli_real_escape_string($conn,$_POST['emailAddress']);
    $dob=mysqli_real_escape_string($conn,$_POST['dob']);
    $nok=mysqli_real_escape_string($conn,$_POST['nok']);
    $nokTelephone=mysqli_real_escape_string($conn,$_POST['nokTelNumber']);
    $nokRelationship=mysqli_real_escape_string($conn,$_POST['nokRShip']);

    //post data
    $sql="INSERT INTO `persons`(`idPassNumber`, `first_name`, `middle_name`, `last_name`, `gender`, `marital_status`, `tel_number`, `email`, `dob`, `nok`, `nok_tel`, `nok_relationship`, `join_date`) 
VALUES ('$idPass','$firstName','$middleName','$lastName','$gender','$maritalstatus','$telephone','$emailAdd','$dob','$nok','$nokTelephone','$nokRelationship',null )";

    //execute in sql
    if (!$conn->query($sql)==true){
        print "<p>New Person Added Successfully . </p>";
        print "<a href='person.php'class='btn btn-info'>New Person</a>";

    }
    else{
        print "<p>Person not added.</p>";
        print "<a href='person.php' class='btn btn-danger'>Try Again.</a>";
    }
    //close DB Connection
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
