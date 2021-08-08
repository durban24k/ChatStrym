<?php
     session_start();
     include_once "../config/config.php";
     $sql=mysqli_query($conn,"SELECT * FROM customer");
     $output = "";
     if(mysqli_num_rows($sql) === 0){
          $output .= '<a>
          <div class="user-content">
            <div class="user-details">
              <span>No customers online</span>
              <p></p>
            </div>
          </div>
        </a>';
     }else{
          include "./data.php";
     }
     echo $output;
?>