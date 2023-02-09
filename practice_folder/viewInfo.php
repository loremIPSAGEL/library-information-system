<?php
require 'regformConnect.php';

$sql = "SELECT * FROM employee_table";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $firstname = $row["firstname"];
        $middlename = $row["middlename"];
        $lastname = $row["lastname"];
        $email = $row["email"];
        $number = $row["number"];
        $address = $row["address"];
        $bday = $row["bday"];
        $gender = $row["gender"];
    }
} else {
    echo "No data found.";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link rel="stylesheet" href="css/empForm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
   
</head>
<body>
    
    <div class="container">
        <h1 class="title">Student Information</h1>
        <div class="empInfo">
            <p><strong>First Name: </strong><?php echo $firstname; ?></p>
            <p><strong>Middle Name: </strong><?php echo $middlename; ?></p>
            <p><strong>Last Name: </strong><?php echo $lastname; ?></p>
            <p><strong>Email Address: </strong><?php echo $email; ?></p>
            <p><strong>Contact Number: </strong><?php echo $number; ?></p>
            <p><strong>Address: </strong><?php echo $address; ?></p>
            <p><strong>Birthday: </strong><?php echo $bday; ?></p>
            <p><strong>Gender: </strong><?php echo $gender; ?></p>
            <p><strong>Date Hired: </strong><?php echo $date_hired; ?></p>
            <p><strong>Status: </strong><?php echo $status; ?></p>
        </div>
    </div>
</body>
</html>
