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
 background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))
 
}
.container {
 max-width: 800px;
 margin: 20px auto;
 padding: 15px;
 background-color: #fff;
 box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
 border-radius: 5px;
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
}
.products-container {
 display: grid;
 grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
 gap: 20px;
 background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))
}
.product {
 text-align: center;
 padding: 10px;
 border: 1px solid #ccc;
 border-radius: 5px;
 background-color: #f9f9f9;
 background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))
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
  .container {
    margin: 20px auto;
    width: 50%;
    text-align: center;
}

.image-container {
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 20px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
}

button {
    padding: 10px 20px;
    cursor: pointer;
    background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))
}
input{
    background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))
}
.bottom-menu {
    display: flex;
    justify-content: space-between;
    background-color: #ffffff;
    padding: 10px;
    border-radius: 5px;
}

input.copy_button{
    
    display: inline-block;
            border-radius: 10px;
            margin-top: 3px;
            padding: 5px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            font-size: 25px;
            border: none;

}
 </style>



<body>


    <div class="container">
    
        <div class="image-container">
        <form method="POST" action="myprofile.php"> 
        <h3>Recharge QR CODE</h3> <br><br>
        <img src="images/qr.jpg" alt="Money" width="200"> 
        </div>
        <form id="rechargeForm"> 
            <div class="container">
                ADDRESS RECHARGE 
       <br> <input type="text" class="copy_button" value="TF5fGgssr4LKopjPh9tgc77fcd4Xxc12DDsx" readonly>
        <button type="button" class="Text_CopBtn">
            
              Copy
        </button>
    </div>
            <div class="input-group">
                <label for="amount">Amount:</label>
                <input type="text" id="amount" name="amount"  placeholder="Enter amount" required >
            </div>
            <div class="input-group">
                <label for="confirmation">TXID:</label>
                <input type="text" id="confirmation" name="confirmation" placeholder="Enter your Txid" required ><br>
            </div>
            <br> <button type="submit" id="confirmButton">Confirm Deposit</button>

        </form>
    </div>


  <div style="height:130px;"></div>
      <div class="bottom-menu">
          <a href="index.php" class="menu-item"><i class="bi bi-house-door-fill"></i> Home Page</a>
          <a href="order.php" class="menu-item"><i class="bi bi-cart-fill"></i> Order</a>
          <a href="#" class="menu-item">MODE</a>
          <a href="service.php" class="menu-item"><i class="bi bi-person-lines-fill"></i> Service</a>
          <a href="myprofile.php" class="menu-item"><i class="bi bi-person-circle"></i> My Profile</a>
      </div>
      
      



      <script src="scripts.js"></script>
    
</body>


</html>

