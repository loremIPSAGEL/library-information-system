<?php
require 'loginConnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

</head>
<body style="background-image: url(images/library.jpg); background-size: cover; background-position: center;">


    <div class="container">
        <form action="loginPage.php" class="regForm" method ="post">
            <h1 class="title">Login your Account</h1>
            <div class="email">
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email1" placeholder="example@gmail.com" required>
            </div>
           <div class="password">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
          <p 
          style="color: white; 
          font-size: 10px; 
          font-family: 'Roboto', sans-serif;
          position: relative;
          top: -10%;
          left: 4%;
          ">No Account?
          <span><a href="registration.php" style = "
          color: black;
          transition: color 0.1s ease;" 
          onmouseover="this.style.color='blue'"
          onmouseout="this.style.color='black'"
          >Create One!</a></span></p>
       <button type="submit" class="signUp" target="_blank" style = "padding: 6.5% 20% 6.5% 20%;">Login</button>
       
        </form>
    </div>
 

</body>
</html>