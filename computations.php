<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computations</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Computations</u></h3>
<div class="container">
    <?php
    echo "b)";
    //Housing allowance 20% of basic sal
    //Transport allowance is less housing allowance by 7.45%
    //Medical allowance exceeds transport allowance by 3.27%
    //Bonus: male+married=15% of basic sal, female+ married=12.5%of basic sal, others=9.75%of basic sal

    $num2 ="3122";
    $first_name="Liam";
    $last_name="Winter";
    $gender="male";
    $marital_status ="single";
    $num1="105000";
    $num3= "0.2";
    $remdr =$num3 * $num1;
    //num4 is the housing allowance
    $num4= $remdr;
    $num5="0.0745";
    $num6=$num4 *$num5;
    //num6 is the 7.45%
    $num7=$num4 - $num6;
    //num8 is the 3.27%
    $num8 ="0.0327";
    $num9 =$num7 *$num8 ;
    $num10 =$num7 + $num9 ;
    //bonus
    $num11="0.0975";
    $num12 = $num11 * $num1;


    print "<b>staff id :</b>" . $num2 . "<br>";
    print "<b>first name :</b>" . $first_name ."<br>";
    print "<b>last name :</b>" . $last_name . "<br>";
    print "<b>gender :</b>" . $gender . "<br>";
    print "<b>salary:</b>" . $num1 . "<br>";
    print "<b>decimal value :</b>" . $num3 . "<br>";
    print "<b>housing allowance :</b>" .$remdr . "<br>";
    print "<b>decimal value :</b>" . $num5 . "<br>";
    print "<b>less:</b>" . $num6 . "<br>";
    print "<b>transport allowance :</b>" .$num7 . "<br>" ;
    print "<b>decimal value :</b>" . $num8 . "<br>";
    print "<b>less:</b>" . $num9 . "<br>";
    print "<b>medical allowance :</b>" . $num10 . "<br>";
    print "<b>bonus percentage : </b>" . $num11 . "<br>";
    print "<b>bonus :</b>" . $num12 . "<br>";

    echo "<br>";
    echo "<br>";


    $num2 ="3123";
    $first_name="Karin";
    $last_name="Donald";
    $gender="female";
    $marital_status ="single";
    $num1="100000";
    $num3= "0.2";
    $remdr =$num3 * $num1;
    //num4 is the housing allowance
    $num4= $remdr;
    $num5="0.0745";
    $num6=$num4 *$num5;
    //num6 is the 7.45%
    $num7=$num4 - $num6;
    //num8 is the 3.27%
    $num8 ="0.0327";
    $num9 =$num7 *$num8 ;
    $num10 =$num7 + $num9 ;
    //bonus
    $num11="0.0975";
    $num12 = $num11 * $num1;


    print "<b>staff id :</b>" . $num2 . "<br>";
    print "<b>first name :</b>" . $first_name ."<br>";
    print "<b>last name :</b>" . $last_name . "<br>";
    print "<b>gender :</b>" . $gender . "<br>";
    print "<b> basic salary:</b>" . $num1 . "<br>";
    print "<b>decimal value :</b>" . $num3 . "<br>";
    print "<b>housing allowance :</b>" .$remdr . "<br>";
    print "<b>decimal value :</b>" . $num5 . "<br>";
    print "<b>less:</b>" . $num6 . "<br>";
    print "<b>transport allowance :</b>" .$num7 . "<br>" ;
    print "<b>decimal value :</b>" . $num8 . "<br>";
    print "<b>less:</b>" . $num9 . "<br>";
    print "<b>medical allowance :</b>" . $num10 . "<br>";
    print "<b>bonus percentage : </b>" . $num11 . "<br>";
    print "<b>bonus :</b>" . $num12 . "<br>";


    echo "<br>";
    echo "<br>";


    $num2 ="3124";
    $first_name="Saaid";
    $last_name="Ali";
    $gender="male";
    $marital_status ="married";
    $num1="150000";
    $num3= "0.2";
    $remdr =$num3 * $num1;
    //num4 is the housing allowance
    $num4= $remdr;
    $num5="0.0745";
    $num6=$num4 *$num5;
    //num6 is the 7.45%
    $num7=$num4 - $num6;
    //num8 is the 3.27%
    $num8 ="0.0327";
    $num9 =$num7 *$num8 ;
    $num10 =$num7 + $num9 ;
    //bonus
    $num11="0.15";
    $num12 = $num11 * $num1;




    print "<b>staff id :</b>" . $num2 . "<br>";
    print "<b>first name :</b>" . $first_name ."<br>";
    print "<b>last name :</b>" . $last_name . "<br>";
    print "<b>gender :</b>" . $gender . "<br>";
    print "<b>basic salary :</b>" . $num1 . "<br>";
    print "<b>decimal value :</b>" . $num3 . "<br>";
    print "<b>housing allowance :</b>" .$remdr . "<br>";
    print "<b>decimal value :</b>" . $num5 . "<br>";
    print "<b>less:</b>" . $num6 . "<br>";
    print "<b>transport allowance :</b>" .$num7 . "<br>" ;
    print "<b>decimal value :</b>" . $num8 . "<br>";
    print "<b>less:</b>" . $num9 . "<br>";
    print "<b>medical allowance :</b>" . $num10 . "<br>";
    print "<b>bonus percentage : </b>" . $num11 . "<br>";
    print "<b>bonus :</b>" . $num12 . "<br>";


    echo "<br>";
    echo "<br>";

    $num2 ="3125";
    $first_name="Vivian";
    $last_name="Paul";
    $gender="female";
    $marital_status ="married";
    $num1="110000";
    $num3= "0.2";
    $remdr =$num3 * $num1;
    //num4 is the housing allowance
    $num4= $remdr;
    $num5="0.0745";
    $num6=$num4 *$num5;
    //num6 is the 7.45%
    $num7=$num4 - $num6;
    //num8 is the 3.27%
    $num8 ="0.0327";
    $num9 =$num7 *$num8 ;
    $num10 =$num7 + $num9 ;
    //bonus
    $num11="0.125";
    $num12 = $num11 * $num1;



    print "<b>staff id :</b>" . $num2 . "<br>";
    print "<b>first name :</b>" . $first_name ."<br>";
    print "<b>last name :</b>" . $last_name . "<br>";
    print "<b>gender :</b>" . $gender . "<br>";
    print "<b>basic salary :</b>" . $num1 . "<br>";
    print "<b>decimal value :</b>" . $num3 . "<br>";
    print "<b>housing allowance :</b>" .$remdr . "<br>";
    print "<b>decimal value :</b>" . $num5 . "<br>";
    print "<b>less:</b>" . $num6 . "<br>";
    print "<b>transport allowance :</b>" .$num7 . "<br>" ;
    print "<b>decimal value :</b>" . $num8 . "<br>";
    print "<b>less:</b>" . $num9 . "<br>";
    print "<b>medical allowance :</b>" . $num10 . "<br>";
    print "<b>bonus percentage : </b>" . $num11 . "<br>";
    print "<b>bonus :</b>" . $num12 . "<br>";


    echo "<br>";
    echo "<br>";

















    ?>
</div>
</body>
</html>
