<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arithmetic Operators Example</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u></u></h3>
<div class="container">
    <?php
    $num1=23;
    $num2=12;
    $sum=$num1 + $num2;
    $prod=$num1 * $num2;
    $diff=$num1 - $num2;
    $divsn=$num1 / $num2;
    $remdr=$num1 % $num2;

    // Results / Output
    print "<b>First Number :</b>" . $num1 . "<br>";
    print "<b>Second Number : </b>" . $num2 . "<br>";
    print "<b>==============================</b>" . "<br>";
    print "<b>Sum :</b>" . $sum . "<br>";
    print "<b>Product :</b>" . $prod . "<br>";
    print "<b>Difference :</b>" . $diff . "<br>";
    print "<b>Division :</b>" . $divsn . "<br>";
    print "<b>Remainder :</b>" . $remdr . "<br>";


    ?>
</div>
</body>
</html>
