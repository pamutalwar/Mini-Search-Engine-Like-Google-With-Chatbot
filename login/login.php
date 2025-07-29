<?php
session_start();

if(isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // You should perform validation and sanitization here
    
    // Connect to your MySQL database
    $conn = mysqli_connect("localhost", "username", "password", "database");

    $sql = "SELECT * FROM accounts WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <div>
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    <?php
    if(isset($error)) {
        echo "<p>$error</p>";
    }
    ?>
    <p><a href="forgot_password.php">Forgot Password?</a></p>
</body>
</html>
