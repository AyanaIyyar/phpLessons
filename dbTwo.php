<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Establishing a connection</title>
</head>
<body>
<h3 class="text-center"><u>Establishing a connection</u></h3>
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root", "");
    if (!$conn){
        die("Connection error :". mysqli_connect_error());
    }
$sql="create database if not exists phpElevenOne";
    if ($conn->query($sql)==true){
        print "<p>Database created successfully .</p>";
    }
    else{
        print "<p>Database cannot be created or database existed .</p>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
