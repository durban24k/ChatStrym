<?php
     session_start();
     include_once "config.php";
     $email=mysqli_real_escape_string($conn,$_POST['email']);
     $pswrd=mysqli_real_escape_string($conn,$_POST['pswrd']);

     if(!empty($email) && !empty($pswrd)){
          $sql="SELECT * FROM users where email = '{$email}' AND pswrd = '{$pswrd}'";
          if(mysqli_num_rows(mysqli_query($conn,$sql)) > 0){
               $row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
               $_SESSION['unique_id'] = $row['unique_id'];
               echo "success";
          }else{
               echo "Incorrect Email/Password!!";
          }
     }else{
          echo "All input fields are required!";
     }
?>