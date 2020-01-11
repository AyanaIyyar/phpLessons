<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Success</title>
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
    <h3 class="text-center"><u>Delete Success</u></h3>
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
    $sql="DELETE FROM `persons` WHERE idPass_number='$idPass'";
    //Exceute the query in $sql
    if ($conn->query($sql)==true){
        print "<p class='text-justify'>Personal Details deleted successfully.</p>";
        print "<a href='persons.php' class='btn btn-primary'>New Person</a>";
    }
    else{
        print "<p class='text-justify'>Personal Details not deleted.</p>";
        print "<a href='persons.php' class='btn btn-danger'>Try Again.</a>";
    }
    //Closing the database connection
    mysqli_close($conn);
    ?>
</div>
</body>
</html>