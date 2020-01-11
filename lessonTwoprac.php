<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working With Variables</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Working with Variables</u></h3>
<div class="container">
    <?php

    use mysql_xdevapi\BaseResult;

    $num1=23; //Denotes an integer variable
    $num2=12.345;//Denotes a floating decimal
    $num3=12232434;//Denotes a double variable
    $letter='A';// Denotes a single charcter variable
    $full_names='Ayana Iyyar';//Denotes a string variable

    //Results / Output
    print "<b>Interger Value : </b>" . $num1 . "<br>";
    print "<b>Decimal Value : </b>" . $num2 . "<br>";
    print "<b>Double Variable :</b>" . $num3 . "<br>";
    print "<b>First Letter : <b>" . $letter . "<br>";
    print "<b>Full Names : <b>" . $full_names . "<br>";
    ?>
</div>
</body>
</html>
