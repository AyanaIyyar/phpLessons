<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payroll Program</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Payroll program</u></h3>
<div class="container">
    <?php
    echo "<b>I)</b>";
    $staffid="1001/2019";
    $firstname="Karin";
    $lastname="Webster";
    $gender="F";
    $mstatus="Married";
    $bSal="100000";


    // Computations
    $hAllow=0.2*$bSal;
    $transAllow=0.9255*$hAllow;
    $medAllow=1.0327*$transAllow;

    if ($gender=="F"&& $mstatus=="Married"){
        $bonus=0.15*$bSal;
    }
    elseif ($gender=="F"&&$mstatus=="Married"){
        $bonus=0.125*$bSal;
    }
    else {
        $bonus=0.0975*$bSal;
    }

    $gross=$bSal+$hAllow+$transAllow+$medAllow+$bonus;
    //Payee

    if ($gross<=10000){
        $payee=0.05*$gross;
    }
   elseif ($gross<=20000){
        $payee=0.1*$gross;
   }
    elseif ($gross<=30000){
        $payee=0.2*$gross;
    }
    else{
        $payee=0.3*$gross;
    }

    //NSSF
    $nssf=0.15*$gross;

    //NHIF
    $nhif=$nssf+3500;

    $netpay=$gross-$payee-$nssf-$nhif;

    //Results

    print "<b>Staff ID :</b>" . $staffid . "<br>";
    print "<b>First Name :</b>" . $firstname . "<br>";
    print "<b>Last Name :</b>" . $lastname . "<br>";
    print "<b>Gender :</b>" . $gender . "<br>";
    print "<b>Marital Status :</b>" . $mstatus . "<br><hr>";
    print "<h3><u>Benefits :</h3></u>  .";
    print "<b>Basic Salary :</b>" . $bSal ."<br>";
    print "<b>House Allowance :</b>" . $hAllow ."<br>";
    print "<b>Transport Allowance :</b>" . $transAllow ."<br>";
    print "<b>Medical Allowance :</b>" . $medAllow ."<br>";
    print "<b>Bonus:</b>" . $bonus ."<br>";
    print "<b>Gross Pay :</b>" . $gross ."<br><hr>";
    print "<h3><u>Deductions</u></h3>.";
    print "<b>PAYEE: </b>" . $payee . "<br>";
    print "<b>NSSF: </b>" . $nssf . "<br>";
    print "<b>NHIF: </b>" . $nhif . "<br>";
    print "<b>NHIF: </b>" . $nhif . "<br>";
    print "<b>Net Pay: </b>" . $netpay . "<br>";


echo "<b>II)</b>";
$staffid="1001/2019";
$firstname="Liam";
$lastname="Winter";
$gender="M";
$mstatus="widowed";
$bSal="150000";

//Computations
    $hAllow=0.2*$bSal;
    $transAllow=0.09255*$hAllow;
    $medAllow=1.02327*$transAllow;

    //Bonus
    if ($gender=="M"&& $mstatus=="Married"){
        $bonus=0.15*$bSal;
    }

echo "II)";


    ?>
</div>
</body>
</html>
