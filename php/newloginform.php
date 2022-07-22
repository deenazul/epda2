<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="http://irdina.projectmuu.com/epda2/php/form/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="http://irdina.projectmuu.com/epda2/php/form/css/style.css">
</head>
<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="http://irdina.projectmuu.com/epda2/php/form/images/signin-image.jpg" alt="sign up image"></figure>
                        
                    </div>

                    <div class="signin-form">
                    <form action="newloginform.php" method="POST">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <select class="w3-input w3-border w3-round" name="role" id="role">
                                <option value="">Login As:</option>
                                <option value="Asset Owner">Asset Owner</option>
                                <option value="Trustee">Trustee</option>
                                <option value="Beneficiary">Beneficiary</option>
                              </select>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="http://irdina.projectmuu.com/epda2/php/form/vendor/jquery/jquery.min.js"></script>
    <script src="http://irdina.projectmuu.com/epda2/php/form/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php 
session_start(); 
error_reporting();
include "dbconnect.php";

if (isset($_POST['submit'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);

    if (empty($email)) {
        header("Location: newloginform.php?error=Email is required");
        exit();

    }else if(empty($password)){
        header("Location: newloginform.php?error=Password is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM tbl_user1 WHERE email='$email' AND password='$password' AND role = '$role'";
        $result = mysqli_query($conn, $sql);
        echo "Logged in!";
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
       
        if (mysqli_num_rows($result) > 0) {
            if ($role=='Asset Owner'){
                echo "Logged in!";
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                header("Location: http://irdina.projectmuu.com/epda2/php/assetowner/homeowner.php");
            
            } else if($role=='Trustee'){
                echo "Logged in!";
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                header("Location: http://irdina.projectmuu.com/epda2/php/trustee/trustee.php");
            }else if($role=='Beneficiary'){
                echo "Logged in!";
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                header("Location: http://irdina.projectmuu.com/epda2/php/beneficiary/beneficiary.php");
            }

            $row = mysqli_fetch_assoc($result);
         }
       
    }
}
?>