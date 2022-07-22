<?php
session_start();
include_once "dbconnect.php";
error_reporting();  

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $ic = $_POST['ic'];
    $emailBen = $_POST['emailBen'];
    $nameCreds = $_POST['nameCreds'];
$username = $_POST['username'];
$password = $_POST['password'];

echo $sql= "INSERT INTO tbl_ben1 (name, ic, emailBen, nameCreds, username, password) VALUES('$name','$ic','$emailBen','$nameCreds','$username','$password')";
// $query_run = mysqli_query($conn, $query);

if ($conn->query($sql) === true) {
    echo "<script>alert('Successfully Added');</script>";
    header("location:trustee.php");
}else {
    echo '<script>alert("Fail to add")</script>';
}
}
?>