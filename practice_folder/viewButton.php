<?php
session_start();
require 'mainConnect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/viewForm.css">
    <title>Employee Details</title>
  </head>
  <body>

   <div class="container mt-5">
  
    <div class ="row"> 
        <div class ="col-md-5">
            <div class ="card">
                <div class="card-header">
                    <h4>
                        Student Information
                       
                    </h4>
                </div>
                <div class="card-body" >

                    
                <?php
                     if(isset($_GET['reference_id'])){
                       $reference_id= mysqli_real_escape_string($conn,$_GET['reference_id']);
                       $query = "SELECT * FROM employee_table WHERE reference_id = '$reference_id'";
                       $query_run=mysqli_query($conn,$query);
                       if(mysqli_num_rows($query_run)>0){
                        $reference_id = mysqli_fetch_array($query_run);
                        ?>
                     

 <!-- VIEW PART AREA -->
      <div class="view">
                     <div class="mb-3">
                        <label ><b>Reference Number:</b>
                        <p class="form"><?=$reference_id['reference_id'];?></p>
                    </label>                      
                    </div>
                     <div class="mb-3">
                        <label ><b>Student Number:</b>
                        <p class="form"><?=$reference_id['student_number'];?></p>
                    </label>                      
                    </div>
                    <div class="mb-3">
                        <label ><b>FirstName:</b>
                        <p class="form"><?=$reference_id['firstname'];?></p>
                    </label>                      
                    </div>

                    <div class="mb-3">
                        <label ><b>MiddleName:</b>                         
                        <p class="form"><?=$reference_id['middlename'];?></p>
                    </label>
                       
                    </div>

                    <div class="mb-3">
                        <label ><b>LastName:</b>
                        <p class="form"><?=$reference_id['lastname'];?></p>
                        </label>
                    </div>

                    <div class="mb-3">
                        <label ><b>Email Address:</b>
                        <p class="form"><?=$reference_id['email'];?></p></label>
                        
                    </div>

                    <div class="mb-3">
                        <label ><b>Contact Number:</b>
                        <p class="form"><?=$reference_id['number'];?></p></label>
                        
                    </div>

                     <div class="mb-3">
                        <label ><b>Address</b>
                        <p class="form"><?=$reference_id['address'];?></p>
                    </label>                      
                    </div>

                    <div class="mb-3">
                        <label ><b>Birthdate:</b>
                        <p class="form"><?=$reference_id['bday'];?></p></label>
                    </div>
                    
                     <div class="mb-3">
                        <label ><b>Gender</b>
                        <p class="form"><?=$reference_id['gender'];?></p>
                    </label>                      
                    </div>

                     <div class="mb-3">
                        <label ><b>Date Hired</b>
                        <p class="form"><?=$reference_id['date_hired'];?></p>
                    </label>                      
                    </div>

                    <div class="mb-3">
                        <label ><b>Current Status:</b>
                        <p class="form"><?=$reference_id['status'];?></p></label>
                    </div>
                    <a href="dashboard.php" class = "btn btn-danger float-end">back</a>


                     </div>
   
                    <?php
                       }
                       else{
                        echo "no record found";
                       }
                     }
                     
                ?>
                </div>
            </div>
        </div>
    </div>
   </div>
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>