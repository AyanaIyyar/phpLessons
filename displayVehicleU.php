<?php
$conn=mysqli_connect("localhost","root","","phpElevenOne");
if (!$conn){
    die("Connection Failed : ". mysqli_connect_error());
}
//REmove SQL Injection
$idPass_number=mysqli_real_escape_string($conn,$_POST['idPassNo']);
$sql="SELECT * FROM `vehicle` WHERE idPass_number=$idPass_number";
$result=$conn->query($sql);

if ($result->num_rows>0)
{
while ($row=$result->fetch_assoc())
{
?>

}

}
