<?php
$servername = "localhost";
  
  $username = "root";
  $password = "";
  $database = "throttle";
  $route = mysqli_connect($servername,$username,$password,$database); 
 
if (!$route){
        //die
die('Could not connect: ' .
mysqli_connect_error());
}

  ?>