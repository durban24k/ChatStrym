<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ChatStrym | Register</title>
     <link rel="stylesheet" href="./css/style.css">
     <script src="https://kit.fontawesome.com/3637a395ce.js" crossorigin="anonymous"></script>
     <link rel="icon" href="./images/logo.png" type="image/x-icon">
</head>
<body>
     <div class="hero">
          <div class="hero-img">
               <img src="./images/register.svg" alt="">
          </div>
          <div class="hero-login">
               <div class="wrapper">
                    <section class="form signup">
                         <header>ChatStrym <span>|</span> Register</header>
                         <form action="#">
                              <div class="error-txt"></div>
                              <div class="name-details">
                                   <div class="field input">
                                        <label>First Name</label>
                                        <input type="text" name="fname" placeholder="First Name" required>
                                   </div>
                                   <div class="field input">
                                        <label>Last Name</label>
                                        <input type="text" name="lname" placeholder="Last Name" required>
                                   </div>
                              </div>
                              <div class="field input">
                                   <label>Email</label>
                                   <input type="email" name="email" placeholder="Enter Your Email Address" required>
                              </div>
                              <div class="field input">
                                   <label>Password</label>
                                   <input type="password" name="pswrd" placeholder="Enter New Password" required>
                                   <i class="fas fa-eye"></i>
                              </div>
                              <div class="field button">
                                   <input type="submit" value="&#xf0e0;  Signup With Email">
                              </div>
                              <!-- <div class="field google">
                                   <input type="submit" value="&#xf1a0;  Signup With Google">
                              </div> -->
                         </form>
                         <div class="link">Already Registered? <a href="./">Login</a></div>
                    </section>
               </div>
          </div>
     </div>
     <script src="./js/pass-show.js"></script>
     <script src="../js/signup.js"></script>
</body>
</html>