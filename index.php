<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  </head>
  <body>
    <div class="container" id ="signup" style="display:none;"> 
      <h1 class="form-title">Registration</h1>
      <form method="post" action="register.php">
        <!-- FIRST NAME -->
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="fName" id = "fName" placeholder="First Name" required>
          <label for="fName">First Name</label>
        </div>
        <!-- LAST NAME  -->
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="lName" id = "lName" placeholder="last Name" required>
          <label for="lName">Last Name</label>
        </div>
        <!-- TO ENTER EMAIL -->
        <div class="input-group">
          <i class="fa fas-envelope"></i>
          <input type="email" name="email" id = "email" placeholder="Email" required>
          <label for="email">Email</label>
        </div>
        <div class="input-group">
          <i class="fa fas-lock"></i>
          <input type="password" name="password" id = "password" placeholder="ENter Passwaord" required>
          <label for="password">Password</label>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp">
       
        </form> 
        <p class ="or">
          -------------or---------
        </p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
          <p>Already Have An Account ?</p>
          <button id="signInButton"> Sign In </button>
        </div>
    </div>


    <!-- SIGN UP FORM -->
    <div class="container" id ="signIn"> 
      <h1 class="form-title">Sign In </h1>
      <form method="post" action="register.php">
       
        <!-- TO ENTER EMAIL -->
        <div class="input-group">
          <i class="fa fas-envelope"></i>
          <input type="email" name="email" id = "email" placeholder="Email" required>
          <label for="email">Email</label>
        </div>
        <div class="input-group">
          <i class="fa fas-lock"></i>
          <input type="password" name="password" id = "password" placeholder="ENter Passwaord" required>
          <label for="password">Password</label>
        </div>
        <p class="recover">
          <a href="#" >Recover Password</a>
        </p>
        <input type="submit" class="btn" value="Sign In" name="signIn">
       
        </form> 
        <p class ="or">
          -------------or---------
        </p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
          <p>Don't Have An Account ?</p>
          <button id="signUpButton"> Sign Up </button>
        </div>
    </div>
    <script src="script.js"></script>  
  </body>
</html>