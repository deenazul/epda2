<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>

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
    <div class="adddocform">
    <form name = "adddoc" action="adddocact.php" method="POST" enctype="multipart/form-data">
    <div><h1>Please enter the following details</h1>
    <div class="row">
    <div class="column">
    <body>
        <div class="from-group">
<div class="col-md-12">
 <select name="doc_type" id="doc_type" class="form-control">
            <option value=""> Select Category of Document </option>
            <option value="Will"> Will and Trust </option>
            <option value="Beneficiary Form"> Beneficiary Form </option>
            <option value="Other"> Other </option>
        </select>
        <p>Title of Document:</p>
            <input type="text" name="title" id="title" class="form-control">
            <p>Upload Document:</p> 
        <input type="file" name="doc" id="doc">

            <button class="submit" value="submit" name="submit">Add</button>
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