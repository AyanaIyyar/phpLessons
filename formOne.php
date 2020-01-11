<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form One</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<form action="site.php" method="GET">
    Num1: <input type="number" name="num1">
    Num2: <input type="number" name="num2">
    <input type="submit">
</form>

<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
print $num1 + $num2;
?>
</body>
</html>
