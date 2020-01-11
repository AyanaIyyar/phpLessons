<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database server connection</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Database server connection</u></h3>
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","");
    if (!$conn){
        die("Connection error :" .mysqli_connect_error());
    }
    print "Connection successful";
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
