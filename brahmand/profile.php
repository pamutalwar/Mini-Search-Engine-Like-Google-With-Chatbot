<?php
// Include database connection file
include 'db_connection.php';

// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
    echo "<script>" . "window.location.href='../login.php';" . "</script>";
    exit;
  }

// Get user ID from session
$userId = $_SESSION['user_id'];

// Retrieve user and profile details from database
$sql = "SELECT u.username, u.email, u.reg_date, p.first_name, p.last_name, p.profession 
        FROM users u 
        LEFT JOIN profile_details p ON u.id = p.user_id 
        WHERE u.id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $userId);
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Assign user data to variables
    $username = $row['username'];
    $email = $row['email'];
    $regDate = $row['reg_date'];
    $firstName = $row['first_name'];
    $lastName = $row['last_name'];
    $profession = $row['profession'];
} else {
    echo "User not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>

<body>
    <div class="profile-container">
        <h1>User Profile</h1>
        <div class="profile-details">
            <p><strong>Username:</strong> <?php echo $username; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Registration Date:</strong> <?php echo $regDate; ?></p>
            <p><strong>First Name:</strong> <?php echo $firstName; ?></p>
            <p><strong>Last Name:</strong> <?php echo $lastName; ?></p>
            <p><strong>Profession:</strong> <?php echo $profession; ?></p>
        </div>
    </div>
</body>

</html>
