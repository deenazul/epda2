<?php 
session_start(); 
error_reporting();
include "dbconnect.php";

if (isset($_POST['submit'])) {
    
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$role = 'Beneficiary';

$sqlregister = "INSERT INTO tbl_user1(role,fullname,email,password,contact,address) 
VALUES ('$role','$fullname','$email','$password','$contact','$address')";

if ($conn->query($sqlregister) === true){
    echo "<script>alert('You have registered as a Beneficiary.')</script>";
    header("Location: index.html");
}
else{
    echo "<script>alert('You have failed to register as a Beneficiary.')</script>";
    header("Location: regformBeneficiary.html");
}
}
?>