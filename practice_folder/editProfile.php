<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
    <link rel="stylesheet" href="css/createStatus.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <div class="create-status-area">
        <form action="#" class="status-box">
            <label for="create_status">Edit Profile</label>
            <input type="text" name="create_status" id="create_status">
            <button>Create</button>
            
            <?php
            echo "<script>
  Swal.fire({
    title: 'Welcome, " . $row['firstname'] . " " . $row['lastname'] . "!',
    text: 'You have successfully logged in.',
    icon: 'success',
    confirmButtonText: 'OK'
  }).then(function () {
    window.location = 'dashboard.php';
  });
  </script>";

  echo "<script>
  Swal.fire({
    title: 'Error',
    text: 'Email and password do not match',
    icon: 'error',
    confirmButtonText: 'OK'
  });
  </script>";
            ?>
        </form>
    </div>
</body>
</html>