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
    <title>H Ecommerce</title>
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
    background-color: #e7d5d5;
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
 max-width: 500px;
 margin: 20px auto;
 padding: 20px;
 background-color: #f4f4f4;
 box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
 border-radius: 5px;
 background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))
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
 background-color: #cfe4d4;
 background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))

}
.product img {
 max-width: 100%;
 height: auto;
}   
.bottom-menu {
    display: flex;
    justify-content: space-between;
    background-color: #e7dada;
    padding: 10px;
    border-radius: 5px;
}
.menu-item {
    color: #000000;
    text-decoration: none;
    padding: 20px 10px;
    border-radius: 3px;
}
.menu-item-circle{
  color: #000000;
    text-decoration: none;
    padding: 20px 20px;
    border-radius: 50%;
    border: 1px solid hsl(0, 27%, 74%);
}
.menu-item:hover {
    background-color: #fff2f2;
}
 </style>

<body>
    


<div class="container">
      <div class="slider">
        <ul>
          <li><img src="images/img1.jpg" alt="image one" /></li>
          <li><img src="images/img2.jpg" alt="image two" /></li>
          <li><img src="images/img3.jpg" alt="image three" /></li>
          <li><img src="images/img4.jpg" alt="image four" /></li>
        </ul>
      </div>
  
      <div class="pagination-dots">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </div>
    <div class="container">
      <h1>Fruit Menu</h1>
      <div id="products-container" class="products-container"></div>
    </div>
    <div class="bottom-menu">
      
        
      <a href="index.php" class="menu-item"><i class="bi bi-house-door-fill"></i> Home </a> 
      <a href="order.php" class="menu-item"><i class="bi bi-cart-fill"></i> Order</a>
      <a href="#" class="menu-item-circle">MODE</a>
      <a href="service.php" class="menu-item"><i class="bi bi-person-lines-fill"></i> Service</a>
      <a href="myprofile.php" class="menu-item"><i class="bi bi-person-circle"></i> My Profile</a>
  </div>
    <script>
      
      const productsContainer = document.getElementById('products-container');

const products = [
  { name: 'Laos ', price: 589, image: 'images/img1.jpg' },
  { name: 'Chicken jesus', price: 100000, image: 'images/img2.jpg' },
  { name: 'Beef steak', price: 8546, image: 'images/img3.jpg' },
  { name: 'American food', price: 10045, image: 'images/img1.jpg' },
  { name: 'Arab food', price: 96456, image: 'images/img2.jpg' },
  { name: 'Europe Food', price: 7899, image: 'images/img3.jpg' },
];

products.forEach(product => {
  const productElement = document.createElement('div');
  productElement.classList.add('product');
  productElement.innerHTML = `
      <img src="${product.image}" alt="${product.name}">
      <h3>${product.name}</h3>
      <p>$${product.price}</p>
  `;
  productsContainer.appendChild(productElement);
});
  </script>
    <script src="script.js"></script>

  </body>
</html>
<div class="footer">

</div>






</body>
</html>