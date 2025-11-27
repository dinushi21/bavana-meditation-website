<?php
session_start();
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Meditation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&family=Raleway:wght@300&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            text-align: center;
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header,
        .modal-footer {
            padding: 10px;
        }

        .modal-header {
            background-color: #5cb85c;
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .modal-footer {
            background-color: #5cb85c;
            color: white;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
    </style>
</head>

<body>
    <section class="about-header">
        <nav>
            <a href="index.php"><img src="image/Logo.png" alt="Logo"></a>
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
            <img src="image/BGlogin.jpg" alt="Snow" style="width:100%;">
            <div class="text-box">
                <h1>Unlock Your World, Safely.</h1>
            </div>
        </div>
    </section>
    <div class="login">

        <div class="form-box">
            <p style="text-align: center; font-size:14px;">
                <?php
                $registration_success = false;

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['register'])) {
                        // Registration form data
                        $name = $_POST['Name'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $repassword = $_POST['repassword'];

                        if ($password !== $repassword) {
                            echo "Passwords do not match!";
                        } else {
                            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                            $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
                            if ($conn->query($sql) === TRUE) {
                                $registration_success = true;
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        }
                    } elseif (isset($_POST['login'])) {
                        // Login form data
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $sql = "SELECT * FROM users WHERE email='$email'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $user = $result->fetch_assoc();
                            if (password_verify($password, $user['password'])) {
                                $_SESSION['loggedin'] = true;
                                $_SESSION['username'] = $user['name'];
                                header("Location: index.php");
                                exit();
                            } else {
                                echo "Invalid password!";
                            }
                        } else {
                            echo "No user found with that email!";
                        }
                    }
                }

                $conn->close();
                ?>
            </p>
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="signin()">Sign Up</button>
            </div>
            <form id="login" class="input-group" method="post" action="login.php">
                <input type="text" class="input-field" placeholder="Email Id" required="required" name="email">
                <input type="password" class="input-field" placeholder="Enter Password" required="required" name="password">
                <input type="checkbox" class="checkbox"><span>Remember Password</span>
                <button type="submit" class="submit-btn" name="login">Log In</button>
            </form>
            <form id="signin" class="input-group" method="post" action="login.php">
                <input type="text" class="input-field" placeholder="Name" required="required" name="Name">
                <input type="email" class="input-field" placeholder="Email Id" required="required" name="email">
                <input type="password" class="input-field" placeholder="Enter Password" required="required" name="password">
                <input type="password" class="input-field" placeholder="Confirm Password" required="required" name="repassword">
                <input type="checkbox" required class="checkbox"><span>I Agree To The Terms And Conditions</span>
                <button type="submit" class="submit-btn" name="register">Sign Up</button>
            </form>
        </div>
    </div>

    <?php if ($registration_success) : ?>
        <!-- Modal -->
        <div id="successModal" class="modal" style="display:block;">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <h2>Success!</h2>
                </div>
                <div class="modal-body">
                    <p>Registration successful!</p>
                </div>
                <div class="modal-footer">
                    <button onclick="closeModal()">OK</button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("signin");
        var z = document.getElementById("btn");

        function signin() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }

        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }

        function closeModal() {
            var modal = document.getElementById("successModal");
            modal.style.display = "none";
            window.location.href = 'index.php';
        }

        window.onclick = function(event) {
            var modal = document.getElementById("successModal");
            if (event.target == modal) {
                modal.style.display = "none";
                window.location.href = 'index.php';
            }
        }
    </script>
</body>

</html>