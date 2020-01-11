<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>for Each loop</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>for Each loop</u></h3>
<div class="container">
    <?php
    //foreach loop
    /*
     * It loops a statement stored as a string
     * The (*) helps split data apart
     */
    print "The following is information about an individual : <br>";
    $data = "Ayana Iyyar*Nairobi*Trainer/Software Dev*eMobilis";

    $items = explode("*", $data);

    foreach ($items as $x)
    {
        print $x . "<br>";
    }



    ?>
</div>
</body>
</html>
