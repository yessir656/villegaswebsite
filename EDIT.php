<?php
// Initialize default values
$logo = 'Universidad_de_Manila_seal.png';
$headerBgColor = '#16533A';
$textColor = '#898908'; // Used in index.php, not applied here
$backgroundColor = $settings["background_color"] ?? '#ffffff';
$announcements = [
    ["title" => "Strengthening Community Ties: UDM-URELIA", "author" => "Dr. Lella R. Gano", "venue" => "Barangay 750 Hall, Sta. Ana, Manila"],
    ["title" => "Strengthening Community Engagement: URELIA and...", "author" => "Dr. Lella R. Gano", "venue" => "Accreditation Room", "date" => "February 7, 2025"],
    ["title" => "Strengthening Community Engagement: URELIA and...", "author" => "Dr. Lella R. Gano", "venue" => "Accreditation Room", "date" => "February 7, 2025"]
];
// Load existing settings if available
if (file_exists('settings.json')) {
    $data = json_decode(file_get_contents('settings.json'), true);
    $logo = $data["logo"] ?? $logo;
    $headerBgColor = $data["header_bg_color"] ?? $headerBgColor;
    $textColor = $data["text_color"] ?? $textColor; // Stored but NOT applied in edit.php
    $programsBg = $data["programs_bg"] ?? 'UDM.jpg';
    $announcementsBg = $data["announcements_bg"] ?? 'photo-1523050854058-8df90110c9f1.jpg';
    $eventsBg = $data["events_bg"] ?? 'istockphoto-1486287149-612x612.jpg';
    $headerTitle = $data["header_title"] ?? "Universidad de Manila";
    $announcements = $data["announcements"] ?? $announcements;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $settings = [
        "logo" => $_POST['logo'] ?? $logo,
        "header_bg_color" => $_POST['header_bg_color'] ?? $headerBgColor,
        "text_color" => $_POST['text_color'] ?? $textColor, // Stored but NOT used in edit.php
        "programs_bg" => $_POST['programs_bg'] ?? 'UDM.jpg',
        "announcements_bg" => $_POST['announcements_bg'] ?? 'photo-1523050854058-8df90110c9f1.jpg',
        "events_bg" => $_POST['events_bg'] ?? 'istockphoto-1486287149-612x612.jpg',
        "header_title" => $_POST['header_title'] ?? "Universidad de Manila",
        "announcements" => [],
    ];

    // Process announcements from form submission
    if (isset($_POST['announcements'])) {
        foreach ($_POST['announcements'] as $announcement) {
            if (!empty($announcement['title']) && !empty($announcement['author']) && !empty($announcement['venue'])) {
                $settings["announcements"][] = [
                    "title" => htmlspecialchars($announcement["title"]),
                    "author" => htmlspecialchars($announcement["author"]),
                    "venue" => htmlspecialchars($announcement["venue"]),
                    "date" => htmlspecialchars($announcement["date"] ?? "")
                ];
            }
        }
    }

    file_put_contents('settings.json', json_encode($settings));

    echo "<script>alert('Changes saved!')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9; /* No text color changes */
        }
        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
            color: black; /* Ensures no color overrides */
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="color"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>

<script>
        function addAnnouncement() {
            const container = document.getElementById('announcements-container');
            const index = container.children.length;
            const html = `
                <div class="announcement-item">
                    <input type="text" name="announcements[${index}][title]" placeholder="Title" required>
                    <input type="text" name="announcements[${index}][author]" placeholder="Author" required>
                    <input type="text" name="announcements[${index}][venue]" placeholder="Venue" required>
                    <input type="text" name="announcements[${index}][date]" placeholder="Date (optional)">
                    <button type="button" onclick="this.parentElement.remove();">Remove</button>
                </div>
            `;
            container.insertAdjacentHTML('beforeend', html);
        }
    </script>
</head>
<body>

<div class="form-container">
    <h2>Edit Page Settings</h2>
    <form method="POST">
        <div class="form-group">
            <label for="header_title">Header Title:</label>
            <input type="text" id="header_title" name="header_title" value="<?php echo htmlspecialchars($headerTitle); ?>" placeholder="Enter new header title">
        </div>

        <div class="form-group">
            <label for="logo">Change Logo URL:</label>
            <input type="text" id="logo" name="logo" value="<?php echo htmlspecialchars($logo); ?>" placeholder="Enter logo URL">
        </div>

        <div class="form-group">
            <label for="header_bg_color">Header Background Color:</label>
            <input type="color" id="header_bg_color" name="header_bg_color" value="<?php echo htmlspecialchars($headerBgColor); ?>">
        </div>

        <h3>Announcements</h3>
        <div id="announcements-container">
            <?php foreach ($announcements as $index => $announcement) : ?>
                <div class="announcement-item">
                    <input type="text" name="announcements[<?php echo $index; ?>][title]" value="<?php echo htmlspecialchars($announcement['title']); ?>" placeholder="Title" required>
                    <input type="text" name="announcements[<?php echo $index; ?>][author]" value="<?php echo htmlspecialchars($announcement['author']); ?>" placeholder="Author" required>
                    <input type="text" name="announcements[<?php echo $index; ?>][venue]" value="<?php echo htmlspecialchars($announcement['venue']); ?>" placeholder="Venue" required>
                    <input type="text" name="announcements[<?php echo $index; ?>][date]" value="<?php echo htmlspecialchars($announcement['date'] ?? ''); ?>" placeholder="Date (optional)">
                    <button type="button" onclick="this.parentElement.remove();">Remove</button>
                </div>
            <?php endforeach; ?>
        </div>
        <button type="button" onclick="addAnnouncement();">Add Announcement</button>
        

        <div class="form-group">
            <label for="text_color">Main Text Color (Affects Index Page Only):</label>
            <input type="color" id="text_color" name="text_color" value="<?php echo htmlspecialchars($textColor); ?>">
        </div>

        <!-- Background Image Fields -->
        <div class="form-group">
            <label for="programs_bg">Programs Section Background Image:</label>
            <input type="text" id="programs_bg" name="programs_bg" value="<?php echo htmlspecialchars($programsBg); ?>" placeholder="Enter image URL">
        </div>

        <div class="form-group">
            <label for="announcements_bg">Announcements Section Background Image:</label>
            <input type="text" id="announcements_bg" name="announcements_bg" value="<?php echo htmlspecialchars($announcementsBg); ?>" placeholder="Enter image URL">
        </div>

        <div class="form-group">
            <label for="events_bg">Events Section Background Image:</label>
            <input type="text" id="events_bg" name="events_bg" value="<?php echo htmlspecialchars($eventsBg); ?>" placeholder="Enter image URL">
        </div>

        <button type="submit">Save Changes</button>
    </form>
</div>

</body>
</html>
