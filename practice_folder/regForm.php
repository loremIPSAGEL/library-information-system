<?php
require 'regformConnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/createForm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  
</head>
<body>
     <body style="background-image: url(images/library.jpg); background-size: cover; background-position: center;">
    <div class="container">
        <form action="regformConnect.php" class="empForm" method="post">
            <h1 class="title">Please Fill-up the form</h1>
        <div class="fname">
            <label for="First Name">First Name:</label>
            <input type="text" name="firstname" id="fname" placeholder="Enter first name e.g Juan" required>
        </div>
        <div class="mname">
            <label for="Middle Name">Middle Name:</label>
            <input type="text" name="middlename" id="mname" placeholder="Enter middle name e.g B." >
        </div>
        <div class="lname">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lname" placeholder="Enter Last name e.g Dela Cruz" required>
        </div>
        <div class="email">
            <label for="email">Email Address:</label>
            <input type="email" name="email" id="email" placeholder="example@gmail.com" required>
        </div>
        <div class="number">
            <label for="contact number">Contact Number:</label>
            <input type="tel" name="number" id="number" placeholder="Enter Contact Number e.g 0912-345-6789" required>
        </div>
        <div class="address">
            <label for="address">Address:</label>
            <input type="text" name="address" id="add" placeholder="Street | Baranggay | Municipality " required>
        </div>
        <div class="bday">
            <label for="bday">Birthday:</label>
            <input type="date" name="bday" id="bday" required>
        </div>
        <div class="gender">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="Select Gender" disabled selected>Please Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Rather not say">Rather not say</option>
            </select>
        </div>
      
   

        <button type="submit" name = "save"class="signUp" target="_blank" name="save" required>Submit</button>
</form>
    </div>
</body>
</html> 