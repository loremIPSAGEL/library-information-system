<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="Registration.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  
</head>
<body>



<body style="background-image: url(images/library.jpg); background-size: cover; background-position: center;">
    <div class="container">
        <form method ="post">

<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-4">   <h1 class="title">Register Account</h1></div>
<div class="col-lg-4"></div>
</div>

         
<div class="row">
<center>
   <div class="col-lg-2">
  <input type="text" class="form-control" name="student_no" id="userName" placeholder = "Enter Student Number " required>        
</div>
<br>
  <div class="col-lg-2">
  <input type="text" class="form-control" name="firstname" id="userName" placeholder = "Enter first name e.g Juan" required>        
</div>
<br>
<div class="col-lg-2">
  <input type="text" class="form-control" name="lastname" id="userLastName" placeholder = "Enter last name e.g Dela Cruz" required>
</div>
<br>

</div>  
 <br>
 </center>
   
          <center>
                <button type="submit" class="btn btn-success btn-block" target="_blank">Sign Up</button>
                <br>
                <br>
                <a href="login.php" style="color:white; font-size:13px;">Already have account</a>
</center>
        </form>
         <br>
    <br>
    </div>
   
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $student_no = $_POST['student_no'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];


    $sql = "INSERT INTO registration (student_no, firstname, lastname)
    VALUES ('$student_no','$firstname','$lastname')";
    if ($conn->query($sql) === TRUE) {
      echo "<script>
  Swal.fire({
    title: 'Success!',
    text: 'Record successfully created!',
    icon: 'success',
    confirmButtonText: 'OK'
  }).then(function () {
    window.location = 'login.php';
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
