<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working with Variables</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Working with Variables</u></h3>
<div class="container">
    <?php
    //Variables
    /*
     * A Variable refers to any letter or word that stores data temporarily in the computers memory
     */
    //Declaring and Initializing Variables
    /*
     * To declare a variable use the $(dollar) sign followed by the
     * variable name; to initialize a variable use the assignment operator
     * (=)followed by the value. as follows:
     */
    $num1=23;//Denotes an integer variable
    $num2=12.345;// Denotes a floating point(decimal) variable
    $num3=12232434;// Denotes a double variable
    $letter='A';// Denotes a single character variable
    $full_names="Ayana Iyyar";// Denotes a string variable

    //Results / Output
print "<b>Integer Value:</b>" . $num1 . "<br>";
print "<b>Decimal Value:</b>" .  $num2 . "<br>";
print"<b>Double Value:</b>" .  $num3 . "<br>";
print "<b>First Letter:</b>" . $letter . "<br>";
print "<b>Full Names:</b>" . $full_names . "<br>"

    //Rules to follow when naming variables
    /**
     * 1.A variable name must start with a letter.
     * 2.When pacing a variable with more than one name, use an
     * underscore(_)
     * 3.Never use reserved keywords as variable names.
     * 4. Variable names are case sensitive.
     */
    ?>

</div>
</body>
</html>
