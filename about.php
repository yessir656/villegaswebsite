<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Universidad de Manila</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
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
            align-items: center;
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
            padding: 0;
            margin: 0;
            display: flex;
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

        h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 1.5rem;
        }

        footer {
            background: #145A32;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }
    </style>
</head>
<body>

<?php
    $university_name = "Universidad de Manila";
    $year = date("Y");
?>

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

<section>
    <img src="Universidad_de_Manila_seal.png" alt="About Us Image" style="width: 100%; max-width: 400px; height: auto; display: block; margin: 0 auto 20px;">
    
    <h2>About Us</h2>
    <p>
        Welcome to <strong><?php echo $university_name; ?></strong>, a premier institution dedicated to providing quality education and fostering a community of visionary leaders.
    </p>

    <h3>Our History</h3>
    <p>
        Founded in <strong>1992</strong>, <?php echo $university_name; ?> has been a cornerstone of academic excellence in the heart of Manila.
    </p>

    <h3>Our Mission</h3>
    <p>
        Our mission is to provide accessible, high-quality education that equips students with the knowledge, skills, and values necessary to become responsible and productive members of society.
    </p>

    <h3>Our Vision</h3>
    <p>
        We envision a future where every graduate of <?php echo $university_name; ?> is a catalyst for positive change.
    </p>

    <h3>Core Values</h3>
    <ul style="list-style-type: none; padding: 0;">
        <li>🌟 <strong>Excellence</strong> - Striving for the highest standards in education and research.</li>
        <li>🌟 <strong>Integrity</strong> - Upholding honesty, transparency, and ethical behavior.</li>
        <li>🌟 <strong>Service</strong> - Committing to the welfare of our community and society.</li>
        <li>🌟 <strong>Innovation</strong> - Embracing creativity and technology to drive progress.</li>
        <li>🌟 <strong>Inclusivity</strong> - Ensuring equal opportunities for all.</li>
    </ul>

    <p>
        Join us at <?php echo $university_name; ?> and be part of a legacy of excellence and service.
    </p>

    <a href="index.php">Back to Home</a>
</section>

<footer>
    <p>&copy; <?php echo $year; ?> <?php echo $university_name; ?>. All rights reserved.</p>
</footer>

</body>
</html>
