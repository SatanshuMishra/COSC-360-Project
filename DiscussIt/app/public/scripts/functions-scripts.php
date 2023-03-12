<?php 
// CHECK IF VALID USERNAME
function invalidUsername($username) {
  $result = true;
  if(preg_match("/^[a-zA-Z0-9]*$/", $username)){
    $result = false;
  }
  return $result;
}

// CHECK IF THE USERNAME IS ALREADY IN USE
function usernameExists($conn, $username){
  $sql = "SELECT * FROM user WHERE username = ?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfaileduniqueusername");
    exit();
  }

  // SET DATA INTO PREPARED STATEMENT
  mysqli_stmt_bind_param($stmt, "s", $username);

  // EXECUTE $STMT PREPARED STATEMENT
  mysqli_stmt_execute($stmt);

  // GET RESULT FROM $STMT PREPARED STATEMENT
  $results = mysqli_stmt_get_result($stmt);
  if($row = mysqli_fetch_assoc($results)){
    // RETURN DATA FROM PREPARED STATEMENT
    return $row;
  }
  else {
    $results = false;
    return $results;
  }

  // CLOSE STATEMENT
  mysqli_stmt_close($stmt);
}

function createUser($conn, $firstName, $lastName, $uname, $pwd){
  $sql = "INSERT INTO user (firstName, lastName, username, password, demeritPoints, userKey) VALUES (?, ?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailedcreateuser");
    exit();
  }

  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

  $demeritPoints = 0;
  $userKey = "1111-1111-1111-1111";
  // SET DATA INTO PREPARED STATEMENT
  mysqli_stmt_bind_param($stmt, "ssssis", $firstName, $lastName, $uname, $hashedPwd, $demeritPoints, $userKey);

  // EXECUTE $STMT PREPARED STATEMENT
  mysqli_stmt_execute($stmt);

  // CLOSE STATEMENT
  mysqli_stmt_close($stmt);
  
  // header("location: ../index.php?error=none");
  loginUser($conn, $uname, $pwd);
  // exit();
}

function loginUser($conn, $uname, $pwd){
  $unameExists = usernameExists($conn, $uname);
  
  if($unameExists === false){
    header("location: ../login.php?error=invalidusernameorpassword");
    exit();
  }

  $pwdHashed = $unameExists["password"];
  $checkPwd = password_verify($pwd, $pwdHashed);

  if($checkPwd === false){
    header("location: ../login.php?error=invalidusernameorpassword");
    exit();
  }
  else if($checkPwd === true){
    session_start();
    $_SESSION["uid"] = $unameExists["id"];
    $_SESSION["uname"] = $unameExists["username"];
    header("location: ../index.php?error=loginsuccessful");
    exit();
  }
}
?>