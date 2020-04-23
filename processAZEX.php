<?php
$userName=$_POST['userName'];
$userEmail=$_POST['userEmail'];
$userPassword=$_POST['userPassword'];
$massage=$_POST['massage'];

$userName=stripcslashes($userName);
$userEmail=stripcslashes($userEmail);
$userPassword=stripcslashes($userPassword);
$massage=stripcslashes($massage);


$con=mysqli_connect("localhost","root","","AZEX PRO");

$userName=mysqli_real_escape_string($con,$userName);
$userEmail=mysqli_real_escape_string($con,$userEmail);
$userPassword=mysqli_real_escape_string($con,$userPassword);
$massage=mysqli_real_escape_string($con,$massage);
 

 INSERT INTO contact ( userName,userEmail ,userPassword ,massage) VALUES
 ($userName ,$userEmail ,$userPassword ,$massage );
?>


 
