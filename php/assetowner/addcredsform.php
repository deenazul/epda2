<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Credentials</title>
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
.addcredsform {
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
    <div class="addcredsform">
    <div class="signin-form">
    <h2 class="form-title">Fill in the following details</h2>
        <form action="addcredsact.php" method="POST">
        <div class="form-group">
            <!-- <label for="nname"><i class="zmdi zmdi-account material-icons-name"></i></label> -->
            <input type="text" name="name" id="name" placeholder="Name of Digital Assets"/>
        </div>
        <div class="form-group">
            <!-- <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label> -->
            <input type="text" name="username" id="username" placeholder="Username"/>
        </div>
        <div class="form-group">
            <!-- <label for="your_pass"><i class="zmdi zmdi-lock"></i></label> -->
            <input type="password" name="password" id="password" placeholder="Password"/>
        </div>
        <div class="from-group">
            <label for=""> Category of Digital Assets</label>
            <select name="category" class="form-control">
            <option value="">Select Category</option>
            <option value="Social Media Account">Social Media Account</option>
            <option value="Cryptocurrency Account">Cryptocurrency Account</option>
            <option value="Website">Website</option>
            </select>
        </div>
        <div class="form-group form-button">
            <input type="submit" name="submit" class="form-submit" value="Add"/>
        </div>
        </form>
    </div>
    <!-- <div><h1>Please enter the following details</h1>
    <div class="row">
    <div class="column">
    <body>
        <p>Name of Digital Assets:</p>
            <input type="text" name="name"> 
        <p>Username:</p>
            <input type="text" name="username">   
        <p>Password:</p>
            <input type="password" name="password">      
            select drop down button             
        <div class="from-group">
            <label for=""> Category of Digital Assets</label>
            <select name="category" class="form-control">
            <option value="">Select Category</option>
            <option value="Social Media Account">Social Media Account</option>
            <option value="Cryptocurrency Account">Cryptocurrency Account</option>
            <option value="Website">Website</option>
            </select>
        </div>
        <button class="submit" value="submit" name="submit">Add</button> -->
        <!-- <div text-align="center">
        <button onclick="window.location.href = 'updatecreds.php';"> Edit </button>
        </div> -->

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