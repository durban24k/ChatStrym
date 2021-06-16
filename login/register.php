<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ChatStrym | Signup</title>
     <link rel="stylesheet" href="./css/style.css">
     <script src="https://kit.fontawesome.com/3637a395ce.js" crossorigin="anonymous"></script>
</head>
<body>
     <div class="wrapper">
          <section class="form signup">
               <header>ChatStrym <span>|</span> Sign Up</header>
               <form action="#">
                    <div class="error-txt">This is an error message!!</div>
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
                         <input type="submit" value="Register">
                    </div>
               </form>
               <div class="link">Already Registered? <a href="./">Login</a></div>
          </section>
     </div>
     <script src="./js/pass-show.js"></script>
     <script src="../js/signup.js"></script>
</body>
</html>