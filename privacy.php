<?php
    $university_name = "Universidad de Manila";
    $year = date("Y");
    $contact_email = "privacy@universidaddemanila.edu";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - <?php echo $university_name; ?></title>
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
            background: rgba(244, 244, 244, 0.8);
            border-radius: 10px;
            margin: 2rem auto;
            max-width: 800px;
        }

        h2 {
            color: #145A32;
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
        <img src="Universidad_de_Manila_seal.png" alt="<?php echo $university_name; ?> Logo">
        <h1><?php echo $university_name; ?></h1>
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

<section id="privacy">
    <h2>Privacy Policy</h2>
    <p>At <?php echo $university_name; ?>, we value your privacy. This policy explains how we collect, use, and protect your information.</p>
    
    <h3>Information We Collect</h3>
    <ul>
        <li>Personal details such as name, email, and contact information.</li>
        <li>Browsing data including IP address and cookies.</li>
    </ul>

    <h3>How We Use Your Information</h3>
    <ul>
        <li>To improve our website and services.</li>
        <li>To respond to inquiries and provide support.</li>
    </ul>

    <h3>Data Protection</h3>
    <p>We implement security measures to protect your data from unauthorized access.</p>

    <h3>Contact Us</h3>
    <p>If you have any questions about our privacy policy, contact us at <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a>.</p>
</section>

<footer>
    <p>&copy; <?php echo $year; ?> <?php echo $university_name; ?>. All rights reserved.</p>
</footer>

</body>
</html>
