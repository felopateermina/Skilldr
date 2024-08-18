<?php
// Start the session
session_start();

// Manually added users with email and PIN as password, plus username and name
$users = [
    ['username' => 'john_doe', 'name' => 'John Doe', 'email' => 'john@example.com', 'pin' => '1234'],
    ['username' => 'jane_smith', 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'pin' => '5678'],
    ['username' => 'felopateer1', 'name' => 'Felopateer', 'email' => 'felopateer@example.com', 'pin' => '9012'],
    ['username' => 'user1', 'name' => 'User1', 'email' => 'user1@example.com', 'pin' => '0000'],
];

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $pin = $_POST['pin'];

    // Check if user exists and the PIN is correct
    $authenticated = false;
    foreach ($users as $user) {
        if ($user['email'] === $email && $user['pin'] === $pin) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $authenticated = true;
            break;
        }
    }

    if ($authenticated) {
        // Redirect to the dashboard or home page after successful login
        header('Location: prem.home.php');
        exit();
    } else {
        // Invalid login credentials
        $error = "Invalid email or PIN!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>PIN:</label>
        <input type="password" name="pin" required><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
