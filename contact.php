<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="sub-header">
            <nav>
                <a href="index.php"> <img src="images/logo.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="">PORTFOLIO</a></li>
                        <li><a href="">BLOG</a></li>
                        <li><a href="">BLOOD BANK</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            <h1>CONTACT ME</h1>
    </section>
<!------about me content------>
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7299.2641000097055!2d90.4127929750428!3d23.831679838197292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65e78f46ee1%3A0x3e009fd37c89634f!2z4Kao4Ka_4KaV4KeB4Kae4KeN4KacIOCnqCwg4Kai4Ka-4KaV4Ka-!5e0!3m2!1sbn!2sbd!4v1634940187818!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </section>
    <section class="contact-me">
        <div class="row">
            <div class="contact-col">
                <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>House-12, Road-12, Nikunja-2</h5>
                    <p>Khilkhet, Dhaka-1229</p>
                </span>
                </div>
                <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>+880 1793748974</h5>
                    <p>My Contact Number</p>
                </span>
                </div>
                <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>mamunur.alex.cse@gmail.com</h5>
                    <p>Send your query</p>
                </span>
                </div>
            </div>

            <div class="contact-col">
                <form action="form-handler.php" method="post">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Your email address" required>
                    <input type="text" name="subject" placeholder="Your Subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn red-btn">Send Message</button>

                </form>

            </div>
        </div>
    </section>

<!---Footer--->
    <section class="footer">
        <h4>Find Me</h4>
        <div class="icons">
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-github"></i>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
        </div>
    </section>







<!---JavaScript For Responsive--->
    <script>
        var navLinks = document.getElementById("navLinks");
        
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>

</body>
</html>