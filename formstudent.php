<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Performance</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/studentsPerf.php">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Student Performance</u></h3>
<hr>
<div class="forms">


    <form method="post" attribute="post" action="disp_form.php">
        <p>First Value:<br/>
            <label form=""><b>Student Number</b></label>
            <input type="text" id="number" name="student number" placeholder="*Student's Number"></p>
        <br>
        <label form=""><b>Student First Name</b></label>
        <br>
        <input type="text" id="text" name="fname" placeholder="*Student First Name" required>
        <br>
        <label form=""><b>Student Last Name</b></label>
        <br>
        <input type="text" id="text" name="1name" placeholder="*Student Last Name"required>
        <br>
        <label form=""><b>Mathematics</b></label>
        <br>
        <input type="number" id="text" name="maths" placeholder="*Mathematics" required>
        <br>
        <label form=""><b>English</b></label>
        <br>
        <input type="number" id="text" name="eng" placeholder="*English" required>
        <br>
        <label form=""><b>Kiswahili</b></label>
        <br>
        <input type="number" id="text" name="swa" placeholder="*Kiswahili" required>
        <br>
        <label form=""><b>Biology</b></label>
        <br>
        <input type="number"  id="text" name="bio" placeholder="*Biology" required>
        <br>
        <label form=""><b>Physics</b></label>
        <br>
        <input type="number" id="text" name="phy" placeholder="*Physics" required>
        <br>
        <label form=""><b>Grade</b></label>
        <br>
        <hr>
        <select name="grade" id="grade">
            <option value="A">A-Excellent. Keep it up</option>
            <option value="B">B-Good Performance.</option>
            <option value="C">C-Average Performance. Aim Higher</option>
            <option value="D">D-Pull Up your socks</option>
            <option value="E">E-Enter the proper marks for the subjects</option>
        </select>
        <form class="buttons">
            <button type="submit" name="answer" id="calculate"value=""></button>
            <input type="compute" name="calculate" id="compute" value="compute"></form>
    </form>
        <p>Second Value:<br/>
            <input type="text" id="maths" name="maths"></p>
        <input type="number" name="total" id="add" value="sum" checked="true"><p>+</p><br/>
        <input type="number" name="average" id="divide" value="subtract"><p>-</p><br/>
        <input type="radio" name="group1" id="times" value="times"><p>x</p><br/>
        <input type="radio" name="group1" id="divide" value="divide"><p>/</p><br/>
        <p></p>
        <button type="submit" name="answer" id="answer" value="answer">Calculate</button>
    </form>

        <?php
       //Calculations

if($_POST['Total'] == $average) {
print "$maths + $eng +$swa +$bio +$phy";
}
else if($_POST['Average'] == $average) {
echo "$total" / 5;
}





else if($_POST['group1'] == $prod) {
echo "$first * $second";
}
?>
        </p>
</div>




</body>
</html>
