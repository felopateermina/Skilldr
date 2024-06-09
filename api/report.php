<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Save the report data to a file
    $report = array(
        'name' => $name,
        'email' => $email,
        'message' => $message,
        'timestamp' => date('Y-m-d H:i:s')
    );

    // Append the report to a file (for simplicity)
    $file = '../reports.txt';
    file_put_contents($file, json_encode($report) . PHP_EOL, FILE_APPEND | LOCK_EX);

    // Redirect to a thank-you page
    header("Location: thank-you.php");
    exit;
}
?>
