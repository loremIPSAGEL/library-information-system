
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="loginPage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body style="background-image: url(images/library.jpg); background-size: cover; background-position: center;">

    <div class="container">
        <form action="login.php"method ="post">
            <h1 class="title">Login Account</h1>
            <br>
            <br>
            <div class="row">
               <center>
              <div class="col-sm-2">
                <input type="text" name="student_no" class="form-control" placeholder="Enter Student Number" required>
              </div>
            </div>
            <br>
                </center>
                <div class="row">
                  <center>
                  <button type="submit" class="btn btn-success btn-block" target="_blank">Login</button>
                  <br>
                  <br>
                   <p 
          style="color: white; 
          font-size: 10px; 
          font-family: 'Roboto', sans-serif;
          ">No Account?
          <span><a href="registration.php" style = "
          color: black;
          transition: color 0.1s ease;" 
          onmouseover="this.style.color='blue'"
          onmouseout="this.style.color='black'"
          >Create One!</a></span></p>
                  </center>
                </div>
               
           
       
        </form>
    </div>
 
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_no = $_POST['student_no'];

    $sql = "SELECT * FROM registration WHERE student_no = '$student_no'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // Fetch the data from the result
        $row = mysqli_fetch_assoc($result);
        // Assign the first name and last name to the $_SESSION variables
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        echo "<script>
        Swal.fire({
      title: 'Welcome, " . $row['firstname'] . " " . $row['lastname'] . "!',
      text: 'You have successfully logged in.',
      icon: 'success',
      showConfirmButton: false
    });
    setTimeout(function(){
      window.location.href = 'login.php';
    }, 3000);
  </script>";

    } else {
        echo "<script>
        Swal.fire({
            title: 'Error',
            text: 'Student number not found in database',
            icon: 'error',
            confirmButtonText: 'OK'
        });
        </script>";
    }
}

mysqli_close($conn);
?>

</body>
</html>