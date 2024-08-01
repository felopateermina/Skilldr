<?php
session_start();
include 'functions.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>User Data</h1>
        <a href="logout.php">Logout</a>
    </header>
    
    <main>
        <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
        <p>This is your user data page.</p>
        <!-- Add more user-specific content here -->
    </main>
    
    <footer>
        <p>&copy; 2024 My Website</p>
    </footer>
</body>
</html>
