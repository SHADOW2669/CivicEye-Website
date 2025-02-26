<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "civiceye";

// Connect to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch violation data
$sql = "SELECT * FROM violations ORDER BY date DESC, time DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard - Civic Eye</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&family=Orbitron:wght@400;700&family=IBM+Plex+Sans:wght@400;700&display=swap');
        
        body {
            margin: 0;
            font-family: 'IBM Plex Sans', sans-serif;
            background-color: black;
            color: white;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #222;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
            font-family: 'Roboto Mono', monospace;
        }

        .navbar a:hover {
            color: #ff5722;
        }

        .container {
            padding: 50px;
            text-align: center;
        }

        .container h1 {
            font-size: 48px;
            margin-bottom: 20px;
            font-family: 'Orbitron', sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 50px 0;
        }

        table, th, td {
            border: 1px solid white;
        }

        th, td {
            padding: 15px;
            text-align: center;
            font-family: 'IBM Plex Sans', sans-serif;
        }

        th {
            background-color: #333;
            font-family: 'Orbitron', sans-serif;
        }

        td img {
            max-width: 100px;
            border-radius: 5px;
        }

        .violation-link {
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }

        .violation-link:hover {
            color: #ff5722;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">CIVIC EYE</div>
        <div class="menu">
            <a href="index.html">HOME</a>
            <a href="login.html">LOGIN/SIGNUP</a>
        </div>
    </div>

    <div class="container">
        <h1>Dashboard</h1>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Image of Violation</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><a href="violation_detail.php?id=<?= $row['id'] ?>" class="violation-link"><?= $row['date'] ?></a></td>
                    <td><?= $row['time'] ?></td>
                    <td><img src="<?= $row['image_path'] ?>" alt="Violation Image"></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php $conn->close(); ?>
</body>
</html>
