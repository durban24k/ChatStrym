<?php
     include_once "../config/config.php";

     $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
     $output = "";
     $sql=mysqli_query($conn,"SELECT * FROM customer WHERE ip_address LIKE '%{$searchTerm}%'");
     if(mysqli_num_rows($sql) > 0){
          while($row = mysqli_fetch_assoc($sql)){
               include "./data.php";
          }
     }else{
          $output .= '<a>
          <div class="user-content">
            <div class="user-details">
              <span>No user found related to your search</span>
              <p></p>
            </div>
          </div>
        </a>';
     }
     echo $output;
?>