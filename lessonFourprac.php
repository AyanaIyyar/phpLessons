<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment Operators</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Assignment Operators</u></h3>
<div class="container">
    <?php
    $num1=23;
    $num2=12;

    $num1 += $num2;
    $num2 -=$num1;

    print "<b>Result One :</b>"  . $num1 . "<br>";
    print "<b>Result Two :</b>" . $num2 . "<br>";


    ?>
</div>
</body>
</html>
