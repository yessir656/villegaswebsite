<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Universidad de Manila</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background: url('photo-1523050854058-8df90110c9f1.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        header {
            background: #145A32;
            color: #fff;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header-left {
    display: flex;
    align-items: center; /* Ensures both logo and text align vertically */
}

        .header-left img {
            height: 50px;
            margin-right: 1rem;
        }

        header h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        nav ul {
            list-style: none;
            display: flex;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            margin: 0 1rem;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        section {
            padding: 2rem;
            text-align: center;
            background: rgba(244, 244, 244, 0.8);
            border-radius: 10px;
            margin: 2rem auto;
            max-width: 800px;
        }

        .contact-form {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .cta-button {
            background: #145A32;
            color: #fff;
            padding: 0.7rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .cta-button:hover {
            background: #0E3D20;
        }

        footer {
            background: #145A32;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }
    </style>
</head>
<body>

<header>
    <div class="header-left">
        <img src="Universidad_de_Manila_seal.png" alt="Universidad de Manila Logo">
        <h1>Universidad de Manila</h1>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="privacy.php">Privacy Policy</a></li>
            <li><a href="services.php">Services</a></li>
        </ul>
    </nav>
</header>

<section id="contact">
    <h2>Contact Us</h2>
    <p>If you have any questions, please fill out the form below.</p>
    <div class="contact-form">
        <form action="" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit" name="submit" class="cta-button">Send Message</button>
        </form>
    </div>
</section>

<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "admin@udm.edu.ph";  // Replace with the university email
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "Content-Type: text/html; charset=UTF-8";
    
    $email_body = "<h2>Contact Form Submission</h2>"
                . "<p><strong>Name:</strong> $name</p>"
                . "<p><strong>Email:</strong> $email</p>"
                . "<p><strong>Subject:</strong> $subject</p>"
                . "<p><strong>Message:</strong><br> $message</p>";
    
    if (mail($to, $subject, $email_body, $headers)) {
        echo "<p style='text-align:center; color:green;'>Message sent successfully!</p>";
    } else {
        echo "<p style='text-align:center; color:red;'>Failed to send message. Please try again.</p>";
    }
}
?>

<footer>
    <p>&copy; 2025 Universidad de Manila. All rights reserved.</p>
</footer>

</body>
</html>
