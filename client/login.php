<?php
include ("../database/login_server.php");

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/stylingfiles/login.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>T H R O T T L E | LOGIN</title>
    </head>

    <body>
        <header>
            <div class="nav ">
                <div class="inner_nav ">
                    <ul class="lists flex-container">
                        <li><a href="/">HOME</a></li>
                        <li><a href="#footer">CONTACT</a></li>
                        <li><a href="./fleet.html">FLEET</a></li>
                        <li><a href="#">LOGIN</a></li>
                        <li><a href="./register.html">REGISTER</a></li>

                    </ul>
                </div>
                <div class="nav_img"><img src="../assets/images/carback.jpg" alt=""></div>
            </div>
                <h1 class="nav_heading">TH<span style="color: orange;">R</span>OTLE</h1>
        </header>
        <?php
 if($error){
     echo'<div class="error">
     <h3>ERROR!'.$message.'</h3></div>
 ';
 }
 ?>
        <section>
            <div class="welcome">
                <h1>Welcome <span style="color: orange; padding-left:13px;">B</span>ack</h1>
            </div>
            <div class="forms">
                <div class="inner-form">
                    <form method="post" class="login-form" id="">
                        <label for="username">Username</label>
                        <br/>
                        <input type="text" name="username" required/>
                        <br>
                        <label for="pass">Password</label>
                        <br/>
                        <input type="password" required name="password"/>
                        <br></br>
                        <input type="submit" name="submit" class="submit-btn" value="LOGIN">
                        <h5 class="redirect">Don't have an account?<a href="./register.html">Hop-In</a></h5>
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