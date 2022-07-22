<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Verified Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
<!-- Font Icon -->
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<!-- CSS -->
<style>
body{
    background-color: #e8ebf6;
    }   
.adddocform {
    display: flex;
    justify-content: center;
    align-items: center;
    height: inherit;
    padding: 50px ;
    padding-right: 220px;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
}
form {
    width: 100%;
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
}img{
    height: 150px;
    width: 150px;
    border-radius: 80%;
    padding-top: 20px;
}.main{
    margin-left: 400px;
}
</style>

<!--THIS IS HTML SECTION-->
<body>
    <div class="addverform">
    <form name = "addver" action="addveract.php" method="POST" enctype="multipart/form-data">
    <div><h1>Please enter the following details</h1>
    <div class="row">
    <div class="column">
    <body>
        <div class="form-group">
<div class="col-md-12">
        <div class="form-group">
           <p>Title of Verified Document:</p>
            <input type="text" name="title" id="title" class="form-control">
        <p>Upload Document:</p> 
        <input type="file" name="doc" id="doc">
        <p><button class="submit" value="submit" name="submit">Add</button></p>
    </div>
        
</div>
        </div>

    </body>
    </div>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>
</body>

<!-- PHP -->
<?php
session_start(); 
error_reporting();
?>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>