<?php
//making connection with server
$server="localhost";
$username="root";
$password="";
$connection=mysqli_connect($server,$username,$password);
if ($connection){
    echo "Connected"; 
}
else{
    die("There was some error in making connection:". mysqli_connect_error());
}
// Create database
$db="CREATE DATABASE Throttle";
if(mysqli_query($connection,$db)){
    echo "Successfully DB Created";
}
else{
    echo "<br>"."Error Occurred Creating The Database.";
    mysqli_connect_error();
}
//Tables of our database
$admin="CREATE TABLE `Throttle`.`admin` (`id` INT NOT NULL AUTO_INCREMENT,`username` VARCHAR(200) NOT NULL,`password` VARCHAR(200) NULL DEFAULT NULL,PRIMARY KEY(`id`))ENGINE=InnoDB";
if(mysqli_query($connection,$admin)){
    echo "<br>"."Admin Table Successfully Created.";
}
else{
    echo "<br>"."Error Occurred Creating Admin Table.";
};
$addadmin="INSERT INTO `Throttle`.`admin`(`username`,`password`)VALUES('admin','admin')";
if(mysqli_query($connection,$addadmin)){
    echo "<br>"."Values added in Admin Successfully.";
}
else{
    echo "<br>"."Error Occurred While adding Admin Values.";
};
//User table
$user="CREATE TABLE `Throttle`.`Users`(`id` INT NOT NULL AUTO_INCREMENT,`Firstname` VARCHAR(200),`Lastname` VARCHAR(200),`Username` VARCHAR(200) NOT NULL,`Password` VARCHAR(200) NULL DEFAULT NULL,PRIMARY KEY(`id`)) ENGINE=InnoDB";
if(mysqli_query($connection,$user)){
    echo "<br>"."User Table Successfully Created.";
}
else{
    echo "<br>"."Error Occurred While Creating User Table.";
};
//Cars tables
$car="CREATE TABLE `Throttle`.`Cars`(`id` INT NOT NULL AUTO_INCREMENT,`CName` VARCHAR(200) NOT NULL,`CModel` VARCHAR(200),`Description` VARCHAR(200) NULL,`Capacity` VARCHAR (200) NULL,`Price` INT NOT NULL,PRIMARY KEY(`id`)) ENGINE=InnoDB";
if(mysqli_query($connection,$car)){
    echo "<br>"."Cars Table Created.";
}
else{
    echo "<br>"."Error Occurred while Creating Cars Table.";
};
// orders
$order="CREATE TABLE `Throttle`.`Orders`(`id` INT NOT NULL AUTO_INCREMENT,`Car` VARCHAR(200) NOT NULL,`Days` INT NOT NULL,`Date` TIMESTAMP NOT NULL,PRIMARY KEY(`id`))ENGINE=InnoDB";
if(mysqli_query($connection,$order)){
    echo "<br>"."Orders Table Successfully Created.";
}
else{
    echo "<br>"."Error Occurred While Creating Order Table.";
};
$bill="CREATE TABLE `Throttle`.`Bill`(`id` INT NOT NULL AUTO_INCREMENT,`Car`VARCHAR(200) NOT NULL,`Days`INT NOT NULL,`Price` INT NOT NULL,PRIMARY KEY(`id`)) ENGINE=InnoDB";
if(mysqli_query($connection,$bill)){
    echo "<br>"."Bill Table Successfully Created.";
}
else{
    echo "<br>"."Error Occurred While Creating Bill Table.";
};
$delivery="CREATE TABLE `Throttle`.`guests`(`id` INT NOT NULL AUTO_INCREMENT,`Name`VARCHAR(200) NOT NULL,`Contact`VARCHAR(200) NOT NULL,`Address` VARCHAR(200) NOT NULL,PRIMARY KEY(`id`)) ENGINE=InnoDB";
if(mysqli_query($connection,$delivery)){
    echo "<br>"."Guests Table Successfully Created.";
}
else{
    echo "<br>"."Error Occurred While Creating Guests Table.";
};

?>