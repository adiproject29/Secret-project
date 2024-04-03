<?php
session_start();
include 'condb.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
            padding: 100px;
            background-color: rgb(255, 255, 255);
            margin: 0 auto;
            margin-top: 20px;
            border: 1px solid rgb(212, 189, 189);
            border-radius: 10px;  
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
            padding: 10px;
            margin: 10px 0 22px 0;
            display: inline-block;
            border: none;
            background:linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))
        }
        
        input[type=text], input[type=password] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 22px 0;
            display: inline-block;
            border: none;
            background:linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))
        }

        button {
            background-color: #4c53af;
            color: rgb(252, 245, 245);
            padding: 15px 20px;
            margin: 15px 0;
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

<div class="MuiBox-root mui-0" 
style="position:fixed;top:0;left:0;z-index:-1;width:100%;height:100%; background:linear-gradient(45deg,#d2001a,#7462ff,#f48e21,#23d5ab);
            background-size: 300% 300%;
            animation: color 12s ease-in-out infinite;"></div>

<div class="container" id="login">
  <div class="row">
     <div class="col-md-30">
       <form method="POST" action="login_check.php"> 
        <h3>Welcome To H-Pro Platform</h3> <br>
        <label for="username"><b>Username</b></label> <br>
        <input type="username" placeholder="Enter Username" name="username" class="form-contol" required> <br>
        <label for="psw"><b>Password</b></label> <br>
        <input type="password" placeholder="Enter Password" name="password" class="form-contol" required> <br> <br>
        <a href="forgetpwd.php" class="button">Forget your passoword?</a> <br> <br>
        <?php
        if(isset($_SESSION["Error"])) {
            echo "<div class='text-danger'>";
            echo $_SESSION["Error"];
            echo "</div>";
        }
        ?>
        <button type="login" name="login"class="btn btn-primary" value="login" >Login</button> <br> <br>
       
        <p>If you don’t have account <a href="registerusr.php" class="button">Register</a></p>

        
     
        
    </form>  
    </div>
       </div>
 
</body>


</html>

