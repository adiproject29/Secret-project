<?php
include 'condb.php';

session_start();

if(!$_SESSION["username"]){
   header("location:login.php");

}else{
}

// Receive translator file register
$username = $_POST['username'];
$phone = $_POST['phone'];
$password = $_POST['password'];


//Encrypt password by sha512
$password=hash('sha512',$password);



// Order data into tables member
$sql = "INSERT INTO member(username, phone ,password)
VALUES('$username', '$phone', '$password')";
$result= mysqli_query($conn, $sql);

if ($result) {
    echo "<script> alert('register success'); </script> ";
    //Redirect to the main page
    echo "<script> window.location='login.php'; </script> ";
    
} else {
    echo "Error:" . $sql  . "<br>"  . mysqli_error($conn);
    echo "<script> alert('register fails'); </script>";

}

mysqli_close($conn);

?>