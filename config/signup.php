<?php
     
     include_once "./config.php";
     $fname=mysqli_real_escape_string($conn,$_POST['fname']);
     $lname=mysqli_real_escape_string($conn,$_POST['lname']);
     $email=mysqli_real_escape_string($conn,$_POST['email']);
     $pswrd=mysqli_real_escape_string($conn,$_POST['pswrd']);

     if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pswrd)){
          // Validate email address
          if(filter_var($email,FILTER_VALIDATE_EMAIL)){
               $sql=mysqli_query($conn,"SELECT email FROM users WHERE email = '{$email}'");
               if(mysqli_num_rows($sql)>0){
                    echo "$email already exists!";
               }else{
                    $unique_id=mt_rand();
                    $status="Active Now";
                    $timestamp=time();
                    $sql2=mysqli_query($conn,"INSERT INTO users (unique_id,fname,lname,email,pswrd,img,login_status,created_at,updated_at) 
                                      VALUES ({$unique_id},'{$fname}','{$lname}','{$email}','{$pswrd}','{$img}','{$status}','{$created_at}','{$updated_at}'");
                    if($sql2){

                    }
               }
          }else{
               echo "Email not valid";
          }
     }else{
          echo "All input fields are required!!";
     }
?>