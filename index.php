<?php
include "./database/user_route.php";
session_start();
if(isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: index.php');
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/stylingfiles/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            <?php
            include ("./assets/stylingfiles/style.css");
            ?>

        </style>
            <title>T H R O T T L E |Home</title>
    </head>

    <body>
    <?php
    if( !isset($_SESSION['username']) && empty($_SESSION['username']) )
    {
        echo '<header>
        <div class="nav ">
            <div class="inner_nav ">
                <ul class="lists flex-container">
                    <li><a href="/">HOME</a></li>
                    <li><a href="#footer">CONTACT</a></li>
                    <li><a href="./client/fleet.php">FLEET</a></li>
                    <li><a href="./client/login.php">LOGIN</a></li>
                    <li><a href="./client/register.php">REGISTER</a></li>
                </ul>
            </div>
            <div class="nav_img"><img src="./assets/images/carback.jpg" alt="car"></div>
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
                    <li><a href="./client/fleet.php">FLEET</a></li>
                    <li><form method="post" class="logout">
                    <input type="submit" name="logout" value="LOGOUT">
                    </form></li>
                    
                </ul>
            </div>
            <div class="nav_img"><img src="./assets/images/carback.jpg" alt="car"></div>
        </div>
        <h1 class="nav_heading">TH<span style="color: orange;">R</span>OTLE</h1>
    </header>';
    }
    ?>
        
        <section>
            <div class="services">
                <img src="./assets/images/rent-a-car.svg" alt="car-rent" width="12%">
                <div class="ser">
                    <div class="ser-1">
                        <h1>Car Rental</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, quo, nesciunt nobis sunt
                            necessitatibus delectus magni laudantium, facilis dolore repellat praesentium. Iure minus
                            aut recusandae accusantium sequi delectus ut ex!</p>

                    </div>
                    <div class="ser-2">
                        <h1>Luxury Car rental</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quibusdam hic, rerum quasi
                            veniam vitae. Libero asperiores eum, culpa eaque earum dignissimos dolorem unde cumque.
                            Provident obcaecati sequi accusamus similique.</p>
                    </div>
                </div>
            </div>
            <div class="join">
                <h1>Join the TH<span style="color: orange;">R</span>OTTLE family</h1>
                <a href="./client/register.php" target="_blank"><button>Join Now</button></a>
            </div>
            <div class="fleet">
                <img src="./assets/images/cars.svg" width="15%" alt="">
                <div class="desc">
                    <h1>Check Our Fleet</h1>
                    <h4>We have a range of different vehicles from normal sedans to luxury SUV's. Browse now to
                        book your dream car now!
                    </h4>
                    <a href="./client/fleet.php" target="_blank"><button>Fleet Tour</button></a>

                </div>
            </div>
            <div class="testimonials">
                <h1>Tesimonials</h1>
                <div class="inner-test">
                    <div class="test1">
                        <h1>John Doe</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, repudiandae!</p>
                    </div>
                    <div class="test2">
                        <h1>John Doe</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, repudiandae!</p>
                    </div>
                    <div class="test3">
                        <h1>John Doe</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, repudiandae!</p>

                    </div>
                </div>
                <div class="book-btn">
                    <a href="./client/booking_page.php"><button>Book a Vehicle</button></a>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="options">
                <div class="inner">
                    <h1>Vision</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id illo accusantium facilis tenetur
                        quibusdam ullam dolore numquam magni ad doloribus, aliquam voluptate enim soluta omnis maiores
                        ex deserunt tempore labore?
                    </p>
                </div>
                <div class="inner2">
                    <h1>About</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id illo accusantium facilis tenetur
                        quibusdam ullam dolore numquam magni ad doloribus, aliquam voluptate enim soluta omnis maiores
                        ex deserunt tempore labore?
                    </p>
                </div>

            </div>
            <div class="phone">
                <a href="https://whatsapp.com"><img src="./assets/images/whatsapp.svg" width="41.8%" alt=""></a>

                <img src="./assets/images/talk-bubble.svg" width="2.3%" alt="chat" style="cursor:pointer;">

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