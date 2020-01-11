<?php
$conn=mysqli_connect("localhost","root","","phpEleven");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
//Remove SQL Injection
$idPassNumber=mysqli_real_escape_string($conn,$_POST['idPass']);
$sql="SELECT * FROM persons WHERE idPass_number='$idPassNumber'";
$result=$conn->query($sql);

if ($result->num_rows > 0)
{
    while ($row=$result->fetch_assoc())
    {
        ?>


        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Delete Personal Details</title>
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
            <h3 class="text-center"><u>Delete Personal Details</u></h3>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="personDelete.php" method="post">
                        <label for=""><b>ID/Passport Number : </b></label>
                        <br>
                        <input type="text"name="idPassNo" class="form-control" placeholder="*ID/Passport Number Here"required value="<?php print $row['idPass_number'];?>">
                        <br>
                        <label for=""><b>First Name : </b></label>
                        <br>
                        <input type="text"name="fName" class="form-control" placeholder="*First Name Here"required value="<?php print $row['first_name'];?>">
                        <br>
                        <label for=""><b>Middle Name : </b></label>
                        <br>
                        <input type="text"name="mName" class="form-control" placeholder="*Middle Name Here"required value="<?php print $row['middle_name'];?>">
                        <br>
                        <label for=""><b>Last Name : </b></label>
                        <br>
                        <input type="text"name="lName" class="form-control" placeholder="*Last Name Here"required value="<?php print $row['last_name'];?>">
                        <br>
                        <label for=""><b>Age : </b></label>
                        <br>
                        <input type="number"name="age" class="form-control" placeholder="*Age Here"required value="<?php print $row['age'];?>">
                        <br>
                        <label for=""><b>Email Address : </b></label>
                        <br>
                        <input type="text"name="email" class="form-control" placeholder="*Email Here"required value="<?php print $row['email'];?>">
                        <br>
                        <label for=""><b>Telephone Number : </b></label>
                        <br>
                        <input type="text"name="telNumber" class="form-control" placeholder="*Telephone Number Here"required value="<?php print $row['tel_number'];?>">
                        <br>
                        <label for=""><b>Gender : </b></label>
                        <br>
                        <input type="text"name="gender" class="form-control" placeholder="*Gender Here"required value="<?php print $row['gender'];?>">
                        <br>
                        <label for=""><b>Date of Birth : </b></label>
                        <br>
                        <input type="date"name="dob" class="form-control" required value="<?php print $row['dob'];?>">
                        <br>
                        <label for=""><b>Next of Kin : </b></label>
                        <br>
                        <input type="text"name="nok" class="form-control" placeholder="*Next of Kin"required value="<?php print $row['nok'];?>">
                        <br>
                        <label for=""><b>NOK Telephone Number : </b></label>
                        <br>
                        <input type="text"name="nokTelNumber" class="form-control" placeholder="*Telephone Number Here"required value="<?php print $row['nok_telephone'];?>">
                        <br>
                        <label for=""><b>NOK Relationship : </b></label>
                        <br>
                        <input type="text"name="nokRship" class="form-control" placeholder="*nok relationship Here"required value="<?php print $row['nok_relationship'];?>">
                        <br>

                                  <div class="buttons">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </div>
                        <br>
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        </body>
        </html>


        <?php
    }
}
mysqli_close($conn);
?>