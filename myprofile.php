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
    <title>My profiles</title>
    

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
 background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))
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

.card-body {
color: #FFFFFF;
font: 16px;
padding: 10px;
background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))


}
 </style>

  <body>

  <div class="container">
      <h3 style="text-align: center;">My Profile</h3>
    
      
<style>
  .profile-upload {
    width: 150px;
    height: 150px;
    border: 2px dashed #ccc;
    border-radius: 50%;
    position: relative;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
  }
  .profile-upload img {
    max-width: 150%;
    max-height: 150%;
    display: none;
    align-items: center;
  }
  .file-input {
   padding: 1px, 2px;
    display: none;
   
  }
  .image-container{
    height: 700px;
    border-radius: 50%;
    max-width: 100%;
  }
  .list-group-item{
    border:1px;
    font: 150px;
    text:;
    background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))
  }
</style>
<div class="profile-upload" id="profileUpload">
    <input type="file" accept="image/*" class="file-input" id="fileInput">
    
    <img src="#" alt="Profile Picture" id="profileImage">
    
    
    
</div>

<label for="fileInput"class="btn btn-primary">Change picture</label>  <br>
<div class="card-body"> 


  
                 <div class="image-container">
                  
                 <h2 class="mb-5"><i class="bi bi-wallet"> WALLET  : $ 109,297,409 <br><br> </i>  
                 <a href="recharge.php"class="btn btn-success"><i class="bi bi-cash-stack"></i>
                </i> Recharge </a> 
                <a href="#"class="btn btn-danger"><i class="bi bi-bank"></i>
              </i> Withdraw </a></h2>
           
              

 <div class="list-group"> <br>   <br>
  <h2>
  <a href="#" class="list-group-item list-group-item-action">Change your wallet   ><br></a> <br>   
  <a href="#" class="list-group-item list-group-item-action">Your phone number    ></a> <br>   
  <a href="#" class="list-group-item list-group-item-action">Your invite code    ></a> <br>   <br>
</h2>
</div>

                    </div>
                    <br><a href="logout.php"class="btn btn-primary"><i class="bi bi-box-arrow-right"></i> Logout </a><br><br><br>
                  </div>
  
    </div>
    
  </div>
  

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const fileInput = document.getElementById('fileInput');
      const profileImage = document.getElementById('profileImage');
      
      // Check if profile picture exists in localStorage
      const storedImage = localStorage.getItem('profileImage');
      if (storedImage) {
        profileImage.src = storedImage;
        profileImage.style.display = 'block';
      }
      
      // Event listener for file input change
      fileInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
            const imageUrl = e.target.result;
            profileImage.src = imageUrl;
            profileImage.style.display = 'block';
            localStorage.setItem('profileImage', imageUrl); // Save image URL to localStorage
          }
          reader.readAsDataURL(file);
        }
      });
    });
  </script>
  </div>
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
     
      <div class="">
      
     
      
    </div>
const products = [
  { name: 'Product 1', price: 50, image: 'images/img1.jpg' },
  { name: 'Product 2', price: 75, image: 'images/img2.jpg' },
  { name: 'Product 3', price: 100, image: 'images/img3.jpg' },
  { name: 'Product 1', price: 50, image: 'images/img1.jpg' },
  { name: 'Product 2', price: 75, image: 'images/img2.jpg' },
  { name: 'Product 3', price: 100, image: 'images/img3.jpg' },
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

  <style>


</style>
</html>