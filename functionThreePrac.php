<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The return Key word</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>The return Key word</u></h3>
<div class="container">
    <?php
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
function prodNums($num1,$num2){
        $prod=$num1*$num2;
        return$prod;
}
function divsn($num1,$num2){
        $divsn=$num1/$num2;
        return$divsn;
}

    //function calling
    print showText("<p> I am a function that returns a string</p>");
    print "<b>The sum is :</b>" . addNums(33 ,44)  . "<br>";
    print "<b>The difference is :</b>" . diffNums(88 , 26) . "<br>";
    print "<b>The product is : </b>" . prodNums(78, 24) . "<br>";
    print "<b>The remainder : </b>" .divsn(103, 9) . "<br>";





    ?>
</div>
</body>
</html>
