<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Performance Results</title>
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
                //Declaring and initializing variables
                //&& is the logical AND , it works with the range. Without it...it does not work.
                //To avoid having the student no(1001/2019) put the quotes because the number is a string
                $studNo ="1001/2019";
                $full_names="Zephry Kemuunto";
                $maths=75;
                $eng=89;
                $swa=90;
                $bio=71;
                $phy=82;
                //Computations/ Processing

                $totalMarks=$maths+$eng+$swa+$bio+$phy;
                $average=$totalMarks/5;
                print "<b>Student Number : </b>" . $studNo . "<br>";
                print "<b>Full Names: </b>" . $full_names . "<br><hr>";
                print "<b>Mathematics: </b>" . $maths . "<br>";
                print "<b>English: </b>" . $eng . "<br>";
                print "<b>Kiswahili: </b>" . $swa . "<br>";
                print "<b>Biology : </b>" . $bio . "<br>";
                print "<b>Physics : </b>" . $phy . "<br><hr>";
                print"<b>Total Marks :</b>" . $totalMarks . "<br>";
                print"<b>Average Marks :</b>" . $average . "<br>";
//Determining the mean grade
                if ($average >= 80 && $average <= 100){
                    print "<b>Mean Grade :</b> A <br>" ;
                    print "<b>Comments :</b> Excellent. Keep it up . <br>" ;
                }
                elseif ($average >=65 && $average <= 79.9999){
                    print "<b>Mean Grade :</b> B <br>" ;
                    print "<b>Comments :</b> Good Performance. <br>" ;
                }
                elseif ($average >=50 && $average <= 64.9999){
                    print "<b>Mean Grade :</b> C <br>" ;
                    print "<b>Comments :</b> Average Performance. Aim Higher <br>" ;
                }
                elseif ($average >=35 && $average <= 49.9999){
                    print "<b>Mean Grade :</b> D<br>" ;
                    print "<b>Comments :</b> Pull Up your socks <br>" ;
                }
                elseif ($average >=0 && $average <= 34.9999){
                    print "<b>Mean Grade :</b> E <br>" ;
                    print "<b>Comments :</b> Pull Up your socks <br>" ;
                }
                else{
                    print "<b>Invalid Grade :</b> E <br>" ;
                    print "<b>Comments :</b> Enter the proper marks for the subjects <br>" ;
                }

                ?>
            </div>
            <div class="col-sm-3">
        </div>

        </div>
    </div>
</div>
</body>
</html>
