<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions Part Two</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Functions With Arguments</u></h3>
<div class="container">

    <?php
    //Functions
    /*
     * A function is a block of code that performs a specific task.
     */
    //Creating a function with no arguments

    function displayText($txt){
       print  $txt . "<br>";
    }
    //Function calling
    displayText("I am a line of text");
    displayText("I am another line of text");
    displayText("I am yet another line of text");
    ?>


</div>
</body>
</html>
