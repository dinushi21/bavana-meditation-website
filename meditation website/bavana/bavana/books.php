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
            <img src="image/BGbooks.jpg" alt="Snow" style="width:100%;height: 600px;">
            <div class="centered">
                <h1>Books, CDs, and Downloads</h1>
            </div>
        </div>
        <!-- books -->
        <section class="Books">
            <div class="row">
                <div class="book">
                    <img src="image/book1.jpg" alt="Book 1">
                    <h3>Meditation For Beginners</h3>
                    <p>Author: Jack Kornfield</p>
                    <p>Price: $10.77</p>
                    <a href="https://www.amazon.co.uk/Meditation-Beginners-Jack-Kornfield/dp/0553816926" class="btn">BUY NOW</a>
                </div>
                <div class="book">
                    <img src="image/book2.jpg" alt="Book 1">
                    <h3>Meditations: Marcus Aurelius</h3>
                    <p>Author: Marcus Aurelius</p>
                    <p>Price: $7.98</p>
                    <a href="https://www.amazon.co.uk/Meditations-Penguin-Classics-Marcus-Aurelius/dp/0140449337/ref=asc_df_0140449337/?tag=googshopuk-21&linkCode=df0&hvadid=310979557093&hvpos=&hvnetw=g&hvrand=15579603794796292503&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1007409&hvtargid=pla-448425242835&psc=1&mcid=b8cfa97214ce3d4db0704d0a95d164aa&th=1&psc=1" class="btn">BUY NOW</a>
                </div>
                <div class="book">
                    <img src="image/book3.webp" alt="Book 1">
                    <h3>Meditations for Every Day</h3>
                    <p>Author: Summersdale Publishers</p>
                    <p>Price: $3.00</p>
                    <a href="Meditations for Every Day" class="btn">BUY NOW</a>
                </div>

            </div>
        </section>
        <section class="Books">
            <div class="row">
                <div class="book">
                    <img src="image/book4.webp" alt="Book 1">
                    <h3>The Language of Letting Go</h3>
                    <p>Author: Hazelden Medita</p>
                    <p>Price: $7.75</p>
                    <a href="https://www.ebay.co.uk/itm/302378520039?epid=91495748&itmmeta=01HYD8QVZBMFJBERPMN550F3WH&hash=item46672a0de7:g:lF8AAOSw2iNZYmv3&itmprp=enc%3AAQAJAAAA4JsAO54hqjrRB%2BTtQpU0PNiq%2Fhr3r4X1khhcF6Y629aU6YNzldBrFvMSZPYUnABRsdfR%2FroieR%2BE0xmyEOIhjligrcMGW%2BGU0O4FaUs0fuOET%2F4Qh4F%2F2gPbfAID3IfjD6byFXUat0SyZu0%2Fp%2FAjb8ool2P%2FdA20A74uC8%2FS2NH7nMV9EIxavKwrg%2BlfrX%2BiAs5KEOwA6t4hsOyPd3WlGMwyOfqqukMBGkxEMZ0t2zoyIhgRSE5lHQTp9g8jjnuqLijMEDfXh9zJa5MWm0KASDfcn%2B3JI7G31TpJQXBe2U0C%7Ctkp%3ABFBM5L_fqPNj" class="btn">BUY NOW</a>
                </div>
                <div class="book">
                    <img src="image/book5.webp" alt="Book 1">
                    <h3>Meditation Handbook</h3>
                    <p>Author: Geshe Kelsang Gyatso</p>
                    <p>Price: $3.39</p>
                    <a href="https://www.ebay.co.uk/itm/302847044119?epid=148985659&itmmeta=01HYD8QVZFF96MGNEC3BX7P47A&hash=item4683172a17:g:2QkAAOSw7thbdW-~&itmprp=enc%3AAQAJAAAA4GowxPJJ7O2K1bUkopgb5wBTNZmKddbNYAx8TJQYCREklvzo6tuS7ppJPCdyV%2BfFN36VTmnn6pI4s4p6mEQiELuWmRQmN8p6xANo%2FBx%2BUC0vlpEy%2Bn5u2VulR4TsLpcWgLuuI5D7VYxIf3m64G8zBhN61tIPhRGbBwIJ%2B1aohQWwmamU67rc0NslZWoFCNtMOPEB4%2BKd3hUU1qPWb8k7pZE%2Fn0QEsr3QPXRieTLQZpsbhMpAkQYnrRtBeUmsMMswHTBZMWzD3fufWBMznldyCvHDrci%2BtE5iQEBrEjDXfUyS%7Ctkp%3ABFBM4sDfqPNj" class="btn">BUY NOW</a>
                </div>
                <div class="book">
                    <img src="image/book6.webp" alt="Book 1">
                    <h3>Meditation For Dummies</h3>
                    <p>Author: John Wiley & Sons Inc</p>
                    <p>Price: $3.50</p>
                    <a href="https://www.ebay.co.uk/itm/142016746858?epid=87932818&itmmeta=01HYD8QVZFTATDXC35Q1KWV0QB&hash=item2110db956a:g:D9kAAOSwqD5kna-k&itmprp=enc%3AAQAJAAAA4MeonbBW0mFns%2FPgY%2FUlRB7Byu4yQTkpEAoLxMLbTfru8SIzGvogy7aBf5Vx4M1yoOwVTxlSz%2BTk59e2FznZYOr7xYQIlb7puq9o9yTpzB5sP9QKOGNFvs9hRO9bYiIH3xc5T9Zk8kNltfUGP1ASrCl1YaITmY%2BWvBIenVHnwHYT6AYH5WnVJscMoDqaeMR%2BW4XAX5yBwaPImUSmcASbIGsd1MQ41jl%2FZ%2BiuJ0vDNXCP%2BJY0cYq0TNdQNNjiBCHlPjlmn1syZZvImbVS5b86UYnMkWCvqPXakCoADvHVRgZ8%7Ctkp%3ABFBM4sDfqPNj" class="btn">BUY NOW</a>
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