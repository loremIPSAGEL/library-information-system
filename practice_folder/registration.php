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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  
</head>
<body>
<body style="background-image: url(images/library.jpg); background-size: cover; background-position: center;">
    <div class="container">
        <form  method ="post" class="regForm">
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

 
  //run the insertion query here
  if ($conn->query($sql) === TRUE) {
      echo "<script>
  Swal.fire({
    title: 'Congtratulation!',
    text: 'You have successfully created an account.',
    icon: 'success',
    confirmButtonText: 'OK'
  }).then(function () {
    window.location = 'loginPage.php';
  });
  </script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}


$conn->close();


?>

</body>
</html>
