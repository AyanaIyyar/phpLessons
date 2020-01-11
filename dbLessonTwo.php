<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DataBase Lesson Two</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Creating a Database </u></h3>
<div class="container">
    <?php
    //Establishing a connection to mysql database server
    $conn=mysqli_connect("localhost","root","");
    //Checking whether the connection is established
    /*
     * Die is a status message
     * !- means not
     */
    if (!$conn){
        die("Connection Error :" . mysqli_connect_error());
    }
    //If the connection is OK, create the database
    $sql="create database if not exists phpEleven";
    //Execute the query in variable sql above
    if ($conn->query($sql)==true){
        print "<p>Database Created Successfully .</p>";
    }
    else{
        print "<p>Database Cannot be created or database exists .</p>";
    }
    //Closing the connection
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
