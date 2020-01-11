<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>for Loop Example</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>for Loop Example</u></h3>
<div class="container">
    <?php
    //for Loop
    /*
     * It loops a statement after the condition is met. The for loop has
     * three parameters namely:
     * a)Initialization- It determines the starting count of a loop
     * b)Condition- It determines the end count of a loop
     * c)Increase/Decrease- It sets the range of count values
     * depending on(a) and (b) above
     */

    for ($num1 = 1; $num1 <=10;$num1 ++){
        print "<b>The count is : </b>" . $num1 . "<br>";
    }

    ?>
</div>
</body>
</html>
