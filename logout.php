<?php

session_start();
session_destroy();
header("location: login.php");

if(!$_SESSION["username"]){
    header("location:login.php");
 
 }else{
 }

?>

