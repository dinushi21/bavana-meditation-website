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
                <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div>
            <img src="image/BGcontact.jpg" alt="Snow" style="width:100%;height: 600px;">
            <div class="text-box">
                <h1>Contact Us</h1>
                <p>We'd love to hear from you! Whether you have questions, feedback, or just want to say hello, don't hesitate to reach out.</p>
            </div>
        </div>

        <!-- contact-->
        <section class="contact">
            <div class="content">
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i> </div>
                        <div class text="text">
                            <h2>Address</h2>
                            <p>6-18 high street, <br> bangor,<br> LL651NP</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i> </div>
                        <div class text="text">
                            <h2>Email</h2>
                            <p>meditationb24@gmail.com</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i> </div>
                        <div class text="text">
                            <h2>Phone Number</h2>
                            <p> 555 555 5555</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <?php
                    // Check if the form is submitted
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Check if all required fields are filled
                        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];

                            // Database connection parameters
                            include 'connect.php';

                            // Prepare SQL statement to insert data into the contact table
                            $sql = "INSERT INTO contact_us (name, email, message) VALUES ('$name', '$email', '$message')";

                            if ($conn->query($sql) === TRUE) {
                                echo "Message sent successfully!";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }

                            // Close connection
                            $conn->close();
                        } else {
                            echo "Please fill in all required fields.";
                        }
                    }
                    ?>
                    <form action="" method="POST">
                        <h2>Send Message</h2>
                        <input type="hidden" name="access_key" value="a2d4bda0-923c-4297-8052-e17ba57578cb">
                        <div class="inputBox">
                            <input type="text" name="name" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="email" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required" name="message"></textarea>
                            <span>Type your Message....</span>
                        </div>
                        <div class="inputBox">
                            <button type="submit"> submit </button>
                        </div>
                    </form>

                </div>
            </div>
        </section>
</body>

</html>