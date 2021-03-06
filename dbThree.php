<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database Lesson Three</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Creating a database table</u></h3>
<div class="container">
    <?php
   $conn=mysqli_connect("localhost","root", "", "phpElevenOne");
   if (!$conn){
       die("Connection Error :". mysqli_connect_error());
   }
   $sql="create table if not exists vehicle(
vehicle_id int not null auto_increment,
primary key(vehicle_id),
ownerfirst_name varchar(255),
ownermiddle_name varchar(255),
ownerlast_name varchar(255),
age int,
email varchar(255),
tel_number varchar (255),
gender varchar(10),
dob date,
registration_date timestamp,
nok varchar(255),
nok_relationship varchar(255),
nok_telephone varchar(255)
    )";
if ($conn->query($sql)==true){
    print "<p>Table created successfully .</p>";
}
else{
    print "<p>Table not created or table exists .</p>";
}
mysqli_close($conn);
    ?>
</div>
</body>
</html>
