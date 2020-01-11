<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Details</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Employee Details</u></h3>
<div class="container">
    <?php
    print "The following are details of the staff :<br>";
    $data="Staff ID*First Name*Last Name*Gender*Marital Status*Basic Salary";

    $items= explode("*", $data);

    foreach ($items as $x)
    {
        print "$x . <br>";
    }

    $num2 ="3122";
    $first_name="Liam";
    $last_name="Winter";
    $gender="male";
    $marital_status ="single";
    $num1="105000";

    print "<b>staff id :</b>" . $num2 . "<br>";
    print "<b>first name :</b>" . $first_name ."<br>";
    print "<b>last name :</b>" . $last_name . "<br>";
    print "<b>gender :</b>" . $gender . "<br>";
    print "<b>integer value :</b>" . $num1 . "<br>";

    echo "<br>";
    echo "<br>";

    $num2 ="3123";
    $first_name="Karin";
    $last_name="Donald";
    $gender="female";
    $marital_status ="single";
    $num1="100000";


    print "<b>staff id :</b>" . $num2 . "<br>";
    print "<b>first name :</b>" . $first_name ."<br>";
    print "<b>last name :</b>" . $last_name . "<br>";
    print "<b>gender :</b>" . $gender . "<br>";
    print "<b>integer value :</b>" . $num1 . "<br>";


    echo "<br>";
    echo "<br>";

    $num2 ="3124";
    $first_name="Saaid";
    $last_name="Ali";
    $gender="male";
    $marital_status ="married";
    $num1="150000";


    print "<b>staff id :</b>" . $num2 . "<br>";
    print "<b>first name :</b>" . $first_name ."<br>";
    print "<b>last name :</b>" . $last_name . "<br>";
    print "<b>gender :</b>" . $gender . "<br>";
    print "<b>integer value :</b>" . $num1 . "<br>";


    echo "<br>";
    echo "<br>";

    $num2 ="3125";
    $first_name="Vivian";
    $last_name="Paul";
    $gender="female";
    $marital_status ="married";
    $num1="110000";


    print "<b>staff id :</b>" . $num2 . "<br>";
    print "<b>first name :</b>" . $first_name ."<br>";
    print "<b>last name :</b>" . $last_name . "<br>";
    print "<b>gender :</b>" . $gender . "<br>";
    print "<b>integer value :</b>" . $num1 . "<br>";



    ?>
</div>

</body>
</html>
