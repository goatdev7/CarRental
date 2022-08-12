<?php
include ("../database/user_route.php");
$data="SELECT * FROM `orders`";
$run=mysqli_query($route,$data);
$order=mysqli_fetch_array($run);
$car=$order['Car'];
$days=$order['Days'];
$price="SELECT Price FROM `cars` WHERE  CModel='$car' OR CName='$car' ";
$sqlrun=mysqli_query($route,$price);
$rentPrice=mysqli_fetch_array($sqlrun);
$total=$days*$rentPrice[0];

if(isset($_POST['close'])){
    $invoice="INSERT INTO `bill`(Car,Days,Price) 
    VALUES ('$car','$days','$rentPrice[0]')";
    mysqli_query($route,$invoice);
    $orderempty="DELETE  FROM `orders` WHERE Car='$car'";
    mysqli_query($route,$orderempty);
    header('location: ../index.php');
}
?>