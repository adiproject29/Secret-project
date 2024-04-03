<?php
session_start();

if(!$_SESSION["username"]){
   header("location:login.php");

}else{
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password Page</title>


  <link rel="stylesheet" href="style.css" />

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .container {
            width: 300px;
            padding: 16px;
            background-color: white;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid black;
            border-radius: 4px;
        }
        input[type=text], input[type=email],input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
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
</head>
<body>
    <div class="container" id="forgot-password">
        <label for="uname"><b>Your Name</b></label>
        <input type="text" placeholder="Enter your name" name="uname" required>
        <label for="psw"><b>Old Password</b></label>
        <input type="password" placeholder="Enter old Password" name="psw" required>
        <label for="psw"><b>New Password</b></label>
        <input type="password" placeholder="Enter new Password" name="confirm-psw" required>
        <label for="psw"><b>Confirm Password</b></label>
        <input type="password" placeholder="Enter confirm Password" name="confirm-psw" required>
        <button type="submit">Reset Password</button>

        <a href="login.php" class="button">login</a>
    </div>
</body>
</html>
