<?php 
session_start(); 
error_reporting();
include "dbconnect.php";

if (isset($_POST['submit'])) {
    
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$address = $_POST['address'];
// $id = $_POST['id'];
$role = 'Asset Owner';

 $sqlregister = "INSERT INTO tbl_user1(role,fullname,email,username,password,contact,address) 
VALUES ('$role','$fullname','$email','$username','$password','$contact','$address')";

if ($conn->query($sqlregister) === true){
    echo "<script>alert('You have registered as an Asset Owner.')</script>";
    header("location:homeowner.php");
}
else{
    echo "<script>alert('You have failed to register as an Asset Owner.')</script>";
}
}
?>