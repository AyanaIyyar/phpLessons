<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Two</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Form Two</u></h3>
<form method="POST" action="calc.php">

    <p align="center"><b>Enter the first number :</b><br/><input type="text" name="num1" size="20"><br>

    </p>

    <p align="center"><select name = "function">

            <option value="+">Add [+]</option>

            <option value="-">Subtract[-]</option>

            <option value="*">Multiple[*]</option>

            <option value="/">Divide[/]</option>

        </select></p>

    <p align="center"><b>Enter the second number : </b><br/><input type="text" name="num2"    size="20"></p>

    <p align="center"><b>Answer : </b><br/><input type="text" name="ans"  size="20" id="ans">
    </p>
    <p align="center"><input type="submit" value="Calculate" name="calculate"></p>

</form>

<?php

	$num1 = $_POST['num1'];

	$num2 = $_POST['num2'];

	$func = $_POST['function'];

	if (!$num1="" || !$num2="")

	{

	die("Value Cannot Be Null");

	exit();

	}

	else

	{

	switch ($func) {
        case "+":

	       $result = $_POST[$num1] + $_POST[$num2];

	        break;

	    case "-":
	       $result = $_POST[$num1] - $_POST[$num2];
	        break;

	    case "*":

	        $result = $_POST[$num1] * $_POST[$num2];
	        break;
	    case "/":

	        $result = $_POST[$num1] / $_POST[$num2];

	}

	echo $result;

	}

	?>






</body>
</html>
