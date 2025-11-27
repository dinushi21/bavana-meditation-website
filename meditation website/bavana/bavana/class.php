<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width,initial-scale=1.0">
    <title> Meditation </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&family=Raleway:wght@300&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="about-header">
        <nav>
            <a href="index.php"><img src="image/Logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="books.php">BOOKS</a></li>
                    <li><a href="class.php">CLASS</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) : ?>
                        <li><a href="logout.php">LOGOUT</a></li>
                    <?php else : ?>
                        <li><a href="login.php">LOGIN</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div>
            <img src="image/BGclass.jpg" alt="Snow" style="width:100%;height: 600px;">
            <div class="text-box">
                <h1>Video Gallery</h1>
                <p>Dive into a Symphony of Sight and Sound.</p>
            </div>
        </div>



        <div class="class-row">
            <div class="class-col">
                <div class="feature-img">
                    <img src="image\1.png" width="100%">
                    <img src="image\play.png" class="play-btn" onclick="playVideo('video/1.MP4')">
                </div>
            </div>
            <div class="class-col">
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="image/2.png">
                        <img src="image\play.png" class="play-btn" onclick="playVideo('video/2.MP4')">
                    </div>
                    <p>A Journey to Inner Peace</p>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="image/3.png">
                        <img src="image\play.png" class="play-btn" onclick="playVideo('video/3.MP4')">
                    </div>
                    <p>Accessing the Ancient Wisdom of the Breath</p>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="image/4.png">
                        <img src="image\play.png" class="play-btn" onclick="playVideo('video/4.MP4')">
                    </div>
                    <p>Become the Ruler of Your Inner Kingdom</p>
                </div>
            </div>
        </div>
        <div class="Video-player" id="videoplayer">
            <video width="100%" controls autoplay id="myvideo">
                <source src="video/1.MP4" type="video/mp4">
            </video>
            <img src="image\close.png" class="close-btn" onclick="stopvideo()">
        </div>
        <a href="https://www.youtube.com/@GreatMeditation" class="class-btn">To Know More</a>

        <script>
            var videoplayer = document.getElementById("videoplayer");
            var myvideo = document.getElementById("myvideo");

            function stopvideo() {
                myvideo.pause();
                myvideo.src = "";
                videoplayer.style.display = "none";
            }

            function playVideo(file) {
                myvideo.src = file;
                videoplayer.style.display = "block";
                myvideo.play();
            }
        </script>

        <!---- contact  -->
        <section class="cta">
            <h1>For More Information Contact Us</h1>
            <a href="contact.php" class="more-btn">CONTACT US</a>
        </section>

        <script>
            var navLinks = document.getElementById("navLinks");

            function showMenu() {
                navLinks.style.right = "0";
            }

            function hideMenu() {
                navLinks.style.right = "-200px";
            }
        </script>

</body>

</html>