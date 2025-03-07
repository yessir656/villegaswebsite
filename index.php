<?php
// Dynamic Data for Announcements
$announcements = [
    ["title" => "Strengthening Community Ties: UDM-URELIA", "author" => "Dr. Lella R. Gano", "venue" => "Barangay 750 Hall, Sta. Ana, Manila"],
    ["title" => "Strengthening Community Engagement: URELIA and...", "author" => "Dr. Lella R. Gano", "venue" => "Accreditation Room", "date" => "February 7, 2025"]
];

// Dynamic Data for Events
$events = [
    ["title" => "UDM 30th Anniversary", "details" => "30 Years of Shaping Visionary Leaders: “Empowering Minds, Uplifting Society”"],
    ["title" => "UDM Peer Facilitators: Simple Gift Giving Activity", "details" => "Organized on December 19, 2024, to spread joy among students."]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad de Manila</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
            background-color: green; /* Change the background color to green */
        }

        header {
            background: rgb(22, 83, 58);
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
            height: 50px; /* Adjust the height of the logo */
            margin-right: 1rem; /* Space between logo and title */
        }

        header h1 {
            margin: 0;
            font-size: 1.5rem; /* Adjust the font size of the title */
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
        }

        #programs, #sustainability, #announcements, #events {
            background: #f9f9f9;
        }

        .announcement, .event {
            background: #fff;
            margin: 1rem auto;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            max-width: 600px;
        }

        .cta-button, .read-more {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background: rgb(22, 83, 58);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .cta-button:hover, .read-more:hover {
            background: #003366; 
        }

        footer {
            background:rgb(22, 83, 58);
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }

        /* Carousel Styles */
        .carousel {
            position: relative;
            max-width: 800px; /* Adjust the width of the carousel */
            margin: 1rem auto;
            overflow: hidden;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
        }

        .carousel-item {
            min-width: 100%;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px; /* Set a fixed height for the carousel */
            overflow: hidden; /* Ensure images don't overflow */
        }

        .carousel-item img {
            width: 100%; /* Ensure the image fills the container */
            height: 100%; /* Ensure the image fills the container */
            object-fit: cover; /* Crop and resize the image to fit */
        }

        .carousel-control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 0.5rem;
            cursor: pointer;
            font-size: 1.5rem;
        }

        .carousel-control.prev {
            left: 0;
        }

        .carousel-control.next {
            right: 0;
        }
    </style>
</head>
<body>

<header>
    <div class="header-left">
        <!-- Add your logo here -->
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

<section id="programs" style="position: relative; background: url('UDM.jpg') no-repeat center center/cover; padding: 2rem; color: white; text-align: center;">
    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="FUNRUN.jpg" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="ISKO-UDM.jpg" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="umds1.jpg" alt="Image 3">
            </div>
        </div>
        <button class="carousel-control prev">&#10094;</button>
        <button class="carousel-control next">&#10095;</button>
    </div>
</section>


<<section id="announcements" style="position: relative; background: url('photo-1523050854058-8df90110c9f1.jpg') no-repeat center center/cover; padding: 2rem; color: white; text-align: center;">
    <h2 style="font-size: 2rem; font-weight: bold;">ANNOUNCEMENTS</h2>
    <div style="position: relative; display: flex; justify-content: center; align-items: center; flex-wrap: wrap; gap: 1rem; margin-top: 1rem;">
        <?php foreach ($announcements as $announcement): ?>
            <div style="position: relative; width: 300px; background: rgba(0, 0, 0, 0.6); padding: 1rem; border-radius: 10px; overflow: hidden;">
                <img src="umds1.jpg" alt="Announcement Image" style="width: 100%; height: auto; border-radius: 5px;">
                <div style="padding: 0.5rem;">
                    <h3 style="color: yellow; font-size: 1rem;"> <?php echo $announcement["title"]; ?> </h3>
                    <p style="font-size: 0.9rem;">By: <?php echo $announcement["author"]; ?>
                        <?php if (isset($announcement["date"])) echo " | Date: " . $announcement["date"]; ?>
                        | Venue: <?php echo $announcement["venue"]; ?>
                    </p>
                    <a href="#" style="color: yellow; text-decoration: none; font-weight: bold;">Read More »</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="events" style="background: #f5f1f0; padding: 2rem; text-align: center;">
    <h2 style="font-size: 2rem; font-weight: bold;">UDM EVENTS</h2>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
        <div style="max-width: 300px; background: white; padding: 1rem; border-radius: 10px; text-align: left;">
            <img src="istockphoto-1486287149-612x612.jpg" alt="Event 1" style="width: 100%; border-radius: 10px;">
            <h3 style="font-weight: bold;">UDM 30th Anniversary 30 Years of Shaping Visionary Leaders</h3>
            <p>MERLIONS .... MARK YOUR CALENDARS!!! Are you ready to celebrate 30 Years of Excellence at Universidad de Manila?</p>
        </div>
        <div style="max-width: 300px; background: white; padding: 1rem; border-radius: 10px; text-align: left;">
            <img src="photo-1523050854058-8df90110c9f1.jpg" alt="Event 2" style="width: 100%; border-radius: 10px;">
            <h3 style="font-weight: bold;">UDM Peer Facilitators: Simple Gift Giving Activity</h3>
            <p>The Peer Facilitators organized a gift-giving activity on December 19, 2024, to spread joy and bring a sense of warmth to our fellow students.</p>
        </div>
        <div style="max-width: 300px; background: white; padding: 1rem; border-radius: 10px; text-align: left;">
            <img src="pngtree-nice-event-management-outdoor-image_15980786.jpg" alt="Event 3" style="width: 100%; border-radius: 10px;">
            <h3 style="font-weight: bold;">UDM Employees Year-end Christmas Party</h3>
            <p>From laughter to dancing, we celebrated our achievements and cherished moments spent with colleagues.</p>
        </div>
        <div style="max-width: 300px; background: white; padding: 1rem; border-radius: 10px; text-align: left;">
            <img src="photo-1511795409834-ef04bbd61622.jpg" alt="Event 4" style="width: 100%; border-radius: 10px;">
            <h3 style="font-weight: bold;">Move Manila Hosted by UDM</h3>
            <p>Universidad de Manila proudly hosted Move Manila – Free Cars Sundays by the Bay, celebrating a greener future.</p>
        </div>
    </div>
</section>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Universidad de Manila. All rights reserved.</p>
</footer>

<script>
    let currentIndex = 0;
    const carouselInner = document.querySelector('.carousel-inner');
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    document.querySelector('.carousel-control.next').addEventListener('click', () => {
        if (currentIndex < totalItems - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateCarousel();
    });

    document.querySelector('.carousel-control.prev').addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalItems - 1;
        }
        updateCarousel();
    });

    function updateCarousel() {
        const offset = -currentIndex * 100;
        carouselInner.style.transform = `translateX(${offset}%)`;
    }
</script>

</body>
</html>