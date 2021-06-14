<?php
     
     include_once "./config.php";
     $fname=mysqli_real_escape_string($conn,$_POST['fname']);
     $lname=mysqli_real_escape_string($conn,$_POST['lname']);
     $email=mysqli_real_escape_string($conn,$_POST['email']);
     $pswrd=mysqli_real_escape_string($conn,$_POST['pswrd']);

     if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pswrd)){
          // Validate email address
          if(filter_var($email,FILTER_VALIDATE_EMAIL)){

          }else{
               echo "Email not valid";
          }
     }else{
          echo "All input fields are required!!";
     }
?>