<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/logoDarkBlue.png">
  <!-- EXTERNAL CSS -->
  <link rel="stylesheet" href="css/signup.css">
  <!-- EXTERNAL SCRIPTS -->
  <script src="https://kit.fontawesome.com/ec7e0e3eb8.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.js"
integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
  <script src="js/signup.js"></script>
  <title>Sign Up</title>
</head>
<body>
  <?php include 'components/navigation-bar.php'; ?>
  <div class="container">
    <div class="image-container">
      <h1>Welcome to the <br> Home of Discussions</h1>
      <img id="login-illustration" src="images/sign-up-illustration.svg" alt="">
    </div>
    <div class="form-container">
      <h1>Sign Up</h1>
      <form id="signupForm" action="#" method="post">
        <label id="firstNameLabel" for="firstName">First Name</label><br>
        <input type="text" name="" id="firstName"><br>
        <label id="lastNameLabel" for="lastName">Last Name</label><br>
        <input type="text" name="" id="lastName">
        <label id="usernameLabel" for="username">Username*</label><br>
        <input type="text" name="" id="username" required><br>
        <label id="passLabel" for="password">Password*</label><br>
        <input type="text" name="" id="password" required><br>
        <div class="terms-checkbox">
          <input type="checkbox" name="agreeToTerms" id="agreeToTerms">
          <label id="termsLabel" for="username"><a href="#">Agree to Terms and Conditons</a>&nbsp;<sup><i class="fa-solid fa-arrow-up-right-from-square"></i> </sup></label>
        </div>
        
        <div class="buttons-container">
          <div class="log-in-btn-div">
            <label id="loginLabel">Already have an account? Sign In.</label>
            <a href="./login.php">
              <button type="button">
                Sign In
              </button>
            </a>
          </div>
            <button type="submit">
              Sign Up
            </button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>