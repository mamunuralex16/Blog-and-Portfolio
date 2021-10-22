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
            <h1>ABOUT ME</h1>
    </section>
<!------about me content------>
    <div class="section group">
        <div class="col span_1_of_2">
            <img src="images/user3.jpg" class="img" alt="Loading, Please Wait"><br><br>
            <p> MAMUNUR RASHID ALEX</p>
        </div>
        <div class="col span_1_of_2">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of 
                type and scrambled it to make a type specimen book. It has survived not only five centuries, but also 
                the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop 
                publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy 
                text of the printing and typesetting industry. Lorem Ipsum has been 
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of 
                type and scrambled it to make a type specimen book. It has survived not only five centuries, but also 
                the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop 
                publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>

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