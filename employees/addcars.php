<?php
include("../database/user_route.php");
$added = FALSE;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($route, $_POST['name']);
        $model = mysqli_real_escape_string($route, $_POST['model']);
        $description = mysqli_real_escape_string($route, $_POST['descp']);
        $capacity = mysqli_real_escape_string($route, $_POST['capacity']);
        $price = mysqli_real_escape_string($route, $_POST['rate']);
        $addcar = "INSERT INTO `cars`(CName,CModel,Description,Capacity,Price) 
        VALUES ('$name','$model','$description','$capacity','$price')";
        $result = mysqli_query($route, $addcar);
        if ($result) {

            $added = TRUE;
        } else {
            $added = FALSE;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees | ADD CARS |</title>
    <style>
        .main {
            text-align: center;
            position: relative;
            top: 4vw;

        }

        .main h1 {
            color: orange;
            font-size: 4vw;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .main h2 {
            color: black;
            font-size: 2vw;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .actions {
            text-align: center;
            position: relative;
            top: 7vw;
        }

        form {
            position: relative;
            top: 2vw;
            text-align: center;
        }

        .added {
            text-align: center;

        }

        .added h1 {
            color: orange;
            font-size: 2vw;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>

<body>
    <div class="main">
        <a href="addcars.php"><h1>T H R O T T L E </h1></a>
        <h2>EMPLOYEES SECTION</h2>
    </div>

    <div class="actions">
        <h1>ADD CARS</h1>
        <?php
        if ($added) {
            echo '
          <div class="added">
          <h1>Car is added to THROTTLE Inventory</h1>
          </div> ';
        }
        ?>
        <form action="" method="post">
            <!-- <label for="cars">Car Name</label> -->
            <input type="text" name="name" required placeholder="Name">
            <input type="text" name="model" required placeholder="Model">
            <input type="text" name="descp" required placeholder="Description">
            <input type="text" name="capacity" required placeholder="Capacity">
            <input type="text" name="rate" required placeholder="Rate">
            <br></br>
            <input type="submit" name="submit" value="Add Car">
        </form>
    </div>

</body>

</html>