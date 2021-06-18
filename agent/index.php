<!DOCTYPE html> 
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>ChatStrym | Dashboard</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
              <img src="images/profile.jpeg" alt="">
              <div class="name_job">
                <div class="name">Alfred Wanjau</div>
                <div class="job">Admin</div>
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
              <a href="#">
                <div class="user-content">
                  <div class="user-details">
                    <span>Alfred Wanjau</span>
                    <p>This is a test message</p>
                  </div>
                </div>
                <div class="status-dot"><i class='bx bxs-circle'></i></div>
              </a>
              <a href="#">
                <div class="user-content">
                  <div class="user-details">
                    <span>Alfred Wanjau</span>
                    <p>This is a test message</p>
                  </div>
                </div>
                <div class="status-dot"><i class='bx bxs-circle'></i></div>
              </a>
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
              <div class="input-message">
                <textarea name="" id="data" cols="100" rows="4" placeholder="Type a message here ..."></textarea>
                <button><i class='bx bxs-send'></i></button>
              </div>
            </form>
          </section>
          <section class="user-info">
  
          </section>
        </div>
      </div>
      <div class="tab-content emails" id="Dashboard">Dashboard</div>
      <div class="tab-content analytics" id="Analytics">Analytics</div>
      <div class="tab-content settings" id="Settings">Settings</div>
      <div class="tab-content profile" id="Profile">Profiles</div>
    </div>
    <script src="./js/index.js"></script>
    <script src="./js/chat.js"></script>
  </body>
</html>