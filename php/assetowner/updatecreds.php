<!DOCTYPE html>
<html lang="en">
<head>
<title>Update Credentials</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>


<style>
    body{
        background-color: #e8ebf6;
        }   
    .updatecredsform {
        display: flex;
        justify-content: center;
        align-items: center;
        height: inherit;
        padding: 50px ;
        padding-right: 220px;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }
    form {
        width: 50%;
        padding: 30px;
        border-radius: 6px;
        background: #fff;
        box-shadow: 0 0 5px 0 #333;
    }
    p{
        font-family: 'Alata';
        font-size: 16px;
        
    }
    input{
        height: 15px;
        width: 250px;
        padding-right: 80px;
        justify-content: center;
    }
    .column{
        text-align:left;
        width: 900px;
        border-radius: 10px;
        flex-wrap: wrap;
        justify-content: space-evenly;
        padding-left: 100px;
    }
    button{
        height: 30px;
        width: 350px;
        background-color: #2B4B82;
        color: #fff;
        font-size: 15px;
        font-family: 'Alata';
    }
    h1{
        text-align: center;
    }
    </style>
    
    <!--THIS IS HTML SECTION-->
    <body>
        <div class="updatecredsform">
            <form action="updatecreds.php" method="POST">
                <div>
                    <h1>Please enter your details.</h1>
                <div class="row">
                       <div class="column">
                            <p>Password:
                            <input type="password" name="password"></p>
                        <button class="submit" value="submit" name="submit">Save Update</button>
                      
</div>
                        </p> 
                    
                    </div>
                </div>
                </div>
                
            </form>
        </div>
    </body>
<?php
error_reporting(0);
include 'dbconnect.php';
if (isset($_POST['submit'])) {
$password = $_POST['password'];
$id_creds =$row["id_creds"];
$id_creds = $_POST['id_creds '];

 echo $query = "UPDATE tbl_creds1 SET password = '$password' WHERE id_creds='$id_creds'";
      if ($conn->query($query) == true){
           echo "success";
            // header("Location: homeowner.php"); 
      }else{
           echo "failed";
      }
    }
?>