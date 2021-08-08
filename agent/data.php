<?php
     while($row = mysqli_fetch_assoc($sql)){
          $output .= '<a href="users.php?user_id='.$row['unique_id'].'">
          <div class="user-content">
            <div class="user-details">
              <span>'.$row['ip_address'].'</span>
              <p></p>
            </div>
          </div>
          <div class="status-dot"><i class="bx bxs-circle"></i></div>
        </a>';
     }
?>