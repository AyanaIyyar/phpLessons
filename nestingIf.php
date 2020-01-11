<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using Else If</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Using Else If</u></h3>
<div class="container">
    <?php
    //if...else if...else / Nesting if
    /*
     * It evaluates more than one condition and returns the respective
     * TRUE results if their respective conditions are TRUE, then a FALSE
     * result if none of the conditions are TRUE.
     */

    $num1=5;
    if ($num1 >= 1 && $num1 <=5){
        print "The value ranges between 1 and 5.";

    }

    elseif ($num1 >=6 && $num1 <=10){
        print "The value ranges between 6 and 10";
    }


    elseif ($num1 >=11 && $num1 <=15){
        print "The value ranges between 11 and 15.";
    }
    else{
        print "Invalid Range";
    }

    ?>
</div>
</body>
</html>
