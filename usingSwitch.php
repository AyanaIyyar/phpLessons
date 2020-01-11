<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Switch Example</u></h3>
<div class="container">
    <?php
    //Switch
    /*
     * It's a selective structure that works with specific options, called
     * cases; if a case matches the variable data, the result of that case
     * is displayed and the case terminated(using 'break').
     * Otherwise, if the variable does not match any of the cases, a false
     * result is generated.
     */

    $choice ='A';
    switch ($choice){
        case'A':
            print "You selected choice A";
            break;
        case 'B':
            print "You selected Choice B";
            break;
        case'C':
            print "You selected Choice C";
            break;
        case 'D':
            print "You selected Choice D";
            break;
        default:
            print "The Choice you selected is invalid.";
            break;

    }



    ?>
</div>
</body>
</html>
