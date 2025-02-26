<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "civiceye";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "SELECT * FROM violations WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Violation Details</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&family=Orbitron:wght@400;700&family=IBM+Plex+Sans:wght@400;700&display=swap');
        
        body {
            margin: 0;
            font-family: 'IBM Plex Sans', sans-serif;
            background-color: black;
            color: white;
            text-align: center;
        }

        .container {
            padding: 50px;
        }

        h1 {
            font-size: 36px;
            font-family: 'Orbitron', sans-serif;
        }

        .violation-details {
            margin-top: 30px;
        }

        .violation-details img {
            max-width: 300px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .back-button {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff5722;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-button:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Violation Details</h1>
        <div class="violation-details">
            <p><strong>Date:</strong> <?= $row['date'] ?></p>
            <p><strong>Time:</strong> <?= $row['time'] ?></p>
            <img src="<?= $row['image_path'] ?>" alt="Violation Image">
        </div>
        <a href="dashboard.php" class="back-button">Back to Dashboard</a>
    </div>

    <?php $conn->close(); ?>
</body>
</html>
