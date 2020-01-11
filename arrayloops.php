<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Loops</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Array Loops</u></h3>
<div class="container">
    <?php
    $students=array(
        "Wendi Winkle",
        "Thomas Sulvian",
        "Edward Scissors",
        "Emily Van Dame",
        "Kailey Coco"
    );
    print"<p>The following list of students :</p>";
    print "<ol>";

    //In ascending order
    $count=0;
    for ($count>=0; $count<=4;$count++){
        print "<li>" . $students[$count] . "</li>";
    }


//In descending order
    $count=4;
    for ($count<=4;$count<=0;$count--){
        print "<li>" . $students[$count] ."</li>";
    }
    ?>
</div>
</body>
</html>
