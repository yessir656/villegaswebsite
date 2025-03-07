<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Universidad de Manila</title>
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
    <h2>Our Services</h2>

    <h3>Academic Programs</h3>
    <p>We offer a wide range of undergraduate and graduate programs across various disciplines.</p>

    <h3>Student Services</h3>
    <p>Our university provides library access, career guidance, and financial aid assistance to support students throughout their academic journey.</p>

    <h3>Facilities & Resources</h3>
    <p>State-of-the-art laboratories, computer centers, and study lounges ensure students have the best learning environment.</p>

    <h3>Online Services</h3>
    <p>Access student portals for enrollment, grades, announcements, and e-learning platforms from anywhere.</p>

    <h3>Community Engagement</h3>
    <p>We actively participate in outreach programs and offer volunteering opportunities to encourage social responsibility.</p>

    <a href="index.php">Back to Home</a>
</section>

<footer>
    <p>&copy; <?php echo $year; ?> <?php echo $university_name; ?>. All rights reserved.</p>
</footer>

</body>
</html>
