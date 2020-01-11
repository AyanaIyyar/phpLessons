<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>do...while loop</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>do...while loop</u></h3>
<div class="container">
    <?php
    //do...while loop
    /*
     * It loops a statement and increments it before the condition is
     * fulfilled.
     */
    $num1 = 25;
    do{
        print "<b>The count is : </b>" . $num1 . "<br>";
        $num1 ++;
    }
    while($num1 <= 45);


    ?>
</div>
</body>
</html>
