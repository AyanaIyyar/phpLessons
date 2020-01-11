<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehicle</title>
    <link rel="icon" href="images/carThree.jpg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<hr>
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
                <label for=""><b>Vehicle ID : </b></label>
                <br>
                <input type="text" name="vehicle_id" class="form-control"placeholder="*Your Vehicle Id Here"required >
                <br>
                <label for=""><b>ID/Passport Number</b></label>
                <br>
                <input type="text" name="idPassNo" class="form-control" placeholder="*ID/Passport Number Here" required>
                <br>
                <label for=""><b>Vehicle Type</b></label>
                <br>
                <select name="vehicle_type" id="" class="form-control" required>
                    <option value="">========Select Vehicle Type========</option>
                    <option value="">Toyota</option>
                    <option value="">Nissan</option>
                    <option value="">Honda</option>
                    <option value="">Mercedees</option>
                    <option value="">Range Rover</option>
                    <option value="">BMW</option>
                    <option value="">Audi</option>
                    <option value="">Isuzu</option>
                    <option value="">Jeep</option>
                    <option value="">Cayeene</option>
                    <option value="">Toureg</option>
                    <option value="">Volkswagen</option>
                </select>
                <br>
                <label for=""><b>Owner First Name</b></label>
                <br>
                <input type="text" name="Ownerfirst_name" class="form-control" placeholder="*Owner First Name Here" required>
                <br>
                <label for=""><b>Owner Middle Name</b></label>
                <br>
                <input type="text" name="Ownermiddle_name" class="form-control" placeholder="*Owner Middle Name Here" required>
                <br>
                <label for=""><b>Owner Last Name</b></label>
                <br>
                <input type="text" name="Ownerlast_name" class="form-control" placeholder="*Owner Last Name Here" required>
                <br>
                <label for=""><b>Age</b></label>
                <br>
                <input type="number"name="age" class="form-control" placeholder="*Your Age Here" required>
                <br>
                <label for=""><b>Email Address</b></label>
                <br>
                <input type="text" name="email" class="form-control" placeholder="*Your Email address" required>
                <br>
                <label for=""><b>Telephone Number</b></label>
                <br>
                <input type="number" name="tel_number" class="form-control" placeholder="*Your Telephone Number Here" required>
                <br>
                <label for=""><b>Gender</b></label>
                <br>
                <input type="radio" name="gender" value="Male" required>Male

                <input type="radio" name="gender" value="Female" required>Female
                <br>
                <label for=""><b>Date of Birth</b></label>
                <br>
                <input type="date" name="dob" class="form-control" required>
                <br>
                <label for=""><b>Next of Kin</b></label>
                <br>
                <input type="text" name="nok" class="form-control" placeholder="*Next of Kin" required>
                <br>
                <label for=""><b>NOK Telephone</b></label>
                <br>
                <input type="number" name="nokTelNumber" class="form-control" placeholder="*Telephone Number Here" required>
                <br>
                <select name="nokRship" id="" class="form-control" required>
                    <option value="">==========Select Nok Relationship========</option>
                    <option value="Father">Father</option>
                    <option value="Mother">Mother</option>
                    <option value="Sister">Sister</option>
                    <option value="Brother">Brother</option>
                    <option value="Aunt">Aunt</option>
                    <option value="Uncle">Uncle</option>
                    <option value="Spouse">Spouse</option>
                    <option value="Other">Other</option>
                </select>
                <br>
                <div class="buttons">
                    <button class="btn btn-danger" type="submit">Add New</button>
                </div>
                <br>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
