<?php
include ("user_route.php");
$error=FALSE;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  $username = mysqli_real_escape_string($route, $_POST['username']);
  $password = mysqli_real_escape_string($route, $_POST['password']);

//   if (empty($username)) {
//   	array_push($errors, "Username is required");
//   }
//   if (empty($password)) {
//   	array_push($errors, "Password is required");
//   }
    $login = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($route, $login);
  	if (mysqli_num_rows($results) == 1) {
        session_start();
        $run=mysqli_fetch_assoc($results);
        $_SESSION['login']=true;
        $_SESSION['id']=$run['id'];
        $_SESSION['success'] = "You are now logged in";
        $_SESSION['username']=$username;
        if (isset($_SESSION['username'])){
            header('location: ../index.php');
        }
    //     ses
  	//   $_SESSION['username'] = $username;
  	//   header('location: ../index.php');
    //   $error=FALSE;
  	}else {
  		$error=TRUE;
        $message= "Wrong username OR password Entered";
  	}
  }

?>