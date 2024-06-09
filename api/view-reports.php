<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reports</title>
</head>
<body>
    <h1>Reported Messages</h1>
    <ul>
        <?php
        // Database connection
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'skilldreport';

        $conn = new mysqli($host, $user, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM reports";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li>";
                echo "<strong>Name:</strong> " . $row['name'] . "<br>";
                echo "<strong>Email:</strong> " . $row['email'] . "<br>";
                echo "<strong>Message:</strong> " . $row['message'] . "<br>";
                echo "<strong>Timestamp:</strong> " . $row['timestamp'] . "<br>";
                echo "</li>";
            }
        } else {
            echo "<li>No reports yet.</li>";
        }

        $conn->close();
        ?>
    </ul>
</body>
</html>
