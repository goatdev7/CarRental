<?php
// session_start();
// connect to the database
include ("user_route.php");
$error_already=FALSE;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  // receiving the input values from the registration form
  $fname = mysqli_real_escape_string($route, $_POST['fname']);
  $lname = mysqli_real_escape_string($route, $_POST['lname']);
  $username = mysqli_real_escape_string($route, $_POST['username']);
  $password = mysqli_real_escape_string($route, $_POST['password']);
  // first check the database to make sure 
  // a user does not already exist with the same username
  $user_already = "SELECT * FROM `users` WHERE Username='$username' LIMIT 1";
  $result = mysqli_query($route, $user_already);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if row found means user already exists
    if ($user['Username'] === $username) {

      $error_already=TRUE;
      $message="Username already exists";
    }
    else{
        $error_already=FALSE;
    }
  }
else{
    $add_user = "INSERT INTO `users` (Firstname,Lastname,Username, Password) 
              VALUES('$fname','$lname','$username', '$password')";
    mysqli_query($route, $add_user);
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: ../index.php');
}
  }

