<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indexed Arrays One</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Indexed Arrays One</u></h3>
<div class="container">
    <?php

    //Indexed Arrays Example
    $cars=array(
        "Range Rover",
        "Land Cruiser",
        "Prado",
        "Ford Ranger",
        "Toyota Hilux",
        "Isuzu DMAX",
    );
    print "<p>The following is a list of cars : </p>";
    print "<ol>";
    print "<li>" . $cars[0] . "</li>";
    print "<li>" . $cars[1] . "</li>";
    print "<li>" . $cars[2] . "</li>";
    print "<li>" . $cars[3] . "</li>";
    print "<li>" . $cars[4] . "</li>";
    print "<li>" . $cars[5] . "</li>";
    print "</ol>";
    ?>
</div>
</body>
</html>