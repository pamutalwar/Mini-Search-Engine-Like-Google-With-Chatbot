<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Validate email (you can add more robust validation)
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    } else {
        // Connect to your MySQL database
        $conn = mysqli_connect("localhost", "username", "password", "database");

        // Check if email exists in the database
        $sql = "SELECT * FROM accounts WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1) {
            // Generate a random temporary password
            $tempPassword = bin2hex(random_bytes(8));

            // Update the user's password with the temporary password
            $sql_update = "UPDATE accounts SET password='$tempPassword' WHERE email='$email'";
            mysqli_query($conn, $sql_update);

            // Send email with temporary password (you need to implement this part)

            // Redirect to login page
            header("Location: login.php");
            exit();
        } else {
            $error = "Email not found";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>
    <h2>Forgot Password</h2>
    <form method="post" action="">
        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <button type="submit">Reset Password</button>
        </div>
    </form>
    <?php
    if(isset($error)) {
        echo "<p>$error</p>";
    }
    ?>
    <p><a href="login.php">Back to Login</a></p>
</body>
</html>
