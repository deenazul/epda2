<?php
session_start();
include_once "dbconnect.php";
error_reporting();  

if (isset($_POST['submit'])){

$category = $_POST['category'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

echo $sql= "INSERT INTO tbl_creds1 (category,name, username, password) VALUES('$category','$name','$username','$password')";
// $query_run = mysqli_query($conn, $query);

if ($conn->query($sql) === true) {
    echo "<script>alert('Successfully Added');</script>";
    header("location:homeowner.php");
}else {
    echo '<script>alert("Fail to add")</script>';
}
}
?>