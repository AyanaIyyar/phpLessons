<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays and loops</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Arrays and loops</u></h3>
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
    //In descending order
    $count=5;
    for ($count=5;$count>=0;$count--){
        print "<li>" . $cars[$count] . "</li>";
    }
//In ascending order
    $count=0;
    for ($count=0;$count<=5;$count++){
        print "<li>" .$cars[$count] . "</li>";
    }
    print "</ol>";
    ?>
</div>
</body>
</html>