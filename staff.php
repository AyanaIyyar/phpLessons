<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Form</title>
    <link rel="icon" href="images/carThree.jpg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="logo">
<img src="images/carThree.jpg" alt="carThree" width="150" height="150">
</div>
<h3 class="text-center"><u>New Vehicle</u></h3>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="" method="post">
                <label for=""><b>Staff Id</b></label>
                <br>
                <input type="number"name="staff_id"  class="form-control" placeholder="*Staff Id Here" required>
                <br>
                <label for=""><b>Id/Passport Number</b></label>
                <br>
                <input type="number" name="idPassNumber" class="form-control" placeholder="*Id/Passport Number Here" required>
                <br>
                <label for=""><b>First Name</b></label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="*Your First Name Here" required>
                <br>
                <label for=""><b>Middle Name</b></label>
                <br>
                <input type="text" name="mName"  class="form-control" placeholder="*Your Middle Name Here" required>
                <br>
                <label for=""><b>Last Name</b></label>
                <br>
                <input type="text" name="lName"  class="form-control" placeholder="*Your Last Name Here" required>
                <br>
                <select name="gender" id=""></select>
            </form>
</body>
</html>
