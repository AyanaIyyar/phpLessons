<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee form</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<h3 class="text-center"><u>Employee Form</u></h3>
<hr>
<div class="forms">
    <form action="" method="post" class="employee form-check">
        <label form=""><b>Staff ID</b></label>
        <br>
        <input type="number" name="staffid" placeholder="*Staff Id" required>
        <br>
        <label form=""><b>First Name</b></label>
        <br>
        <input type="text" name="fname" placeholder="*First Name" required>
        <br>
        <label form=""><b>Last Name</b></label>
        <br>
        <input type="text" name="1name" placeholder="*Last Name" required>
        <br>
        <label form=""><b>Gender</b></label>
        <br>
        <select name="gender" id="gender">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
        </select>
        <br>
        <label form=""><b>Marital Status</b></label>
        <br>
        <select name="marital status" id="marital status">
            <option value="married">Married</option>
            <option value="single">Single</option>
            <option value="divorced">Divorced</option>
            <option value="widowed">Widowed</option>
            <option value="seperated">Seperated</option>
        </select>
        <br>
        <label form=""><b>Bonus</b></label>
        <br>
        <input type="number" name="basicsalary" placeholder="*Basic salary here" required>
    </form>
</div>
</body>
</html>
