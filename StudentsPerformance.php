<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Performance</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Students Performance Results</u></h3>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="col-sm-6">
                <?php
                $studNo="2874/19";
                $full_Names="Aika Valentine";
                $maths=77;
                $eng=70;
                $swa=66;
                $bio=68;
                $chem=70;
                $phy=56;
                $hist=90;
                $cre=88;
                //computations
                $totalmarks=$maths+$eng+$swa+$bio+$chem+$phy+$hist+$cre;
                $average=$totalmarks/8;


                $studNo="2875/19";
                $full_Names="Zain Yurov";
                $maths=90;
                $eng=82;
                $swa=79;
                $bio=71;
                $chem=80;
                $phy=88;
                $geo=91;
                $comp=83;
                //computations
                $totalmarks=$maths+$eng+$swa+$bio+$chem+$phy+$geo+$comp;
                $average=$totalmarks/8;
                for ($count=0;$count<=1;$count++){
                    print "<b>Student Number :</b>" .$studNo[$count] . "<br>";
                    print "<b>Full Names :</b>" . $full_Names [$count]. "<br>";
                    print "<b>Mathematics :</b>" .$maths [$count]. "<br>";
                }


                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
