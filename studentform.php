<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Peformance</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Student Performance</u></h3>
<hr>
<div class="forms">
    <form action=""method="post" class="Student Peformance">
    <label form=""><b>Student Number</b></label>
        <br>
        <input type="text" name="Student Number" placeholder="*Student Number" required>
        <br>
        <label form=""><b>Student First Name</b></label>
        <br>
        <input type="text" name="fname" placeholder="*Student First Name" required>
        <br>
        <label form=""><b>Student Last Name</b></label>
        <br>
        <input type="text" name="1name" placeholder="*Student Last Name" required>
        <br>
        <label form=""><b>Mathematics</b></label>
        <br>
        <input type="number" name="maths" placeholder="*Mathematics" required>
        <br>
        <label form=""><b>English</b></label>
        <br>
        <input type="number" name="eng" placeholder="*English" required>
        <br>
        <label form=""><b>Kiswahili</b></label>
        <br>
        <input type="number" name="swa" placeholder="*Kiswahili" required>
        <br>
        <label form=""><b>Biology</b></label>
        <br>
        <input type="number" name="bio" placeholder="*Biology" required>
        <br>
        <label form=""><b>Physics</b></label>
        <br>
        <input type="number" name="phy" placeholder="*Physics" required>
        <br>
        <textarea name="comments" id="comments" cols="30" rows="10" placeholder="*Comments Here"></textarea>
            <br>
         <label form=""><b>Grade</b></label>
            <br>
            <select name="grade" id="grade">
                <option value="A">A-Excellent. Keep it up</option>
                <option value="B">B-Good Performance.</option>
                <option value="C">C-Average Performance. Aim Higher</option>
                <option value="D">D-Pull Up your socks</option>
                <option value="E">E-Enter the proper marks for the subjects</option>
            </select>
    </form>
    <br>
    <br>
        <form class="buttons" type="submit"></form>
            <input type="submit" name="submit" value="submit">


</div>
</body>
</html>
