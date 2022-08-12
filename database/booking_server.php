<?php
include ("user_route.php");
$message=FALSE;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
    {
    $car=mysqli_real_escape_string($route, $_POST['cars']);
    $days=mysqli_real_escape_string($route, $_POST['days']);
    $address=mysqli_real_escape_string($route, $_POST['address']);
    $sqlo="INSERT INTO `orders` (Car,Days) 
    VALUES ('$car','$days')";
    $result=mysqli_query($route,$sqlo);
    if($result){
        $message=TRUE;
    }
    else{
        $message=FALSE;
    }
    }
    else{
    $name=mysqli_real_escape_string($route, $_POST['fullname']);
    $contact=mysqli_real_escape_string($route, $_POST['phoneno']);
    $car=mysqli_real_escape_string($route, $_POST['cars']);
    $days=mysqli_real_escape_string($route, $_POST['days']);
    $address=mysqli_real_escape_string($route, $_POST['address']);
    $sql="INSERT INTO `guests`(Name,Contact,Address) 
    VALUES ('$name','$contact','$address')";
    mysqli_query($route,$sql);
    $sqlo="INSERT INTO `orders` (Car,Days) 
    VALUES ('$car','$days')";
    
    $result=mysqli_query($route,$sqlo);
    if($result){
        $message=TRUE;
    }
    else{
        $message=FALSE;
    }
    }
    

}
