<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Arrays</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Associative Arrays</u></h3>
<div class="container">
    <?php
    $person=array(
        "firstName"=>"Danarius",
        "lastName"=>"Vandelmont",
        "telNumber"=>"0733756690",
        "email"=>"dan_vel@yahoo.com",
        "age"=>"38",
        "profession"=>"Managing Director",
        "organization"=>"VelRose Wines"

    );
    print "<p>The following are individual's personal details : </p>";
    print "<b>First Name :</b>" . $person["firstName"] . "<br>";
    print "<b>Last Name :</b>" . $person["lastName"] . "<br>";
    print "<b>Telephone Number :</b>" . $person["telNumber"] . "<br>";
    print "<b>Email Address :</b>" . $person["email"] . "<br>";
    print "<b>Age :</b>" . $person["age"] . "<br>";
    print "<b>Profession :</b>" . $person["profession"] . "<br>";
    print "<b>Organization :</b>" . $person["organization"] . "<br>";

    ?>
</div>
</body>
</html>
