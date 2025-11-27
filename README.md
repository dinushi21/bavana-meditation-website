🌿 Bavana Meditation Website

A PHP + MySQL Meditation Web Application

This project is a meditation-focused web application built using PHP, MySQL, HTML, CSS, and vanilla JavaScript.
It includes guided content, meditation resources, a simple authentication system, and a collection of images/videos supporting the meditation experience.

🚀 Features
🧘 Guided Meditation Content

Home page with meditation introduction

Dedicated pages for books and classes

Visual and video-based guidance (hosted externally)

🔐 User Authentication

Login & logout functionality

PHP-based session handling

MySQL database support for user records

📚 Resources & Information Pages

Books page with recommended meditation readings

About page with philosophy and background

Class page with session details

Contact page

🗃 Database Included

bavana.sql contains:

User table

Sample data

Table structure for authentication

🛠️ Tech Stack
Technology	Usage
PHP	Backend logic, authentication, server-side rendering
MySQL	Database for user accounts & content
HTML5	Structure and content
CSS3	Styling and layout
JavaScript	UI enhancements
XAMPP / Localhost	Development environment
📂 Project Structure
/ (project root)
│── index.php
│── about.php
│── books.php
│── class.php
│── contact.php
│── login.php
│── logout.php
│── connect.php
│── style.css
│── bavana.sql
│
├── /image
│     └── (images used in the UI)
│
├── /video
      └── (video files — large files excluded from GitHub)

⚠️ Notes
GitHub File Size Limits

Some video files exceeded GitHub’s 100MB limit and were excluded.
You may host videos externally (Google Drive / YouTube / Cloud Storage) and embed or link to them from the app.

Hosting Requirement

This project requires a server that supports:

PHP 7+

MySQL

It cannot run on GitHub Pages.

To host it live, use:

InfinityFree (free)

000WebHost (free)

Hostinger / Namecheap (paid)

▶️ Running Locally
1. Start your server (XAMPP/WAMP/Laragon)

Start Apache

Start MySQL

2. Import the database:

Go to http://localhost/phpmyadmin

Create a database (e.g., bavana)

Import bavana.sql

3. Update connect.php if needed:
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "bavana";

4. Access the site:
http://localhost/bavana/

📌 Future Improvements

Add registration/signup page

Replace local videos with cloud-hosted media

Add admin dashboard for managing content

Improve UI/UX with animations and modern layout

Secure authentication with password hashing

👤 Author

Dinushi
Developer & creator of the Bavana Meditation Website
