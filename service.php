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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>

    <!--Bootstrap css -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))
}
.container-slide {
  display: flex;
    flex-direction: column;
    align-items: center;
 max-width: 800px;
 margin: 20px auto;
 padding: 20px;
 background-color: #fff;
 box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
 border-radius: 5px;
 
}
.container {
 max-width: 800px;
 margin: 20px auto;
 padding: 20px;
 background-color: #fff;
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

.container-contact {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }
        .contact-img {
          border-radius: 50%;
            width: 500px;
            height: 500px;
        }
        .contact-btn {
            display: inline-block;
            border-radius: 10px;
            margin-top: 20px;
            padding: 30px 70px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            font-size: 25px;
            border: none;
        }
        .contact-btn:hover {
            background-color: #0056b3;
        }
 </style>



<body>

<div class="container">
      <h3 style="text-align: center;">Service</h3>
    </div>
    <div class="container-contact">
      <img class="contact-img" src="images/contact.jpg" alt="Contact Image">
      <br>
      <a class="contact-btn" href="#"> <i class="bi bi-chat-text"></i> Contact Us</a>
  </div>
  <div style="height:130px;"></div>
      <div class="bottom-menu">
      <a href="index.php" class="menu-item"><i class="bi bi-house-door-fill"></i> Home </a> 
      <a href="order.php" class="menu-item"><i class="bi bi-cart-fill"></i> Order</a>
      <a href="index.php" class="menu-item-circle">MODE</a>
      <a href="service.php" class="menu-item"><i class="bi bi-person-lines-fill"></i> Service</a>
      <a href="myprofile.php" class="menu-item"><i class="bi bi-person-circle"></i> My Profile</a>  
      </div>




    
</body>
</html>