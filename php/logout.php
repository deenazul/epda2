<?php
    $email = "-";
        echo "<script>alert('Logout Successful');</script>";
        echo "<script> window.location.replace('index.html')</script>";
        $_SESSION["sessionid"] = session_id();
        $_SESSION["email"] = $email;

?>