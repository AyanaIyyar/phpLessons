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
           "firstName"=> "Yusra",
           "lastName" => "Khassim",
           "email"=>"khs_yusra@gmail.com",
           "tel_Number"=>"0789903221",
           "age" =>"36",
           "profession"=>"Manager",
           "organization"=> "Woolworths"
        ),
        array(
            "firstName"=> "Garry",
            "lastName" => "Buler",
            "email"=>"garry_buler@yahoo.com",
            "tel_Number"=>"0745780934",
            "age" =>"48",
            "profession"=>"Director",
            "organization"=> "Pioneer School"
        ),

        array(
            "firstName"=> "Olaf",
            "lastName" => "Wendol",
            "email"=>"wendol@yahoo.com",
            "tel_Number"=>"0728769056",
            "age" =>"28",
            "profession"=>"Software Developer",
            "organization"=> "IBM"
        ),
        array(
            "firstName"=> "Zaria",
            "lastName" => "Shivangi",
            "email"=>"shivazaria@gmail.com",
            "tel_Number"=>"0756903321",
            "age" =>"41",
            "profession"=>"Head Chef",
            "organization"=> "Sarova Hotel Shaba"
        ),
        array(
            "firstName"=> "Ivan",
            "lastName" => "Feros",
            "email"=>"feros@gmail.com",
            "tel_Number"=>"0733899045",
            "age" =>"33",
            "profession"=>"Regional Manager",
            "organization"=> "Unilever Africa"
        ),

    );

    print "<p>The following are individual's details: </p>";
    for ($count=0;$count<=4;$count++){
        print "<b>First Name :</b>". $person[$count]["firstName"]  . "<br>";
        print "<b>Last Name :</b>" . $person[$count]["lastName"] . "<br>";
        print "<b>Email Address :</b>" . $person[$count]["email"] . "<br>";
        print "<b>Telephone Number :</b>" . $person[$count]["tel_Number"] . "<br>";
        print "<b>Age :</b>" . $person[$count]["age"] . "<br>";
        print "<b>Profession:</b>" . $person[$count]["profession"] . "<br>";
        print "<b>Organization :</b>" . $person[$count]["organization"] . "<br><hr>";
    }

    ?>
</div>
</body>
</html>
