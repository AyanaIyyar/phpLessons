<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>While Loop Example</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>While Loop Example</u></h3>
<div class="container">
    <?php
    $num1 = 10;
    while ($num1 <= 25){
        print "<b>The count is : </b>" . $num1 . "<br>";
        $num1 ++;
    }
    ?>
</div>

</body>
</html>
