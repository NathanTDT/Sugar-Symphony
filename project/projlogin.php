<!-- projlogin.html -->
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Login Form</title>
      <link rel="stylesheet" href="projlogincss.css">
      
   </head>
   <body>
      <div class="center">
         <div class="container">
            
            <div class="text">
               Login
            </div>
            <form action="verifylogin.php" method="post" target="_parent">
               <div class="data">
                  <label>Email</label>
                  <input type="text" name="email" class="email" id="email" required>
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password" name="password" class="password" id="password" required>
               </div>
               <div class="forgot-pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="remember">
                  <br><input type="checkbox" name="remember" id="remember">  Remember Me
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit" name="loginbtn" class="loginbtn" onclick="loginsubmit()">login</button>
               </div>
               <div class="signup-link"> 
                  Not a member? <a href="http://localhost/project/projectsignup.php" target="_blank" >Signup now</a>
               </div>
            </form>
         </div>
      </div>
      <script src="projloginjava.js"></script>
      
   </body>
</html>

