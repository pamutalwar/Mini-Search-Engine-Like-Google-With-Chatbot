<!-- register.php -->
<?php
error_reporting(0);
session_start();
include 'includes/db_connection.php';



// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role']; // Assign role (e.g., admin, editor)

    // Validate inputs (e.g., check for empty fields, unique username)
    if (empty($username) || empty($password)) {
        $error = "Username and password are required.";
    } else {
        // Check if the username already exists
        $check_username = $conn->prepare("SELECT * FROM admin_users WHERE username = ?");
        $check_username->bind_param("s", $username);
        $check_username->execute();
        $result = $check_username->get_result();

        if ($result->num_rows > 0) {
            $error = "Username already exists.";
        } else {
            // Hash the password using bcrypt
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Insert the new admin user into the database
            $stmt = $conn->prepare("INSERT INTO admin_users (username, password, role) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $hashed_password, $role);

            if ($stmt->execute()) {
                $success = "Admin user created successfully.";
            } else {
                $error = "Error creating admin user: " . $stmt->error;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create New Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation bar -->
    <nav>
        <span>Welcome, <?php echo $_SESSION['username']; ?></span>
        <a href="index.php">Back</a>
        <a href="logout.php">Logout</a>
    </nav>

    <div class="container">
        <h1>Create New Admin User</h1>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <?php if (isset($success)) { echo "<p class='success'>$success</p>"; } ?>
        <form action="register.php" method="POST">
            <label>Username:</label>
            <input type="text" name="username" required><br>
            <label>Password:</label>
            <input type="password" name="password" required><br>
            <label>Role:</label>
            <select name="role">
                <option value="admin">Admin</option>
                <option value="editor">Editor</option>
                <!-- Add other roles as needed -->
            </select><br>
            <input type="submit" value="Create Admin User">
        </form>
    </div>
</body>
</html>
