<?php
session_start();
include 'condb.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>

     <!--Bootstrap css -->
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="style.css" />

</head>

<style>
       body {
            font-family: Arial, Helvetica, sans-serif;
            
        }
        .container {
            width: 500px;
            padding: 80px;
            background-color: rgb(255, 255, 255);
            margin: 0 auto;
            margin-top: 10px;
            border: 1px solid rgb(212, 189, 189);
            border-radius: 1px;
            background:linear-gradient(45deg,#d2001a,#7462ff,#f48e21,#23d5ab);
            background-size: 300% 300%;
            animation: color 12s ease-in-out infinite;
        }

@keyframes color{
            0%{
                background-position:0 50%;
            }
            50%{
                background-position: 100% 50%;
            }
            100%{
                background-position:0 50%;
            }
        }
        input[type=text], input[type=username] {
            width: 100%;
            padding: 5px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background:linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 5px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background:linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))
        }
        input[type=text], input[type=phone] {
            width: 100%;
            padding: 5px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background:linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))
        } 
        input[type=text], input[type=password] {
            width: 100%;
            padding: 5px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background:linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))
        }
        button {
            background-color: #4c53af;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }
        button:hover {
            opacity:1;
        }

    
    </style>


<body>
<div class="MuiBox-root mui-j1fy4m">
    <img src="https://onekapital.com/image/catalog/gray%20logo.png" alt="LOGO" class="mui-1nk6o8c"></div>
<div class="container" name="register">
<div class="row">
    <div class="col-md-6">
    </div>

    <div class="MuiBox-root mui-j1fy4m">

<div class="MuiBox-root mui-0" style="position:fixed;top:0;left:0;z-index:-1;width:100%;height:100%; background:linear-gradient(45deg,#d2001a,#7462ff,#f48e21,#23d5ab);
            background-size: 300% 300%;
            animation: color 12s ease-in-out infinite;"></div>


<br>
<div class="row">
     <div class="col-md-30">
     <h2>Register Account</h2> <br><br>
<form method="POST" action="insert_register.php">
        <label for="username"><b>Username</b></label> 
        <input type="text" placeholder="Enter your name" name="username" maxlength="15" class="form-contol" required>
        <label for="phone"><b>Phone</b></label><br>
        <input type="text" placeholder="Enter Phone number" name="phone" maxlength="10" class="form-contol" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" maxlength="15" class="form-contol" required>
      
        
                
        <input type="submit" name="Register" value="register" class="btn btn-primary"> <br> <br> 
        
       <a href="login.php" class="btn btn-primary"> Login </a> 
       </div>
       </div>


       <script type="module" src="src/main.ts"></script>
</form>
    </div>



</body>
</html>