<?php
session_start();

if(!$_SESSION["username"]){
   header("location:login.php");

}else{
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="style.css" />
   
    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #a6c9b3;
    background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))
    
    
}
.page-content {
    flex: 1;
    
}
.container-slide {
  display: flex;
    flex-direction: column;
    align-items: center;
 max-width: 800px;
 margin: 20px auto;
 padding: 30px;
 background-color: #c5eec9;
 box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
 border-radius: 5px;
 
}
.container {
 max-width: 800px;
 margin: 20px auto;
 padding: 20px;
 background-color: #d3e9d1;
 box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
 border-radius: 5px;
}
.products-container {
 display: grid;
 grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
 gap: 20px;
}
.product {
 text-align: center;
 padding: 10px;
 border: 1px solid #ccc;
 border-radius: 5px;
 background-color: #f9f9f9;
}
.product img {
 max-width: 100%;
 height: auto;
}   
.top-menu {
    display: flex;
    justify-content: space-between;
    background-color: #cff0cf;
    padding: 10px;
    border-radius: 5px;
}
.bottom-menu {
    display: flex;
    justify-content: space-between;
    background-color: #ffffff;
    padding: 10px;
    border-radius: 5px;
}
.menu-item {
    color: #000000;
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 3px;
}
.menu-item:hover {
    background-color: #fff2f2;
}
 </style>
  </head>
  <body>
    <div class="container">
      <h3 style="text-align: center;">Order</h3>
    </div>
    <div class="top-menu">
        <a href="#" class="menu-item">UNSUBMIT</a>
        <a href="#" class="menu-item">COMPLETED</a>
        <a href="#" class="menu-item">HISTORY</a>
    </div>
    <div style="height: 700px;"></div>
      <div class="bottom-menu">
      <a href="index.php" class="menu-item"><i class="bi bi-house-door-fill"></i> Home </a> 
      <a href="order.php" class="menu-item"><i class="bi bi-cart-fill"></i> Order</a>
      <a href="#" class="menu-item-circle">MODE</a>
      <a href="service.php" class="menu-item"><i class="bi bi-person-lines-fill"></i> Service</a>
      <a href="myprofile.php" class="menu-item"><i class="bi bi-person-circle"></i> My Profile</a>
      </div>
  </body>
</html>