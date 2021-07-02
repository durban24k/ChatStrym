<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ChatStrym | Login</title>
     <link rel="stylesheet" href="./css/style.css">
     <script src="https://kit.fontawesome.com/3637a395ce.js" crossorigin="anonymous"></script>
     <link rel="icon" href="./images/logo.png" type="image/x-icon">
</head>
<body>
     <div class="hero">
          <div class="hero-img">
               <img src="./images/login.svg" alt="">
          </div>
          <div class="hero-login">
               <div class="wrapper">
                    <section class="form login">
                         <header>ChatStrym <span>|</span> Login</header>
                         <form action="#">
                              <div class="error-txt">This is an error message!!</div>
                              <div class="field input">
                                   <label>Email</label>
                                   <input type="email" name="email" placeholder="Enter Your Email Address">
                              </div>
                              <div class="field input">
                                   <label>Password</label>
                                   <input type="password" name="password" placeholder="Enter Your Password">
                                   <i class="fas fa-eye"></i>
                              </div>
                              <div class="field button">
                                   <input type="submit" value="&#xf0e0;  Login With Email">
                              </div>
                              <div class="field forgot-pass">
                                   <a href="#">Forgot Password?</a>
                              </div>
                              <div class="field google">
                                   <input type="submit" value="&#xf1a0;  Login With Google">
                              </div>
                         </form>
                         <div class="link">Not Yet Registered? <a href="./register.php">Signup Now</a></div>
                    </section>
               </div>
          </div>
     </div>
     <script src="./js/pass-show.js"></script>
</body>
</html>