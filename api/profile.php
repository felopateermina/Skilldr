<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_SESSION['user_id'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
        } else {
            $login_error = "Invalid password.";
        }
    } else {
        $login_error = "No user found with this email.";
    }

    $stmt->close();
}

if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];

    // Retrieve user data
    $stmt = $conn->prepare("SELECT username, email, created_at FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->bind_result($username, $email, $createdAt);
    $stmt->fetch();
    $stmt->close();
    $conn->close();
} else {
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
</head>
<body>
    <?php if (!isset($_SESSION['user_id'])): ?>
        <div class="login-container">
            <div class="login-card">
                <h3 style="text-align:center;">Login In Skilldr</h3><br>
                <?php if (isset($login_error)): ?>
                    <p style="color: red;"><?php echo htmlspecialchars($login_error); ?></p>
                <?php endif; ?>
                <form action="profile.php" method="post">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br><br>
                    <label for="password">Password:</label><br>
                    <input type="password" role="password" id="password" name="password" required><br><br>
                    <input type="submit" id="login" value="Login">
                    
                </form><br>
                <a href="../html/sign.html" style="color:blue;">Don't have an account?</a>
            </div>
        </div>
    <?php else: ?>
        <div class="login-container">
            <div class="login-card">
                <h2>Welcome, <span style="color:#de5b00;"><?php echo htmlspecialchars($username); ?></span> !</h2>
                
                <br>
                <p><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                <p><strong>Member Since:</strong> <?php echo htmlspecialchars($createdAt); ?></p>
                <form action="logout.php" method="post">
                    <input id="login" type="submit" value="Logout">
                </form>
                <br>
                *Thanks for your trust on us*
                <br><br>
                Important Security Tips:

Never share your password with anyone.
Use a strong, unique password for your Skilldr account.
Be cautious of phishing attempts. Skilldr will never ask for your password via email or message.
If you suspect any unusual activity, reset your password immediately and contact our support team.
By logging in, you agree to Skilldr's Terms of Service and Privacy Policy.
            </div>
        </div>
    <?php endif; ?>
</body>
</html>
