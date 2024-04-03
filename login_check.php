<?php

session_start();
include 'condb.php';
if(!$_SESSION["username"]){
    header("location:login.php");
 
 }else{
 }

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM member WHERE username='$username' AND password='$password' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);



if(mysqli_num_rows($result) > 0) {
    $_SESSION["username"]=$row['username'];
    $_SESSION["password"]=$row['password'];
    $show=header("location:index.php"); 

 }else{
     $_SESSION["Error"] = "<p> Your username and password is invalid. </p>";
     $show=header("location: login.php"); 
 }
    
 
 exit();
?>