<?php
include "../database/user_route.php";
session_start();
if(isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: fleet.php');
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/stylingfiles/fleet.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <style>
            <?php
            include ("../assets/stylingfiles/fleet.css");
            ?>

        </style>
            <title>T H R O T T L E | FLEET</title>
    </head>

    <body>
        <!-- <header>
            <div class="nav ">
                <div class="inner_nav ">
                    <ul class="lists flex-container">
                        <li><a href="/">HOME</a></li>
                        <li><a href="#footer">CONTACT</a></li>
                        <li><a href="#">FLEET</a></li>
                        <li><a href="./login.php">LOGIN</a></li>
                        <li><a href="./register.php">REGISTER</a></li>

                    </ul>
                </div>
                <div class="nav_img"><img src="../assets/images/carback.jpg" alt=""></div>
            </div>
                <h1 class="nav_heading">TH<span style="color: orange;">R</span>OTLE</h1>
        </header> -->
        <?php
    if( !isset($_SESSION['username']) && empty($_SESSION['username']) )
    {
        echo '<header>
        <div class="nav ">
            <div class="inner_nav ">
                <ul class="lists flex-container">
                <li><a href="/">HOME</a></li>
                <li><a href="#footer">CONTACT</a></li>
                <li><a href="#">FLEET</a></li>
                <li><a href="./login.php">LOGIN</a></li>
                <li><a href="./register.php">REGISTER</a></li>
            </ul>
            </div>
            <div class="nav_img"><img src="../assets/images/carback.jpg" alt=""></div>
            </div>
        <h1 class="nav_heading">TH<span style="color: orange;">R</span>OTLE</h1>
    </header>';
    }
    else{
        echo '<header>
        <div class="nav ">
            <div class="inner_nav ">
                <ul class="lists flex-container">
                    <li><a href="/">HOME</a></li>
                    <li><a href="#footer">CONTACT</a></li>
                    <li><a href="#">FLEET</a></li>
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
            <h1 style="display: flex;justify-content:center;letter-spacing:3vw;">FL<span style="color: orange;">EE</span>T</h1>
            <div class="main">
                
                <div class="inner-div">
                    <div class="img1">
                        <img src="../assets/images/nissan.jpg" width="60%" alt="nissan maxima">
                        <h4>Nissan Maxima</h4>
                        <p >Lorem ipsum dolor sit. 2022</p>
                        <a href="./booking_page.php"><button>Book Now</button></a>
                    </div>
                    <div class="img2">
                        <img src="../assets/images/camry.webp" width="60%" alt="">
                        <h4>Toyota Camry</h4>
                        <p >Lorem ipsum dolor sit. 2022</p>
                        <a href="./booking_page.php"><button>Book Now</button></a>
                    </div>
                </div>
                <div class="inner-div-2">
                    <div class="img1">
                        <img src="../assets/images/mazda.webp" width="60%" alt="car">
                        <h4>Mazda 6</h4>
                        <p >Lorem ipsum dolor sit. 2022</p>
                        <a href="./booking_page.php"><button>Book Now</button></a>
                    </div>
                    <div class="img2">
                        <img src="../assets/images/cheverlot.jpg" width="60%" alt="">
                        <h4>Cheverlot</h4>
                        <p >Lorem ipsum dolor sit. 2022</p>
                        <a href="./booking_page.php"><button>Book Now</button></a>
                    </div>
                </div>
                <div class="inner-div-3">
                    <div class="img1">
                        <img src="../assets/images/civic.webp" width="60%" alt="car">
                        <h4>Honda Civic</h4>
                        <p >Lorem ipsum dolor sit. 2022</p>
                        <a href="./booking_page.php"><button>Book Now</button></a>
                    </div>
                    <div class="img2">
                        <img src="../assets/images/maserati.jpg" width="60%" alt="">
                        <h4>Maserati</h4>
                        <p >Lorem ipsum dolor sit. 2022</p>
                        <a href="./booking_page.php"><button>Book Now</button></a>
                    </div>
                </div>
                <div class="inner-div-4">
                    <div class="img1">
                        <img src="../assets/images/mustang.jpg" width="60%" alt="car">
                        <h4>Ford Mustang</h4>
                        <p >Lorem ipsum dolor sit. 2022</p>
                        <a href="./booking_page.php"><button>Book Now</button></a>
                    </div>
                    <div class="img2">
                        <img src="../assets/images/charger.webp" width="60%" alt="">
                        <h4>Dodge Charger</h4>
                        <p >Lorem ipsum dolor sit. 2022</p>
                        <a href="./booking_page.php"><button>Book Now</button></a>
                    </div>
                </div>
            </div>
            <div class="bookbtn">
                <a href="./booking_page.php"><button>BOOK A CAR</button></a>
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
                <a href="https://whatsapp.com"><img src="../assets/images/whatsapp.svg"  width="41.8%" alt=""></a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</html>