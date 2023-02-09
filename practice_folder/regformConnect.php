<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['save'])){
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $address = $_POST['address'];
  $bday = $_POST['bday'];
  $gender = $_POST['gender'];
  $status = "New";

  $sql = "INSERT INTO employee_table (firstname, middlename, lastname, email, number, address, bday, gender, status)
  VALUES ('$firstname', '$middlename', '$lastname', '$email', '$number', '$address', '$bday', '$gender','$status')";

  if ($conn->query($sql) === TRUE) {
     header("Location: dashboard.php");
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
