<?php
session_start();
require 'mainConnect.php';

if(isset($_POST['delete'])){
   $reference_id  = mysqli_real_escape_string($conn, $_POST['delete']);
   $query = "DELETE FROM employee_table WHERE reference_id = '$reference_id' ";
   $query_run = mysqli_query($conn,$query);
   if($query_run){
      $_SESSION['message'] = "Successfully Deleted!";
      header("Location: dashboard.php");
      exit(0);
   }
   else{
      $_SESSION['message'] = "Applicant Not EDITED ";
      header("Location: dashboard.php");
      exit(0);
      }
   
}



  if(isset($_POST['update'])){
    $student_number = mysqli_real_escape_string($conn,$_POST['student_number']);
    $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn,$_POST['middlename']);
    $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $number = mysqli_real_escape_string($conn,$_POST['number']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $bday = mysqli_real_escape_string($conn,$_POST['bday']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $date_hired = mysqli_real_escape_string($conn,$_POST['date_hired']);
    $status = mysqli_real_escape_string($conn,$_POST['status']);

    $reference_id = mysqli_real_escape_string($conn,$_POST['reference_id']);
  
    $query = "UPDATE employee_table SET student_number='$student_number', firstname='$firstname',middlename='$middlename',lastname='$lastname',email='$email',number='$number',address='$address',bday='$bday',gender='$gender' , date_hired = '$date_hired',status='$status' WHERE reference_id = '$reference_id'";

    if(mysqli_query($conn,$query)){
      $_SESSION['message'] = "Record has been updated successfully!";
      header('location:dashboard.php');
    }else{
      $_SESSION['message'] = "Sorry, something went wrong. Please try again later.";
      header('location:editButton.php?reference_id='.$reference_id);
    }
  }



?>