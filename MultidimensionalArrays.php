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
    //Multidimensional Arrays
    /*
     * These are defined as arrays of arrays
     * NB:STRINGS ARE ENCLOSED IN DOUBLE QUOTES
     */

    $person=array(
      array(
        "firstName" =>"Ayana",
        "lastName" =>"Iyyar",
        "email" =>"ayanaiyyar@gmail.com",
        "telNumber" =>"0723058255",
        "age =>25",
        "profession" =>"Dietician and Software Developer ",
        "organization" =>"Mater Misericordie Hospital and eMobilis Mobile Technology Institute "

    ) ,
        array(
            "firstName" =>"Ivan",
            "lastName" =>"Vandeskoff",
            "email" =>"vanian_@gmail.com",
            "telNumber" =>"0788980510",
            "age =>38",
            "profession" =>"Consultant MD.PHD.DR. ",
            "organization" =>"Aga Khan Hospital "

        ) ,
        array(
            "firstName" =>"Karim",
            "lastName" =>"AliBhussaid",
            "email" =>"karimali@gmail.com",
            "telNumber" =>"0790342870",
            "age =>45",
            "profession" =>"Transporting Manager ",
            "organization" =>"Coca Cola Industries "

        ) ,
        array(
            "firstName" =>"Murray",
            "lastName" =>"Solano",
            "email" =>"solano@yahoo.com",
            "telNumber" =>"0729086753",
            "age =>57",
            "profession" =>"C.E.O ",
            "organization" =>"Carrefour"

        ) ,
        array(
            "firstName" =>"Maya",
            "lastName" =>"Ramirez",
            "email" =>"ramimaya@yahoo.com",
            "telNumber" =>"0788769041",
            "age =>58",
            "profession" =>"Marketing Director ",
            "organization" =>"Vogue Magazine"

        )
    ) ;

    print "<p>The following are an individual's personal details :</p>";
    for ($count=0;$count<=4;$count++){
        print "<b>First Name :</b>" . $person[$count]["firstName"] ."<br>";
        print "<b>Last Name :</b>" . $person[$count]["lastName"] ."<br>";
        print "<b>Email Address :</b>" . $person[$count]["email"] ."<br>";
        print "<b>Telephone Number :</b>" . $person[$count]["telNumber"] ."<br>";
        print "<b>Profession :</b>" . $person[$count]["profession"] ."<br>";
        print "<b>Organization :</b>" . $person[$count]["organization"] ."<br><hr>";

    }


    ?>
</div>
</body>
</html>
