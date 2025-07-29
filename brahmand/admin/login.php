<!-- login.php -->
<?php
session_start();
include 'includes/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check user credentials
    $sql = "SELECT * FROM admin_users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify password (assuming hashed with bcrypt)
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header('Location: add_website/index.php');
            exit;
        } else {
            $error = "Invalid credentials";
        }
    } else {
        $error = "Invalid credentials";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Admin Panel Login</h2>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <form action="login.php" method="POST">
            <label>Username:</label>
            <input type="text" name="username" required><br>
            <label>Password:</label>
            <input type="password" name="password" required><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
