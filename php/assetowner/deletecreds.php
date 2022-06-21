<?php
error_reporting(0);
include 'dbconnect.php';

if(isset($_GET['delete'])){
    $id_creds = $_GET['delete'];
    echo $delete = " DELETE FROM 'tbl_creds1' WHERE id_creds = '$id_creds";
    $result = mysqli_query($conn, $delete);
    if($result === true){
    echo "success";
            //  header("location:homeowner.php");
        }
else{
    echo "error";
}
?>

<?php } ?>