<?php 
session_start(); 
include "dbconnect.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)) {
        header("Location: loginform.html?error=Email is required");
        exit();

    }else if(empty($password)){
        header("Location: loginform.html?error=Password is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM tbl_user1 WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        echo "Logged in!";
         $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        header("Location: homeowner.php");
        // if (mysqli_num_rows($result) === 1) {
        //     if ($role=='owner'){
        //         echo "Logged in!";
        //         $_SESSION['email'] = $row['email'];
        //         $_SESSION['id'] = $row['id'];
        //         header("Location: homepageowner2.php");
        //     }
            // } else if($role=='trustee'){
            //     echo "Logged in!";
            //     $_SESSION['email'] = $row['email'];
            //     $_SESSION['id'] = $row['id'];
            //     header("Location: trustee.php");
            // }else if($role=='beneficiary'){
            //     echo "Logged in!";
            //     $_SESSION['email'] = $row['email'];
            //     $_SESSION['id'] = $row['id'];
            //     header("Location: beneficiary.php");
            // }

        //     $row = mysqli_fetch_assoc($result);
        //  }
        // else{
        //     header("Location: loginform.php?error=Incorrect email or password");
            
        // }
    }
}
?>