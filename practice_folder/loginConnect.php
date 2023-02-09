<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
session_start();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $sql = "SELECT email,password, firstname, lastname FROM registration_table WHERE email='$email' and password='$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
// Fetch the data from the result
$row = mysqli_fetch_assoc($result);
// Assign the email to the $_SESSION['email']
$_SESSION['email'] = $row['email'];
$_SESSION['firstname'] = $row['firstname'];
$_SESSION['lastname'] = $row['lastname'];
header("Location: dashboard.php");
} else {
echo "Error: Email and password do not match";
}




}

mysqli_close($conn);
?>
