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
        // Read contents of reports.txt and display each report
        $file = '../reports.txt';
        if (file_exists($file)) {
            $reports = file($file, FILE_IGNORE_NEW_LINES);
            foreach ($reports as $report) {
                $data = json_decode($report, true);
                echo "<li>";
                echo "<strong>Name:</strong> " . $data['name'] . "<br>";
                echo "<strong>Email:</strong> " . $data['email'] . "<br>";
                echo "<strong>Message:</strong> " . $data['message'] . "<br>";
                echo "<strong>Timestamp:</strong> " . $data['timestamp'] . "<br>";
                echo "</li>";
            }
        } else {
            echo "<li>No reports yet.</li>";
        }
        ?>
    </ul>
</body>
</html>
