<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="loginpage.css">
</head>

<body>
  <div class="container" id="signup" style="display: none;">
    <h1 form-title>Sign Up</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <input type="text" name="fName" id="fName" placeholder="Enter Your First Name" required>
        <label for="fName">First Name</label>
      </div>
      <div class="input-group">
        <input type="text" name="lName" id="lName" placeholder="Enter Your Last Name" required>
        <label for="LName">Last Name</label>
      </div>
      <div class="input-group">
        <input type="email" name="email" id="email" placeholder="Your Email" required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <input type="password" id="password" placeholder="password" required>
        <label for="password">Password</label>
      </div>
      <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <p class="or">--------or--------</p>
    <div class="links">
      <p>Already have account?</p>
      <button id="signInButton">Sign Up</button>
    </div>
  </div>

  <div class="container" id="signIn"> 
    <h1 form-title>Sign In</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <input type="email" name="email" id="email" placeholder="Your Email" required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <input type="password" id="password" placeholder="password" required>
        <label for="password">Password</label>
      </div>
      <p class="recover">
        <a href="#">Recover Password</a>
      </p>
      <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>

    <p class="or">--------or--------</p>
    <div class="links">
      <p>Don't have account?</p>
      <button id="signUpButton">Sign Up</button>
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>