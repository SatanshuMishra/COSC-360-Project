<?php 
  session_start();
  if(isset($_SESSION["uid"])){
    header("location: ../index.php?error=alreadyloggedin");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/logoDarkBlue.png">
  <!-- EXTERNAL CSS -->
  <link rel="stylesheet" href="css/login.css">
  <!-- EXTERNAL SCRIPTS -->
  <script src="https://kit.fontawesome.com/ec7e0e3eb8.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.js"
integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
  <script src="js/login.js"></script>
  <title>Login In</title>
</head>
<body>

  <?php include_once 'components/navigation-bar-no-search.php'; ?>

  <div class="container">
    <div class="image-container">
      <img id="login-illustration" src="images/login-illustration.svg" alt="">
    </div>
    <div class="form-container">
      <h1>Log In</h1>
      <form id="loginForm" action="scripts/login-script.php" method="post">
        <label id="usernameLabel" for="username">Username</label><br>
        <input type="text" name="username" id="username" required oninvalid="this.setCustomValidity('Please enter a username.')"
       oninput="setCustomValidity('')"><br>
        <label id="passLabel" for="password">Password</label><br>
        <input type="text" name="password" id="password" required oninvalid="this.setCustomValidity('Please enter your password.')"
       oninput="setCustomValidity('')">
        <div class="buttons-container">
          <div class="sign-up-btn-div">
            <label id="signupLabel">Don't have an account? Sign Up.</label>
            <a href="./signup.php">
              <button type="button">
                Sign Up
              </button>
            </a>
          </div>
          <button type="submit" name="submit">
            Sign In
          </button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>