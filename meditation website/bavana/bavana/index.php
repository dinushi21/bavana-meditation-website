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
    <section class="header">
        <nav>
            <img src="image/Logo.png"></a>

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
            <img src="image/BGhome.jpg" alt="Snow" style="width:100%;height: 600px;">
            <div class="text-box">
                <h1>Meditation</h1>
                <p>STRAIGHTFORWARD AND SIMPLE (but not easy), meditation is essentially training our attention so that we can be more aware—not <br> only of our own inner workings but also of what's happening around us in the here and now.
                    Once we see clearly what's going on in the moment, we can then choose whether and how to act on what we're seeing.</p>
                <a href="about.php" class="more-btn">To Know More</a>
            </div>
        </div>

    </section>

    <!---- books -->
    <section class="Books">
        <h1>Books, CDs, and Downloads</h1>
        <p>Meditation is not about stopping thoughts,but recognizing that we are more than our thoughts and our feelings</p>
        <div class="row">
            <div class="books-col">
                <h3>Meditation For Beginners</h3>
                <p>INTEGRATED CD LEARNING<br>six guided meditation for insight,inner clarity and <br>cultivating a compassionate heart</p>
                <a href="books.php" class="more-btn">To Buy</a>
            </div>
            <div class="books-col">
                <h3>The Power Of Meditation</h3>
                <p>A 28-Day Programme For Real Happiness</p>
                <a href="books.php" class="more-btn">To Buy</a>
            </div>
            <div class="books-col">
                <h3>Marcus Aurelius - Meditations</h3>
                <p>Do not waste the remainder of<br> your life in thoughts about others,<br>when you do not require these thoughts.</p>
                <a href="books.php" class="more-btn">To Buy</a>
            </div>
        </div>
    </section>
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