<!-- add_website/delete.php -->
<?php
session_start();
include '../includes/db_connection.php';

// Redirect to login if not authenticated
if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit;
}

// Get the ID of the record to delete
$id = $_GET['id'];

// Delete the record from the database
$sql = "DELETE FROM add_website WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
