<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <tittle> Vehicle Update Success</tittle>
    <link rel="icon" href="images/carThree.jpg" width="150" height="150">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<hr>
<div class="logo">
    <img src="images/carThree.jpg" alt="carThree.jpg" width="150" height="150">
</div>
<div class="heading">
    <h3><b>Update Success</b></h3>
</div>
<hr>
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","","phpElevenOne" );
    if (!$conn){
        die("Connection Error : " . mysqli_connect_error());
    }
    //Remove SQL Injeection
    $idPass=mysqli_real_escape_string($conn,$_POST['idPassNo']);

    ?>
</div>
</body>
</html>
