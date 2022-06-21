<?php
$servername = "";
$username = "projectm_epda2_db";
$password = "epda2_db";
$dbname = "projectm_epda2_db";

$conn = new mysqli($servername, $username, $password, $dbname);
// $sqli = new mysqli("","projectm_epda2_db" , "epda2_db", "projectm_epda2_db");
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} echo "connection ok";
?>
