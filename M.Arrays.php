<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multidimensional Arrays</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Multidimensional Arrays</u></h3>
<div class="container">
    <?php
    $person=array(
        array(
            "firstName"=>"Zitani",
            "lastName"=>"Vandeer",
            "email"=> "vandeer@gmail.com",
            "telNumber"=>"0742320073",
            "age"=>"54",
            "profession"=>"Professional Shopper",
            "organization"=> "Galleria Mall"
        ),
        array(
            "firstName" =>"Maya",
            "lastName" =>"Ramirez",
            "email" =>"ramimaya@yahoo.com",
            "telNumber" =>"0788769041",
            "age =>58",
            "profession" =>"Marketing Director ",
            "organization" =>"Vogue Magazine"

        ),
        array(
            "firstName" =>"Murray",
            "lastName" =>"Solano",
            "email" =>"solano@yahoo.com",
            "telNumber" =>"0729086753",
            "age =>57",
            "profession" =>"C.E.O ",
            "organization" =>"Carrefour"
        )
    );

    print "<p>The following are individual's details :</p>";
    for ($count=0;$count<=4;$count++){
    print "<b>First Name : </b>" . $person[$count]["firstName"] . "<br>";
    print "<b>Last Name :</b>" . $person[$count]["lastName"] . "<br>";
    print "<b>Email Address :</b>" . $person[$count]["email"] . "<br>";
    print "<b>Telephone Number :</b>" . $person[$count]["telNumber"] . "<br>";
    print "<b>Age :</b>" . $person[$count]["age"] . "<br>";
    print "<b>Profession :</b>" . $person[$count]["profession"] . "<br>";
    print "<b>Organization :</b>" . $person[$count]["organization"] . "<br><hr>";
    }

    ?>
</div>
</body>
</html>
