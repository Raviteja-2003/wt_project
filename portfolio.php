<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $education = $_POST["education"];
    $skills = $_POST["skills"];
    $projects = $_POST["projects"];
    
    // Upload Photo
    // $targetDir = "uploads/";
    // $photoName = basename($_FILES["photo"]["name"]);
    // $targetFilePath = $targetDir . $photoName;
    // move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath);
    $targetDir = __DIR__ . "/uploads/";
$photoName = basename($_FILES["photo"]["name"]);
$targetFilePath = $targetDir . $photoName;
move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath);
}
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath)) {
    // File upload successful
} else {
    echo "Error uploading file.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom Styles */
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        h1 {
            color: #343a40;
            margin-bottom: 20px;
        }
        .portfolio-details p {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .portfolio-details ul {
            list-style: none;
            padding-left: 0;
            font-size: 18px;
        }
        .portfolio-details ul li {
            margin-bottom: 5px;
        }
        .portfolio-details img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
    <title><?php echo $name ?>'s Portfolio</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center"><?php echo $name ?>'s Portfolio</h1>
        
        <div class="portfolio-details">
            <p>Email: <?php echo $email ?></p>
            <p>Education: <?php echo $education ?></p>
            <p>Skills: <?php echo $skills ?></p>
            <p>Projects:</p>
            <ul>
                <?php
                $projectLines = explode("\n", $projects);
                foreach ($projectLines as $project) {
                    echo "<li>$project</li>";
                }
                ?>
            </ul>
            <p><img src="<?php echo $targetFilePath ?>" alt="User Photo"></p>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
