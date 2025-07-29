<?php
session_start();

if(isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Validate inputs (you can add more robust validation)
    if(empty($username) || empty($password) || empty($email)) {
        $error = "All fields are required";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    } else {
        // Connect to your MySQL database
        $conn = mysqli_connect("localhost", "username", "password", "database");

        // Check if username or email already exists
        $check_username = mysqli_real_escape_string($conn, $username);
        $check_email = mysqli_real_escape_string($conn, $email);
        $sql_check = "SELECT * FROM accounts WHERE username='$check_username' OR email='$check_email'";
        $result_check = mysqli_query($conn, $sql_check);
        
        if(mysqli_num_rows($result_check) > 0) {
            $error = "Username or email already exists";
        } else {
            // Hash the password before storing it in the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert user into the database
            $sql_insert = "INSERT INTO accounts (username, password, email) VALUES ('$check_username', '$hashed_password', '$check_email')";
            if(mysqli_query($conn, $sql_insert)) {
                $_SESSION['username'] = $username;
                header("Location: dashboard.php");
                exit();
            } else {
                $error = "Error registering user";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
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
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
    <?php
    if(isset($error)) {
        echo "<p>$error</p>";
    }
    ?>
    <p>Already have an account? <a href="login.php">Login</a></p>
</body>
</html>
