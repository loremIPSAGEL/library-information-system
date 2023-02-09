<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/registration.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  
</head>
<body>
<body style="background-image: url(images/library.jpg); background-size: cover; background-position: center;">
    <div class="container">
        <form action="connect.php" method ="post" class="regForm">
            <h1 class="title">Please Register your Account</h1>
            <div class="user-name">
                <label for="name">First Name:</label>
                <input type="text" name="firstname" id="userName" placeholder = "e.g Juan" required>
            </div>
            <div class="lastname">
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" id="userLastName" placeholder = "e.g Dela Cruz" required>
            </div>
            <div class="email">
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email1" placeholder="example@gmail.com" required>
            </div>
            <div class="password">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
           </div>
           <div class="confirmPassword">
                <label for="confirmPass">Confirm Password:</label>
                <input type="password" name="confirmPass" id="confirmPass" required>
           </div>
                <button type="submit"class="signUp" target="_blank">Sign Up</button>
                <a style="color: white; 
          font-size: 10px; 
          font-family: 'Roboto', sans-serif;
          position: relative;
          top: -2%;
          " href="loginPage.php">Already have account</a>
        </form>
    </div>
</body>
</html>
