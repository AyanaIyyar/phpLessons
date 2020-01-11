<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<?php
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


// If the submit button has been pressed
if(isset($_POST['submit'])) {
// Check number values
    if ($totalMarks= $maths+$eng+$swa+$bio+$phy== "Total") {
        print "<b>";
        // Calculate total
        if ($_POST['operation'] == 'plus') {
            $total = $_POST['number1'] + $_POST['number2'];
        }
        if ($_POST['operation'] == 'minus') {
            $total = $_POST['number1'] - $_POST['number2'];
        }
        if ($_POST['operation'] == 'multiply') {
            $total = $_POST['number1'] * $_POST['number2'];
        }
        if ($_POST['operation'] == 'divided by') {
            $total = $_POST['number1'] / $_POST['number2'];
        }

        // Print total to the browser
        echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";

    } else {

        // Print error message to the browser
        echo 'Numeric values are required';

    }
}



?>
<div class="forms">
    <form action="calculator" method="post" attribute="post">
        <!-- Calculator form by webdevtrick.com -->
        <form method="post" action="calculator.php">
            <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
            <select name="operation">
                <option value="sum"> & <input name="submit" type="submit" value="Calculate" />
                <option value="plus"> & <input name="submit" type="submit" value="Calculate" />
                <option value="plus"> & <input name="submit" type="submit" value="Calculate" />
            </select>
            <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
            <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
            <br>
            <form class="buttons" type="submit"></form>
            <input type="submit" name="submit" value="submit">

        </form>

</div>











    </form>
</div>

</body>
</html>
