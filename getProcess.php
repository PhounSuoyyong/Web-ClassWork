<?php
if(isset($_GET['fname'])){
    $firstName = htmlspecialchars($_GET["fname"]);
    $lastName = htmlspecialchars($_GET["lname"]);
    $phoneNumber = htmlspecialchars($_GET["phonenumber"]);
    $password = htmlspecialchars($_GET["password"]);
    $Cpassword = htmlspecialchars($_GET["cpassword"]);

    echo "First Name: " . $firstName . "<br>";
    echo "Last Name: " . $lastName . "<br>";
    echo "Phone Number: " . $phoneNumber . "<br>";
    echo "Password: " . $password . "<br>";
    echo "Confirm Password: " . $Cpassword . "<br>";
}
?>