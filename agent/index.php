<?php 
     session_start();
     if(!isset($_SESSION['unique_id'])){
          header("location: ../login/index.php");
     }
?>
<!DOCTYPE html> 
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>ChatStrym | Dashboard</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/logo.png" type="image/x-icon">
  </head>
  <body>
    <div class="sidebar">
      <div class="logo_content">
        <div class="logo">
          <div class="logo_name">ChatStrym</div>
        </div>
        <i class='bx bx-menu' id="btn"></i>
      </div>
      <ul class="nav_list">
        <li>
          <i class='bx bx-search'></i>
          <input type="text" placeholder="Search...">
          <span class="tooltip">Search</span>
        </li>
        <li>
          <a href="#" class="menu-btn active" onclick="openTab(event,'Chats')">
            <i class='bx bxs-message-dots'></i>
            <span class="links_name">Chats</span>
          </a>
          <span class="tooltip">Chats</span>
        </li>
        <li>
          <a href="#" class="menu-btn" onclick="openTab(event,'Dashboard')">
            <i class='bx bxs-dashboard'></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
          <a href="#" class="menu-btn" onclick="openTab(event,'Analytics')">
            <i class='bx bx-bar-chart-alt-2'></i>
            <span class="links_name">Analytics</span>
          </a>
          <span class="tooltip">Analytics</span>
        </li>
        <li>
          <a href="#" class="menu-btn" onclick="openTab(event,'Settings')">
            <i class='bx bx-cog'></i>
            <span class="links_name">Settings</span>
          </a>
          <span class="tooltip">Settings</span>
        </li>
      </ul>
      <div class="content">
        <div class="user">
          <a href="#" class="menu-btn" onclick="openTab(event,'Profile')">
            <div class="user_details">
              <?php
                include_once "../config/config.php";
                $sql=mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                if(mysqli_num_rows($sql) > 0){
                  $row = mysqli_fetch_assoc($sql);
                }
              ?>
              <img src="<?php echo $row['img']; ?>" alt="">
              <div class="name_job">
                <div class="name"><?php echo $row['fname']." ".$row['lname']; ?></div>
                <div class="job"><?php echo $row['login_status']; ?></div>
              </div>
            </div>
          </a>
          <a href="#"><i class='bx bx-log-out' id="log_out"></i></a>
          <span class="tooltip">Logout</span>
        </div>
      </div>
    </div>
    <div class="main_content">
      <div class="tab-content chats" id="Chats">
        <div class="chat-content">
          <section class="users">
            <header>Chats</header>
            <div class="search">
              <span class="text">Search for a customer</span>
              <input type="text" placeholder="Search Customer...">
              <button><i class='bx bx-search-alt'></i></button>
            </div>
            <div class="users-list">
              
            </div>
          </section>
          <section class="chatarea">
            <header>
              <div class="details">
                <span>Alfred Wanjau</span>
              </div>
              <a href="#"><i class='bx bx-dots-horizontal-rounded'></i></a>
            </header>
            <div class="chat-box">
            <div class="chat incoming">
                <div class="data">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="chat outgoing">
                <div class="data">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="chat outgoing">
                <div class="data">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="chat incoming">
                <div class="data">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <form action="#" class="typing-area">
              <div class="input-field">
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id'] ?>" >
                <input type="text" name="incoming_id" value="<?php echo $user_id ?>" >
                <textarea name="message" id="data" cols="100" rows="4" placeholder="Type a message here ..."></textarea>
                <button><i class='bx bxs-send'></i></button>
              </div>
            </form>
          </section>
          <section class="user-info">
  
          </section>
        </div>
      </div>
      <!-- <div class="tab-content emails" id="Dashboard">Dashboard</div>
      <div class="tab-content analytics" id="Analytics">Analytics</div>
      <div class="tab-content settings" id="Settings">Settings</div>
      <div class="tab-content profile" id="Profile">Profiles</div> -->
    </div>
    <script src="./js/chat.js"></script>
    <script src="./js/index.js"></script>
    <script src="../js/insert-chat.js"></script>
  </body>
</html>