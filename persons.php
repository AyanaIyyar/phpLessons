<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persons</title>
    <link rel="icon" href="images/logoEight.jpeg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<hr>
<div class="logo">
    <img src="images/logoEight.jpeg" alt="logoEight" width="150" height="150">
</div>
<hr>
<div class="heading">
    <h3 class="text-center"><u>New Person</u></h3>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="newPersonHandler.php" method="post">
                <label for=""><b>ID/Passport Number : </b></label>
                <br>
                <input type="text"name="idPassNo" class="form-control" placeholder="*ID/Passport Number Here"required>
                <br>
                <label for=""><b>First Name : </b></label>
                <br>
                <input type="text"name="fName" class="form-control" placeholder="*First Name Here"required>
                <br>
                <label for=""><b>Middle Name : </b></label>
                <br>
                <input type="text"name="mName" class="form-control" placeholder="*Middle Name Here"required>
                <br>
                <label for=""><b>Last Name : </b></label>
                <br>
                <input type="text"name="lName" class="form-control" placeholder="*Last Name Here"required>
                <br>
                <label for=""><b>Age : </b></label>
                <br>
                <input type="number"name="age" class="form-control" placeholder="*Age Here"required>
                <br>
                <label for=""><b>Email Address : </b></label>
                <br>
                <input type="text"name="email" class="form-control" placeholder="*Email Here"required>
                <br>
                <label for=""><b>Telephone Number : </b></label>
                <br>
                <input type="text"name="telNumber" class="form-control" placeholder="*Telephone Number Here"required>
                <br>
                <label for=""><b>Gender : </b></label>
                <br>
                <input type="radio"name="gender" value="Male" required>&nbsp;&nbsp;Male
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio"name="gender" value="Female" required>&nbsp;&nbsp;Female
                <br>
                <label for=""><b>Date of Birth : </b></label>
                <br>
                <input type="date"name="dob" class="form-control" required>
                <br>
                <label for=""><b>Next of Kin : </b></label>
                <br>
                <input type="text"name="nok" class="form-control" placeholder="*Next of Kin"required>
                <br>
                <label for=""><b>NOK Telephone Number : </b></label>
                <br>
                <input type="text"name="nokTelNumber" class="form-control" placeholder="*Telephone Number Here"required>
                <br>
                <label for=""><b>NOK Relationship : </b></label>
                <br>
                <select name="nokRship" id="" class="form-control" required>
                    <option value="">======Select NOK Relationship======</option>
                    <option value="Father">Father</option>
                    <option value="Mother">Mother</option>
                    <option value="Brother">Brother</option>
                    <option value="Sister">Sister</option>
                    <option value="Uncle">Uncle</option>
                    <option value="Aunt">Aunt</option>
                    <option value="Spouse">Spouse</option>
                    <option value="Other">Other</option>
                </select>
                <br>
                <div class="buttons">
                    <button class="btn btn-success" type="submit">Add New</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="searchPersonU.php" class="btn-info">Update</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="searchPersonD.php" class="btn btn-danger">Delete</a>
                </div>
                <br>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
