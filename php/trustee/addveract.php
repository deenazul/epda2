<?php
include_once "dbconnect.php";
error_reporting();  

if (isset($_FILES['doc'])){
$title = $_POST['title'];
$extension = pathinfo($_FILES['doc']['title'], PATHINFO_EXTENSION);
$filename = $title . "." . $extension;
$hasFileUploaded = move_uploaded_file($_FILES['doc']['tmp_name'], '../verified/' . $title);

}
if ($hasFileUploaded){
    echo $sql= "INSERT INTO tbl_ver (title) VALUES('$title')";

    if($conn->query($sql) === true)
    {
        echo "sql ok";
    }
    else{
        echo "db not ok";
    }
    header("Location:verify.php");
    }
?>