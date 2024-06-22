<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: profile.php"); // Redirect to profile.php if not logged in
    exit();
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['change_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $userId = $_SESSION['user_id'];

    // Fetch current password from database
    $stmt = $conn->prepare("SELECT password FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->bind_result($stored_password);
    $stmt->fetch();
    $stmt->close(); // Close the SELECT statement after fetching the password

    // Verify current password
    if (password_verify($current_password, $stored_password)) {
        // Check if new password matches confirm password
        if ($new_password === $confirm_password) {
            // Update password in the database
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $update_stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
            $update_stmt->bind_param("si", $hashed_password, $userId);
            if ($update_stmt->execute()) {
                $change_password_success = "Password updated successfully.";
                header("Location: profile.php"); // Redirect to profile.php if not logged in
            } else {
                $change_password_error = "Failed to update password: " . $update_stmt->error;
            }
            $update_stmt->close(); // Close the UPDATE statement after execution
        } else {
            $change_password_error = "New password and confirm password do not match.";
        }
    } else {
        $change_password_error = "Current password is incorrect.";
    }
}

$conn->close(); // Close the database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <style>
        
*{
    box-sizing:border-box;
    margin:0;
    font-family:sans-serif;
    padding:0;
}

body{
    background-color:#001220;
    color:white;
    font-weight: bold;
}

.login-container{
  display: flex;
  justify-content: center;
  align-items: center;
}
.login-card{
    margin-top:40px;
    border:none;
    background-color:black;
    padding:20px;
    border-radius:10px;
    font-size:1.1rem;
    border-radius: 19px;
background: #000000;
box-shadow:  8px 8px 16px #000000,
             -8px -8px 16px #000000;
             width:80%;
}
input{
    width:100%;
    padding:10px;
    border:none;
    outline:none;
    border-radius:10px;
    font-size:20px;
    font-weight:bold;
    color:#de5b00;
}
#login{
    background-color:#de5b00;
    color:white;
    margin-top:10px;
}
.profile-card{
}
@media screen and (max-width:1023px) {
    body{
        background-color: #000000;
    }
}
    </style>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

    <main>
        <div class="login-container">
            <div class="login-card">
                <h3 style="text-align:center;">Change Password</h3><br>
                <?php if (isset($change_password_error)): ?>
                    <p class="error"><?php echo htmlspecialchars($change_password_error); ?></p>
                <?php elseif (isset($change_password_success)): ?>
                    <p class="success"><?php echo htmlspecialchars($change_password_success); ?></p>
                <?php endif; ?>
                <form action="change_password.php" method="post">
                    <div class="form-group">
                        <label for="current_password">Current Password:</label>
                        <input type="password" id="current_password" name="current_password" required>
                    </div><br>
                    <div class="form-group">
                        <label for="new_password">New Password:</label>
                        <input type="password" id="new_password" name="new_password" required>
                    </div><br>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" id="confirm_password" name="confirm_password" required>
                    </div><br>
                    <input id="login" type="submit" value="Change Password" name="change_password" class="btn">
                </form>
                <br>
                <a href="../html/sign.html" style="color:blue;">Don't have an account?</a>
           
            </div>
        </div>
    </main>
</body>
</html>
