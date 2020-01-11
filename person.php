<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persons</title>
    <link rel="icon" href="images/picFourty.jpeg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

</head>
<body>
<div class="logo">
    <img src="images/picFourty.jpeg" alt="picFourty.jpeg" width="150" height="150">
</div>
<div class="heading">
    <h3 class="text-center"><b>Persons</b></h3>
</div>
<hr>
<div class="container">
    <form action="newPersonHandler3.php" method="post">
        <div class="row">
            <div class="col-sm-4">
                <label for=""><b>ID/Passport Number:</b></label>
                <br>
                <input type="text" name="idPassNumber" class="form-control" placeholder="*ID/Passport Number Here">
            </div>
            <div class="col-sm-4">
                <label for=""><b>First Name</b></label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="*First Name Here">
            </div>
            <div class="col-sm-4">
                <label for=""><b>Middle Name:</b></label>
                <br>
                <input type="text" name="mName" class="form-control" placeholder="*Middle Name Here">
            </div>
            <div class="col-sm-4">
                <label for=""><b>Last Name:</b></label>
                <br>
                <input type="text" name="lName" class="form-control" placeholder="*Last Name Here">
            </div>
            <div class="col-sm-4">
                <label for=""><b>Gender</b></label>
                <br>
                <input type="radio" name="gender" value="male" required>Male
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" value="female" required>Female
            </div>
            <div class="col-sm-4">
                <label for=""><b>Marital Status</b></label>
                <br>
                <select name="mStatus" id="" class="form-control">
                    <option value="disabled">========Select Marital Status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Seperated">Seperated</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label for=""><b>Telephone Number</b></label>
                <br>
                <input type="text" name="telNumber" class="form-control" placeholder="*Telephone Number">
            </div>
            <div class="col-sm-4">
                <label for=""><b>Email Address</b></label>
                <br>
                <input type="text" name="emailAddress" class="form-control" placeholder="*Email Address">
            </div>
            <div class="col-sm-4">
                <label for=""><b>Date of Birth</b></label>
                <br>
                <input type="date" name="dob" class="form-control" >
            </div>
            <div class="col-sm-4">
                <label for=""><b>Next of Kin(NOK)</b></label>
                <br>
                <input type="text" name="nok" class="form-control" placeholder="*next of kin here">
            </div>
            <div class="col-sm-4">
                <label for=""><b>NOK Telephone Number</b></label>
                <br>
                <input type="text" name="nokTelNumber" class="form-control" placeholder="*Next of kin telephone number">
            </div>
            <div class="col-sm-4">
                <label for=""><b>NOK Relationship</b></label>
                <br>
                <select name="nokRShip" id="" class="form-control">
                    <option value="Disabled">=========Select NOK Relationship</option>
                    <option value="Father">Father</option>
                    <option value="Mother">Mother</option>
                    <option value="Brother">Brother</option>
                    <option value="Sister">Sister</option>
                    <option value="Uncle">Uncle</option>
                    <option value="Aunt">Aunt</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="buttons">
            <button class="btn btn-success" type="submit">Add New</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="btn btn-primary">Update</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="btn btn-danger">Delete</a>
        </div>
        <hr>
    </form>

</div>







</body>
</html>
