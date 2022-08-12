<?php
include "../database/user_route.php";
session_start();
if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: booking_page.php');
}
$querry = "SELECT CName, CModel,Price FROM `cars`";
$result = mysqli_query($route, $querry);
if (mysqli_num_rows($result) > 0) {
    $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
include ("../database/booking_server.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/stylingfiles/booking_page.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        <?php
        include("../assets/stylingfiles/booking_page.css");
        ?>
    </style>
    <title>T H R O T T L E | BOOKING</title>
</head>

<body>
    <?php
    if (!isset($_SESSION['username']) && empty($_SESSION['username'])) {
        echo '<header>
        <div class="nav ">
            <div class="inner_nav ">
                <ul class="lists flex-container">
                <li><a href="/">HOME</a></li>
                <li><a href="#footer">CONTACT</a></li>
                <li><a href="fleet.php">FLEET</a></li>
                <li><a href="./login.php">LOGIN</a></li>
                <li><a href="./register.php">REGISTER</a></li>
            </ul>
            </div>
            <div class="nav_img"><img src="../assets/images/carback.jpg" alt=""></div>
            </div>
        <h1 class="nav_heading">TH<span style="color: orange;">R</span>OTLE</h1>
    </header>';
    } else {
        echo '<header>
        <div class="nav ">
            <div class="inner_nav ">
                <ul class="lists flex-container">
                    <li><a href="/">HOME</a></li>
                    <li><a href="#footer">CONTACT</a></li>
                    <li><a href="fleet.php">FLEET</a></li>
                    <li><form method="post" class="logout">
                    <input type="submit" name="logout" value="LOGOUT">
                    </form></li>
                    
                </ul>
            </div>
            <div class="nav_img"><img src="../assets/images/carback.jpg" alt=""></div>
            </div>
        <h1 class="nav_heading">TH<span style="color: orange;">R</span>OTLE</h1>
    </header>';
    }
    ?>
    <section>
        <h1 style="text-align: center; letter-spacing: 2vw;font-weight: 400;font-size: 3vw;">BOOK <span style="color: orange;"> YOUR </span> CAR</h1>
        <?php
if($message){
    echo '<div class="success" id="message">
    <h2>Your Order has been Placed!.</h2>
    <a href="./bill_page.php"><button class="">Print Invoice</button></a>
    
    </div>';
}


?>
        <div class="booking">
            <div class="inner-form">
                <form method="post" class="forms" id="">
                    <?php
                    if (!isset($_SESSION['username']) && empty($_SESSION['username'])) {
                        echo '<label  class="lab-0" for="name">Full Name</label><br>
        <input type="text" name="fullname" required/>
        <br>
        <label class="lab-3" for="lab">Contact Number</label>
        <br>
        <input type="text" required placeholder="123-456-7890" name="phoneno"/>
        <br>';
                    }
                    ?>

                    <label class="lab-1" for="lab">Select a Car</label>
                    <br>
                    <input type="text" required placeholder="Enter Name or Model" list="cars" name="cars"/>
                    <datalist  required name="cars" id="cars">
                        <?php foreach ($options as $option) {
                        ?>
                            <option><?php echo $option['CName']; ?></option>
                        <?php
                        }
                        ?>
                    </datalist><br>

                    <label class="lab-2" for="days">No. of Days</label><br>
                    <input type="number" name="days" min=0 required>
                    <br>
                    <label for="addres">Delivery Address</label>
                    <br>
                    <input type="text" name="address" />
                    <br>
                    <input type="submit" name="submit" id="btn" value="BOOK">
                </form>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="options">
            <div class="inner">
                <h1>Vision</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id illo accusantium facilis tenetur quibusdam ullam dolore numquam magni ad doloribus, aliquam voluptate enim soluta omnis maiores ex deserunt tempore labore?
                </p>
            </div>
            <div class="inner2">
                <h1>About</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id illo accusantium facilis tenetur quibusdam ullam dolore numquam magni ad doloribus, aliquam voluptate enim soluta omnis maiores ex deserunt tempore labore?
                </p>
            </div>

        </div>
        <div class="phone">
            <a href="https://whatsapp.com"><img src="../assets/images/whatsapp.svg" width="41.8%" alt=""></a>
            <img src="../assets/images/talk-bubble.svg" width="2.3%" alt="chat" style="cursor:pointer;">

        </div>
        <hr>
        <div class="contacts">
            <ul>
                <li><a href="https://facebook.com">Facebook</a></li>
                <li><a href="https://instagram.com">Instagram</a></li>
                <li><a href="https://twitter.com">Twitter</a></li>
                <li><a href="https://snapchat.com">Snapchat</a></li>
            </ul>
        </div>
        <div class="copy">
            <h4>© 2022 Copyright: <span>T H R O T T L E</span></h4>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>