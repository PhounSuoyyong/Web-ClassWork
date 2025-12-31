<?php
$firstName = $_GET['fname']; 
$lastName = $_GET['lname'];
$phone = $_GET['phonenumber'];
$password = $_GET['password'];
$Cpassword = $_GET['cpassword'];

echo "First Name: " . $firstName . "<br>";
echo "Last Name: " . $lastName . "<br>";
echo "Phone Number: " . $phone . "<br>";
echo "Password: " . $password . "<br>";
echo "Confirm Password: " . $Cpassword . "<br>";
?>