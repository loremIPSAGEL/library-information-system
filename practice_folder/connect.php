<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPass = $_POST["confirmPass"];


        $sql = "INSERT INTO registration_table (firstname, lastname, email, password)
        VALUES ('$firstname','$lastname','$email', '$password')";

    if ($password != $confirmPass) {
        
        echo "<script>alert('Passwords do not match');</script>";
} else {
  //run the insertion query here
  if ($conn->query($sql) === TRUE) {
    header("Location: loginPage.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}

$conn->close();


?>
