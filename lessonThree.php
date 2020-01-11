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
<h3 class="text-center"><u>Arithmetic Operators Example</u></h3>
<div class="container">
    <?php
    //Arithmetic Operators
    /*
     * They perform basic mathematical/ Arithmetic operations.
     * They include: +(Addition), -(subtraction), *(multiplication),
     * /(Division) and % (Modulus)
     */
    $num1=23;
    $num2=12;
    $sum=$num1 + $num2; //Adding Two Numbers
    $prod=$num1 * $num2; //Multiplying Two Numbers
    $diff=$num1 - $num2; //Subtracting Two Numbers
    $divsn=$num1 / $num2; //Dividing Two Numbers
    $remdr=$num1 % $num2; //Remainder of a division of Two Numbers

    //Results / Output
    print "<b>First Number:</b>" . $num1 . "<br>";
    print "<b>Second Number:</b>" . $num2 . "<br>";
    print "<b>=================================</b><br>";
    print "<b>Sum:</b>" . $sum . "<br>";
    print "<b>Product:</b>" . $prod . "<br>";
    print "<b>Difference:</b>" . $diff. "<br>";
    print "<b>Division:</b>" . $divsn . "<br>";
    print "<b>Remainder:</b>" . $remdr . "<br>";



    ?>
</div>
</body>
</html>
