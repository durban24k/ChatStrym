<?php
     include_once "config.php";
     $fname=mysqli_real_escape_string($conn,$_POST['fname']);
     $lname=mysqli_real_escape_string($conn,$_POST['lname']);
     $email=mysqli_real_escape_string($conn,$_POST['email']);
     $pswrd=mysqli_real_escape_string($conn,$_POST['pswrd']);

     if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pswrd)){
          // Validate email address
          if(filter_var($email,FILTER_VALIDATE_EMAIL)){
               $sql=mysqli_query($conn,"SELECT email FROM users WHERE email = '{$email}'");
               if(mysqli_num_rows($sql)>0){
                    echo "$email - already exists!";
               }else{
                    $unique_id=mt_rand();
                    $status="Active Now";
                    $img="../profile_images/default.png";
                    $timestamp=time();
                    $created_at=strval($timestamp);
                    $updated_at=strval($timestamp);
                    $updated_at=strval($timestamp);

                    $sql2="INSERT INTO users (unique_id,fname,lname,email,pswrd,img,login_status,created_at,updated_at) VALUES ($unique_id,'{$fname}','{$lname}','{$email}','{$pswrd}','{$img}','$status','$created_at','$updated_at')";
                    if(mysqli_query($conn,$sql2)){
                         echo "success";
                         
                    }else{
                         echo "Something Went Wrong!!";
                    }
               }
          }else{
               echo "$email - is not a valid email!";
          }
     }else{
          echo "All input fields are required!!";
     }
?>

<?php
     // if(isset($_FILES['image'])){
     //      $img_name=$_FILES['image']['name'];
     //      $img_type=$_FILES['image']['type'];
     //      $tmp_name=$_FILES['image']['tmp_name'];

     //      $img_explode=explode('.',$img_name);
     //      $img_ext=end($img_explode); //file image extension

     //      $extensions=['png','jpeg','jpg'];
     //      if(in_array($img_ext,$extensions)===true){
     //           // TRUE STATEMENT
     //           $new_img_name=$unique_id;
     //           move_uploaded_file($tmp_name,"../profile_images/".$new_img_name);
     //      }else{
     //           echo "Please select an image file - jpeg, jpg, png";
     //      }
     // }
?>