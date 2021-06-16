<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatStrym | Client</title>
    <link rel="stylesheet" href="./css/client.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
     <div class="contact-links">
          <div class="link">
               <a href="#"><i class="fas fa-map-marker-alt"></i> USIU Rd, Nairobi</a>
          </div>
          <div class="link">
               <a href="#"><i class="fas fa-envelope-open"></i> info@chatstrym.app</a>
          </div>
          <div class="link">
               <a href="#"><i class="fas fa-phone-volume"></i> +254(0)700 000000</a>
          </div>
     </div>
     <nav>
          <div class="logo">
               <a href="#">ChatStrym</a>
          </div>
          <label for="btn" class="icon"><i class="fas fa-bars"></i></label>
          <input type="checkbox" id="btn">
          <ul>
               <li>
                    <label for="btn-1" class="show">Products <i class="fas fa-caret-down"></i></label>
                    <a href="#">Products <i class="fas fa-caret-down"></i></a>
                    <input type="checkbox" id="btn-1">
                    <ul>
                         <li><a href="#">LiveChat</a></li>
                         <li><a href="#">Chatbots</a></li>
                    </ul>
               </li>
               <li><a href="#">Pricing</a></li>
               <li>
                    <label for="btn-3" class="show">Support <i class="fas fa-caret-down"></i></label>
                    <a href="#">Support <i class="fas fa-caret-down"></i></a>
                    <input type="checkbox" id="btn-2">
                    <ul>
                         <li><a href="#">Knowledge Base</a></li>
                         <li><a href="#">Integration</a></li>
                    </ul>
               </li>
               <li><a href="#">Demo</a></li>
               <li><a href="#" class="freetrial">Free Trial</a></li>
               <li><a href="#" class="lp-login">Log In</a></li>
          </ul>
     </nav>
     <div class="hero">
          
     </div>

     <!-- BUTTON -->
     <button class="live-help bounce" id="openChat" onclick="openChat()"><i class="fas fa-comment-alt"></i></button>
     <button class="live-help" id="closeChat" onclick="closeChat()"><i class="fas fa-chevron-down"></i></button>
     <span class="tooltip" id="tooltip">Welcome, Click To Chat!</span>
     <div class="wrapper" id="chatWidget">
          <div class="title">ChatStrym</div>
          <div class="form">
               <div class="agent-inbox inbox">
                    <div class="icon">
                         <i class="fas fa-user"></i>
                    </div>
                    <div class="msg-header">
                         <p>Hello there, how can I help you?</p>
                    </div>
               </div>
          </div>
          <div class="typing-field">
               <div class="input-data">
                    <input id="data" type="text" placeholder="Type something here.." required>
                    <button id="send-btn">Send</button>
               </div>
          </div>
          <div class="ownership"><span>Powered <i class="fas fa-bolt"></i> by ChatStrym</span></div>
     </div>

     <script>
          $(document).ready(function(){
               $("#send-btn").on("click", function(){
                    $value = $("#data").val();
                    $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                    $(".form").append($msg);
                    $("#data").val('');
                    
                    // start ajax code
                    $.ajax({
                         url: 'message.php',
                         type: 'POST',
                         data: 'text='+$value,
                         success: function(result){
                         $replay = '<div class="agent-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                         $(".form").append($replay);
                         // when chat goes down the scroll bar automatically comes to the bottom
                         $(".form").scrollTop($(".form")[0].scrollHeight);
                         }
                    });
               });
          });
     </script>
     <script src="./js/client.js"></script>
</body>
</html>