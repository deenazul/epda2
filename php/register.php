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
$id = $_POST['id'];
$role = 'Asset Owner';

$sqlregister = "INSERT INTO tbl_user1(role,fullname,email,password,contact,address,id,) 
VALUES ('$role','$fullname','$email','$password','$contact','$address','$id')";

if ($conn->query($sqlregister) === true){
    echo "<script>alert('You have registered as an Asset Owner.')</script>";
}
else{
    echo "<script>alert('You have failed to register as an Asset Owner.')</script>";
}
    $sql = "SELECT * FROM tbl_user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            if ($role=='owner'){
                echo "Logged in!";
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                header("Location: homepageowner2.php");
            } 
            $row = mysqli_fetch_assoc($result);
         }
        else{
            header("Location: loginform.php?error=Incorrect email or password");
            
        }
    }

?>