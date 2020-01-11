<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions Part Three</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>The Return Keyword</u></h3>
<div class="container">
    <?php
    //The Return Keyword
    /*
     * It returns a value in a function.
     */
    function showText($txt){
        return $txt;
    }
    function addNums($num1,$num2){
        $sum=$num1+$num2;
        return$sum;
    }
    function diffNums($num1,$num2){
        $diff=$num1-$num2;
        return$diff;
    }

    //Function Calling
    print showText("<p>I am a function that returns a string</p>");
    print "<b>The sum is : </b>" . addNums(23, 13) . "<br>";
    print "<b>The difference is :</b>" .diffNums(276,137) . "<br>";



    ?>
</div>
</body>
</html>
